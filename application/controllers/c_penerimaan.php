<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penerimaan extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDaftarPendaftar(){
		$data = array(
			'pendaftar' => $this->e_murid->getPendaftarAll() , 
			);

		$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kepsek/v_daftar_penerimaan', $data);
		$this->load->view('footer');
	}

	public function lihatDataPendaftar($id_murid){
		$data = array(
			'murid' => $this->e_murid->getMurid($id_murid) ,
			'walimurid' => $this->e_walimurid->getWaliMurid($id_murid) ,
			'dokumen' => $this->e_dokumenMurid->getDokumenMurid($id_murid) , 
			);

		$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kepsek/v_data_penerimaan', $data);
		$this->load->view('footer');
	}

	public function terimaMurid($id_murid){
		$this->e_murid->setStatus(5);
		$this->e_murid->updateMurid($id_murid);

		$this->session->set_flashdata('info', 'Murid telah diterima.');
		redirect('c_penerimaan/lihatDaftarPendaftar','refresh');
	}

	public function konfirmasiTolak($id_murid){
		$data = array(
			'id_murid' => $id_murid , 
			);

		$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kepsek/v_tolak_penerimaan', $data);
		$this->load->view('footer');
	}

	public function konfirm($id_murid){
		$this->e_murid->setStatus(6);
		$this->e_murid->updateMurid($id_murid);

		$this->session->set_flashdata('info', 'Murid telah ditolak.');
		redirect('c_penerimaan/lihatDaftarPendaftar','refresh');
	}

	public function tidakKonfirm($id_murid){
		$this->session->set_flashdata('calm', 'Murid tidak jadi ditolak.');
		redirect('c_penerimaan/lihatDataPendaftar/'.$id_murid,'refresh');
	}
}

/* End of file c_penerimaan.php */
/* Location: ./application/controllers/c_penerimaan.php */