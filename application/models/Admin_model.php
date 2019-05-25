<?php 

class Admin_model extends CI_Model {
	public function get_bookingan() {
		return $this->db->get('bookingan')->result_array();
	}

	public function input_buku() {
		$judul	= $this->input->post('judul');
		$nama   = $this->input->post('nama');
        $denda = $this->input->post('denda');
        $status = $this->input->post('status');

        // get foto
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                            'judul'		 => $judul,
                            'pengarang'       => $nama,
                            'price'      => $denda,
                            'status'      => $status,
                            'gambar'     => $gambar['file_name'],
                            );
            }
        }

		$this->db->insert('buku', $data);
	}

	public function ubah_buku() {
		$id   = $this->input->post('id');
        $judul	= $this->input->post('judul');
		$nama   = $this->input->post('nama');
        $denda = $this->input->post('denda');
        $status = $this->input->post('status');
        $path = './assets/img/';

        // get foto
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                            'judul'		 => $judul,
                            'pengarang'  => $nama,
                            'price'      => $denda,
                            'status'     => $status,
                            'gambar'     => $gambar['file_name'],
                            );
                // hapus foto pada direktori
              @unlink($path.$this->input->post('gambarLama'));
            }
        }

        $this->db->where('id', $id);
        $this->db->update('buku', $data);
	}

	public function buku_id($id) {
		return $this->db->get_where('buku', ['id' => $id])->row_array();
	}

	public function delete_buku($id, $gambar) {
		$this->db->where('id', $id);
        $this->db->delete('buku');
	}

}