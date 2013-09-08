<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de usuários
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class UsuariosModel extends \Model {
	
	protected $table = 'usuarios';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idusuario', UnsignedInteger(), PrimaryKey(), 'ID');
		$this->Field('nomecompleto', String(255), Required(), 'Nome completo');
		$this->Field('email', String(255), Unique(), 'E-mail');
		$this->Field('senha', String(255), Required(), 'Senha');
		$this->Field('ator', UnsignedInteger(), ForeignKey('atores', 'idator'), 'ID do ator');
	}
}