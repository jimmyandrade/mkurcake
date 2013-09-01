<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de status dos pedidos
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class StatusModel extends \Model {
	
	protected $table = 'status';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idstatus', UnsignedInteger(), PrimaryKey(), 'Código do status');
		$this->Field('status', String(255), Unique(), 'Status');
	}
}

?>