<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_data extends CI_Model
{
    public function training()
    {
        return $this->db->get('data_training')->result_array();
    }
    public function testing()
    {
        return $this->db->get('data_testing')->result_array();
    }
    public function hasil()
    {
        return $this->db->get('hasil_klasifikasi')->result_array();
    }







}
