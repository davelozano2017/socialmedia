<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Execute extends CI_Controller {

	
	public function register()
	{
		$validator = array('success' => false, 'message'=> array());
		$this->validate('name','name', 'required|trim|xss_clean');
		# Validate email and username sample change table name
		$this->validate('email','email','required|trim|is_unique[account_tbl.email]|xss_clean');
		$this->validate('gender','gender','required|trim|xss_clean');
		$this->validate('username','username','required|trim|is_unique[account_tbl.username]|xss_clean|min_length[4]');
		$this->validate('password','password','required|trim|xss_clean|min_length[6]');
		$this->validate('cpassowrd','confirm passowrd','required|trim|matches[password]|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">','</span>');
		if($this->form_validation->run() === true)
		{
			#change model 
			$this->CoreModel->RegisterUser();
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

	public function login()
	{
		$validator = array('success' => false, 'message'=> array());
		$this->validate('username','username','required|trim|xss_clean|min_length[4]');
		$this->validate('password','password','required|trim|xss_clean|min_length[6]');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">','</span>');
		if($this->form_validation->run() === true)
		{
			#change model 
			$this->CoreModel->UserLogin();
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


