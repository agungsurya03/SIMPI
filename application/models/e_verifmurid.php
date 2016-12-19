<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_verifmurid extends CI_Model {

private $id_verif;
private $id_murid;
private $verif;
private $keterangan;

function setIdVerif($id_verif) { $this->id_verif = $id_verif; }

function setIdMurid($id_murid) { $this->id_murid = $id_murid; }

function setVerif($verif) { $this->verif = $verif; }

function setKeterangan($keterangan) { $this->keterangan = $keterangan; }


	public function getVerifMurid($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('verifmurid');

		$query = $this->db->get();
		if ($query->row()) {
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateVerifMurid($id_murid){
		$data = array(
			'keterangan' => $this->keterangan ,
			'verif' => $this->verif , 
			);

		$this->db->where('id_murid', $id_murid);
		$this->db->update('verifmurid', $data);
	}

	public function insertVerifMurid(){
		$data = array(
			'id_murid' => $this->id_murid ,
			'keterangan' => $this->keterangan ,
			'verif' => $this->verif , 
			);

		$this->db->insert('verifmurid', $data);
	}

}

/* End of file e_verifmurid.php */
/* Location: ./application/models/e_verifmurid.php */