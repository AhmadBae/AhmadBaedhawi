<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class about extends CI_Controller {

    public function index()
    {
		$data['title'] = 'About';

        $data['jumlah_pegawai'] = $this->db->get('pegawai')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('about', $data);
        $this->load->view('templates/footer'); 
    }
}