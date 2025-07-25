<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index() {
		$this->db->select('*');
		$this->db->from('tb_order');
		$this->db->join('tb_user', 'tb_order.id_user = tb_user.id_user');
		$this->db->join('tb_buku', 'tb_order.id_buku = tb_buku.id_buku');
		$data['order'] = $this->db->get()->result();

		$this->load->view('template/header');
		$this->load->view('order/index', $data);
		$this->load->view('template/footer');
	}

	public function hapus($id_order) {
		$this->db->delete('tb_order', ['id_order' => $id_order]);

		$this->session->set_flashdata('sukses','Data Order berhasil dihapus.');
		redirect('order/index','refresh');
	}

	public function user_order($id) {
		$data['buku'] = $this->db->get_where('tb_buku', ['id_buku' => $id])-> row();

		$this->load->view('template/header');
		$this->load->view('buku/user_order', $data);
		$this->load->view('template/footer');
	}

	public function user_order_store() {
		$buku = $this->db->get_where('tb_buku', ['id_buku' => $_POST['id_buku']])->row();
		$qty = intval($this->input->post('qty'));
    $harga = intval($buku->harga);

    $total_harga = $qty * $harga;
		$params = [
			'kode_order' => 'ORD'.rand(),
			'id_user' => $_SESSION['id_user'],
			'id_buku' => $this->input->post('id_buku'),
			'jumlah' => $this->input->post('qty'),
			'tgl_order' => date('Y-m-d'),
			'total_harga' => $total_harga,
			'status_order' => 'Pending',
		];
		$this->db->insert('tb_order', $params);
		$this->session->set_flashdata('sukses','Order berhasil.');
		redirect('riwayat','refresh');
	}

	public function verifikasi($kode_order) {
		//ubah status
		$data = [
			'status_order' => 'dikonfirmasi'
		];
		$this->db->update('tb_order', $data, ['kode_order' => $kode_order]);
		$this->session->set_flashdata('sukses','Berhasil dikonfirmasi.');
		redirect('order','refresh');
	}

	public function input_resi() {
		$data = [
			'nomor_resi' => $this->input->post('nomor_resi')
		];
		$kode_order = $this->input->post('kode_order');
		
		$this->db->update('tb_order', $data, ['kode_order' => $kode_order]);
		$this->session->set_flashdata('sukses','Berhasil di input.');
		redirect('order','refresh');
	}

}
