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

    function getDetalle($id){
         $query = $this->db->query('SELECT producto.nombre,factura_detalle.cantidad_producto,factura.numero_factura FROM factura_detalle,factura,producto where factura.id=factura_detalle.id_factura and factura_detalle.id_producto=producto.id and factura.id='.$id);
         return $query->result();
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
