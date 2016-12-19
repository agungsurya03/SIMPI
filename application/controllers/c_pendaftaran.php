<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pendaftaran extends CI_Controller {

	public function index()
	{
		
	}

	public function infoDaftar($id_murid){
		$akses = $this->e_murid->getMurid($id_murid)->nama_lengkap;

		$data = array(
			'murid' => $this->e_murid->getMurid($id_murid) , 
			'waliayah' => $this->e_walimurid->getWaliMuridJenis($id_murid,1),
			'waliibu' => $this->e_walimurid->getWaliMuridJenis($id_murid,2)
			);

		if($this->cekFormulir($akses)){
			$id = array(
				'id_data' => 1
			);
			
			$this->session->set_userdata($id);

			$this->tampilInfoFormulir($data);
		}else{
			$id = array(
				'id_data' => 2
			);
			
			$this->session->set_userdata($id);

			$this->tampilInfoDaftar();
		}
	}

	public function cekFormulir($akses){
		if ($akses== "") {
			return false;
		}else{
			return true;
		}
	}

	public function tampilInfoDaftar(){
		$this->daftarBaru();
	}

	public function tampilInfoFormulir($data){
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_data_murid', $data);
	}

	public function daftarBaru(){
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_daftar_data_null');
	}

	public function tambahDaftar(){
		$this->e_murid->setId_murid($this->input->post('id_murid'));


		$this->e_murid->setNoInduk($this->input->post('nim'));
		$this->e_murid->setNamaLengkap($this->input->post('nama_lengkap'));
		$this->e_murid->setNamaPanggilan($this->input->post('nama_panggilan'));
		$this->e_murid->setJenisKelamin($this->input->post('jenis_kelamin'));
		$this->e_murid->setTempatLahir($this->input->post('tempat_lahir'));
		$this->e_murid->setTanggalLahir($this->input->post('tanggal_lahir'));
		$this->e_murid->setAgama($this->input->post('agama'));
		$this->e_murid->setAlamat($this->input->post('alamat'));
		$this->e_murid->setTelp($this->input->post('no_telpon'));
		$this->e_murid->setSaudara($this->input->post('jml_saudara'));
		$this->e_murid->setAnakKe($this->input->post('anak_ke'));
		$this->e_murid->setWargaNegara($this->input->post('kewarganegaraan'));
		$this->e_murid->setBahasa($this->input->post('bahasa'));
		$this->e_murid->setKesehatan($this->input->post('kesehatan'));
		$this->e_murid->setKesehatanDesk($this->input->post('kesehatan_desk'));
		$this->e_murid->setKhusus($this->input->post('khusus'));
		$this->e_murid->setKhususDesk($this->input->post('khusus_desk'));
		$this->e_murid->setTinggal($this->input->post('tinggal'));
		$this->e_murid->setKebiasaan($this->input->post('kebiasaan'));
		$this->e_murid->setDewasa($this->input->post('penghuni_dewasa'));
		$this->e_murid->setSebaya($this->input->post('penghuni_sebaya'));
		$this->e_murid->setHubAyah($this->input->post('hub_ayah'));
		$this->e_murid->setHubIbu($this->input->post('hub_ibu'));
		$this->e_murid->setPergaulan($this->input->post('pergaulan_sebaya'));
		$this->e_murid->setImunisasi($this->input->post('imunisasi'));
		$this->e_murid->setStatus($this->input->post('status'));

		$this->e_murid->updateDataMurid($this->input->post('id_murid'));

		$this->dataWali(1);
		$this->e_walimurid->insertDataWaliMurid();
		$this->dataWali(2);	
		$this->e_walimurid->insertDataWaliMurid();	

		redirect('c_pendaftaran/infoDaftar/'. $this->input->post('id_murid'),'refresh');
	}

	public function dataWali($jenis_wali){
		if ($jenis_wali == 1) {
			$this->e_walimurid->setId_murid($this->input->post('id_murid'));
			$this->e_walimurid->setNama($this->input->post('nama_ayah'));
			$this->e_walimurid->setTempatLhr($this->input->post('tempat_lahir_ayah'));
			$this->e_walimurid->setTanggalLhr($this->input->post('tanggal_lahir_ayah'));
			$this->e_walimurid->setAgama($this->input->post('agama_ayah'));
			$this->e_walimurid->setTelp($this->input->post('no_telpon_ayah'));
			$this->e_walimurid->setPendidikan($this->input->post('pendidikan_ayah'));
			$this->e_walimurid->setPekerjaan($this->input->post('pekerjaan_ayah'));
			$this->e_walimurid->setPenghasilan($this->input->post('penghasilan_ayah'));
			$this->e_walimurid->setKantor($this->input->post('alamat_kantor_ayah'));
			$this->e_walimurid->setWargaNegara($this->input->post('kewarganegaraan_ayah'));
			$this->e_walimurid->setJenisWali($jenis_wali);
		} elseif ($jenis_wali == 2) {
			$this->e_walimurid->setId_murid($this->input->post('id_murid'));
			$this->e_walimurid->setNama($this->input->post('nama_ibu'));
			$this->e_walimurid->setTempatLhr($this->input->post('tempat_lahir_ibu'));
			$this->e_walimurid->setTanggalLhr($this->input->post('tanggal_lahir_ibu'));
			$this->e_walimurid->setAgama($this->input->post('agama_ibu'));
			$this->e_walimurid->setTelp($this->input->post('no_telpon_ibu'));
			$this->e_walimurid->setPendidikan($this->input->post('pendidikan_ibu'));
			$this->e_walimurid->setPekerjaan($this->input->post('pekerjaan_ibu'));
			$this->e_walimurid->setPenghasilan($this->input->post('penghasilan_ibu'));
			$this->e_walimurid->setKantor($this->input->post('alamat_kantor_ibu'));
			$this->e_walimurid->setWargaNegara($this->input->post('kewarganegaraan_ibu'));
			$this->e_walimurid->setJenisWali($jenis_wali);
		}
	}

	public function gantiDaftar($id_murid){
		$data = array(
			'murid' => $this->e_murid->getMurid($id_murid) , 
			'waliayah' => $this->e_walimurid->getWaliMuridJenis($id_murid, 1),
			'waliibu' => $this->e_walimurid->getWaliMuridJenis($id_murid, 2),
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_data_murid_edit', $data);
	}

	public function konfirmasiBatal(){
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_data_murid_batal');
	}

	public function batalDaftar($id_murid){
		$this->e_murid->setStatus(4);

		$this->e_murid->updateMurid($id_murid);

		$this->session->set_flashdata('info', 'Anda sudah membatalkan pendaftaran');
		redirect('c_pendaftaran/infoDaftar/'. $id_murid,'refresh');
	}

	public function tidakBatal($id_murid){
		$this->session->set_flashdata('calm', 'Konfirmasi Batal tidak jadi');
		redirect('c_pendaftaran/infoDaftar/'. $id_murid,'refresh');
	}

	public function cekVerifikasi($id_murid){
		$data = array(
			'vmurid' => $this->e_verifmurid->getVerifMurid($id_murid) ,
			'vdokumen' => $this->e_verifdokumen->getVerifDok($id_murid) ,
			'vwalimurid' => $this->e_verifwali->getVerifWali($id_murid) , 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_data_murid_verif', $data);
	}

	public function perbaruiFormulir(){
		$this->e_murid->setId_murid($this->input->post('id_murid'));

		$this->e_murid->setNoInduk($this->input->post('no_induk'));
		$this->e_murid->setNamaLengkap($this->input->post('nama_lengkap'));
		$this->e_murid->setNamaPanggilan($this->input->post('nama_panggilan'));
		$this->e_murid->setJenisKelamin($this->input->post('jenis_kelamin'));
		$this->e_murid->setTempatLahir($this->input->post('tempat_lahir'));
		$this->e_murid->setTanggalLahir($this->input->post('tanggal_lahir'));
		$this->e_murid->setAgama($this->input->post('agama'));
		$this->e_murid->setAlamat($this->input->post('alamat'));
		$this->e_murid->setTelp($this->input->post('telp'));
		$this->e_murid->setSaudara($this->input->post('jumlah_saudara'));
		$this->e_murid->setAnakKe($this->input->post('anak_ke'));
		$this->e_murid->setWargaNegara($this->input->post('warga_negara'));
		$this->e_murid->setBahasa($this->input->post('bahasa'));
		$this->e_murid->setKesehatan($this->input->post('kesehatan'));
		$this->e_murid->setKesehatanDesk($this->input->post('kesehatan_desk'));
		$this->e_murid->setKhusus($this->input->post('khusus'));
		$this->e_murid->setKhususDesk($this->input->post('khusus_desk'));
		$this->e_murid->setKebiasaan($this->input->post('kebiasaan'));
		$this->e_murid->setTinggal($this->input->post('tinggal'));
		$this->e_murid->setDewasa($this->input->post('penghuni_dewasa'));
		$this->e_murid->setSebaya($this->input->post('penghuni_sebaya'));
		$this->e_murid->setHubAyah($this->input->post('hub_ayah'));
		$this->e_murid->setHubIbu($this->input->post('hub_ibu'));
		$this->e_murid->setPergaulan($this->input->post('pergaulan_sebaya'));
		$this->e_murid->setImunisasi($this->input->post('imunisasi'));
		$this->e_murid->setStatus($this->input->post('status'));

		$this->e_murid->updateDataMurid($this->input->post('id_murid'));

		$this->dataWali(1);
		$this->e_walimurid->updateDataWaliMurid($this->input->post('id_murid'), 1);
		$this->dataWali(2);
		$this->e_walimurid->updateDataWaliMurid($this->input->post('id_murid'), 2);

		redirect('c_pendaftaran/infoDaftar/'. $this->input->post('id_murid'),'refresh');
	}
}

/* End of file c_pendaftaran.php */
/* Location: ./application/controllers/c_pendaftaran.php */