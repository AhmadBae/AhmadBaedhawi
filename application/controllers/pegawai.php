<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Data Pegawai';
		$data['pegawai'] = $this->m_pegawai->tampil_data()->result();

		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/AhmadBaedhawi/pegawai/index';
		$config['total_rows'] =  $this->db->get('pegawai')->num_rows();
		$config['per_page'] = 7;

		//styling
        $config['full_tag_open'] = '<nav class="d-flex justify-content-center" aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['cur_link'] = '&laquo';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_link'] = '&laquo';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['pegawai'] = $this->db->get('pegawai')->result();
		$data['pegawai'] = $this->db->get('pegawai', $config['per_page'], $data['start'])->result();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pegawai', $data);
		$this->load->view('templates/Footer');
	}

	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pegawai');
		$this->load->view('templates/footer');
	}

	public function hapus($no)
	{
		$where = array('no' => $no);
		$this->m_pegawai->hapus_data($where, 'pegawai');
		$this->session->set_flashdata('massage', '<div class="alert alert-danger alert-dismissible"role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Berhasil!</strong> Data Berhasil di Hapus </div>');
		redirect('pegawai/index');
	}

	public function rubah($no)
	{
		$data['title'] = 'Edit Profile Data';
		$where = array('no' => $no);
		$data['pegawai'] = $this->m_pegawai->edit_data($where, 'pegawai')
			->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}


	public function aksi_tambah()
	{
		$nip 		= $this->input->post('nip');
		$nama 		= $this->input->post('nama');
		$tgl_lahir 	= $this->input->post('tgl_lahir');
		$alamat 	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');
		$foto		= $_FILES['foto'];

		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}


		$data = array(
			'nip' 		=> $nip,
			'nama' 		=> $nama,
			'tgl_lahir' => $tgl_lahir,
			'alamat' 	=> $alamat,
			'no_telp' 	=> $no_telp,
			'foto' 		=> $foto,
		);

		$this->m_pegawai->input_data($data, 'pegawai');
		$this->session->set_flashdata('massage', '<div class="alert alert-success alert-dismissible"role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Berhasil!</strong> Data Berhasil di Input </div>');
		redirect('pegawai/index');
	}

	public function update()
	{
		$no			= $this->input->post('no');
		$nip 		= $this->input->post('nip');
		$nama 		= $this->input->post('nama');
		$tgl_lahir 	= $this->input->post('tgl_lahir');
		$alamat 	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');
		$foto		= $_FILES['foto'];

		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}


		$data = array(
			'nip' 		=> $nip,
			'nama' 		=> $nama,
			'tgl_lahir' => $tgl_lahir,
			'alamat' 	=> $alamat,
			'no_telp' 	=> $no_telp,
			'foto' 		=> $foto,
		);

		$where = array(
			'no' => $no
		);
		$this->m_pegawai->update_data($where, $data, 'pegawai');
		$this->session->set_flashdata('massage', '<div class="alert alert-success alert-dismissible"role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Berhasil!</strong> Data Berhasil di Update </div>');
		redirect('pegawai/index');
	}

	public function detail($no)
	{
		$data['title'] = 'Detail Pegawai';

		$detail = $this->m_pegawai->data_detail($no);
		$data['detail'] = $detail;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('detail_pegawai', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['title'] = 'Print Data';

		$data['pegawai'] = $this->m_pegawai->tampil_data('pegawai')->result();
		$this->load->view('print_pegawai', $data);
	}

	public function menampilkan_grafik()
	{
		$data['title'] = 'Grafik dengan Chart.js';

		$this->load->model('m_pegawai');
		$data['hasil'] = $this->m_pegawai->Jum_pegawai_perAlamat();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('grafik_pegawai', $data);
		$this->load->view('templates/footer');
	}

	public function pdf1()
	{
		$this->load->library('Pdf'); //MEMANGGIL LIBRARY YANG KITA BUAT TADI
		error_reporting(0); // AGAR ERROR MASALAH PHP TIDAK MUNCUL
		$pdf = new FPDF('P', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'Daftar Pegawai', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 10, 'No', 1, 0, 'C');
		$pdf->Cell(30, 10, 'NIP', 1, 0, 'C');
		$pdf->Cell(60, 10, 'Nama Pegawai', 1, 0, 'C');
		$pdf->Cell(50, 10, 'Tanggal Lahir', 1, 0, 'C');
		$pdf->Cell(50, 10, 'Alamat', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);

		$pegawai = $this->db->get('pegawai')->result();
		$no = 1;
		foreach ($pegawai as $pgw_data) {
			$pdf->Cell(10, 10, $no, 1, 0, 'C');
			$pdf->Cell(30, 10, $pgw_data->nip, 1, 0);
			$pdf->Cell(60, 10, $pgw_data->nama, 1, 0);
			$pdf->Cell(50, 10, $pgw_data->tgl_lahir, 1, 0);
			$pdf->Cell(50, 10, $pgw_data->alamat, 1, 1);
			$no++;
		}
		$pdf->Output();
	}

	public function exportExcel()
	{
		$data = $this->m_pegawai->getData();

		include_once APPPATH . '/third_party/xlsxwriter.class.php';
		ini_set('display_errors', 0);
		ini_set('log_errors', 1);
		error_reporting(E_ALL & ~E_NOTICE);

		$filename = "Laporan-" . date('d-m-Y-H-i-s') . ".xlsx";
		header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($filename) . '"');
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header('Content-Transfer-Encoding: binary');
		header("Cache-Control: must-revalidate");
		header('Pragma: public');

		$style = array(
			'witdhs' => [3, 20, 30, 40], 'font' => 'Arial', 'font-size' => 10,
			'font-style' => 'bold', 'fill' => '#eee', 'halign' => 'center', 'border' => 'left,right,top,bottom'
		);
		$style2 = array(
			[
				'font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#eee',
				'halign' => 'left', 'border' => 'left,right,top,bottom', 'fill' => '#ffc'
			], ['fill' => '#fcf'],
			['fill' => '#ccf'], ['fill' => '#cff'], ['fill' => '#cff']
		);

		$header = array(
			'No' => 'integer',
			'NIP' => 'string',
			'Nama Pegawai' => 'string',
			'Tanggal Lahir' => 'string',
			'alamat' => 'string',
		);

		$writer = new XLSXWriter();
		$writer->setAuthor('Ahmad');

		$writer->writeSheetHeader('Sheet1', $header, $styles);
		$no = 1;
		foreach ($data as $row) {
			$writer->writeSheetRow(
				'Sheet1',
				[$no, $row['nip'], $row['nama'], $row['tgl_lahir'], $row['alamat']],
				$styles2
			);
			$no++;
		}
		$writer->writeToStdOut();
	}

	public function search()
	{
		$data['title'] = 'Pencarian Data Pegawai';

		$keyword = $this->input->post('keyword');
		$data['pegawai'] = $this->m_pegawai->get_keyword($keyword);
		$data['start'] = $this->uri->segment(4);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pegawai', $data);
		$this->load->view('templates/footer');
		
	}
	
	
}
