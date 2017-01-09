<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Controller
{
	public function __construct(){
	parent::__construct();
	if($this->session->userdata('role') != '2')
	    { //cek apakah user memiliki 'role_id' == 2
	      $this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry</strong> Your not logged in</div>');
	      redirect('login');
	    }
		$this->load->model('userm');
		$this->load->library('form_validation');
		$this->load->helper('url');
    }

	public function index()
	{
		
		$this->load->view('templateuser/dashboard');
	}

	public function inputkas()
	{
		
		$this->load->view('templateuser/inputkas');
	}
	public function datakas()
	{
		$data['datakas'] = $this->userm->tampil_data_kas()->result();
		
		$this->load->view('templateuser/datakas',$data);
	}
	public function dataanggota()
	{
		$data['dataanggota'] = $this->userm->tampil_data_anggota()->result();
		
		$this->load->view('templateuser/dataanggota',$data);
	}

	public function input_datakas()
	{
		$aliran = $this->input->post('aliran');
		$keperluan = $this->input->post('keperluan');
		$jml_dana = $this->input->post('jml_dana');
		$tanggal = $this->input->post('tanggal');
		$termasuk = $this->input->post('termasuk');

		$data = array(
		'aliran_dana' => $aliran,
		'keperluan_dana' => $keperluan,
		'jumlah_dana' => $jml_dana,
		'tanggal_input' => $tanggal,
		'termasuk' => $termasuk
		);
		$this->userm->input_data($data,'datakas');
		redirect('user/datakas');
	}
	public function input_dataanggota()
	{
		$fullname = $this->input->post('name');
		$address = $this->input->post('address');
		$nohp = $this->input->post('nohp');
		$email_anggota = $this->input->post('email');
		$tgl_anggota = $this->input->post('born_date');
		$gender_anggota = $this->input->post('gender');

		$data = array(
		'name_anggota' => $fullname,
		'address_anggota' => $address,
		'nohp_anggota' => $nohp,
		'email_anggota' => $email_anggota,
		'tgllahir_anggota' => $tgl_anggota,
		'gender_anggota' => $gender_anggota
		);
		$this->userm->input_data($data,'dataanggota');
		redirect('user/dataanggota');
	}


	function hapus_datakas($id_dana){
		$where = array('id_dana' => $id_dana);
		$this->userm->hapus_data($where,'datakas');
		redirect('user/datakas');
	}

	function hapus_dataanggota($id_anggota){
		$where = array('id_anggota' => $id_anggota);
		$this->userm->hapus_data($where,'dataanggota');
		redirect('user/dataanggota');
	}

	public function edit_dataanggota($id_anggota)
	{
		$where = array('id_anggota' => $id_anggota);
		$data['dataanggota'] = $this->userm->edit_data($where,'dataanggota')->result();

		
		$this->load->view('templateuser/editanggota',$data);
	}

	function update_dataanggota(){
		$id_anggota = $this->input->post('id_anggota');
		$fullname = $this->input->post('name');
		$address = $this->input->post('address');
		$nohp = $this->input->post('nohp');
		$email_anggota = $this->input->post('email');
		$tgl_anggota = $this->input->post('born_date');
		$gender_anggota = $this->input->post('gender');

		$data = array(
		'name_anggota' => $fullname,
		'address_anggota' => $address,
		'nohp_anggota' => $nohp,
		'email_anggota' => $email_anggota,
		'tgllahir_anggota' => $tgl_anggota,
		'gender_anggota' => $gender_anggota
		);

		$where = array(
			'id_anggota' => $id_anggota
		);

		$this->userm->update_data($where,$data,'dataanggota');
		redirect('User/dataanggota');
	}

	public function view()
	{
		$data['profile'] = $this->userm->getId();

		$this->load->view('templateuser/profile', $data);
	}

	public function edit()
	{
		$data['profile'] = $this->userm->getId();
		$this->load->view('templateuser/editprofile', $data);	
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

		$data['profile'] = $this->userm->getId();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templateuser/editprofile', $data);
			$this->session->set_flashdata('error_edit','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>error,</strong> Edit Data,</div>');
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
	        'born_date' =>$this->input->post('born_date'),
	        'gender'	=>$this->input->post('gender'),
	        'edit_at'	=>$this->input->post('edit')
			);
	   		$this->userm->updatemodel($id ,$data);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('user/view');
	   	}
	}

	public function inputview()
	{
		$this->load->view('templateuser/inputform');
	}

	public function form_inputanggota()
	{
		$this->load->view('templateuser/inputanggota');
	}




}