<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Inbox_me');
    }

  public function index()
  {
    $data['title'] = "Inbox";
    $data['konten'] = "Inbox";
    $data['isi'] = 'inbox/dtinbox';
    $data['data'] =$this->Inbox_me->list_inbox();
    $this->load->view('inbox/dtinbox', $data);
  }
public function edit($id_inbox)
    {
      $data['title'] = "Inbox";
      $kondisi = array('id_inbox' => $id_inbox );

      $data['data'] = $this->Inbox_me->get_by_id($kondisi);
      return $this->load->view('Inbox/edit_data',$data);
    }
  public function deletedata($id_inbox)
  {

      $where = array('id_inbox' => $id_inbox );
      $this->Inbox_me->delete($where);
      return redirect('Inbox');
  }
  public function updatedata()
    {
      $id_inbox   = $this->input->post('id_inbox');
      $fullname   = $this->input->post('fullname');
      $email   = $this->input->post('email');
      $deskripsi = $this->input->post('deskripsi');
      $pesan = $this->input->post('pesan');
      $this->Inbox_me->update($id_inbox,$fullname,$email,$deskripsi,$pesan);
      redirect('Inbox');

  }

} 
