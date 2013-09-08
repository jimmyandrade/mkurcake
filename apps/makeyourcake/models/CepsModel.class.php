<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de CEP's
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class CepsModel extends \Model {
	
	protected $table = 'ceps';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idcep', UnsignedInteger(), PrimaryKey(), 'ID do CEP');
		$this->Field('numerocep', UnsignedInteger(), Unique(), 'Código postal');
		$this->Field('taxa', Decimal(), Required(), 'Taxa de deslocamento');
		$this->Field('cidade', UnsignedInteger(), ForeignKey('cidades', 'idcidade'), 'ID da cidade');
	}
}