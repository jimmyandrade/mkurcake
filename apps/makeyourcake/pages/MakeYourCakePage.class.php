<?php

namespace makeyourcake\pages;

use Debug;
use Page;

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
		Debug::clientConsoleLog('Construindo página-mestra...');
		parent::__construct();
		Debug::clientConsoleLog('Construção finalizada...');
	}
}