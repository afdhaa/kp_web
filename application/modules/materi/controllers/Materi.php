<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materi extends MY_Controller {

	function __construct() {
			parent::__construct();

	}

	public function index()
	{
		$data['materi']=$this->db->select('*')
															->from('materi')->join('kategori', 'kategori.kd_kategori = materi.kd_kategori')
															->get()->result();
		parent::view('materi',$data);
	}

	public function baca($id)
	{
		$data['kategori']=$this->db->select('*')->from('kategori')->get()->result();
		$data['materi']=$this->db->select('*')
															->from('materi')->join('kategori', 'kategori.kd_kategori = materi.kd_kategori')
															->where('kd_materi',$id)
															->get()->result();
															//print_r($data['materi']);die();
		parent::view('baca',$data);
	}
}
