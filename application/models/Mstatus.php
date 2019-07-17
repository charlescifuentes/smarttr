<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstatus extends CI_model{

  public function get_status()
  {
    $query = $this->db->get('status');
    return $query->result();
  }

  public function get_status_detail($id)
  {
    $this->db->where('status_id',$id);
    $query = $this->db->get('status');
    return $query->row();
  }

  public function create()
  {
      $data = array(
          'status_name' => $this->input->post('name')
          );

      return $this->db->insert('status',$data);
  }

  public function update()
  {
    $id = $this->input->post('id');
    $data = array(
      'status_name' => $this->input->post('name')
      );
    
    $this->db->where('status_id',$id);
    return $this->db->update('status',$data);
  }

  public function delete($id)
  {
    if ( ! $this->db->delete('status', array('status_id' => $id)))
    {
        return $error = $this->db->error(); // Has keys 'code' and 'message'
    }
    else{
        return 1;
    }
  }
}