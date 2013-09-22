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
		$this->Field('idpermissao', AutoIncrement(), PrimaryKey(), 'ID da permissão');
		$this->Field('ator', UnsignedInteger(), ForeignKey('makeyourcake\models\AtoresModel', 'idator'), 'ID do ator');
		$this->Field('casodeuso', UnsignedInteger(), ForeignKey('makeyourcake\models\CasosDeUsoModel', 'idcasodeuso'), 'ID do caso de uso');
	}
}