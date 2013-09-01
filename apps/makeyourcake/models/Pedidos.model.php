<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de pedidos
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class PedidosModel extends \Model {
	
	protected $table = 'pedidos';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idpedido', UnsignedInteger(), PrimaryKey(), 'Número do pedido');
		$this->Field('statuspedido', UnsignedInteger(), ForeignKey('status', 'idstatus'), 'Status do pedido');
		$this->Field('usuariopedido', UnsignedInteger(), ForeignKey('usuarios', 'idusuario'), 'Usuário do pedido');
		$this->Field('endereco', String(255), Required(), 'Endereço de entrega do pedido');
		$this->Field('cep', UnsignedInteger(), ForeignKey('ceps', 'idcep'), 'CEP do pedido');
	}
}

?>