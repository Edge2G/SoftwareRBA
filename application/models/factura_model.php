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
    function createCliente(){
        $data = array(
            'id' => $this->input->post('id_cliente'),
            'nombre_cliente' => $this->input->post('nombre_cliente'),
            'rut' => $this->input->post('rut')
        );
        $this->db->insert('cliente', $data);
    }
    
    function getAlldata(){
        $query = $this->db->query('SELECT * FROM factura order by fecha');
        return $query ->result();

    }

    function getData($id){
        $query = $this->db->query('SELECT * FROM factura WHERE `id` = '.$id);
        return $query->row();
    }

    function updateData($id){
        $data = array(
            'numero_factura' => $this->input->post('numero_factura'),
            'id_cliente' => $this->input->post('id_cliente'),
            'monto' => $this->input->post('monto'),
            'fecha' => $this->input->post('fecha')
        );
        $this->db->where('id', $id);
        $this->db->update('factura', $data);
    }

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('factura');
    }
}
