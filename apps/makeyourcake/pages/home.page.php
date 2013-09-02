<?php

namespace makeyourcake\pages;

if (!defined('_FX')) { die('Access denied'); }

use makeyourcake\models\MakeYourCake_Session;
use controls\UIDataGrid\UIDataGrid;

/**
 * Página inicial do MakeYourCake
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class HomePage extends MakeYourCake {
	
	/**
	 * Função de construção da página inicial
	 */
	public function __construct() {

		parent::__construct();
		
		$s = new MakeYourCake_Session(\AppConfig::getDefaultDataProvider());
		$s->init();
		
		$cm = $s->GetModelFor('clientes');
		$cq = $s->query($cm);
		$cr = $cq->GetFields();
		
		echo \Core::debug($cr);
		
		$c = new UIDataGrid(array(
			'result' => $cr
		));

	}
}
