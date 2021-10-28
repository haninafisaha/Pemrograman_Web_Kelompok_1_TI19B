<?php

class Blog extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Blog';
		$this->load->view('templates/header', $data);
		$this->load->view('blog/index');
		$this->load->view('templates/footer');
	}
}
