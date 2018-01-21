<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inputmateri extends MY_Controller {

	function __construct() {
			parent::__construct();

	}

	public function index()
	{
		$data['materi']=$this->db->select('*')
															->from('materi')->join('kategori', 'kategori.kd_kategori = materi.kd_kategori')
															->get()->result();
		parent::view('inputmateri',$data);
	}
	public function tambah()
	{
		$data['kategori']=$this->db->select('*')->from('kategori')->get()->result();
		parent::view('tambah',$data);
	}

	public function prosestambah()
	{
		$datamateri = array(
			'judul' => $this->input->post('judul'),
			'kd_kategori' => $this->input->post('kategori'),
		 	'materi' => $this->input->post('materi') );
		$this->db->insert('materi',$datamateri);
		$this->session->set_flashdata('sukses', 'Sukses tambah materi');
		redirect('inputmateri');
	}

	public function edit($id)
	{
		$data['kategori']=$this->db->select('*')->from('kategori')->get()->result();
		$data['materi']=$this->db->select('*')
															->from('materi')->join('kategori', 'kategori.kd_kategori = materi.kd_kategori')
															->where('kd_materi',$id)
															->get()->result();
															//print_r($data['materi']);die();
		parent::view('edit',$data);
	}

	public function prosesedit()
	{
		$kd=$this->input->post('kd_materi');
		$datamateri = array(
			'judul' => $this->input->post('judul'),
			'kd_kategori' => $this->input->post('kategori'),
		 	'materi' => $this->input->post('materi') );
		$this->db->where('kd_materi', $kd);
		$this->db->update('materi',$datamateri);
		$this->session->set_flashdata('edit', 'Sukses edit materi');
		redirect('inputmateri');
	}

	public function hapus($id)
	{
		$this->db->delete('materi', array('kd_materi' => $id));
		$this->session->set_flashdata('hapus', 'Sukses hapus data');
		redirect('inputmateri');
	}
}
