<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'id_tipo_producto' => $this->input->post('id_tipo_producto'),
            'cantidad' => $this->input->post('cantidad'),
            'fecha_ingreso' => $this->input->post('fecha_ingreso')
        );
        $this->db->insert('producto', $data);
    }
    
    function getAlldata(){
        $query = $this->db->query('SELECT * FROM producto');
        return $query ->result();

    }

    function getData($id){
        $query = $this->db->query('SELECT * FROM producto WHERE `id` = '.$id);
        return $query->row();
    }

    function updateData($id){
        $data = array(
            'id' => $this->input->post('id'),
            'nombre' => $this->input->post('nombre'),
            'id_tipo_producto' => $this->input->post('id_tipo_producto'),
            'cantidad' => $this->input->post('cantidad'),
            'fecha_ingreso' => $this->input->post('fecha_ingreso')
        );
        $this->db->where('id', $id);
        $this->db->update('producto', $data);
    }

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('producto');
    }
}