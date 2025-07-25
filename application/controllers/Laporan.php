<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  public function index() {
    $data['bulan'] = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    for($i=2020; $i<=date('Y')+5; $i++){
        $tahun[] = $i;
    }
    $data['tahun'] = $tahun;
      
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('laporan/index', $data);
    $this->load->view('template/footer');
  }

  public function print($tahun, $bulan, $status) {
    $data['order'] = $this->db->query("SELECT * FROM tb_order 
    JOIN tb_user ON tb_order.id_user = tb_user.id_user 
    JOIN tb_buku ON tb_order.id_buku = tb_buku.id_buku 
    WHERE YEAR(tb_order.tgl_order) = '$tahun'
    AND MONTH(tb_order.tgl_order) = '$bulan'
    AND tb_order.status_order = '$status'
    ORDER BY tb_order.tgl_order DESC
    ")->result();

    $data['tahun'] = $tahun;
    $data['bulan'] = $bulan;
    $data['status'] = $status;

    $this->load->view('laporan/print', $data);
  }

}
