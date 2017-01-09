<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class crud extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('crudmodel');
	}

	public function index()
	{
		$data['get_data'] = $this->crudmodel->view();
		$this->load->view('templateadmin/tableuser', $data);
	}

	public function add() 
	{

		$this->load->view('templateadmin/addnew');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama', 'Full Name', 'trim|required|callback_alpha_space_only');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|callback_check_if_username_exist');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('born_date', 'Born_date', 'required');
		$this->form_validation->set_rules('role', 'Status', 'required');						

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
			$this->load->view('templateadmin/addnew');
		}
		else
		{
			$data['nama'] = $this->input->post('nama');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5(md5($this->input->post('password')));
			$data['email'] = $this->input->post('email');
			$data['born_date'] = $this->input->post('born_date');
			$data['gender'] = $this->input->post('gender');
			$data['role_id'] = $this->input->post('role');

			$hasil = $this->crudmodel->add($data);
			if ($hasil) {
				$this->session->set_flashdata('success_insert','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Add Data,</div>');
				redirect('crud');
			}		
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
	   		$username_available = $this->crudmodel->check_if_username_exist($requested_username);

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

	public function edit()
	{
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('crud');
		}
		$dt = $this->crudmodel->edit_m($kd);
		$data['nama'] = $dt->nama;
		$data['username'] = $dt->username;
		$data['password'] = $dt->password;
		$data['email'] = $dt->email;
		$data['gender'] = $dt->gender;
		$data['role_id'] = $dt->role_id;
		$data['bio'] = $dt->bio;
		$data['born_date'] = $dt->born_date;
		$data['id'] = $kd;
		$this->load->view('templateadmin/editform', $data);
	}

	public function update()
	{
		if ($this->input->post('mit'))
		{
			$id = $this->input->post('id');
			$this->crudmodel->update_m($id);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
			redirect('crud');
		}
		else
		{
			redirect('crud/edit/'.$id);
		}
	}

	public function delete_user($id)
	{
		$this->crudmodel->delete($id);
		$this->session->set_flashdata('success_delete','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Delete Data,</div>');
		$this->index();
	}

	public function viewmoreuser()
	{
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('crud');
		}
		$dt = $this->crudmodel->editmore($kd);
		$data['nama'] = $dt->nama;
		$data['username'] = $dt->username;
		$data['password'] = $dt->password;
		$data['email'] = $dt->email;
		$data['gender'] = $dt->gender;
		$data['role_id'] = $dt->role_id;
		$data['bio'] = $dt->bio;
		$data['born_date'] = $dt->born_date;
		$data['id'] = $kd;
		$this->load->view('templateadmin/vmoreuser', $data);
	}

}