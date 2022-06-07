<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('M_testimoni');
    }

  public function index()
  {
    $data['title'] = "Testimoni";
    $data['konten'] = "Testimoni";
    $data['isi'] = 'testimoni/dttestimoni';
    $data['data'] =$this->M_testimoni->list_testimoni();
    $this->load->view('testimoni/dttestimoni', $data);
  }
  public function edit($id_testimonial)
    {

          $data['title'] = "Testimonial";
      $kondisi = array('id_testimonial' => $id_testimonial );

      $data['data'] = $this->M_testimoni->get_by_id($kondisi);
      return $this->load->view('testimoni/edit_data',$data);
    }
    public function tambah()
    {
      $data['title'] = "Data Testimoni";
    $data['konten'] = "Data Testimoni";
    $data['isi'] = 'testimoni/dttestimoni';
      return $this->load->view('testimoni/tambahdata',$data);
    }
    public function insertdata()
    {
      $fullname_testimonial   = $this->input->post('fullname_testimonial');
      $description_testimonial   = $this->input->post('description_testimonial');
      $detail_testimonial = $this->input->post('detail_testimonial');

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
                            'fullname_testimonial'       => $fullname_testimonial,
                            'description_testimonial'       => $description_testimonial,
                            'detail_testimonial'       => $detail_testimonial,
                            'foto'       => $foto['file_name'],
                          );
              $this->M_testimoni->insert($data);
              redirect('Testimoni');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      }

    }
    public function updatedata()
    {
      $id_testimonial   = $this->input->post('id_testimonial');
      $fullname_testimonial   = $this->input->post('fullname_testimonial');
      $description_testimonial   = $this->input->post('description_testimonial');
      $detail_testimonial = $this->input->post('detail_testimonial');

      $path = './assets/picture';

      $kondisi = array('id_testimonial' => $id_testimonial );

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

                            'fullname_testimonial'       => $fullname_testimonial,
                            'description_testimonial'       => $description_testimonial,
                            'detail_testimonial'       => $detail_testimonial,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->M_testimoni->update($data,$kondisi);
              redirect('Testimoni');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }
    public function deletedata($id_testimonial,$foto = null)
      {
        $path = './assets/picture/';
        @unlink($path.$foto);

        $where = array('id_testimonial' => $id_testimonial);
        $this->M_testimoni->delete($where);
        return redirect('Testimoni');
      }
} 
