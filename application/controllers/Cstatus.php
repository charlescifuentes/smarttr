<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cstatus extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
  		$this->load->model('mstatus');
  }

  public function index()
  {
    $data['status'] = $this->mstatus->get_status();
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('status/list',$data);
		$this->load->view('layout/footer');
  }

  public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('status/add');
		$this->load->view('layout/footer');
  }
  
  public function create()
	{
		if($this->mstatus->create()) {
			redirect(base_url('cstatus'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url('cstatus/add'));
		}
  }
  
  public function edit($id) 
	{
		$data['status'] = $this->mstatus->get_status_detail($id);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('status/edit',$data);
		$this->load->view('layout/footer');
  }
  
  public function update()
	{
		if($this->mstatus->update()) {
			redirect(base_url('cstatus'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo actualizar la información");
			redirect(base_url('cstatus/edit'));
		}
  }
  
  public function delete()
  {
  	$id = $this->input->post('id');
		$data = $this->mstatus->delete($id);
		
		echo json_encode($data);
  }
}
