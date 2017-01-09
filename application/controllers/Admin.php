<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class admin extends CI_Controller
{
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('role') != '1'){ //cek apakah user yg masuk memiliki 'role_id' == 1
      $this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry</strong> Your not logged in</div>');
      redirect('login');
      }
	  $this->load->model('adminm');
      $this->load->library('form_validation');
    }

	public function index()
	{
		
		$this->load->view('templateadmin/dashboard');
	}

	public function view()
	{
		$data['profile'] = $this->adminm->getId();

		$this->load->view('templateadmin/profile', $data);
	}

	public function edit()
	{
		$data['profile'] = $this->adminm->getId();

		$this->load->view('templateadmin/editprofile', $data);	
	}

	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('bio', 'Bio', 'trim');
		$this->form_validation->set_rules('born_date', 'Born Date', 'trim');
		$this->form_validation->set_rules('gender', 'Gender', 'trim');
		$this->form_validation->set_rules('role', 'Role as', 'trim');

		$data['profile'] = $this->adminm->getId();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templateadmin/editprofile', $data);
		}
		else
	  	{
	  		$id = $this->input->post('id');
	  		$data = array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'), 
			'password'=>md5(md5($this->input->post('password'))),
	        'email'    =>$this->input->post('email'),
	        'bio'      =>$this->input->post('bio'),
	        'born_date'   =>$this->input->post('born_date'),
	        'gender'	=>$this->input->post('gender'),
	        'edit_at'	=>$this->input->post('edit')
			);
	   		$this->adminm->updatemodel($id ,$data);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('admin/view');
	   	}
	}

	public function view_input_tips()
	{
		$data['get'] = $this->adminm->view_data();
		$this->load->view('templateadmin/inputtips', $data);
	}

	public function input_tips()
	{
		$id_user = $this->session->userdata('id');
		$data['id_user'] = $id_user;
		$data['title']   = $this->input->post('title');
		$data['content'] = $this->input->post('content');

		$hasil = $this->adminm->insert_tips($data);
		if ($hasil) 
		{	
			$this->session->set_flashdata('success_insert','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Add Data,</div>');
			redirect('admin/view_input_tips');
		}
		else
		{
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
			redirect('admin/view_input_tips');
		}
	}

	public function edit_tips_landingpage()
	{
		$id = $this->uri->segment(3);
 		if ($id == NULL) {
			redirect('user');
		}
		$dt = $this->adminm->edit_tips_landingpage($id);
		$data['title'] = $dt->title;
		$data['content'] = $dt->content;
		$data['id'] = $id;
		$this->load->view('templateadmin/edit_tips_landingpage', $data);
	}

	public function update_tips_landingpage()
	{
		if ($this->input->post('submit'))
	  	{
	   		$id = $this->input->post('id');
	   		$this->adminm->update_tips_landingpage($id);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('admin/view_input_tips');
	   	}
	   	else
	   	{
			$this->session->set_flashdata('error_edit','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong> Edit Data,</div>');
	    	redirect('admin/edit_tips_landingpage/'.$id);
	    }
	}
	public function delete_tips_landingpage($id)
	{
		$this->adminm->delete_tips_landingpage($id);
		$this->session->set_flashdata('success_delete','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Delete Data,</div>');
  		redirect('admin/view_input_tips');
	}

	public function view_input_tips_homepage()
	{
		$data['get'] = $this->adminm->view_data_tips_homepage();
		$this->load->view('templateadmin/input_tips_homepage', $data);
	}

	public function input_tips_homepage()
	{
		$id_user = $this->session->userdata('id');
		$data['id_user'] = $id_user;
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');

		$hasil = $this->adminm->insert_tips_homepage($data);
		if ($hasil) 
		{	
			$this->session->set_flashdata('success_insert','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Add Data,</div>');
			redirect('admin/view_input_tips_homepage');
		}
		else
		{
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
			redirect('admin/view_input_tips_homepage');
		}
	}

	public function edit_tips_homepage()
	{
		$id = $this->uri->segment(3);
 		if ($id == NULL) {
			redirect('user');
		}
		$dt = $this->adminm->edit_tips_homepage($id);
		$data['title'] = $dt->title;
		$data['content'] = $dt->content;
		$data['id'] = $id;
		$this->load->view('templateadmin/edit_tips_homepage', $data);
	}

	public function update_tips_homepage()
	{
		if ($this->input->post('submit'))
	  	{
	   		$id = $this->input->post('id');
	   		$this->adminm->update_tips_homepage($id);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('admin/view_input_tips_homepage');
	   	}
	   	else
	   	{
			$this->session->set_flashdata('error_edit','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong> Edit Data,</div>');
	    	redirect('admin/edit_tips_homepage/'.$id);
	    }
	}
	public function delete_tips_homepage($id)
	{
		$this->adminm->delete_tips_homepage($id);
		$this->session->set_flashdata('success_delete','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Delete Data,</div>');
  		redirect('admin/view_input_tips_homepage');
	}
}