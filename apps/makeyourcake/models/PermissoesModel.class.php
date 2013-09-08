<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de permissões
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class PermissoesModel extends \Model {
	
	protected $table = 'permissoes';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('ator', UnsignedInteger(), ForeignKey('atores', 'idator'), 'ID do ator');
		$this->Field('casodeuso', UnsignedInteger(), ForeignKey('casosdeuso', 'idcasodeuso'), 'ID do caso de uso');
	}
}