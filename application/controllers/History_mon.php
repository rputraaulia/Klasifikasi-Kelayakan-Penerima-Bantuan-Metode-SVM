<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Include librari PhpSpreadsheet
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class History_mon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		#notifikasi
		$this->load->model('model_data', 'data');
	}
	public function index($id = null)
	{

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->haka;
        $d['haka'] = $role;
        $d['konten'] = "history_mon";
      
		$d['title'] = "Data History Klasifikasi Penerima Bansos";
		$d['class'] = "halaman_utama";
		$d['hasil'] = $this->data->hasil('');

      
#Keamanan Login Session dan hak ases akun
if ($this->session->userdata('logged_in') and $role == 'Administrator') {
    $this->load->view('template/home', $d);
} else {
    $this->session->set_flashdata('pesan', 'statusoff');
    redirect('login/kick');

	}
}


}