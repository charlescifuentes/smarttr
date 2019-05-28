<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomers extends CI_model{

    public function get_customers()
    {
        $this->db->where("customer_status","1");
        $query = $this->db->get("customers");
        return $query->result();
    }
}
