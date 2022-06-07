<?php
/**
 *
 */
class Profile_website extends CI_Model
{

  public function list_web()
  {
      $this->db->from('tbl_profile');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_profile');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function update($data,$kondisi)
  {
      $this->db->update('tbl_profile',$data,$kondisi);
      return TRUE;
  }


}
