<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccustomers extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
  		$this->load->model('musers');
	}

	public function index()
	{
		$res = $this->musers->getCustomers();
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('customers/list');
		$this->load->view('layout/footer');
	}
}
