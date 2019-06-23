<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'numero_factura' => $this->input->post('numero_factura'),
            'id_cliente' => $this->input->post('id_cliente'),
            'monto' => $this->input->post('monto'),
            'fecha' =>$this->input->post('fecha')
        );
        $this->db->insert('factura', $data);
    }
    
    function getAlldata(){
        $query = $this->db->query('SELECT * FROM factura');
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

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
    }
}
