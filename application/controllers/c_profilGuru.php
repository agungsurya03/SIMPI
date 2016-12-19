<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profilGuru extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataGuru($id_guru){
		$guru = $this->e_dataGuru->getGuru($id_guru);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_detail_guru', $guru);
		$this->load->view('footer');
	}

	public function gantiDataGuru($id_guru){
		$guru = $this->e_dataGuru->getGuru($id_guru);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/guru/v_edit_guru', $guru);
		$this->load->view('footer');
	}

	public function perbaruiDataGuru(){
		$this->e_dataGuru->setNama($this->input->post('nama_guru'));
		$this->e_dataGuru->setJenisKelamin($this->input->post('jenis_kelamin'));
		$this->e_dataGuru->setTempatLahir($this->input->post('tempat_lahir'));
		$this->e_dataGuru->setTanggalLahir($this->input->post('tanggal_lahir'));
		$this->e_dataGuru->setStatusPNS($this->input->post('status_pns'));

		$this->e_dataGuru->updateGuru($this->input->post('id_guru'));

		$this->session->set_flashdata('info', 'Data anda telah dirubah');
		redirect('c_profilGuru/lihatDataGuru/'.$this->input->post('id_guru') ,'refresh');
	}

}

/* End of file c_profilGuru.php */
/* Location: ./application/controllers/c_profilGuru.php */