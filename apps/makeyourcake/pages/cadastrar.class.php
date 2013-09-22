<?php

namespace makeyourcake\pages;

/**
 * Página de cadastro do MakeYourCake
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class cadastrar extends MakeYourCakePage {
	
	/**
	 * Função de construção
	 */
	public function __construct() {
		parent::__construct ();
		
		$this->setPageTitle('Cadastre-se no ' . APP_NAME . ' &middot; ' . APP_HEADLINE);
		$this->setPageTemplate('cadastrar');
	}
}

?>