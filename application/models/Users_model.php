<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		}

		    public function buscarUsuario($usuario_email){
			$this->db 
			->select("ID,nome,email,senha,cpf,qtd_moedas,forma_pagamento,ativo,nivel,venc_cadastro")
			->from("usuario")
			->where("email",$usuario_email);


			$result = $this->db->get();

			if ($result->num_rows() > 0) {
				return $result->row();
			}else {
				return NULL;
			}
		}
	

}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */







