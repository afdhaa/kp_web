<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends MY_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('M_quiz');
	}

	public function index()
	{
		$data['materi']=$this->db->select('*')
															->from('materi')->join('kategori', 'kategori.kd_kategori = materi.kd_kategori')
															->get()->result();
		parent::view('materi',$data);
	}

	public function quizbesar()
	{
		$data['quiz']=$this->db->select('*')
															->from('quiz')->join('kategori', 'kategori.kd_kategori = quiz.kd_kategori')
															->get()->result();
		parent::view('quiz',$data);
	}

	public function ceknilaibesar()
	{
		$kode=$this->input->post('kode');
		$jawaban=$this->input->post('jawaban');
		$benar=0;

		$jmlsoal=count($kode);
		for ($i=0; $i < count($kode) ; $i++) {
			$cek[$i]=$this->M_quiz->cek($kode[$i]);
			if ($cek[$i]==$jawaban[$i]) {
				$benar=$benar+1;
			}
		}
		$data['nilai']=ceil($benar/$jmlsoal*100);

		$nilai = array(
			'kd_siswa' => $this->session->userdata('kd_user'),
			'nilai' => $data['nilai'] );
		$this->db->insert('nilai',$nilai);
		parent::view('hasil',$data);
	}

}
