<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lapeval extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDaftarMurid(){
		$data = array(
			'murid' => $this->e_kelas->getDaftarMurid() , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_daftar_murid', $data);
		$this->load->view('footer');
	}

	public function lihatEvalMurid($id_murid){
		//belum ada get Nilai
		$data = array(
			'$id_murid' => $id_murid , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_eval_murid', $data);
		$this->load->view('footer');
	}
}

/* End of file c_lapeval.php */
/* Location: ./application/controllers/c_lapeval.php */