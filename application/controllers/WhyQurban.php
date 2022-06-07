<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhyQurban extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Why_qurban');
    }

  public function index()
  {
    $data['title'] = "Qurban";
    $data['konten'] = "Qurban";
    $data['isi'] = 'whyqurban/dtwhyqurban';
    $data['data'] =$this->Why_qurban->list_whyqurban();
    $this->load->view('whyqurban/dtwhyqurban', $data);
  }
  public function edit($id_whyqurban)
    {

    $data['title'] = "Qurban";
    $data['konten'] = "Qurban";
      $kondisi = array('id_whyqurban' => $id_whyqurban );

      $data['data'] = $this->Why_qurban->get_by_id($kondisi);
      return $this->load->view('whyqurban/edit_data',$data);
    }
    public function tambah()
    {
    $data['title'] = "Qurban";
    $data['konten'] = "Qurban";
    $data['isi'] = 'whyqurban/dtqurban';
      return $this->load->view('whyqurban/tambahdata',$data);
    }
    public function insertdata()
    {
      
      $judul = $this->input->post('judul');
      $deskripsi = $this->input->post('deskripsi');
      
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
                            'deskripsi'       => $deskripsi,
                            'foto'       => $foto['file_name'],
                          );
              $this->Why_qurban->insert($data);
              redirect('WhyQurban');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      }

    }
     public function updatedata()
    {
      $id_whyqurban   = $this->input->post('id_whyqurban');
      $judul = $this->input->post('judul');
      $deskripsi = $this->input->post('deskripsi');

      $path = './assets/picture/';

      $kondisi = array('id_whyqurban' => $id_whyqurban );

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
                            'deskripsi'       => $deskripsi,
                            'foto'       => $foto['file_name'],                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Why_qurban->update($data,$kondisi);
              redirect('WhyQurban');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

  public function deletedata($id_whyqurban,$foto = null)
  {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id_whyqurban' => $id_whyqurban );
      $this->Why_qurban->delete($where);
      return redirect('WhyQurban');
  }

} 
