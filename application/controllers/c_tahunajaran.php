<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tahunajaran extends CI_Controller {

	public function index()
	{
		
	}

	public function cekBulanGantiTA(){
		$month_now = date('n');
		if ($month_now == 12) { //diganti 7 nanti
			$tahun_ajaran = $this->e_kompetensiinti->getTahunAjaranNow();
			$data = array('TA' =>  $tahun_ajaran , );

			$oto = array(
				'otoritas' => $this->session->userdata('otoritas'), 
				);
			$this->load->view('header');
			$this->load->view('v_menu', $oto);
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_konfirmasi_TA', $data);
			$this->load->view('footer');
		}else{
			$this->session->set_flashdata('info', 'Bukan bulan Juli');
			//redirect ke halaman sebelumnya
		}
	}

	public function batalgantiTA(){
		$this->session->set_flashdata('calm', 'Tahun ajaran tidak jadi diganti');
		redirect('c_tahunajaran/cekBulanGantiTA','refresh');
	}

	public function gantiTA($tahun_ajaran){
		$this->e_murid->setStatus(7);

		$this->e_murid->updateMuridAll();

		$data = array(
			'kelas' => $this->e_kelas->getKelas($tahun_ajaran) , 
			);
		foreach ($data['kelas'] as $row) {
			$this->e_kelas->setKelBelajar($row->id_kel_belajar);
			$this->e_kelas->setKelas($row->kelas);
			$this->e_kelas->setTahunAjaran($tahun_ajaran+1);
			$this->e_kelas->tambahKelas();

			$this->e_kelas->setStatusKelas(0);
			$this->e_kelas->updateKelas($row->id_kelas);
		}

		
		$this->e_kompetensiinti->setStatus(0);
		$this->e_kompetensiinti->updateKIAll($tahun_ajaran);

		
		$this->e_tema->setStatus(0);
		$this->e_tema->updateTemaAll($tahun_ajaran);

		$this->session->set_flashdata('info', 'Tahun ajaran telah diganti');
		redirect('c_tahunajaran/cekBulanGantiTA','refresh');
	}

}

/* End of file c_tahunajaran.php */
/* Location: ./application/controllers/c_tahunajaran.php */