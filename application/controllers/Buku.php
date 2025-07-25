<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index() {
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->join('tb_buku', 'tb_buku.id_kategori = tb_kategori.id_kategori');
		$data['buku'] = $this->db->get()->result();

		$this->load->view('template/header');
		$this->load->view('buku/index', $data);
		$this->load->view('template/footer');
	}

	public function hapus($id_buku) {
		$this->db->delete('tb_buku', ['id_buku' => $id_buku]);

		$this->session->set_flashdata('sukses','Data Buku berhasil dihapus.');
		redirect('buku/index','refresh');
	}

	public function tambah() {
		$data['kategori'] = $this->db->get('tb_kategori')->result();

		$this->load->view('template/header');
		$this->load->view('buku/tambah', $data);
		$this->load->view('template/footer');
	}

	public function store() {
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('penulis', 'Penulis', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('tahun', 'Tahun', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required',[
			'required' => '%s Harus di Isi',
		]);

		if($this->form_validation->run() == FALSE){
			//validation gagal
			$this->load->view('template/header');
			$this->load->view('buku/tambah');
			$this->load->view('template/footer');	
		}else{
			//validation berhasil
		$this->load->library('upload');

		$config['upload_path']          = 'assets/upload';
		$config['allowed_types']        = 'gif|jpg|png|jfif|jpeg';
		$config['max_size']             = 2000;
		$config['encrypt_name']			= TRUE;

		$this->upload->initialize($config);

		if(!empty($_FILES['foto_buku']['name'])){
			//fotonya ada
			if($this->upload->do_upload('foto_buku')){
				//berhasil di upload
				$data = [
					"id_kategori" => $this->input->post("id_kategori"),
					"nama_buku" => $this->input->post("nama_buku"),
					"foto_buku" => $this->upload->data("file_name"),
					"deskripsi" => $this->input->post("deskripsi"),
					"penulis" => $this->input->post("penulis"),
					"penerbit" => $this->input->post("penerbit"),
					"tahun" => $this->input->post("tahun"),
					"jumlah_halaman" => $this->input->post("jumlah_halaman"),
					"harga" => $this->input->post("harga"),
					"stok" => $this->input->post("stok")
				];
			}else{
				//gagal di upload
				echo $this->upload->display_errors();
			}
		}else{
			//foto tidak ada
			$data = [
				"id_kategori" => $this->input->post("id_kategori"),
				"nama_buku" => $this->input->post("nama_buku"),
				"foto"=> 'default.jpg',
				"deskripsi" => $this->input->post("deskripsi"),
				"penulis" => $this->input->post("penulis"),
				"penerbit" => $this->input->post("penerbit"),
				"tahun" => $this->input->post("tahun"),
				"jumlah_halaman" => $this->input->post("jumlah_halaman"),
				"harga" => $this->input->post("harga"),
				"stok" => $this->input->post("stok")
			];
		}

		$this->db->insert('tb_buku', $data);
		$this->session->set_flashdata('sukses','Data Buku sudah berhasil ditambahkan.');
		redirect('buku','refresh');
		}
	}

	public function edit($id_buku) {
		$data['buku'] = $this->db->get_where('tb_buku', ['id_buku' => $id_buku])->row();
		$data['kategori'] = $this->db->get('tb_kategori')->result(); 

		$this->load->view('template/header');
		$this->load->view('buku/edit', $data, FALSE);
		$this->load->view('template/footer');
	}

	public function edit_store() {
		$id_buku = $this->input->post('id_buku');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('penulis', 'Penulis', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('tahun', 'Tahun', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required',[
			'required' => '%s Harus di Isi',
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required',[
			'required' => '%s Harus di Isi',
		]);

		if($this->form_validation->run() == FALSE){
			//validation gagal
			$data['buku'] = $this->db->get_where('tb_buku', ['id_buku' => $id_buku])->row();
			$this->load->view('template/header');
			$this->load->view('buku/edit', $data, FALSE);
			$this->load->view('template/footer');	
		}else{
			//validation berhasil
			$this->load->library('upload');

		$config['upload_path']          = 'assets/upload';
		$config['allowed_types']        = 'gif|jpg|png|jfif|jpeg';
		$config['max_size']             = 2000;
		$config['encrypt_name']			= TRUE;

		$this->upload->initialize($config);

		if(!empty($_FILES['foto_buku']['name'])){
			//fotonya ada
			if($this->upload->do_upload('foto_buku')){
				//berhasil di upload
				if($this->input->post('foto_lama') != 'default.jpg'){
					unlink('./assets/upload/' . $this->input->post('foto_lama'));
				}//menghapus foto yg lama di folder upload
				$data = [
					"id_kategori" => $this->input->post("id_kategori"),
					"nama_buku" => $this->input->post("nama_buku"),
					"deskripsi" => $this->input->post("deskripsi"),
					"penulis" => $this->input->post("penulis"),
					"penerbit" => $this->input->post("penerbit"),
					"tahun" => $this->input->post("tahun"),
					"jumlah_halaman" => $this->input->post("jumlah_halaman"),
					"harga" => $this->input->post("harga"),
					"stok" => $this->input->post("stok")
				];
			}else{
				//gagal di upload
				echo $this->upload->display_errors();
			}
		}else{
			//foto tidak ada
			$data = [
				"id_kategori" => $this->input->post("id_kategori"),
				"nama_buku" => $this->input->post("nama_buku"),
				"foto_buku"=> $this->input->post('foto_lama'),
				"deskripsi" => $this->input->post("deskripsi"),
				"penulis" => $this->input->post("penulis"),
				"penerbit" => $this->input->post("penerbit"),
				"tahun" => $this->input->post("tahun"),
				"jumlah_halaman" => $this->input->post("jumlah_halaman"),
				"harga" => $this->input->post("harga"),
				"stok" => $this->input->post("stok")
			];
		}
		
		$this->db->update('tb_buku', $data, ['id_buku' => $id_buku]);
		$this->session->set_flashdata('sukses','Data Buku sudah berhasil diedit.');
		redirect('buku','refresh');
		}
	}

	public function user_index() {
		if(isset($_GET['kategori']) && $_GET['kategori'] != 'all' ){
			$id_kategori = $_GET['kategori'];
			$kategori = $this->db->query("SELECT * FROM tb_kategori WHERE id_kategori = '$id_kategori' ")->result();
			foreach($kategori as $key => $value){
				$data['a'][$value->nama_kategori] = $this->db->query("SELECT * FROM tb_buku WHERE id_kategori = '$value->id_kategori' ")->result();
			}
		}else{
			$kategori = $this->db->get('tb_kategori')->result();
			foreach($kategori as $key => $value){
				$data['a'][$value->nama_kategori] = $this->db->query("SELECT * FROM tb_buku WHERE id_kategori = '$value->id_kategori' limit 8")->result();
			}
		}
		$data['kategori'] = $this->db->get('tb_kategori')->result();

		$this->load->view('template/header');
		$this->load->view('buku/user_index', $data);
		$this->load->view('template/footer');
	}
	
}
