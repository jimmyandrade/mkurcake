<?php

namespace makeyourcake\pages;

/**
 *
 * @author D
 *        
 */
final class login extends MakeYourCake {
	
	public function __construct() {
		parent::__construct ();
		$this->setPageTitle('Entrar no ' . APP_NAME);
	}
}

?>