<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pertumbuhan extends CI_Controller {

	public function index()
	{

	}

	public function lihatMurid($id_murid){
		$murid = 
		$data = array(
			'murid' => $this->e_murid->getDataMurid($id_murid) , 
			'pertumbuhan' => $this->e_pertumbuhan->getDataCatPertumbuhanAll($id_murid) ,
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_pertumbuhan_murid', $data);
		$this->load->view('footer');
	}

	public function buatCatPertumbuhan($id_murid){
		$data = array(
			'id_murid' => $id_murid 
			);
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_tambah_pertumbuhan', $data);
		$this->load->view('footer');
	}

	public function tambahCatPertumbuhan(){
		$this->e_pertumbuhan->setIdMurid($this->input->post('id_murid'));
		$this->e_pertumbuhan->setBeratBadan($this->input->post('berat_badan'));
		$this->e_pertumbuhan->setTinggiBadan($this->input->post('tinggi_badan'));
		$this->e_pertumbuhan->setTanggal($this->input->post('tanggal'));
		$this->e_pertumbuhan->setKeterangan($this->input->post('keterangan'));

		$this->e_pertumbuhan->tambahCatPertumbuhan();
		
		$this->session->set_flashdata('info', 'Catatan Pertumbuhan Telah ditambahkan');
		redirect('c_pertumbuhan/lihatMurid/'.$this->input->post('id_murid'),'refresh');
	}

	public function lihatCatPertumbuhan($id_murid){
		$data = array(
			'pertumbuhan' => $this->e_pertumbuhan->getDataCatPertumbuhanAll($id_murid),
			);

		$this->load->view('content/v_cat_pertumbuhan', $data);
	}

	public function gantiCatPertumbuhan($id_pertumbuhan){
		$pertumbuhan = $this->e_pertumbuhan->getCatPertumbuhan($id_pertumbuhan);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_ganti_pertumbuhan', $pertumbuhan);
		$this->load->view('footer');
	}

	public function perbaruiCatPertumbuhan(){
		$this->e_pertumbuhan->setBeratBadan($this->input->post('berat_badan'));
		$this->e_pertumbuhan->setTinggiBadan($this->input->post('tinggi_badan'));
		$this->e_pertumbuhan->setTanggal($this->input->post('tanggal'));
		$this->e_pertumbuhan->setKeterangan($this->input->post('keterangan'));

		$this->e_pertumbuhan->updateCatPertumbuhan($this->input->post('id_pertumbuhan'));
		
		$this->session->set_flashdata('info', 'Catatan Pertumbuhan Telah diganti');
		redirect('c_pertumbuhan/lihatMurid/'.$this->input->post('id_murid'),'refresh');
	}
}

/* End of file c_pertumbuhan.php */
/* Location: ./application/controllers/c_pertumbuhan.php */