<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dokumenDaftar extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDokumen($id_murid){
		$data = $this->cekDokumenAll($id_murid);
	}

	public function cekDokumenAll($id_murid){
		$kk = $this->e_dokumenMurid->getDokumenAll($id_murid, 1);
		$akta = $this->e_dokumenMurid->getDokumenAll($id_murid, 2);
		$foto = $this->e_dokumenMurid->getDokumenAll($id_murid, 3);
		
		if ($kk) {
			$dok['kk']	= 1;
		}else{
			$dok['kk']	= 0;
		}

		if ($akta) {
			$dok['akta']	= 1;
		}else{
			$dok['akta']	= 0;
		}

		if ($foto) {
			$dok['foto']	= 1;
		}else{
			$dok['foto']	= 0;
		}

		$this->session->set_userdata( $dok );

		$data = array(
			'kk' => $kk,
			'akta' => $akta,
			'foto' => $foto, 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/wm/v_dokumen_murid', $data);
	}

	public function unggahDokumen(){
		$id_murid = $this->session->userdata('id_murid');
        $jenis_dok = $this->input->post('jenis_dok');

        $dok = $this->e_dokumenMurid->getDokumenAll($id_murid, $jenis_dok);
        if ($dok) {
        	$this->e_dokumenMurid->hapusDokumen($id_murid);
        	unlink('./assets/img/'.$dok->path);
        }

		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE;
		$config['overwrite'] = FALSE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('dokumen');	
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
			

		$this->e_dokumenMurid->setIdMurid($id_murid);
		$this->e_dokumenMurid->setJenisDokumen($jenis_dok);
		$this->e_dokumenMurid->setPath($file_name);

		$this->e_dokumenMurid->insertDokumen();

		redirect('c_dokumenDaftar/lihatDokumen/'.$this->session->userdata('id_murid'),'refresh');

	}
}

/* End of file c_dokumenDaftar.php */
/* Location: ./application/controllers/c_dokumenDaftar.php */