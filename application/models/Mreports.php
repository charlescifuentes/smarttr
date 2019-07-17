<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mreports extends CI_model{

  public function ts_report_result($id){
    $this->db->select("*");
    $this->db->from("technical_service ts");
    $this->db->join("customers c","c.customer_id = ts.customer_id");
    $this->db->join("status s","s.status_id = ts.ts_status");
    if($id != "null"){
      $this->db->where('s.status_id',$id);
    }
    $query = $this->db->get();
    return $query->result();
  }
}