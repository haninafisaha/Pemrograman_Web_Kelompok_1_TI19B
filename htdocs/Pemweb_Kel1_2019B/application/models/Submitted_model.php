<?php

class Submitted_model extends CI_model{
	public function getAllMahasiswa()
	{
		return $this->db->get('submitted')->result_array();
	}

	public function tambahDataSubmitted()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"waktu" => $this->input->post('waktu', true),
			"kegiatan" => $this->input->post('kegiatan', true)
		];

		$this->db->insert('submitted', $data);
	}

	public function hapusDataSubmitted($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('submitted');
	}

	public function getSubmittedById($id)
	{
		return $this->db->get_where('submitted', ['id' => $id])->row_array();
	}

	public function ubahDataSubmitted()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"waktu" => $this->input->post('waktu', true),
			"kegiatan" => $this->input->post('kegiatan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('submitted', $data);
	}
}