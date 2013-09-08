<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de atores
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class AtoresModel extends \Model {
	
	protected $table = 'atores';

	public function __construct() {
		parent::__construct ();
		$this->Field('idator', AutoIncrement(), PrimaryKey(), 'ID do ator');
		$this->Field('nomeator', String(45), Required(), 'Nome do ator');
	}
}