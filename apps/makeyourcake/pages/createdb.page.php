<?php

namespace makeyourcake\pages;

use makeyourcake\models\MakeYourCake_Session;

/**
 * Controller responsável pela criação do banco de dados.
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class createdb_Page extends \MakeYourCake_Page {
	
	public function __construct() {
		parent::__construct ();
		$s = new MakeYourCake_Session(\AppConfig::loadDefaultDataProvider());
		$s->init();
		$s->create();
	}
}

?>