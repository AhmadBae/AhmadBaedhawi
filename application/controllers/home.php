<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {

    public function index()
    {
		$data['title'] = 'Home';

        $data['jumlah_pegawai'] = $this->db->get('pegawai')->num_rows();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('home');
        $this->load->view('templates/footer'); 
    }

    
}