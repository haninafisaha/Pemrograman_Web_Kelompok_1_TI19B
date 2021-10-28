<?php

class Pasar extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Informasi Pasar';
		$this->load->view('templates/header', $data);
		$this->load->view('pasar/index');
		$this->load->view('templates/footer');
	}
}
