<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_pertumbuhan extends CI_Model {

private $id_pertumbuhan;
private $id_murid;
private $berat_badan;
private $tinggi_badan;
private $tanggal;
private $keterangan;

function setIdPertumbuhan($id_pertumbuhan) { $this->id_pertumbuhan = $id_pertumbuhan; }

function setIdMurid($id_murid) { $this->id_murid = $id_murid; }

function setBeratBadan($berat_badan) { $this->berat_badan = $berat_badan; }

function setTinggiBadan($tinggi_badan) { $this->tinggi_badan = $tinggi_badan; }

function setTanggal($tanggal) { $this->tanggal = $tanggal; }

function setKeterangan($keterangan) { $this->keterangan = $keterangan; }

	public function getDataCatPertumbuhanAll($id_murid){
		$this->db->select('*');
		$this->db->from('pertumbuhanmurid');
		$this->db->where('id_murid', $id_murid);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCatPertumbuhan($id_pertumbuhan){
		$this->db->select('*');
		$this->db->from('pertumbuhanmurid');
		$this->db->where('id_pertumbuhan', $id_pertumbuhan);

		$query = $this->db->get();
		return $query->row();
	}

	public function tambahCatPertumbuhan(){
		$data = array(
			'id_murid' => $this->id_murid ,
			'berat_badan' => $this->berat_badan ,
			'tinggi_badan' => $this->tinggi_badan ,
			'tanggal' => $this->tanggal ,
			'keterangan' => $this->keterangan , 
			);

		$this->db->insert('pertumbuhanmurid', $data);
	}

	public function updateCatPertumbuhan($id_pertumbuhan){
		$data = array(
			'berat_badan' => $this->berat_badan ,
			'tinggi_badan' => $this->tinggi_badan ,
			'tanggal' => $this->tanggal ,
			'keterangan' => $this->keterangan , 
			);

		$this->db->where('id_pertumbuhan', $id_pertumbuhan);
		$this->db->update('pertumbuhanmurid', $data);
	}

}

/* End of file e_pertumbuhan.php */
/* Location: ./application/models/e_pertumbuhan.php */