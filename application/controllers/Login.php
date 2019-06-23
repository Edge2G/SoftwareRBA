<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model("usuario_model");
	}

	public function index(){
		$this->load->view("login");
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->usuario_model->login($username,$password);

		if(!$res){
			redirect(base_url());
		}else{
			$data = array(
				'id' => $res->id,
				'nombre' => $res->nombre,
				'email' => $res->mail,
				'login' => TRUE
			);

			$this->session->set_userdata($data);
			redirect('CrudController');
		}
	}

}

