<?php

class Mahasiswa extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('Mahasiswa_model');
		$data['judul']= 'Daftar Submitted TO-DO List';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'TO-DO List';

		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if(	$this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		}
		
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Submitted TO-DO List';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jabatan'] = ['Pengawas', 'Pekerja'];
		$data['pengarahan'] = ['Belum', 'Sudah'];
		$data['tugas'] = ['Belum', 'Sudah'];
		$data['koordinasi'] = ['Belum', 'Sudah'];
		$data['benih'] = ['Belum', 'Sudah'];
		$data['air'] = ['Belum', 'Sudah'];
		$data['pestisida'] = ['Belum', 'Sudah'];
		$data['mengawasi'] = ['Belum', 'Sudah'];
		$data['produksi'] = ['Belum', 'Sudah'];

		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if(	$this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
			
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
			redirect('mahasiswa');
		}
		
	}
}