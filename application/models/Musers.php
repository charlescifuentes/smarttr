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

    public function get_users()
    {   
        $this->db->select("u.*, r.rol_name");
        $this->db->from("users u");
        $this->db->join("roles r","r.rol_id = u.rol_id");
        $this->db->where('u.user_status','1');
        $query = $this->db->get();
        return $query->result();
    }

    public function create()
    {
        $data = array(
            'user_name' => $this->input->post('username'),
            'user_password' => sha1($this->input->post('password')),
            'user_firstname' => $this->input->post('firstname'),
            'user_lastname' => $this->input->post('lastname'),
            'user_email' => $this->input->post('email'),
            'user_phone' => $this->input->post('phone'),
            'rol_id' => $this->input->post('rol'),
            'user_status' => '1'
            );

        return $this->db->insert('users',$data);
    }

    public function get_user($id)
    {
        $this->db->select("u.*, r.rol_name");
        $this->db->from("users u");
        $this->db->join("roles r","r.rol_id = u.rol_id");
        $this->db->where('u.user_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'user_name' => $this->input->post('username'),
            'user_password' => sha1($this->input->post('password')),
            'user_firstname' => $this->input->post('firstname'),
            'user_lastname' => $this->input->post('lastname'),
            'user_email' => $this->input->post('email'),
            'user_phone' => $this->input->post('phone'),
            'rol_id' => $this->input->post('rol'),
            'user_status' => $this->input->post('status')
            );
        
        $this->db->where('user_id',$id);
        return $this->db->update('users',$data);
    }

    public function delete($id)
    {
        $data = array('user_status' => 0);
        
        $this->db->where('user_id',$id);
        return $this->db->update('users',$data);
    }

    public function get_roles()
    {
        $query = $this->db->get('roles');
        return $query->result();
    }

    public function check_username($username) {
        $this->db->select("user_name");
        $this->db->where('user_name',$username);
        $query = $this->db->get('users');
        return $query->row();
    }
}
