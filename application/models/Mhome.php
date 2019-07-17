<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_model{

  public function get_latest_ts()
  {
    $this->db->select("*");
    $this->db->from("technical_service ts");
    $this->db->join("customers c","c.customer_id = ts.customer_id");
    $this->db->join("status s","s.status_id = ts.ts_status");
    $this->db->order_by('ts.ts_id', 'DESC');
    $this->db->limit(10);  // Produces: LIMIT 10
    $query = $this->db->get();
    return $query->result();
  }
}