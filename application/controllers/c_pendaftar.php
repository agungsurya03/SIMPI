<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pendaftar extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataDaftar(){
		$data = array(
			'murid' => $this->e_murid->getDataPendaftarAll() , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_daftar_pendaftar_all', $data);
		$this->load->view('footer');
	}

}

/* End of file c_pendaftar.php */
/* Location: ./application/controllers/c_pendaftar.php */