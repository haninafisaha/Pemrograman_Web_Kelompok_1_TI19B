<?php

class Manual extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Manual Book';
		$this->load->view('templates/header', $data);
		$this->load->view('manual/index');
		$this->load->view('templates/footer');
	}
}
