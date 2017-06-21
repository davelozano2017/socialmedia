<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $fullname;
	public $email;
	public $gender;
	public $username;
	public $password;
	public $cpassword;

	public function __construct()
	{
		parent::__construct();

		$this->fullname  = 'required|trim|min_length[4]|max_length[50]|xss_clean';
		$this->email     = 'required|trim|is_unique[account_tbl.email]|xss_clean';
		$this->username  = 'required|trim|is_unique[account_tbl.username]|min_length[6]|max_length[50]|xss_clean';
		$this->gender    = 'required|trim|min_length[4]|max_length[10]|xss_clean';
		$this->password  = 'required|trim|min_length[6]|max_length[10]|xss_clean';
		$this->cpassword = 'required|trim|min_length[6]|max_length[10]|matches[password]|xss_clean';
		$this->cpassword = 'required|trim|min_length[6]|max_length[10]|matches[password]|xss_clean';
	}

	public function validate($a,$b,$c)
	{
		return $this->form_validation->set_rules($a,$b,$c);
	}


}	