<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/pages/guest/register');		
	}

	public function registerUser()
	{	
		$validator = array('success' => false, 'messages'=> array());
		$this->validate('name','Fullname',$this->fullname);
		$this->validate('email','Email',$this->email);
		$this->validate('gender','Gender',$this->gender);
		$this->validate('username','username',$this->username);
		$this->validate('password','password',$this->password);
		$this->validate('cpassword','cpassword',$this->cpassword);
		$this->form_validation->set_message('is_unique', 'The {field} already exist');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run() === true)
		{
			$this->CoreModel->registerUser();
			$validator['success'] = true;
		}
		else
		{
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
				$validator['success'] = false;
			}
		}
		echo json_encode($validator);
	}



}


