<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        
    }

    public function salvar_usuario(){
        $json = array();
		$json["status"] = 1;
        $json["lista_erro"] = array();
        

        $data["nome"] = $this->input->post("txtnome");
        $data["email"] = $this->input->post("txtEmail");
        $senha = $this->input->post("txtsenha");
        $repeteSenha = $this->input->post("txtrepeteSenha");
        $data["cpf"] = $this->input->post("txtCpf");
        $data["qtd_moedas"] = 0;
        $data["forma_pagamento"] = $this->input->post("selectPlano");
        $data["ativo"] = 0;
        $data["nivel"] = 0;
        $data["venc_cadastro"] = date("Y-m-d",strtotime("+ 6 month"));

        if($senha === $repeteSenha){
            $data["senha"] = password_hash($this->input->post("txtsenha"),PASSWORD_DEFAULT) ;
        }else{
            $json["status"] = 1;
            $json["lista_erro"]["#txtsenha"] = "As senhas diferem"; 
        }

        
        $this->users_model->inserirUsuario($data);
        $this->template->show('home',$data);
        echo json_encode($json);
    }


    
    
    public function index()
    {
        
    }

}

/* End of file User.php */



/*valida cpf
  <?php 
                     function validaCPF($cpf = null) {

  // Verifica se um número foi informado
  if(empty($cpf)) {
    return false;
  }

  // Elimina possivel mascara
  $cpf = preg_replace("/[^0-9]/", "", $cpf);
  $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
  
  // Verifica se o numero de digitos informados é igual a 11 
  if (strlen($cpf) != 11) {
    return false;
  }
  // Verifica se nenhuma das sequências invalidas abaixo 
  // foi digitada. Caso afirmativo, retorna falso
  else if ($cpf == '00000000000' || 
    $cpf == '11111111111' || 
    $cpf == '22222222222' || 
    $cpf == '33333333333' || 
    $cpf == '44444444444' || 
    $cpf == '55555555555' || 
    $cpf == '66666666666' || 
    $cpf == '77777777777' || 
    $cpf == '88888888888' || 
    $cpf == '99999999999') {
    return false;
   // Calcula os digitos verificadores para verificar se o
   // CPF é válido
   } else {   
    
    for ($t = 9; $t < 11; $t++) {
      
      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cpf{$c} * (($t + 1) - $c);
      }
      $d = ((10 * $d) % 11) % 10;
      if ($cpf{$c} != $d) {
        return false;
      }
    }

    return true;
  }
}
                    ?>

*/
