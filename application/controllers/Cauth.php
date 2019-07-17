<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cauth extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
  	$this->load->model('musers');
	}
	
	public function index()
	{	
		if ($this->session->userdata("login")) {
			redirect('chome');
		}
		else {
			$this->load->view('auth/login');
		}
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->musers->login($username, sha1($password));

		if (!$res) {
			$this->session->set_flashdata('error', 'Usuario y/o Contraseña incorrectos');
			redirect('cauth');
		}
		else {
			$data = array(
				'id' => $res->user_id,
				'nombres' => $res->user_firstname,
				'apellidos' => $res->user_lastname,
				'email' => $res->user_email,
				'rol' => $res->rol_id,
				'login' => TRUE 
			);
			$this->session->set_userdata($data);
			redirect('chome');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('cauth');
	}
}
