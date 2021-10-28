<?php

class Ketersediaan extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Informasi Ketersediaan';
		$this->load->view('templates/header', $data);
		$this->load->view('ketersediaan/index');
		$this->load->view('templates/footer');
	}
}
