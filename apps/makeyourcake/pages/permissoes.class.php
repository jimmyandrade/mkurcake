<?php

namespace makeyourcake\pages;

use makeyourcake\models\MakeYourCakeSession;
use controls\UIDataGrid\UIDataGrid;
use controls\UIDataList\UIDataList;
use PDO;

/**
 *
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 *        
 */
class permissoes extends MakeYourCakePage {
	
	/**
	 * Função de construção da página de permissões
	 */
	public function __construct() {
		parent::__construct ();
		$this->setPageTitle('Permissões &middot; ' . APP_NAME);
		
		$s = new MakeYourCakeSession();
		$s->init();
		
		$a = $s->GetModel('makeyourcake\models\AtoresModel');
		$c = $s->GetModel('makeyourcake\models\CasosDeUsoModel');
		$p = $s->GetModel('makeyourcake\models\PermissoesModel');
		
		$consulta = $s->query($p, $c, $a)->filter(
			and_(
				"{$p->ator} = {$a->idator}",
				"{$p->casodeuso} = {$c->idcasodeuso}"
			)
		);
		
		$resultado = $consulta->fetchAll();
		
		$tabelaPermissoesControl = new UIDataGrid(array(
			'result' => $resultado,
			'ignoreColumns' => array('idator', 'idcasodeuso', 'ator', 'casodeuso')
		));
		
		$this->addControl('TituloPagina', 'Permissões');
		$this->addControl('ConteudoPagina', $tabelaPermissoesControl);
		
	}
}
