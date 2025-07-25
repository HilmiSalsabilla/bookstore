<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function index() {
		$this->db->select('*');
		$this->db->from('tb_order');
		$this->db->join('tb_user', 'tb_order.id_user = tb_user.id_user');
		$this->db->join('tb_buku', 'tb_order.id_buku = tb_buku.id_buku');
		$this->db->where('tb_order.id_user', $_SESSION['id_user']);
		$data['riwayat'] = $this->db->get()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('riwayat/index', $data);
		$this->load->view('template/footer');
	}

	public function upload_bukti() {
		//validation berhasil
		$this->load->library('upload');

		$config['upload_path']          = 'assets/bukti_bayar';
		$config['allowed_types']        = 'jpg|png|jfif|jpeg';
		$config['max_size']             = 2000;
		$config['encrypt_name']			= TRUE;

		$this->upload->initialize($config);

			//fotonya ada
			if($this->upload->do_upload('bukti_bayar')){
				//berhasil di upload
				$data = [
					"bukti_bayar" => $this->upload->data("file_name"),
					"status_order" => "Menunggu konfirmasi",
				];
			}else{
				//gagal di upload
				echo $this->upload->display_errors();
			}
		
		$kode_order = $this->input->post('kode_order');
		$this->db->update('tb_order', $data, ['kode_order' => $kode_order]);
		$this->session->set_flashdata('sukses','Bukti Bayar sudah berhasil diupload.');
		redirect('riwayat','refresh');
	}

	public function selesai($kode_order) {
		$this->db->update('tb_order', ['status_order' => 'selesai'], ['kode_order' => $kode_order]);
		$this->session->set_flashdata('sukses','Pesanan selesai.');
		redirect('riwayat','refresh');

	}

	public function detail_order($kode_order) {
		$this->db->select('*');
		$this->db->from('tb_order');
		$this->db->join('tb_user', 'tb_order.id_user = tb_user.id_user');
		$this->db->join('tb_buku', 'tb_order.id_buku = tb_buku.id_buku');
		$this->db->where('tb_order.kode_order', $kode_order);
		$data['order'] = $this->db->get()->row();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('riwayat/detail', $data);
		$this->load->view('template/footer');
	}

}
