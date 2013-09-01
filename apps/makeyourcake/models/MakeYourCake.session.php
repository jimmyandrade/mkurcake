<?php

namespace makeyourcake\models;

use makeyourcake\models\mwb\UsuariosModel;
/**
 * Sessão principal de acesso a dados do MakeYourCake.
 * 
 * @author Denise Souza, Matheus Gonçalves, Paulo H. Andrade e Tatiane Vieira
 */
class MakeYourCake_Session extends \Session {
	
	/**
	 * Inicializa a Session atual.
	 *        	
	 */
	public function init() {
		$this->AddModel(new AtoresModel());
		$this->AddModel(new UsuariosModel());
		$this->AddModel(new CasosDeUsoModel());
		$this->AddModel(new PermissoesModel());
		$this->AddModel(new CidadesModel());
		$this->AddModel(new CepsModel());
		$this->AddModel(new ClientesModel());
		$this->AddModel(new AssuntosModel());
		$this->AddModel(new FaqModel());
		$this->AddModel(new TicketsModel());
		$this->AddModel(new TiposItemModel());
		$this->AddModel(new ItensModel());
		$this->AddModel(new BolosModel());
		$this->AddModel(new PersonalizacaoModel());
		$this->AddModel(new StatusModel());
		$this->AddModel(new PedidosModel());
		$this->AddModel(new FornoModel());
	}
}
