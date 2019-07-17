<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creports extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
		$this->load->model('mreports');
		$this->load->model('mcustomers');
		$this->load->model('mstatus');
	}

	public function ts_report()
	{
		$data['customers'] = $this->mcustomers->get_customers();
		$data['status'] = $this->mstatus->get_status();
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('reports/ts_report',$data);
		$this->load->view('layout/footer');
	}

	public function ts_report_result()
	{
		$id = $this->input->post('status');
		$data['techservices'] = $this->mreports->ts_report_result($id);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('reports/ts_report_result',$data);
		$this->load->view('layout/footer');
	}
}
