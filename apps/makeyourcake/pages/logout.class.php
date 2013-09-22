<?php

namespace makeyourcake\pages;

use Router;
use makeyourcake\auth\MakeYourCakeAuth;

/**
 * Página de logout
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class logout extends \Page {
	
	/**
	 * Função de construção da página de logout
	 */
	function __construct() {
		MakeYourCakeAuth::resetLoggedInState();
		Router::redirect('?from=' . PAGE_ID);
	}
}

?>