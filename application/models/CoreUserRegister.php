<?php

class CoreUserRegister extends CI_Model
{
	
	public $table_accounts = '';
	public $primary_key    = '';

	function __construct()
	{
		parent::__construct();
	}

	public function registerUser($data = array())
	{
		$this->db->insert($this->table_accounts,$data);
		return $this->db->insert_id();
	}
}