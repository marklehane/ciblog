<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function register($enc_password)
	{
		//User data array
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'zipcode' => $this->input->post('zipcode'),
			'password' => $enc_password,
			'zipcode' => $this->input->post('zipcode'),
		);

		//Insert User
		return $this->db->insert('users', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */