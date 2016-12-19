<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_loginwalimurid extends CI_Controller {

	public function index()
	{
		$data = $this->lihatDataIdLogin();

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_daftar_loginwali', $data);
		$this->load->view('footer');
	}

	public function lihatDataIdLogin(){
		$data = array(
			'idlogin' => $this->e_loginmurid->getLoginMuridAll() , 
			);

		return $data;
	}

	public function buatIdLogin(){
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_tambah_login');
		$this->load->view('footer');
	}

	public function tambahIdLogin(){
		$this->form_validation->set_rules('username', 'Username', 'required|callback_cekKetersediaan');

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if ($this->form_validation->run()) {
			$this->e_murid->tambahNullMurid();
			
			$id_murid = $this->e_murid->getIdMurid();

			$this->e_loginmurid->setIdMurid($id_murid);
			$this->e_loginmurid->setUsername($username);
			$this->e_loginmurid->setPassword($password); 

			$this->e_loginmurid->tambahLogin();

			$this->session->set_flashdata('info', 'ID Login baru berhasil dibuat');
			redirect('c_loginwalimurid','refresh');
		} else{
			$this->session->set_flashdata('username', $username);
			$this->session->set_flashdata('warn', validation_errors());

			redirect('c_loginwalimurid/buatIdLogin','refresh');
		}
	}

	public function cekKetersediaan($username){
		$check = $this->e_loginmurid->getLoginMurid($username);
		
		if($check){
			$this->form_validation->set_message('cekKetersediaan','Username tidak tersedia, silahkan pilih username lain.');
			return false;
			
		}else{
			return true;
		}
	}

	public function gantiIdLogin($id_login){
		$loginmurid = $this->e_loginmurid->getLogin($id_login);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_edit_login', $loginmurid);
		$this->load->view('footer');
	}

	public function perbaruiIdLogin(){
		$this->form_validation->set_rules('username', 'Username', 'required|callback_cekKetersediaan');

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if ($this->form_validation->run()) {
			$this->e_loginmurid->setUsername($username);
			$this->e_loginmurid->setPassword($password); 

			$this->e_loginmurid->updateLogin($this->input->post('id_login'));

			$this->session->set_flashdata('info', 'ID Login baru berhasil diganti');
			redirect('c_loginwalimurid','refresh');
		} else{
			$this->session->set_flashdata('username', $username);
			$this->session->set_flashdata('warn', validation_errors());

			redirect('c_loginwalimurid/buatIdLogin','refresh');
		}
	}

	public function konfirmasiHapus($id_login){
		$loginmurid = $this->e_loginmurid->getLogin($id_login);
		
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_delete_login', $loginmurid);
		$this->load->view('footer');
	}

	public function hapusIdLogin($id_login){
		$id_murid = $this->e_loginmurid->getIdMurid($id_login);

		$this->e_murid->deleteMurid($id_murid);
		$this->e_loginmurid->deleteLogin($id_login);

		$this->session->set_flashdata('info', 'ID Login wali murid telah dihapus');
		redirect('c_loginwalimurid','refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('calm', 'Tidak jadi menghapus ID Login wali murid');
		redirect('c_loginwalimurid','refresh');
	}

}

/* End of file c_loginwalimurid.php */
/* Location: ./application/controllers/c_loginwalimurid.php */