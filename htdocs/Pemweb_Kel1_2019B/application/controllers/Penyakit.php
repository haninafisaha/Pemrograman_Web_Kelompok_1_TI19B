<?php

class Penyakit extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Manajemen Penyakit dan Hama';
		$this->load->view('templates/header', $data);
		$this->load->view('penyakit/index');
		$this->load->view('templates/footer');
	}
}
