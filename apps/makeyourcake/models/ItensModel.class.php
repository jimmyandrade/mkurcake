<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de itens para composição do bolo
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class ItensModel extends \Model {
	
	protected $table = 'itens';
	
	public function __construct() {
		parent::__construct ();
		$this->Field ( 'iditem', UnsignedInteger(), PrimaryKey(), 'ID do item' );
		$this->Field ( 'nomeitem', String(144), Required(), 'Nome do item' );
		$this->Field ( 'descricao', String(255), null, 'Descrição do item' );
		$this->Field ( 'tipoitem', UnsignedInteger(), ForeignKey('tipositem', 'idtipoitem'), 'ID do tipo' );
		$this->Field ( 'custopequeno', Decimal(), Required(), 'Custo do item para bolos pequenos' );
		$this->Field ( 'customedio', Decimal(), Required(), 'Custo do item para bolos médios' );
		$this->Field ( 'custogrande', Decimal(), Required(), 'Custo do item para bolos grandes' );
	}
}
