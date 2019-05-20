<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	public function index()
	{
		$this->template->show("login.php");
		
	}


	public function page_user(){
		$this->template->show("restrict.php");
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */