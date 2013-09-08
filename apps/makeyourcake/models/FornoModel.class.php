<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de forno
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class FornoModel extends \Model {
	
	protected $table = 'forno';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('pedido', UnsignedInteger(), ForeignKey('pedidos', 'idpedido'), 'Número do pedido');
		$this->Field('bolo', UnsignedInteger(), ForeignKey('bolos', 'idbolo'), 'Bolo');
	}
}

?>