<?php
class E_loginmurid extends CI_Model{

private $id_login;
private $id_murid;
private $username;
private $password;


function setIdMurid($id_murid) { $this->id_murid = $id_murid; }

function setUsername($username) { $this->username = $username; }

function setPassword($password) { $this->password = $password; }



function login($username, $password){
    $this->db->select('*');
    $this->db->from('loginmurid');
    $this->db->join('murid', 'murid.id_murid = loginmurid.id_murid', 'left');
    $this->db->where('loginmurid.username', $username);
    $this->db->having('loginmurid.password', $password);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

function getLogin($id_login){
        $this->db->select('*');
        $this->db->where('id_login', $id_login);
        $this->db->from('loginmurid');

        $query = $this->db->get();
        return $query->row();
}

function getLoginMuridAll(){
    $this->db->select('*');
    $this->db->from('loginmurid');
    $this->db->join('murid', 'murid.id_murid = loginmurid.id_murid', 'left');

    $query = $this->db->get();
    return $query->result();
}

function getLoginMurid($username){
    $this->db->select('username');
    $this->db->from('loginmurid');
    $this->db->where('username', $username);

    $query = $this->db->get();
    return $query -> row();
}

function getDataIdLogin($id_murid){
    $this->db->select('*');
    $this->db->from('loginmurid');
    $this->db->where('id_murid', $id_murid);

    $query = $this->db->get();
    return $query->row();
}

function updateLogin($id_login){
    $data = array(
        'username' => $this->username ,
        'password' => $this->password ,
         );

    $this->db->where('id_login', $id_login);
    $this->db->update('loginmurid', $data);
}

function deleteLogin($id_login){
    $this->db->where('id_login', $id_login);
    $this->db->delete('loginmurid');
}

function tambahLogin(){
    $data = array(
        'id_murid' => $this->id_murid ,
        'username' => $this->username ,
        'password' => $this->password , 
        );

    $this->db->insert('loginmurid', $data);
}

function getIdMurid($id_login){
    $this->db->select('id_murid');
    $this->db->where('id_login', $id_login);
    $this->db->from('loginmurid');

    $query = $this->db->get();
    return $query->row()->id_murid;
}
}
?>