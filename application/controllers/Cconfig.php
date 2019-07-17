<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cconfig extends CI_Controller {

    public function __construct()
  	{
		parent::__construct();
  		$this->load->model('mconfig');
    }
    
    public function index()
    {
        $data['config'] = $this->mconfig->get_config();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('config/config',$data);
        $this->load->view('layout/footer');
    }
}
