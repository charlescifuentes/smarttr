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
			redirect('ccustomers/add');
		}
	}
}
