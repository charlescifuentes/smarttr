<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomers extends CI_model{

    public function get_customers()
    {
        $this->db->where('customer_status','1');
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function create()
    {
        $data = array(
            'customer_nit' => $this->input->post('nit'),
            'customer_firstname' => $this->input->post('firstname'),
            'customer_lastname' => $this->input->post('lastname'),
            'customer_address' => $this->input->post('address'),
            'customer_phone' => $this->input->post('phone'),
            'customer_email' => $this->input->post('email'),
            'customer_city' => $this->input->post('city'),
            'customer_status' => '1'
            );

        return $this->db->insert('customers',$data);
    }
}
