<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('Login');
	}

	public function proses_login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password'); 
		
		$this->db->where('email', $email);
		$this->db->where('password', sha1($password));
		$user = $this->db->get('tb_user');

		if ($user->num_rows() > 0){
			//password benar

			//cek status
			if($user->row()->status == 'aktif'){
				$data = [
				'id_user'=> $user->row()->id_user,
				'email'=> $user->row()->email,
				'nama'=> $user->row()->nama,
				'level' => $user->row()->level
			];

			$this->session->set_userdata($data);
			$this->session->set_flashdata('pesan','Anda berhasil login, selamat berselancar.');
			redirect('dashboard','refresh');
		}else{
			$this->session->set_flashdata('error','Akun anda belum diaktifasi, coba masuk dengan Email lain.');
			redirect('login','refresh');
		}

		}else{
			//password salah
			$this->session->set_flashdata('error','Email atau Password anda salah, silahkan coba lagi.');
			redirect('login','refresh');
		}
	}

	public function register() {
		$this->load->view('register');
	}

	public function store_register() {
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
			$this->load->view('register');
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
		$this->session->set_flashdata('pesan','User sudah berhasil diregistrasi.');
		redirect('register','refresh');

		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
