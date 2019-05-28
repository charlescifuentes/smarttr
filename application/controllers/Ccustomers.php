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
}
