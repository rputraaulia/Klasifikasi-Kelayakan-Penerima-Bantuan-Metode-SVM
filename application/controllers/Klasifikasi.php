<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klasifikasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		#notifikasi
		$this->load->model('model_data', 'data');
	}
	public function index($id = null)
	{

		$d['title'] = "Analisa";
		$d['class'] = "";
		$d['konten'] = "klasifikasi";

		

		
  


		$this->load->view('template/home', $d);
	}
	
}
