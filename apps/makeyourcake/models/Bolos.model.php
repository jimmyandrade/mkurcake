<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de bolos
 * 
 * Aqui, consideramos bolo como um produto, com nome e descrição.
 * Os ingredientes necessários para montagem no bolo são inseridos em ItensModel.
 * O cruzamento dos ingredientes com o bolo é realizado em PersonalizacaoModel. 
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class BolosModel extends \Model {
	
	protected $table = 'bolos';
	
	public function __construct() {
		parent::__construct();
		$this->Field('idbolo', UnsignedInteger(), PrimaryKey(), 'ID do bolo');
		$this->Field('nomebolo', String(45), Required(), 'Nome do bolo');
		$this->Field('descricaobolo', String(255), null, 'Descrição do bolo');
		$this->Field('bolorapido', Integer(), null, 'Bolo rápido');
	}
}
