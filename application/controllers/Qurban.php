<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qurban extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
          $this->load->helper('short_number');
           $this->load->library('upload');
           $this->load->model('Daftar_qurban');
           $this->load->model('Profile_website');
           $this->load->model('Tentang_qurban');           
           $this->load->model('Why_qurban');
           $this->load->model('M_testimoni');           
           $this->load->model('Inbox_me');                   
           $this->load->model('Contact_me');
           $this->load->model('Kemitraan_lainnya');

    }
	public function index()
	{
		$data['title'] = "Qurban";
		$data['konten'] = "Qurban";
		$data['data'] =$this->Daftar_qurban->list_qurban();
		$data['dataweb'] =$this->Profile_website->list_web();
		$data['datatentangqurban'] =$this->Tentang_qurban->list_tentangqurban();
    	$data['datawhyqurban'] =$this->Why_qurban->list_whyqurban();
    	$data['datatestimoni'] =$this->M_testimoni->list_testimoni();
		$data['icon'] =$this->Profile_website->list_web();
		$data['footer'] =$this->Profile_website->list_web();    
    $data['contact'] =$this->Contact_me->list_contact();
    $data['kemitraan'] =$this->Kemitraan_lainnya->list_kemitraan();
		$this->load->view('Qurban', $data);
	}
	 public function insertdata()
    {
      $fullname = $this->input->post('fullname');
      $email = $this->input->post('email');
      $deskripsi = $this->input->post('deskripsi');
      $pesan = $this->input->post('pesan');

     
              $data = array(

                               'fullname'       => $fullname,
                               'email'       => $email,                               
                               'deskripsi'       => $deskripsi,
                              'pesan'       => $pesan,
                          );
              $this->Inbox_me->insert($data);
              redirect('Qurban');
          }
}
