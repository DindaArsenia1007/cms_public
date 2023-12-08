<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
		$data = array(			
		);
        parent::__construct();
    }
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->join('user c', 'a.username = c.username', 'left');
		$this->db->order_by('tanggal', ' DESC');
		$this->db->limit(5);
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => 'Beranda | Public',
			'konfig' => $konfig,
			'kategori' => $this->db->get('kategori')->result_array(),
			'caraousel' => $caraousel,
			'konten' => $konten
		);
		$this->load->view('beranda', $data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->join('user c', 'a.username = c.username', 'left');
		$this->db->where('slug',$id);
		$this->db->limit(5);
		$konten = $this->db->get()->row();
		$data = array(
			'judul' => $konten->judul." | Public",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('detail', $data);
	}
	public function kategori($nama){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->join('user c', 'a.username = c.username', 'left');
		$this->db->order_by('tanggal', ' DESC');
		$this->db->where('a.id_kategori',$nama);
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => 'Beranda | Public',
			'konfig' => $konfig,
			'kategori' => $this->db->get('kategori')->result_array(),
			'caraousel' => $caraousel,
			'konten' => $konten
		);
		$this->load->view('beranda', $data);
	}
}
