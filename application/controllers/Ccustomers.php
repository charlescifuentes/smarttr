<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccustomers extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
  		$this->load->model('mcustomers');
	}

	public function index()
	{
		$data = array('customers' => $this->mcustomers->get_customers());
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('customers/list',$data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$data = array('customers' => $this->mcustomers->get_customers());
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('customers/add',$data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		if($this->mcustomers->create()) {
			redirect(base_url('ccustomers'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url('ccustomers/add'));
		}
	}

	public function edit($id) 
	{
		$data = array('customer' => $this->mcustomers->get_customer($id));
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('customers/edit',$data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
		if($this->mcustomers->update()) {
			redirect(base_url('ccustomers'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo actualizar la información");
			redirect(base_url('ccustomers/edit'));
		}
	}

	public function view()
	{
		$id = $this->input->post('id');
		$data = array('customer' => $this->mcustomers->get_customer($id));
		
        echo json_encode($data);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$data = array('customer' => $this->mcustomers->delete($id));
		
        echo json_encode($data);
	}

	public function check_nit() 
	{
		$nit = $this->input->post('nit');
		$data = $this->mcustomers->check_nit($nit);
		
        echo json_encode($data);
	}
}
