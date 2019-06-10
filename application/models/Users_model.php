<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		}
			/*seleciona e retorna usuario no banco de dados quando o email(string) passado por parametro
			for igual ao encontrado no banco de dados.Essa função  é utilizada no login*/
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

		public function inserirUsuario($data){
			$this->db->insert('usuario', $data);
			
		}


	

}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */







