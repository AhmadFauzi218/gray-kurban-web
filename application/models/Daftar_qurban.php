<?php
/**
 *
 */
class Daftar_qurban extends CI_Model
{

  public function list_qurban()
  {
      $this->db->from('tbl_pendaftaranqurban');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_pendaftaranqurban');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('tbl_pendaftaranqurban',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tbl_pendaftaranqurban',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_pendaftaranqurban');
      return TRUE;
  }

}
