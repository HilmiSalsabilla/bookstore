<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$data['user'] = $this->db->get('tb_user')->result();

		$this->load->view('template/header');
		$this->load->view('user/index', $data);
		$this->load->view('template/footer');
	}

	public function hapus($id_user) {
		$this->db->delete('tb_user', ['id_user' => $id_user]);

		$this->session->set_flashdata('sukses','Data User berhasil dihapus dan tidak bisa dipakai untuk login.');
		redirect('user','refresh');
	}

	public function tambah() {
		$this->load->view('template/header');
		$this->load->view('user/tambah');
		$this->load->view('template/footer');
	}

	public function store() {
		$this->form_validation->set_rules('nama', 'Nama', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('email', 'Email', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('password', 'Passsword', 'required',[
			'required' => '%s Harus di Isi',
		]);

		if($this->form_validation->run() == FALSE){
			//validation gagal
			$this->load->view('user');
		}else{
			//validation berhasil
			$data = [
				"nama" => $this->input->post("nama"),
				"email" => $this->input->post("email"),
				"password" => sha1($this->input->post("password")),
				"status" => 'non aktif',
				"level" => 'user'
			];

		$this->db->insert('tb_user', $data);
		$this->session->set_flashdata('sukses','User sudah berhasil ditambahkan dan bisa dipakai untuk login jika sudah diaktifasi.');
		redirect('user','refresh');
		}
	}

	public function aktifasi($id_user, $status) {

		if($status == 'aktif'){
			$this->db->update('tb_user', ['status' => 'non aktif'], ['id_user' => $id_user]);
		$this->session->set_flashdata('sukses','User sudah di non-aktifasi dan tidak bisa dipakai untuk login.');

		}else{
			$this->db->update('tb_user', ['status' => 'aktif'], ['id_user' => $id_user]);
		$this->session->set_flashdata('sukses','User sudah diaktifasi dan bisa dipakai untuk login.');
		}
		
		redirect('user','refresh');
	}

}
