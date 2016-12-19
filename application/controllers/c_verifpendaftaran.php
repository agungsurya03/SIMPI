<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_verifpendaftaran extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatPendaftar(){
		$data = $this->cekMurid();

		if ($data) {
			$data = array(
				'pendaftar' => $this->e_murid->getPendaftarAll() 
				);
			$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
				);
			$this->load->view('header');
			$this->load->view('v_menu', $oto);
			$this->load->view('html_head');
			$this->load->view('content/kesiswaan/v_daftar_pendaftar', $data);
			$this->load->view('footer');
			
		} else{
			$this->session->set_flashdata('warn', 'Belum ada yang mendaftar');
			$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
				);
			$this->load->view('header');
			$this->load->view('v_menu', $oto);
			$this->load->view('html_head');
			$this->load->view('footer');
			
		}
	}

	public function cekMurid(){
		$data = sizeof($this->e_murid->getPendaftarAll());
		if($data > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function lihatDataPendaftar($id_murid){
		$data = array(
			'murid' => $this->e_murid->getMurid($id_murid) ,
			'walimurid' => $this->e_walimurid->getWaliMurid($id_murid) ,
			'dokumen' => $this->e_dokumenMurid->getDokumenMurid($id_murid) , 
			'vmurid' => $this->e_verifmurid->getVerifMurid($id_murid) , 
			'vwalimurid' => $this->e_verifwali->getVerifWali($id_murid) , 
			'vdokumen' => $this->e_verifdokumen->getVerifDok($id_murid) , 
			);

			$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
				);
			$this->load->view('header');
			$this->load->view('v_menu', $oto);
			$this->load->view('html_head');
			$this->load->view('content/kesiswaan/v_data_pendaftar', $data);
			$this->load->view('footer');
		
	}

	public function cekVerif($id_murid){
		$vmurid = $this->e_verifmurid->getVerifMurid($id_murid);
		$vkeuangan = $this->e_verifmurid->getVerifKeuangan($id_murid);

		if ($vmurid == NULL || $vkeuangan == NULL) {
			return false;
		}elseif ($vmurid->verif == 2 || $vkeuangan->verif == 2) {
			return true;
		} 
		else{
			return false;
		}
	}

	public function verifMurid(){
		$this->e_verifmurid->setIdMurid($this->input->post('id_murid'));
		$this->e_verifwali->setIdMurid($this->input->post('id_murid'));
		$this->e_verifdokumen->setIdMurid($this->input->post('id_murid'));
		$this->e_verifmurid->setKeterangan($this->input->post('keterangan_murid'));
		$this->e_verifwali->setKeterangan($this->input->post('keterangan_wali'));
		$this->e_verifdokumen->setKeterangan($this->input->post('keterangan_dok'));
		$this->e_verifmurid->setVerif($this->input->post('verif_murid'));
		$this->e_verifwali->setVerif($this->input->post('verif_wali'));
		$this->e_verifdokumen->setVerif($this->input->post('verif_dok'));

		if ($this->e_verifmurid->getVerifMurid($this->input->post('id_murid'))) {
			$this->e_verifmurid->updateVerifMurid($this->input->post('id_murid'));
		}else{
			$this->e_verifmurid->insertVerifMurid();
		}

		if ($this->e_verifwali->getVerifWali($this->input->post('id_murid'))) {
			$this->e_verifwali->updateVerifWali($this->input->post('id_murid'));
		}else{
			$this->e_verifwali->insertVerifWali();
		}

		if ($this->e_verifdokumen->getVerifDok($this->input->post('id_murid'))) {
			$this->e_verifdokumen->updateVerifDokumen($this->input->post('id_murid'));
		}else{
			$this->e_verifdokumen->insertVerifDokumen();
		}

		if ($this->input->post('verif_murid') == 1 && $this->input->post('verif_wali') == 1 && $this->input->post('verif_dok') == 1) {
			$this->e_murid->setStatus(11);
			$this->e_murid->updateMurid($this->input->post('id_murid'));
		}else{
			$this->e_murid->setStatus(3);
			$this->e_murid->updateMurid($this->input->post('id_murid'));
		}

		$this->session->set_flashdata('info', 'Data Sudah Dirubah');
		redirect('c_verifpendaftaran/lihatPendaftar','refresh');
	}

}

/* End of file c_verifpendaftaran.php */
/* Location: ./application/controllers/c_verifpendaftaran.php */