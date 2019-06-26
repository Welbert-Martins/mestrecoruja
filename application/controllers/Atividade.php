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


      

        if(empty($data["tipo"])||empty($data["descricao"])){
            $json["status"]=0;
			$json["lista_erro"]["#btnSolicitacao"]= "Atividade e descrição não podem ser vazios!";
        }
        elseif( strlen($data["descricao"]) > 400){
            $json["status"]=0;
			$json["lista_erro"]["#btnSolicitacao"]= "Descrição deve ter no máximo 400 caracteres!";
        }
        else{
            $this->atividade_model->inserirSolicitacao($data);
            $json["lista_erro"]["#btnSolicitacao"]= "Atividade solicitada com sucesso!Em breve a enviaremos para o email cadastrado!";
        }

      
        
       
      
        
        
        

        echo json_encode($json);
    }
    
    public function index()
    {
        
    }

}