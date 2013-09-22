<?php

namespace makeyourcake\pages;

use Debug;
use Router;

use makeyourcake\auth\MakeYourCakeAuth;
use plugins\output\Container;
use controls\UIBootstrapControl\BootstrapAlert;

/**
 *
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class login extends MakeYourCakePage {
	
	/**
	 * Função de construção da tela de login
	 */
	public function __construct() {
		parent::__construct ();
		
		MakeYourCakeAuth::preventRelogin();
		
		$this->setPageTitle('Entrar no ' . APP_NAME);
		$this->setPageTemplate('login');
		
		
		if($this->hasPostData()) {
			
			$sucessoLogin = MakeYourCakeAuth::validateUserLogin(array(
				'email'=>$this->getPostData('email'),
				'senha'=>$this->getPostData('senha')
			));
			
			if($sucessoLogin) {
				Router::redirect('?loginSuccess=1');
			}
			else {
				MakeYourCakeAuth::resetLoggedInState();
				$mensagemLoginControl = new BootstrapAlert(array(
					'innerText' => '<strong>Ops!</strong> Seu endereço de e-mail ou a senha não parecem corretos. Por favor, verifique se seu e-mail está correto e digite sua senha novamente.',
					'alertType' => 'danger',
				));
			}
			
		}
		else {
			$mensagemLoginControl = new Container(array(
				'type' => 'paragraph',
				'innerText' => 'Se você já tem uma conta em nosso site, informe seu e-mail e senha.',
			));
		}
		
		$this->addControl('MensagemLogin', $mensagemLoginControl);
		
	}
}

?>