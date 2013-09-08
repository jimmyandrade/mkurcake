<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de casos de uso
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class CasosDeUsoModel extends \Model {
	
	protected $table = 'casosdeuso';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idcasodeuso', AutoIncrement(), PrimaryKey(), 'ID do caso de uso');
		$this->Field('nomecasodeuso', String(45), Required(), 'Nome do caso de uso');
	}
}