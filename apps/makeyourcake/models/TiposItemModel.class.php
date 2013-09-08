<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de tipos de item para composição do bolo
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class TiposItemModel extends \Model {
	
	protected $table = 'tipositem';
	
	public function __construct() {
		parent::__construct ();
		$this->Field ( 'idtipoitem', UnsignedInteger(), PrimaryKey(), 'ID do tipo de item' );
		$this->Field ( 'nometipoitem', String(45), Required(), 'Nome do tipo de item' );
	}
}
