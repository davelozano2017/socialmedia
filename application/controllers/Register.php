<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

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
		$this->validate('cpassword','Confirm password',$this->cpassword);
		$this->form_validation->set_message('is_unique', 'The {field} already exist');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run() === true)
		{
			$this->load->model('CoreUserRegister');

			$CoreUserRegister = new CoreUserRegister;
			$CoreUserRegister->table_accounts = $this->table_accounts;
			$CoreUserRegister->primary_key   = $this->primary_key;

			 $subject = 'Online Examination';
             $message = '
        	
        	<div style="max-width:92%;border-left:solid 1px #313d49;border-right:solid 1px #313d49;border-top:solid 1px #313d49;border-bottom:solid 1px #313d49;background-color:#f5f5f5;padding:10px;text-align:center">
        		<h3 style="color:#000">ONLINE EXAMINATION SYSTEM</h3>
        	</div>
        	<div style="max-width:92%;background-color:#ffffff;border-left:1px solid #313d49;border-right:solid 1px #313d49;padding:10px;">
        		<h4>Hello jade,</h4>
        		<h4>Please be active on this email to be updated to your upcoming online examination.</h4>
        		<h4>Please login with this credentials</h4>
        		<a href="http://localhost/examination_system/login" 
        		style="float:right;background:#313d49;text-decoration:none;padding:10px;color:#fff;
        		font-weight:bolder">
        		CLICK ME TO LOGIN</a>
        		<h4>Username: <i>senpaijaro</i></h4>
        		<h4>Password: <i>12345</i></h4>
        		<h5 style="color:#ff0000;font-weight:bolder">Note: <i>If you have any questions or issues, you may email us @(email ng websitemo).</i></h5>
        	</div>
        	<div style="width:92%;background-color:#313d49;border-left:1px solid #313d49;border-right:solid 1px #313d49;padding:10px;text-align:center">
        		<h4 style="color:#fff">All Rights Reserved @ '.date('Y').'</h4>
        	</div>
        ';
		
			$this->email->to($this->param('email'))->from('a@yahoo.com')->subject($subject)->message($message);
			
			if(!$this->email->send())
			 {
				echo 'connection error';
			}
			else
			{
				$CoreUserRegister->registerUser(array(
						'acc_id'        => 1,
						'acc_name' 		=> humanize($this->param('name')),
						'acc_email' 	=> $this->param('email'),
						'acc_gender'   	=> $this->param('gender'),
						'acc_username' 	=> $this->param('username'),
						'acc_password'  => password_hash($this->param('password'),PASSWORD_DEFAULT),
						'acc_code' 	    => rand(11111,99999),
						'acc_status' 	=> 'Not Active',
						'acc_role' 		=> '1'
					));

				$validator['success'] = true;
			}
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


