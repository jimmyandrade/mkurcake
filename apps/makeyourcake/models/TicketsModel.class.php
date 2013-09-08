<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de tickets de suporte
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class TicketsModel extends \Model {
	
	protected $table = 'tickets';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idticket', UnsignedInteger(), PrimaryKey(), 'ID do ticket');
		$this->Field('assunto', UnsignedInteger(), ForeignKey('assuntos', 'idassunto'), 'Assunto');
		$this->Field('mensagem', String(1024), Required(), 'Mensagem');
		$this->Field('usuario', UnsignedInteger(), ForeignKey('usuarios', 'idusuario'), 'Usuário');
	}
}
