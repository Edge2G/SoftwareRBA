<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'tipo_producto' => $this->input->post('tipo_producto'),   
        );
        $this->db->insert('producto', $data);
    }
    function ingresarData(){
        $nombre_producto =$this->input->post('nombre_producto');
        //$query = $this->db->query('SELECT id FROM `producto` WHERE `nombre` = '.$nombre_producto);
        //$id = $query->result();
        //$id2 = array_values($id)[0];
        $id2 = mysql_result(mysql_query('SELECT id FROM `producto` WHERE `nombre` = '.$nombre_producto),0);
        $data = array(
            'id_producto' => $this->input->post(isset($id2)),
            'cantidad'=> $this->input->post('cantidad') ,
            'fecha_ingreso'=> $this->input->post('fecha_ingreso')  
        );
        $this->db->insert('inventario', $data);
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
        );
        $this->db->where('id', $id);
        $this->db->update('producto', $data);
    }

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('producto');
    }
}