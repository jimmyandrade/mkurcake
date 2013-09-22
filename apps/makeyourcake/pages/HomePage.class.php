<?php

namespace makeyourcake\pages;

if (!defined('_FX')) { die('Access denied'); }

use Debug;
use controls\UIDataGrid\UIDataGrid;
use makeyourcake\models\MakeYourCakeSession;
use TableHeader;
use alpharrate\auth\AlpharrateAuth;
use makeyourcake\auth\MakeYourCakeAuth;

/**
 * Página inicial do MakeYourCake
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class HomePage extends MakeYourCakePage {
	
	/**
	 * Função de construção da página inicial
	 */
	public function __construct() {

		parent::__construct();
		
		$this->setPageTemplate('home');
		
		/*$c = new UIDataGrid(array(
			'result' => $cr
		));*/

	}
}
