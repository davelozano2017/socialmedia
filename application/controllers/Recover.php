<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recover extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/components/header');		
		$this->load->view('templates/pages/guest/recover');		
		$this->load->view('templates/components/footer');		
	}

}


