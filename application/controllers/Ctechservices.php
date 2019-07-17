<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctechservices extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
		$this->load->model('mtechservices');
		$this->load->model('mcustomers');
		$this->load->model('mstatus');
	}

	public function index()
	{
		$data['techservices'] = $this->mtechservices->get_techservices();
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('techservices/list',$data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		date_default_timezone_set('America/Bogota');
		$data['customers'] = $this->mcustomers->get_customers();
		$data['status'] = $this->mstatus->get_status();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('techservices/add',$data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		if($this->mtechservices->create()) {
			redirect(base_url('ctechservices'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url('ctechservices/add'));
		}
	}

	public function edit($id) 
	{
		$data['ts'] = $this->mtechservices->get_techservice($id);
		$data['customers'] = $this->mcustomers->get_customers();
		$data['status'] = $this->mstatus->get_status();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('techservices/edit',$data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
		if($this->mtechservices->update()) {
			redirect(base_url('ctechservices'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo actualizar la información");
			redirect(base_url('ctechservices/edit'));
		}
	}

	public function view()
	{
		$id = $this->input->post('id');
		$data['ts'] = $this->mtechservices->get_techservice($id);
		
    echo json_encode($data);
	}

	public function get_customers()
	{
		$search = $this->input->post("search");
		$data = $this->mtechservices->get_customers($search);
		
		echo json_encode($data);
	}
}
