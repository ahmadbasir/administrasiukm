<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* 
	*/
	class register extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('mfile');
			$this->load->library('form_validation'); //memanggil form validation
		}
		public function register()
		{
			//menset rules apa saja yang di pakai untuk form
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_alpha_space_only');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|callback_check_if_username_exist');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required');
						

			if ($this->form_validation->run() == FALSE) {
				//membuat alert message registrasi gagal
				$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry </strong>The Registered Failed, please try again !</div>');
				$this->load->view('form-register');
			}
			else
			{
				$this->mfile->register();
				//membuat alert message sukses register
				$this->session->set_flashdata('success', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully Registered.</strong> Welcome to Pantau Sampah</div>');
				$valid_user = $this->mfile->checkvalid();
				$this->session->set_userdata('username',$valid_user->username);
				$this->session->set_userdata('role',$valid_user->role_id);
				$this->session->set_userdata('id',$valid_user->id);
				redirect('user');
			}

		}

		function alpha_space_only($str)
    	{
    		//fungsi ini untuk mengecek field 'nama' pada form register hanya berisi alfabet dan spasi yang diletakan di form validation
        	if (!preg_match("/^[a-zA-Z ]+$/",$str))
       		{
            	$this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            	return FALSE;
        	}
        	else
        	{
            	return TRUE;
        	}
	   	}

	   	public function check_if_username_exist($requested_username)
	   	{
	   		$username_available = $this->mfile->check_if_username_exist($requested_username);

	   		if ($username_available)
	   		{
	   			return TRUE;
	   		}
	   		else
	   		{
            	$this->form_validation->set_message('check_if_username_exist', 'Sorry username is Already taken.');
	   			return FALSE;
	   		}
	   	}
	}