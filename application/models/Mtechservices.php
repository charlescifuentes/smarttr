<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtechservices extends CI_model{

  public function get_techservices()
  {   
    $this->db->select("*");
    $this->db->from("technical_service ts");
    $this->db->join("customers c","c.customer_id = ts.customer_id");
    $this->db->join("status s","s.status_id = ts.ts_status");
    $query = $this->db->get();
    return $query->result();
  }

  public function create()
  {
    $data = array(
        'ts_date_start' => $this->input->post('startdate'),
        'user_id' => $this->input->post('user'),
        'customer_id' => $this->input->post('customer_id'),
        'ts_watch_brand' => $this->input->post('marca'),
        'ts_watch_model' => $this->input->post('model'),
        'ts_store_sender' => $this->input->post('store'),
        'ts_issue_desc' => $this->input->post('issue_desc'),
        'ts_diagnosis' => $this->input->post('diagnosis'),
        '	ts_observation' => $this->input->post('observation'),
        'ts_status' => $this->input->post('status'),
        'ts_date_end' => $this->input->post('enddate')
        );

      return $this->db->insert('technical_service',$data);
  }

  public function get_techservice($id)
  {
    $this->db->select("*");
    $this->db->from("technical_service ts");
    $this->db->join("customers c","c.customer_id = ts.customer_id");
    $this->db->join("status s","s.status_id = ts.ts_status");
    $this->db->where('ts.ts_id',$id);
    $query = $this->db->get();
    return $query->row();
  }

  public function update()
  {
    $id = $this->input->post('ts_id');
    $data = array(
        'ts_date_start' => $this->input->post('startdate'),
        'user_id' => $this->input->post('user'),
        'customer_id' => $this->input->post('customer_id'),
        'ts_watch_brand' => $this->input->post('marca'),
        'ts_watch_model' => $this->input->post('model'),
        'ts_store_sender' => $this->input->post('store'),
        'ts_issue_desc' => $this->input->post('issue_desc'),
        'ts_diagnosis' => $this->input->post('diagnosis'),
        '	ts_observation' => $this->input->post('observation'),
        'ts_status' => $this->input->post('status'),
        'ts_date_end' => $this->input->post('enddate')
        );

    $this->db->where('ts_id',$id);
    return $this->db->update('technical_service',$data);
  }

  public function get_customers($search)
  {
    $this->db->select('customer_id as value, customer_nit as nit, CONCAT(customer_firstname, " ", customer_lastname) AS label');
    $this->db->from('customers');
    $this->db->like('customer_firstname',$search);
    $this->db->or_like('customer_nit', $search);
    $query = $this->db->get();
    return $query->result_array();
  }
}