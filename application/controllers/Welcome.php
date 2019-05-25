<?php

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Welcome_model');
		$this->load->library('cart'); // panggil library cart
		$this->load->library('form_validation');
	}

	// fungsi untuk menampilkan buku yang tersedia di database
	public function index() {
		$data['jml_item'] = count($this->cart->contents());
		$data['buku_item'] = $this->cart->contents();
		$data['buku'] = $this->Welcome_model->get_all_buku(); // memanggil query dari Welcome_model
		$this->load->view('tema/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('tema/footer');
	}

	// fungsi menampilkan keranjang
	public function keranjang() {
		$data['jml_item'] = count($this->cart->contents());
		$data['buku_item'] = $this->cart->contents();
		$data['buku'] = $this->cart->contents();
		$this->load->view('tema/header', $data);
		$this->load->view('home/keranjang', $data);
		$this->load->view('tema/footer');
	}

	// fungsi untuk menyimpan data bookingan
	public function booking() {
		$data_buku = array (
			'id' => $this->input->post('id'),
			'name' => $this->input->post('judul'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price')
							);
		$this->cart->insert($data_buku); // fungsi menyimpan di library cart, bukan ke database
		redirect('welcome');
	}

	// 2 pilihan saat mengapus isi keranjang
	public function hapus($rowid) {
		if ($rowid=="all")
			{
				$this->cart->destroy(); // fungsi menghapus semua isi keranjang
			}
		else
			{
				$data = array('rowid' => $rowid, //menghapus berdasarkan item yg di pilih
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('welcome/keranjang');
	}

	// fungsi pengisian data peminjam
	public function isi_data() {
		$data['judul'] = 'Pengisian Data';
		$data['jml_item'] = count($this->cart->contents());
		$data['buku_item'] = $this->cart->contents();
		$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
		$this->form_validation->set_rules('nama', 'Nama Peminjam', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/header', $data);
		$this->load->view('home/data_peminjam', $data);
		$this->load->view('tema/footer');
	}else {
		$this->Welcome_model->pemesanan(); // jalankan fungsi pengirim data booking yg ada di Welcome_model
		$this->cart->destroy(); //kosongkan keranjang booking setelah mengirim pemesanan
		redirect('welcome/sukses'); // setelah itu akan di arahkan ke halaman sukses
	}
		
	}

	// fungsi untuk menampilkan halaman sukses setelah mengirim pemesanan buku
	public function sukses() {
		$data['judul'] = 'Booking Berhasil';
		$data['jml_item'] = count($this->cart->contents());
		$data['buku_item'] = $this->cart->contents();
		$this->load->view('tema/header', $data);
		$this->load->view('home/sukses', $data);
		$this->load->view('tema/footer');
	}


}
