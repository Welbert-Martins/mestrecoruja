<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Atividade_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		}
			

		public function inserirSolicitacao($data){
			$this->db->insert('solicitacao', $data);
			
        }
        
        public function carregarAtividades(){
            return $this->db->get("solicitacao")->result_array();
        }


	

}


