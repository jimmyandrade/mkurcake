<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de personalização
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class PersonalizacaoModel extends \Model {
	
	protected $table = 'personalizacao';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('bolo', UnsignedInteger(), ForeignKey('bolos', 'idbolo'), 'Bolo');
		$this->Field('item', UnsignedInteger(), ForeignKey('itens', 'iditem'), 'Item');
	}
}
