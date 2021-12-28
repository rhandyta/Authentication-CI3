<?php 

class M_user extends CI_Model {
	public $table = 'user';
	public $id = 'email';

	public function store($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function authentication($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
		
	}

	public function insertToken($tokens, $table)
	{
		$this->db->insert($table, $tokens);
	}

	public function authenticateToken($token)
	{
		return $this->db->get_where('tokens', ['token' => $token])->row_array();
	}
}