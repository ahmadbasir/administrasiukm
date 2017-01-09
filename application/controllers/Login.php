<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mfile');
			$this->load->library('form_validation'); //memanggil form validation
		}

		public function index()
		{
			//menset rules apa saja yang di pakai untuk form
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('form-login');	
			}
			else
			{	
				$valid_user = $this->mfile->checkvalid();
				if($valid_user==FALSE)
				{	//error message bila username / password salah
					$this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong> Wrong Username / Password !!</div>');
					redirect('login');
				}
				else
				{
					//jika username dan password cocok akan menyimpan beberapa data user ke session
					$this->session->set_userdata('username',$valid_user->username);
					$this->session->set_userdata('role',$valid_user->role_id);
					$this->session->set_userdata('id',$valid_user->id);

					//cek apakah 'role_id' user berisi 1 atau 2
					switch ($valid_user->role_id) {
						case '1': //redirect ke admin
							redirect('admin');	
							break;
						case '2': //user
							$this->session->set_flashdata('sukses','<div class="text-center alert alert-success fade in animated bounceInDown noborder">Hai, Selamat datang kembali <b>'.$valid_user->username.' !</b><a href="#" class="close" style="text-decoration : none;" data-dismiss="alert" aria-label="close">&times;</a></div>');
							redirect('user');	
							break;		
						default: break;
					}
				}
			}		
		}

		public function logout()
		{
			//fungsi logout dengan menghapus session
			$this->session->sess_destroy();
			redirect('login');
		} 
	}