<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class userm extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getId()
	{	
		$user_id =  $this->session->userdata('id');
		$this->db->where('id', $user_id);
		$query = $this->db->get('user'); //get all data from user_profiles table that belong to the respective user
		return $query->row(); //return the data
	}

	public function updatemodel($id ,$data)
	{
		$this->db->where('id', $id);
  		$this->db->update('user', $data);
	}
	function tampil_data_kas(){
		return $this->db->get('datakas');
	}
	function tampil_data_anggota(){
		return $this->db->get('dataanggota');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}


	function edit_data($where,$table){
	    return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
	    $this->db->where($where);
	    $this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}