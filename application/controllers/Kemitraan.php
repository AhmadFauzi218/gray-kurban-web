<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemitraan extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Kemitraan_lainnya');
    }

  public function index()
  {
    $data['title'] = "Kemitraan";
    $data['konten'] = "Kemitraan";
    $data['isi'] = 'kemitraan/dtkemitraan';
    $data['data'] =$this->Kemitraan_lainnya->list_kemitraan();
    $this->load->view('kemitraan/dtkemitraan', $data);
  }
  public function edit($id_kemitraan)
    {
       $data['title'] = "Kemitraan";
   
      $kondisi = array('id_kemitraan' => $id_kemitraan );

      $data['data'] = $this->Kemitraan_lainnya->get_by_id($kondisi);
      return $this->load->view('Kemitraan/edit_data',$data);
    }
    public function tambah()
    {
      $data['title'] = "Daftar Kemitraan";
    $data['konten'] = "Kemitraan";
    $data['isi'] = 'kemitraan/dtkemitraan';
      return $this->load->view('kemitraan/tambahdata',$data);
    }
    public function insertdata()
    {
      $judul   = $this->input->post('judul');
      
      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'judul'       => $judul,
                            'foto'       => $foto['file_name'],
                          );
              $this->Kemitraan_lainnya->insert($data);
              redirect('Kemitraan');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      }

    }
    public function updatedata()
    {
      $id_kemitraan   = $this->input->post('id_kemitraan');
      $judul   = $this->input->post('judul');
      
      $path = './assets/picture/';

      $kondisi = array('id_kemitraan' => $id_kemitraan );

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'judul'       => $judul,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Kemitraan_lainnya->update($data,$kondisi);
              redirect('Kemitraan');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

  public function deletedata($id_kemitraan,$foto = null)
  {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id_kemitraan' => $id_kemitraan );
      $this->Kemitraan_lainnya->delete($where);
      return redirect('Kemitraan');
  }

} 
