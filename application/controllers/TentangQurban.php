<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangQurban extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Tentang_qurban');
    }

  public function index()
  {
    $data['title'] = "Tentang Qurban";
    $data['konten'] = "Tentang Qurban";
    $data['isi'] = 'tentangqurban/dttentangqurban';
    $data['data'] =$this->Tentang_qurban->list_tentangqurban();
    $this->load->view('tentangqurban/dttentangqurban', $data);
  }
  public function edit($id_aboutqurban)
    {
       $data['title'] = "Tentang Qurban";
    $data['konten'] = "Tentang Qurban";
      $kondisi = array('id_aboutqurban' => $id_aboutqurban );

      $data['data'] = $this->Tentang_qurban->get_by_id($kondisi);
      return $this->load->view('tentangqurban/edit_data',$data);
    }
    public function tambah()
    {
       $data['title'] = "Tentang Qurban";
    $data['konten'] = "Tentang Qurban";
      $data['title'] = "Tentang Qurban";
    $data['konten'] = "Tentang Qurban";
    $data['isi'] = 'tentangqurban/dttentangqurban';
      return $this->load->view('tentangqurban/tambahdata',$data);
    }
    public function insertdata()
    {


      $deskripsi2 = $this->input->post('deskripsi2');
      $deskripsi3 = $this->input->post('deskripsi3');
      $link = $this->input->post('link');

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

                               'deskripsi2'       => $deskripsi2,
                               'deskripsi3'       => $deskripsi3,
                              'link'       => $link,
                            'foto'       => $foto['file_name'],
                          );
              $this->Tentang_qurban->insert($data);
              redirect('TentangQurban');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      } 
    }
    public function updatedata()
    {

      $id_aboutqurban = $this->input->post('id_aboutqurban');
      $deskripsi2 = $this->input->post('deskripsi2');
      $deskripsi3 = $this->input->post('deskripsi3');
      $link = $this->input->post('link');

       $path = './assets/picture/';

      $kondisi = array('id_aboutqurban' => $id_aboutqurban );

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
                            'deskripsi2'       => $deskripsi2,
                               'deskripsi3'       => $deskripsi3,
                              'link'       => $link,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Tentang_qurban->update($data,$kondisi);
              redirect('TentangQurban');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

  public function deletedata($id_aboutqurban)
  {
      $where = array('id_aboutqurban' => $id_aboutqurban );
      $this->Tentang_qurban->delete($where);
      return redirect('TentangQurban');
  }

} 
