<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		// $this->db->where('level','user');
		// $data['total_user'] = $this->db->count_all_results('tb_user');

		// $data['total_kategori'] = $this->db->count_all('tb_kategori');

		// $data['total_buku'] = $this->db->count_all('tb_buku');

		// $this->db->where('status_order','dikonfirmasi');
		// $data['total_order'] = $this->db->count_all_results('tb_order');

		// $data['bulan'] = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
		// $hasil = [];
		// $tahun = date('Y');
		// foreach($data['bulan'] as $bulan => $value){
		// 	$bln = $bulan+1;
		// 	$hasil[] = $this->db->query("SELECT COUNT(kode_order) AS jml_order FROM tb_order 
		// 	WHERE MONTH(tgl_order)='$bln' AND YEAR(tgl_order)='$tahun' AND status_order='selesai'")->row()->jml_order;
		// }
		
		// $data['data_penjualan'] = $hasil;

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}

}
