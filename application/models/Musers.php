<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_model{

    public function login($username, $password)
    {
        $this->db->where("user_name", $username);
        $this->db->where("user_password", $password);

        $query = $this->db->get("users");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        else {
            return false;
        }
    } 
}
