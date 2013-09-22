<?php

namespace makeyourcake\auth;

use Debug;
use Router;
use plugins\auth\AuthProvider;
use makeyourcake\models\MakeYourCakeSession;

/**
 *
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class MakeYourCakeAuth implements AuthProvider {
	
	/**
	 */
	function __construct() {
	}
	
	/**
	 * Verifica se um usuário está logado.
	 * 
	 * Para isso, verifica se há cookies e variáveis de sessão definindo isto.
	 * @see \plugins\auth\AuthProvider::isUserLoggedIn()
	 */
	static public function isUserLoggedIn() {
		
		#var_dump(session_status());
		
		if (session_status() != PHP_SESSION_ACTIVE) {
  			session_start();
		}
		
		$cookie = (isset($_COOKIE['isUserLoggedIn']) && $_COOKIE['isUserLoggedIn'] == 'true');
		$session = (isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn'] == 'true');
		$currentUserID = (isset($_SESSION['currentUserID']) && intval($_SESSION['currentUserID']) > 0);
		
		Debug::clientConsoleLog("Verificação de login: logado por cookie ($cookie). Logado por sessão ($session).");
		
		return $cookie && $session && $currentUserID;
		
	}
	
	/**
	 * 
	 * Valida o login de um usuário.
	 * Para isso, se conecta ao banco de dados da aplicação.
	 * 
	 * @see \plugins\auth\AuthProvider::validateUserLogin()
	 * @param array $credentials Credenciais para autenticação
	 * @return boolean
	 */
	static public function validateUserLogin(array $credentials, $setupSession = true) {
		
		if(empty($credentials['email']) || empty($credentials['senha'])) {
			return false;
		}
		
		$s = new MakeYourCakeSession();
		$s->init();
		
		$u = $s->GetModel('makeyourcake\models\UsuariosModel');
		$consulta = $s->query($u)->filter(
			and_("{$u->email} = '{$credentials['email']}'", "{$u->senha} = '{$credentials['senha']}'")
		);
		
		$isLoginValid = ($consulta->rowCount() == 1);
		
		if($setupSession && $isLoginValid) {
			
			session_start();
			
			$_SESSION['currentUserData'] = $consulta->fetch()->fields;
			$_SESSION['currentUserID'] = $_SESSION['currentUserData']['idusuario']->value;
			$_SESSION['isUserLoggedIn'] = 'true';
			
			setcookie('currentUserID', $_SESSION['currentUserID'], time()+3600);
			setcookie('isUserLoggedIn', 'true', time()+3600);
			
		}
		
		return $isLoginValid;
		
	}
	
	/**
	 * Faz um "reset" nas variáveis que ajudam a definir que um usuário está logado.
	 * 
	 * É preciso chamar o session_start() antes para lembrar ao PHP que a pagecall pertence à sessão.
	 *
	 * @see \plugins\auth\AuthProvider::logoutUser()
	 * @see {@link http://stackoverflow.com/questions/1353869/php-session-problems}
	 *
	 */
	static public function resetLoggedInState() {
		setcookie('isUserLoggedIn', '', time()-3600);
		
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		
		session_unset();
		session_destroy();
	}
	
	static public function preventNotLoggedInUsers() {
		if(!static::isUserLoggedIn()) {
			Router::redirect('login?from='.PAGE_ID.'&notLoggedIn=true');
		}
		else {
			
		}
	}
	
	static public function preventRelogin() {
		if(static::isUserLoggedIn()) {
			Router::redirect('?from='.PAGE_ID.'&avoidReLogin=true');
		}
	}
	
	static public function getLoggedInUserData($key = null) {
		if(static::isUserLoggedIn()) {
			if(is_null($key)) {
				return $_SESSION['currentUserData']->fields;
			}
			else {
				return strval($_SESSION['currentUserData'][$key]->value);
			}
		}
	}
	
}

?>