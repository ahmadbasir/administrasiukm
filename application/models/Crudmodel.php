<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class crudmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function add($data)
	{
		return $this->db->insert('user', $data);
	}

	public function check_if_username_exist($username)
  	{
	    $this->db->where('username', $username);
	    $result = $this->db->get('user');

	    if($result->num_rows() > 0) {
	        return FALSE; //username taken
	    }
	    else
	    {
	      return TRUE; //username can be Reg
	    }
  	}

	public function view() 
	{
		$id_user = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id !=', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	public function edit_m($a)
	{
       	$d = $this->db->get_where('user', array('id' => $a))->row();
 		return $d;
    }
    public function update_m($id)
    {
	    $nama 		= $this->input->post('nama');
	    $username  	= $this->input->post('username');
	    $password  	= md5(md5($this->input->post('password')));
	    $email     	= $this->input->post('email');
	    $gender    	= $this->input->post('gender');
	    $bio    	= $this->input->post('bio');
	    $born_date 	= $this->input->post('born_date');
	    $role     	= $this->input->post('role');
	    $edit	 	= $this->input->post('now()');
	   
		$data = array(
			'nama'		=> $nama,
			'username' => $username, 
			'password' => $password,
	        'email'    => $email,
	        'gender'	=> $gender,
	        'bio'	 	=> $bio,
	        'born_date'	=> $born_date,
	        'role_id' 	=> $role,
	        'edit_at'	=> $edit

			);

      	$this->db->where('id', $id);
  		$this->db->update('user', $data);
      
    }

    public function delete($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('user');
    }

    public function getid()
    {
    	$this->session->userdata('id');
    }

    public function editmore($a)
    {
    	$d = $this->db->get_where('user', array('id' => $a))->row();
 		return $d;
    }

}