<?php

use makeyourcake\models\MakeYourCake_Session;

/**
 * Página inicial do MakeYourCake
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class home_Page extends MakeYourCake_Page {
	
	/**
	 * Função de construção da página inicial
	 */
	public function __construct() {

		parent::__construct();
		
		$s = new MakeYourCake_Session(\AppConfig::loadDefaultDataProvider());
		$s->init();
		
		echo $s->CreateModel($s->GetModelFor('atores'));
	}
}

?>