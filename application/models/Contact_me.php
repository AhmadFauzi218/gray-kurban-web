<?php
/**
 *
 */
class Contact_me extends CI_Model
{

  public function list_contact()
  {
      $this->db->from('tbl_Contact');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_Contact');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($location,$email,$no_hp)
  {
       $hasil = $this->db->query("INSERT INTO tbl_Contact (location,email,no_hp) VALUES ('$location','$email','$no_hp')");
  }
  public function update($id_contact,$location,$email,$no_hp)
  {
    $hasil=$this->db->query("UPDATE tbl_Contact SET location='$location',email='$email',no_hp='$no_hp' WHERE id_contact='$id_contact'");
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_Contact');
      return TRUE;
  }

}
