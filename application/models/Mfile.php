<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Mfile extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    function get_user_all()
    {
        $query=$this->db->query("SELECT role_id FROM user limit 1");
        return $query->result();
    }

    public function checkvalid() //cek valid user
    {
      //menset data dari form
      $username = set_value('username');  
      $password = set_value('password');

      $hasil = $this->db->where('username',$username) //mengambil data dari database untuk di cocokan dengan inputan
                        ->where('password', md5(md5($password)))
                        ->limit(1)
                        ->get('user');

      if ($hasil->num_rows()>0)
      {
        return $hasil->row();
      }
      else
      {
        return array();
      }
  }

  public function register()
  {
    $nama      = set_value('nama');
    $username  = set_value('username');
    $password  = set_value('password');
    $email     = set_value('email');
    $gender    = set_value('gender');
    $role      = set_value('', '2'); // 'user_role' diset otomatis '2' / untuk member
    
    $data['nama']       = $nama;
    $data['username']   = $username;
    $data['password'] = md5(md5($password));
    $data['email']      = $email;
    $data['gender']     = $gender;
    $data['role_id']    = $role;

    $this->db->insert('user', $data); //query insert data
    
  }

  public function check_if_username_exist($username)
  {
    $this->db->where('username', $username);
    $result = $this->db->get('user');

    if ($result->num_rows() > 0) {
        return FALSE; //username taken
    }
    else
    {
      return TRUE; //username can be Reg
    }
  }

  public function view_data_homepage()
    {
    $query = $this->db->get('data_tips_homepage');
    return $query->result();
    }

} 
