<?php

namespace makeyourcake\models;

/**
 * Sessão principal de acesso a dados do MakeYourCake.
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class MakeYourCake_Session extends \Session {
	
	/**
	 * Inicializa a Session atual.
	 *        	
	 */
	public function init() {
		$this->AddModel(new AtoresModel());
		$this->AddModel(new CasosDeUsoModel());
		$this->AddModel(new PermissoesModel());
	}
}
