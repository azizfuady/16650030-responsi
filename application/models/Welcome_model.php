<?php 

class Welcome_model extends CI_Model {
	// query untuk menampilkan isi database pada tabel buku
	public function get_all_buku() {
		return $this->db->get('buku')->result_array();
	}

	// query untuk menampilkan isi database pada tabel buku berdasarkan id
	public function buku_id($id) {
		return $this->db->get_where('buku', ['id' => $id])->row_array();
	}

	// query untuk menyimpan pemesanan ke dalam database
	public function pemesanan() {
		$data = array (
			'judul_buku'		=>	$this->input->post('judul'),
			'nama_peminjam'		=>	$this->input->post('nama'),
			'no_hp'				=>	$this->input->post('no_hp'),
			'tgl'				=>	date("Y-m-d H:i:s")
		);

		$this->db->insert('bookingan', $data);
	}
}