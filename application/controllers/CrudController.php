<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudController extends CI_Controller {
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
		$this->load->model('Crud_model');
		if($this->session->userdata('login_') !== TRUE){
      		redirect('Login/login');
      	}elseif ($this->session->userdata('rol')!=1) {
      		redirect($this->uri->uri_string());
      		
      	}
		
	}
	public function index()
	{
		
		$data['result'] = $this->Crud_model->getAlldata();
		$this->load->view('crud_view',$data);
	}
		
	public function create(){
		$this->Crud_model->createData();
		redirect("CrudController");
	}
	public function edit($id){
		$data['row'] = $this->Crud_model->getData($id);
		$this->load->view('crudEdit', $data);
	}
	public function update($id){
		$this->Crud_model->updateData($id);
		redirect("CrudController");
	}
	public function delete($id){
		$this->Crud_model->deleteData($id);
		redirect("CrudController");
	}
}