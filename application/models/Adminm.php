<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class adminm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getId()
	{	
		$user_id =  $this->session->userdata('id');
        $this->db->select('id, nama, username, password, email, bio, born_date, gender, create_at, edit_at');
		$this->db->where('id', $user_id);
		$query = $this->db->get('user'); //get all data from user_profiles table that belong to the respective user
		return $query->row(); //return the data
	}

	public function updatemodel($id ,$data)
	{
		$this->db->where('id', $id);
  		$this->db->update('user', $data);
	}
	
}