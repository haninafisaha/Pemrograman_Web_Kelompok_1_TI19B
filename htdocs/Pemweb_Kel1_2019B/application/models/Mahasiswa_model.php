<?php

class Mahasiswa_model extends CI_model{
	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"hari" => $this->input->post('hari', true),
			"tanggal" => $this->input->post('tanggal', true),
			"jam" => $this->input->post('jam', true),
			"nama" => $this->input->post('nama', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"jabatan" => $this->input->post('jabatan', true),
			"pengarahan" => $this->input->post('pengarahan', true),
			"tugas" => $this->input->post('tugas', true),
			"koordinasi" => $this->input->post('koordinasi', true),
			"benih" => $this->input->post('benih', true),
			"air" => $this->input->post('air', true),
			"pestisida" => $this->input->post('pestisida', true),
			"mengawasi" => $this->input->post('mengawasi', true),
			"produksi" => $this->input->post('produksi', true)
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function hapusDataMahasiswa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"hari" => $this->input->post('hari', true),
			"tanggal" => $this->input->post('tanggal', true),
			"jam" => $this->input->post('jam', true),
			"nama" => $this->input->post('nama', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"jabatan" => $this->input->post('jabatan', true),
			"pengarahan" => $this->input->post('pengarahan', true),
			"tugas" => $this->input->post('tugas', true),
			"koordinasi" => $this->input->post('koordinasi', true),
			"benih" => $this->input->post('benih', true),
			"air" => $this->input->post('air', true),
			"pestisida" => $this->input->post('pestisida', true),
			"mengawasi" => $this->input->post('mengawasi', true),
			"produksi" => $this->input->post('produksi', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}
}