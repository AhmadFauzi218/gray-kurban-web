<?php
/**
 *
 */
class Kemitraan_lainnya extends CI_Model
{

  public function list_kemitraan()
  {
      $this->db->from('tbl_kemudahanlainnya');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_kemudahanlainnya');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('tbl_kemudahanlainnya',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tbl_kemudahanlainnya',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_kemudahanlainnya');
      return TRUE;
  }

}
