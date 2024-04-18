<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class testing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		#notifikasi
		$this->load->model('model_data', 'data');
		$this->load->helper(array('form', 'url'));
	}
	public function index($id = null)
	{
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->haka;
		$d['haka'] = $role;

		$d['title'] = "Setting Data";
		$d['class'] = "Data testing";
		$d['konten'] = "testing";

		
		
		$d['testing'] = $this->data->testing('');

		

		#Keamanan Login Session dan hak ases akun
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			$this->session->set_flashdata('pesan', 'statusoff');
			redirect('login/kick');
		}
	}
	

	public function excel()
	{
		
	

		$upload_file=$_FILES['upload_file']['name'];

		$extension=pathinfo($upload_file,PATHINFO_EXTENSION);

		if($extension=='csv')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else if($extension=='xls')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
		$sheetdata=$spreadsheet->getActiveSheet()->toArray();

		$file_tmp = $_FILES['upload_file']['tmp_name'];
		$file_name = $_FILES['upload_file']['name'];
		$file_size =$_FILES['upload_file']['size'];
		$file_type=$_FILES['upload_file']['type'];
		move_uploaded_file($file_tmp,"uploads/"."Book2.xlsx"); // simpan filenya di folder uploads
		


		$sheetcount=count($sheetdata);
		if($sheetcount>1)
		{
			$data=array();
			for ($i=1; $i < $sheetcount; $i++) { 
				$nama_penduduk=$sheetdata[$i][0];
				$c1=$sheetdata[$i][1];
				$c2=$sheetdata[$i][2];
				$c3=$sheetdata[$i][3];
				$c4=$sheetdata[$i][4];
				$c5=$sheetdata[$i][5];
				$y=$sheetdata[$i][6];
				$lat=$sheetdata[$i][7];
				$lng=$sheetdata[$i][8];
				$data[]=array(
					'nama_penduduk'=>$nama_penduduk,
					'c1'=>$c1,
					'c2'=>$c2,
					'c3'=>$c3,
					'c4'=>$c4,
					'c5'=>$c5,
					'y'=>$y,
					'lat'=>$lat,
					'lng'=>$lng,
				);
			}
			$this->db->truncate('data_testing');
			$this->db->insert_batch('data_testing',$data); 
			redirect('testing');
	}

}
}
