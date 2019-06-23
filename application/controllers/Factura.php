<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model('factura_model');
		if($this->session->userdata('login_') !== TRUE){
      		redirect('Login/login');
      	}elseif ($this->session->userdata('rol')!=2) {
      		redirect($this->uri->uri_string());
      		
      	}
	}
	public function index()
	{
		$this->load->view("factura");
	}
	 public function create(){
	 	$this->factura_model->createData();
	 	redirect("Factura");
	 }

	 public function verFact(){

	 	$data['result'] = $this->factura_model->getAlldata();
	 	$this->load->view("VerFactura",$data);
	 }

	 public function edit(){

	 }

	 public function delete(){

	 }
}
