<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inputquiz extends MY_Controller {

	function __construct() {
			parent::__construct();

	}

	public function index()
	{
		$data['quiz']=$this->db->select('*')
															->from('quiz')->join('kategori', 'kategori.kd_kategori = quiz.kd_kategori')
															->get()->result();
															//print_r($data['quiz']);die();
		parent::view('inputquiz',$data);
	}
	public function tambah()
	{
		$data['kategori']=$this->db->select('*')->from('kategori')->get()->result();
		parent::view('tambah',$data);
	}

	public function prosestambah()
	{
		$datamateri = array(
			'soal' => $this->input->post('soal'),
			'pil_a' => $this->input->post('a'),
		 	'pil_b' => $this->input->post('b'),
			'pil_c' => $this->input->post('c'),
			'pil_d' => $this->input->post('d'),
			'jawaban' => $this->input->post('jawaban'),
			'kd_kategori' => $this->input->post('kategori') );
		$this->db->insert('quiz',$datamateri);
		$this->session->set_flashdata('sukses', 'Sukses tambah soal');
		redirect('inputquiz');
	}

	public function edit($id)
	{
		$data['kategori']=$this->db->select('*')->from('kategori')->get()->result();
		$data['quiz']=$this->db->select('*')
															->from('quiz')->join('kategori', 'kategori.kd_kategori = quiz.kd_kategori')
															->where('kd_quiz',$id)
															->get()->result();
															//print_r($data['quiz']);die();
		parent::view('edit',$data);
	}

	public function prosesedit()
	{
		$kd=$this->input->post('kd_quiz');
		$data = array(
			'soal' => $this->input->post('soal'),
			'pil_a' => $this->input->post('a'),
		 	'pil_b' => $this->input->post('b'),
			'pil_c' => $this->input->post('c'),
			'pil_d' => $this->input->post('d'),
			'jawaban' => $this->input->post('jawaban'),
			'kd_kategori' => $this->input->post('kategori') );
		$this->db->where('kd_quiz', $kd);
		$this->db->update('quiz',$data);
		$this->session->set_flashdata('edit', 'Sukses edit soal');
		redirect('inputquiz');
	}

	public function hapus($id)
	{
		$this->db->delete('quiz', array('kd_quiz' => $id));
		$this->session->set_flashdata('hapus', 'Sukses hapus data');
		redirect('inputquiz');
	}
}
