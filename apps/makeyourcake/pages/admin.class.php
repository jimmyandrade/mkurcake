<?php

namespace makeyourcake\pages;

use makeyourcake\models\MakeYourCakeSession;
use controls\UIDataGrid\UIDataGrid;
use controls\UIDataList\UIDataList;
use makeyourcake\auth\MakeYourCakeAuth;
use plugins\output\Container;

/**
 * Página de administração do MakeYourCake
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira 
 *        
 */
class admin extends MakeYourCakePage {
	
	/**
	 * Função de construção da página de administração
	 */
	public function __construct() {
		parent::__construct();
		MakeYourCakeAuth::preventNotLoggedInUsers();
		
		$this->setPageTitle('Painel de administração do ' . APP_NAME);
		$this->setPageTemplate('admin');
		
		$s = new MakeYourCakeSession();
		$s->init();
		$u = $s->GetModel('makeyourcake\models\UsuariosModel');
		$t = $s->GetModel('makeyourcake\models\TicketsModel');
		$a = $s->GetModel('makeyourcake\models\AssuntosModel');
		
		$listaAssuntosControl = new UIDataList(array(
			'result' => $s->query($a)->all()->fetchAll(),
			'ignoreColumns' => null,
			'caption' => 'Assuntos de atendimento',
			'ignoreColumns' => array('idassunto'),
			'noResultsMessage' => new Container(
				array (
					'cssClass'=>'well well-sm',
					'innerText'=>'Nenhum assunto de suporte foi cadastrado.',
				)
			),
			'showLabels' => false,
		));
		
		$tabelaTicketsControl = new UIDataGrid(array(
			'result' => $s->query($t)->all()->fetchAll(),
			'ignoreColumns' => array(),
			'caption' => 'Tickets',
			'noResultsMessage' => new Container(
				array(
					'cssClass'=>'well well-sm',
					'innerText'=>'Nenhum ticket de suporte ativo.',
				)
			),
		));
		
		$tabelaUsuariosControl = new UIDataGrid(array(
			'result' => $s->query($u)->all()->fetchAll(),
			'ignoreColumns' => array('senha', 'ator'),
			'caption' => 'Usuários',
			'noResultsMessage' => new Container(
				array(
					'cssClass'=>'well well-sm',
					'innerText'=>'Nenhum cliente cadastrado no sistema :(',
				)
			),
		));
		
		$this->addControl('TabelaUsuarios', $tabelaUsuariosControl);
		$this->addControl('ListaAssuntos', $listaAssuntosControl);
		$this->addControl('TabelaTickets', $tabelaTicketsControl);
		
	}
}

?>