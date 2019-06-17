<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atividade extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('atividade_model');
        
    }

    public function salvar_solicitacao(){
        $json = array();
		$json["status"] = 1;
        $json["lista_erro"] = array();
        

        $data["usuario"] = $this->input->post("nomeSolicitante");
        $data["email"] = $this->input->post("emailSolicitante");
        $data["tipo"] = $this->input->post("txtnome");
        $data["descricao"] = $this->input->post("txtDescricao");
        $data["dt_recebe"] = date("Y-m-d");
        $data["status"] = "Aguardando";

      
        
        $this->atividade_model->inserirSolicitacao($data);
      
        
        
        redirect('page_user');
    }
    
    public function index()
    {
        
    }

}