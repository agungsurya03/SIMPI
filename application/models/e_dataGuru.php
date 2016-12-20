<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_DataGuru extends CI_Model {

private $id_guru;
private $nama_guru;
private $jenis_kelamin;
private $tempat_lahir;
private $tanggal_lahir;
private $status_pns;

function setId_guru($id_guru) { $this->id_guru = $id_guru; }

function setNama($nama_guru) { $this->nama_guru = $nama_guru; }

function setJenisKelamin($jenis_kelamin) { $this->jenis_kelamin = $jenis_kelamin; }

function setTempatLahir($tempat_lahir) { $this->tempat_lahir = $tempat_lahir; }

function setTanggalLahir($tanggal_lahir) { $this->tanggal_lahir = $tanggal_lahir; }

function setStatusPNS($status_pns) { $this->status_pns = $status_pns; }



	public function getGuruAll(){
		$this->db->select('*');
		$this->db->from('dataguru');

		$query=$this->db->get();
		return $query->result();
	}

	public function getGuru($id_guru){
		$this->db->select('*');
		$this->db->from('dataguru');
		$this->db->where('id_guru', $id_guru);

		$query=$this->db->get();
		return $query->row();
	}

	public function tambahGuru(){
		$data = array(
			'nama_guru' => $this->nama_guru ,
			'jenis_kelamin' => $this->jenis_kelamin ,
			'tempat_lahir' => $this->tempat_lahir ,
			'tanggal_lahir' => $this->tanggal_lahir ,
			'status_pns' => $this->status_pns , 
			);
		$this->db->insert('dataguru', $data);
	}

	public function updateGuru($id_guru){
		$data = array(
			'nama_guru' => $this->nama_guru ,
			'jenis_kelamin' => $this->jenis_kelamin ,
			'tempat_lahir' => $this->tempat_lahir ,
			'tanggal_lahir' => $this->tanggal_lahir ,
			'status_pns' => $this->status_pns , 
			);

		$this->db->where('id_guru', $id_guru);
		$this->db->update('dataguru', $data);
	}
	
	public function deleteGuru($id_guru){
		$this->db->where('id_guru', $id_guru);
		$this->db->delete('dataguru');
	}

}

/* End of file e_guru.php */
/* Location: ./application/models/e_guru.php */