<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de assuntos do suporte
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class AssuntosModel extends \Model {
	
	protected $table = 'assuntos';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idassunto', AutoIncrement(), PrimaryKey(), 'ID do assunto');
		$this->Field('assunto', String(45), Required(), 'Nome do assunto');
	}
}