<?php 

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != "login") {
			redirect('login');
		}
		$this->load->model('Admin_model');
		$this->load->model('Welcome_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}

	public function index() {
		$data['judul'] = 'Halaman Admin';
		$data['bookingan'] = $this->Admin_model->get_bookingan();
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('tema/foot');
	}

	public function buku() {
		$data['judul'] = 'Daftar Buku';
		$data['buku'] = $this->Welcome_model->get_all_buku();
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/buku', $data);
		$this->load->view('tema/foot');
	}

	public function tambah_buku() {
		$data['judul'] = 'Tambah Data Buku';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
		$this->form_validation->set_rules('nama', 'Nama Pengarang', 'required');
		$this->form_validation->set_rules('denda', 'Denda', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/head', $data);
		$this->load->view('admin/input');
		$this->load->view('tema/foot');
	}else {
		$this->Admin_model->input_buku();
		$this->session->set_flashdata('flash', 'Data Buku Berhasil Ditambahkan');
		redirect('admin/tambah_buku');
	}
	}

	public function edit_buku($id) {
		$data['judul'] = 'Edit Data Buku';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$data['buku'] = $this->Admin_model->buku_id($id);
		$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
		$this->form_validation->set_rules('nama', 'Nama Pengarang', 'required');
		$this->form_validation->set_rules('denda', 'Denda', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/head', $data);
		$this->load->view('admin/edit', $data);
		$this->load->view('tema/foot');
	}else {
		$this->Admin_model->ubah_buku();
		$this->session->set_flashdata('flash', 'Data Buku Berhasil Diubah');
		redirect('admin/buku');
	}
	}

	public function hapus_buku($id, $gambar) {
		$path = './assets/img/';
        @unlink($path.$gambar);

		$this->Admin_model->delete_buku($id);
		$this->session->set_flashdata('pesanhapus', 'Data Buku Berhasil Dihapus');
		redirect('admin/buku');
	}

	public function kontak() {
		$data['judul'] = 'Hubungi Saya';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/kontak');
		$this->load->view('tema/foot');
	}

	public function tentang() {
		$data['judul'] = 'Tentang Aplikasi Ini';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/tentang');
		$this->load->view('tema/foot');
	}

}