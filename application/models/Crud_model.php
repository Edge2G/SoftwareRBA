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
}
