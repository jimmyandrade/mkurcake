<?php

namespace makeyourcake\models;

/**
 * Model para a tabela de Perguntas Frequentes - FAQ (Frequently Asked Questions)
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class FaqModel extends \Model {
	
	protected $table = 'faq';
	
	public function __construct() {
		parent::__construct ();
		$this->Field('idfaq', UnsignedInteger(), PrimaryKey(), 'ID da pergunta');
		$this->Field('pergunta', String(45), Required(), 'Pergunta');
		$this->Field('resposta', String(1024), Required(), 'Resposta');
		$this->Field('assunto', UnsignedInteger(), ForeignKey('assuntos', 'idassunto'));
	}
}
