<?php
/**
 *
 */
class M_testimoni extends CI_Model
{

  public function list_testimoni()
  {
      $this->db->from('tbl_testimonial');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_testimonial');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('tbl_testimonial',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tbl_testimonial',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_testimonial');
      return TRUE;
  }

}
