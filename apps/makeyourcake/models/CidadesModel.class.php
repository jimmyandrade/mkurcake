<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de cidades
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class CidadesModel extends \Model {
	
	protected $table = 'cidades';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idcidade', UnsignedInteger(), PrimaryKey(), 'ID da cidade');
		$this->Field('nomecidade', String(45), Required(), 'Nome da cidade');
	}
}