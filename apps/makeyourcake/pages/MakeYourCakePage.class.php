<?php

namespace makeyourcake\pages;

use AppConfig;
use Debug;
use Page;
use makeyourcake\auth\MakeYourCakeAuth;

/**
 * Página-mestra do MakeYourCake
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class MakeYourCakePage extends Page {
	
	/**
	 * Função de construção da página-mestra
	 */
	public function __construct() {
		
		parent::__construct();
		
		$this->setPageTitle(APP_NAME . ' &middot ' . APP_HEADLINE);
		$this->addPageStyle(array(
			'id' => 'bootstrap',
			'href' => ASSETS_URL.'bootstrap/css/bootstrap.min.css',
		));
		$this->addPageStyle(array(
			'id' => 'makeyourcake-bootstrap-theme',
			'href' => ASSETS_URL.'makeyourcake/css/bootstrap-theme.css',
		));
		$this->addPageScript(array(
				'id' => 'jquery',
				'src' => ASSETS_URL.'jquery/jquery-2.0.3.min.js',
		));
		$this->addPageScript(array(
			'id' => 'bootstrap',
			'src' => ASSETS_URL.'bootstrap/js/bootstrap.min.js',
		));
		
		if(MakeYourCakeAuth::isUserLoggedIn()) {
			
			$nomeUsuario = explode(' ', MakeYourCakeAuth::getLoggedInUserData('nomecompleto'));
			
			$this->setPageVar('UsuarioEstaLogado', 'Sim');
			$this->setPageVar('NomeUsuarioLogado', $nomeUsuario[0]);
		}
		else {
			$this->setPageVar('UsuarioEstaLogado', 'Nao');
		}
		
		$this->setPageVar('EnderecoSite', APP_PUBLIC_URL);
		$this->setPageVar('MaterialSite', ASSETS_URL);
	}
}