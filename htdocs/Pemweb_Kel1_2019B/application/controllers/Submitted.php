<?php

class Submitted extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Submitted_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('Submitted_model');
		$data['judul']= 'Daftar Data TO-DO List';
		$data['submitted'] = $this->Submitted_model->getAllSubmitted();
		$this->load->view('templates/header', $data);
		$this->load->view('submitted/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'TO-DO List';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required|numeric');
	
		if(	$this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('submitted/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Submitted_model->tambahDataSubmitted();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			$this->load->view('templates/header', $data);
			$this->load->view('submitted/tambah');
			$this->load->view('templates/footer');
		}
		
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataSubmitted($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('submitted');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data TO-DO List';
		$data['submitted'] = $this->Submitted_model->getSubmittedById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('submitted/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah';
		$data['submitted'] = $this->Submitted_model->getSubmittedById($id);
		$data['kegiatan'] = ['Belajar', 'Main', 'Sekolah', 'Masak', 'Kerja'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required|numeric');
		
		
		if(	$this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('submitted/ubah', $data);
			$this->load->view('templates/footer');
			
		} else {
			$this->Mahasiswa_model->ubahDataSubmitted();
			$this->session->set_flashdata('flash', 'Diubah');
			$this->load->view('templates/header', $data);
			$this->load->view('submitted/ubah', $data);
			$this->load->view('templates/footer');
			redirect('submitted');
		}
		
	}
}