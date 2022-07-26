<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Grafik Kamera';
        $data['kamera'] = $this->db->get('kamera')->result_array();

        $this->load->view('chart', $data);
    }
}
