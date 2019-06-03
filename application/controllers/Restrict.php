<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$data = array("scripts" =>array(
			"util.js","login.js"
		)
	);
		$this->template->show("login.php",$data);
		
	}


	public function logoff(){
		$this->session->sess_destroy();
		header("Location:" . base_url() ."restrict");
	}


	public function ajax_login(){

		$json = array();
		$json["status"] = 1;
		$json["lista_erro"] = array();

		$email = $this->input->post("txtEmailLogin");
		$senha = $this->input->post("txtSenhaLogin");



		if (empty($email)) {
			$json["status"]=0;
			$json["lista_erro"]["#txtEmailLogin"]= "usuário não pode ser vazio!";

		}else{
			$this->load->model('users_model');
			$result = $this->users_model->buscarUsuario($email);

			if ($result) {
				$id_usuario_db = $result->ID;
				$senha_usuario_db = $result->senha;
				$nivel_usuario_db = $result->nivel;

				if (password_verify($senha, $senha_usuario_db)) {
					$this->session->userdata('id_usuario',$id_usuario_db);

					if ($nivel_usuario_db == 1) {
						$json["status"]=2;
					}

				}else{
					$json["status"]=0;

				}


			}else{
				$json["status"]=0;
			}

			if ($json["status"]==0) {
				$json["lista_erro"]["#btnLogin"] = "Usuário e/ou senha incorretos!";

			}
		}

		echo json_encode($json);
	}





	public function page_user(){
		$this->template->show("restrict.php");
	}

	public function page_admin(){
		$this->template->show("admin.php");
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */