<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mconfig extends CI_model{

    public function get_config()
    {
        $query = $this->db->get('configuration');
        return $query->result();
    }
}
