<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data = array("scripts" =>array(
			"util.js"
		)
	);
		$this->template->show('home',$data);
	}
}
