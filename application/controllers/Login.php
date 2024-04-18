<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		#notifikasi
		$this->load->model('model_login', 'login');
		
	}
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$role['role'] = $this->session->userdata('logged_in');
			if ($role['role']->haka == "Administrator") {
			
				redirect('training');
			} else{
				$this->session->set_flashdata('pesan', 'gagallogin');
				redirect('login');
			}
		} else {
			#detail
			$d['title']="Login Sistem";
			// $d['class']="Data Alternatif";

			$this->load->view('login', $d);
		}
	}

	public function getLogin()
	{
		$username = $this->input->post('username',true);
		$password = sha1($this->input->post('password',true));

		if ($hasil = $this->login->cekLogin($username, $password) > 0) {
			$data['hasil'] = $hasil;
			if ($data['hasil'] == null) {
				$data['cek'] = '0';
				$this->load->view('Login', $data);
			} else {
				redirect('Login');
			}
		} else{
		

		redirect('login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login');
	}
	public function kick()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();

		$this->session->set_flashdata('pesan', 'statusoff');
		redirect('login');
	}
}
