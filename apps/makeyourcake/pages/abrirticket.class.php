<?php

namespace makeyourcake\pages;

/**
 * Página de abertura de ticket
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class abrirticket extends MakeYourCakePage {
	
	/**
	 * Função de construção
	 */
	public function __construct() {
		parent::__construct ();
		$this->setPageTitle('Atendimento ' . APP_NAME . ' &middot; ' . APP_HEADLINE);
	}
}

?>