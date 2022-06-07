<?php
/**
 *
 */
class Tentang_qurban extends CI_Model
{

  public function list_tentangqurban()
  {
      $this->db->from('tbl_aboutqurban');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_aboutqurban');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('tbl_aboutqurban',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tbl_aboutqurban',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_aboutqurban');
      return TRUE;
  }

}
