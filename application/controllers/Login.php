<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/components/header');		
		$this->load->view('templates/pages/guest/login');		
		$this->load->view('templates/components/footer');		
	}

	public function RegisterUser()
	{
		$validator = array('success' => false, 'message'=> array());
		$this->validate('name','name', 'required|trim');
		# Validate email and username sample change table name
		$this->validate('email','email','required|trim|is_unique[account_tbl.email]');
		$this->validate('username','username','required|trim|is_unique[account_tbl.username]');
		$this->validate('password','password','required|trim');
		$this->validate('cpassowrd','cpassowrd','required|trim|matches[password]');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">','</span>');
		if($this->form_validation->run() === true)
		{
			#change model 
			$this->MUser->RegisterUser();
			$validator['success'] = true;
		}
		else
		{
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($validator);
	}

	public function validate($a,$b,$c)
	{
		return $this->form_validation->set_rules($a,$b,$c);
	}
}
