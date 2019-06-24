<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producController extends CI_Controller {

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
		$this->load->model('productModel');

		if($this->session->userdata('login_') !== TRUE){
      		redirect('Login/login');
      		}elseif ($this->session->userdata('rol')!=3) {
      		redirect($this->uri->uri_string());
      	}
   
    }
	public function index()
	{
		$data['result'] = $this->productModel->getAlldata();
		$this->load->view('CrudProducto',$data);
	}

	public function ingresar(){
		$this->productModel->ingresarData();
		redirect("producController");
	}
	public function create(){
		$this->productModel->createData();
		redirect("producController");
	}

	public function edit($id){
		$data['row'] = $this->productModel->getData($id);
		$this->load->view('productEdit', $data);
	}

	public function update($id){
		$this->productModel->updateData($id);
		redirect("producController");
	}

	public function delete($id){
		$this->productModel->deleteData($id);
		redirect("producController");

	}
	public function Reporte(){
		$data['result1'] = $this->productModel->reporteData();
		$this->load->view("reportView",$data);
	}
}