<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusers extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
  		$this->load->model('musers');
	}

	public function index()
	{
		$data = array('users' => $this->musers->get_users());
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/list',$data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$data = array('roles' => $this->musers->get_roles());

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/add',$data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		if($this->musers->create()) {
			redirect(base_url('cusers'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url('cusers/add'));
		}
	}

	public function edit($id) 
	{
		$data['user'] = $this->musers->get_user($id);
		$data['roles'] = $this->musers->get_roles();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/edit',$data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
		if($this->musers->update()) {
			redirect(base_url('cusers'));
		}
		else {
			$this->session->set_flashdata("error","No se pudo actualizar la información");
			redirect(base_url('cusers/edit'));
		}
	}

	public function view()
	{
		$id = $this->input->post('id');
		$data = array('user' => $this->musers->get_user($id));
		
        echo json_encode($data);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$data = array('user' => $this->musers->delete($id));
		
        echo json_encode($data);
	}

	public function check_username() 
	{
		$username = $this->input->post('username');
		$data = $this->musers->check_username($username);
		
        echo json_encode($data);
	}
}
