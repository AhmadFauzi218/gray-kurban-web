<?php
/**
 *
 */
class Inbox_me extends CI_Model
{


  public function insert($data)
  {
      $this->db->insert('tbl_inbox',$data);
      return TRUE;
  }
  public function list_inbox()
  {
      $this->db->from('tbl_inbox');
      $query = $this->db->get();
      return $query->result();
  }
  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_inbox');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function update($id_inbox,$fullname,$email,$deskripsi,$pesan)
  {
    $hasil=$this->db->query("UPDATE tbl_inbox SET fullname='$fullname',email='$email',deskripsi='$deskripsi', pesan='$pesan' WHERE id_inbox='$id_inbox'");
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_inbox');
      return TRUE;
  }

}
