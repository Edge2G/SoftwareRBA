<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'password' => $this->input->post('password'),
            'mail' => $this->input->post('mail')
        );
        $this->db->insert('usuarios', $data);
    }
    
    function getAlldata(){
        $query = $this->db->query('SELECT * FROM usuarios');
        return $query ->result();

    }

    function getData($id){
        $query = $this->db->query('SELECT * FROM usuarios WHERE `id` = '.$id);
        return $query->row();
    }

    function updateData($id){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'password' => $this->input->post('password'),
            'mail' => $this->input->post('mail')
        );
        $this->db->where('id', $id);
        $this->db->update('usuarios', $data);
    }
}
