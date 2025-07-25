<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index() {
		$data['kategori'] = $this->db->get('tb_kategori')->result();

		$this->load->view('template/header');
		$this->load->view('kategori/index', $data);
		$this->load->view('template/footer');
	}

	public function hapus($id_kategori) {
		$this->db->delete('tb_kategori', ['id_kategori' => $id_kategori]);

		$this->session->set_flashdata('sukses','Data Kategori berhasil dihapus.');
		redirect('kategori','refresh');
	}

	public function tambah() {
		$this->load->view('template/header');
		$this->load->view('kategori/tambah');
		$this->load->view('template/footer');
	}

	public function store() {
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required',[
			'required' => '%s Harus di Isi',
		]);

		if($this->form_validation->run() == FALSE){
			//validation gagal
			$this->load->view('kategori');
		}else{
			//validation berhasil
			$data = [
				"nama_kategori" => $this->input->post("nama_kategori"),
			];

		$this->db->insert('tb_kategori', $data);
		$this->session->set_flashdata('sukses','Kategori Buku sudah berhasil ditambahkan.');
		redirect('kategori','refresh');
		}
	}

	public function edit($id_kategori) {
		$data['kategori'] = $this->db->get_where('tb_kategori', ['id_kategori' => $id_kategori])->row();

		$this->load->view('template/header');
		$this->load->view('kategori/edit', $data, FALSE);
		$this->load->view('template/footer');	
	}

	public function edit_store() {
		$id_kategori = $this->input->post('id_kategori');
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required',[
			'required' => '%s Harus di Isi',
		]);

		if($this->form_validation->run() == FALSE){
			//validation gagal
			$data['kategori'] = $this->db->get_where('tb_kategori', ['id_kategori' => $id_kategori])->row();
			$this->load->view('template/header');
			$this->load->view('kategori/edit', $data, FALSE);
			$this->load->view('template/footer');	
		}else{
			//validation berhasil
			$id_kategori = $this->input->post('id_kategori');
			$data = [
				"nama_kategori" => $this->input->post("nama_kategori")
			];

		$this->db->update('tb_kategori', $data, ['id_kategori' => $id_kategori]);
		$this->session->set_flashdata('sukses','Kategori Buku sudah berhasil diedit.');
		redirect('kategori','refresh');
		}
	}
  
}
