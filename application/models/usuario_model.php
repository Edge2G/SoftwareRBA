<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

    public $variable;

    public function __construct(){

        parent::__construct();
    }

    public function login($username,$password){

        $this->db->where("nombre",$username);
        $this->db->where("password",$password);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
            return $q->row();
        }else{
            return false;
        }

    }

   
}
