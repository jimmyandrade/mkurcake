<?php

namespace makeyourcake\pages;

if (!defined('_FX')) { die('Access denied'); }

use Debug;
use controls\UIDataGrid\UIDataGrid;
use makeyourcake\models\MakeYourCakeSession;
use TableHeader;

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

		Debug::clientConsoleLog('Construindo página inicial...');
		parent::__construct();
		Debug::clientConsoleLog('Construção da página inicial finalizada.');
		
		$s = new MakeYourCakeSession();
		$s->init();
		
		$cm = $s->GetModelFor('clientes');
		$cq = $s->query($cm);
		$cr = $cq->GetFields();
		
		/*$c = new UIDataGrid(array(
			'result' => $cr
		));*/

	}
}
