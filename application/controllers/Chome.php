<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chome extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect('cauth');
		}
		$this->load->model('mhome');
	}

	public function index()
	{
		$data['techservices'] = $this->mhome->get_latest_ts();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('home',$data);
		$this->load->view('layout/footer');
	}
}
