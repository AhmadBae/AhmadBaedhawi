<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class myprofile extends CI_Controller {

    public function index()
    {
		$data['title'] = 'My Profile';

        $data['jumlah_pegawai'] = $this->db->get('pegawai')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('myprofile', $data);
        $this->load->view('templates/footer'); 
    }
}