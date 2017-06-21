<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/components/header');		
		$this->load->view('templates/pages/member/home');		
		$this->load->view('templates/components/footer');		
	}

}


