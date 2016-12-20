<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_walimurid extends CI_Controller {

	public function index()
	{
		
	}

	public function gantiDataWaliMurid($id_wali_murid){
		$walimurid = $this->e_walimurid->getDataWaliMurid($id_wali_murid);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_edit_walimurid', $walimurid);
		$this->load->view('footer');

	}

	public function perbaruiDataWaliMurid(){
		$this->e_walimurid->setNama($this->input->post('nama'));
		$this->e_walimurid->setTempatLhr($this->input->post('tempat_lhr'));
		$this->e_walimurid->setTanggalLhr($this->input->post('tanggal_lhr'));
		$this->e_walimurid->setAgama($this->input->post('agama'));
		$this->e_walimurid->setTelp($this->input->post('telp'));
		$this->e_walimurid->setPendidikan($this->input->post('pendidikan'));
		$this->e_walimurid->setPekerjaan($this->input->post('pekerjaan'));
		$this->e_walimurid->setPenghasilan($this->input->post('penghasilan'));
		$this->e_walimurid->setKantor($this->input->post('kantor'));
		$this->e_walimurid->setWargaNegara($this->input->post('warga_negara'));

		$this->e_walimurid->updateWaliMurid($this->input->post('id_wali_murid'));

		$this->session->set_flashdata('info', 'Data Wali Murid telah diganti');
		redirect('c_murid/lihatKelolaMurid/'.$this->input->post('id_murid'),'refresh');
	}

}

/* End of file c_walimurid.php */
/* Location: ./application/controllers/c_walimurid.php */