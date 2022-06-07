<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Contact_me');
    }

  public function index()
  {
    $data['title'] = "Contact";
    $data['konten'] = "Contact";
    $data['isi'] = 'contact/dtcontact';
    $data['data'] =$this->Contact_me->list_contact();
    $this->load->view('contact/dtcontact', $data);
  }
  public function edit($id_contact)
    {

          $data['title'] = "Contact Edit";
      $kondisi = array('id_contact' => $id_contact );

      $data['data'] = $this->Contact_me->get_by_id($kondisi);
      return $this->load->view('contact/edit_data',$data);
    }
    public function tambah()
    {
      $data['title'] = "Contact Me";
    $data['konten'] = "Contact Me";
    $data['isi'] = 'contact/dtcontact';
      return $this->load->view('contact/tambahdata',$data);
    }
    public function insertdata()
    {
      $location   = $this->input->post('location');
      $email   = $this->input->post('email');
      $no_hp = $this->input->post('no_hp');
      $this->Contact_me->insert($location,$email,$no_hp);
      redirect('Contact');

    }
    public function updatedata()
    {
      $id_contact   = $this->input->post('id_contact');
      $location   = $this->input->post('location');
      $email   = $this->input->post('email');
      $no_hp = $this->input->post('no_hp');
      $this->Contact_me->update($id_contact,$location,$email,$no_hp);
      redirect('Contact');

  }

  public function deletedata($id_contact)
  {

      $where = array('id_contact' => $id_contact );
      $this->Contact_me->delete($where);
      return redirect('Contact');
  }

} 
