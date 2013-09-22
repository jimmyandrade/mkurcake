<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de clientes
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class ClientesModel extends \Model {
	
	/**
	 * Nome da tabela de clientes a ser utilizado nas consultas SQL.
	 */
	protected $table = 'clientes';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idcliente', AutoIncrement(), PrimaryKey(), 'ID do cliente');
		$this->Field('cpf', String(11), Unique(), 'CPF');
		$this->Field('telefone', String(19), Required(), 'Telefone');
		$this->Field('endereco', String(255), Required(), 'Endereço');
		$this->Field('cep', UnsignedInteger(), ForeignKey('ceps', 'idcep'), 'CEP');
	}
}