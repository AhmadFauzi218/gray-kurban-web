<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileWebsite extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Profile_website');
    }

  public function index()
  {
    $data['title'] = "Profile Website";
    $data['konten'] = "Profile Website";
    $data['isi'] = 'profilewebsite/dtwebsite';
    $data['data'] =$this->Profile_website->list_web();
    $this->load->view('profilewebsite/dtwebsite', $data);
  }
  public function edit($id_profile)
    {
      $data['title'] = "Profile Website";
      $data['konten'] = "Profile Website";
      $kondisi = array('id_profile' => $id_profile );

      $data['data'] = $this->Profile_website->get_by_id($kondisi);
      return $this->load->view('profilewebsite/edit_data',$data);
    }
    public function tambah()
    {
      $data['title'] = "Daftar Qurban";
    $data['konten'] = "DaftarQurban";
    $data['isi'] = 'daftarqurban/dtqurban';
      return $this->load->view('daftarqurban/tambahdata',$data);
    }
   
    public function updatedata()
    {
      $id_profile   = $this->input->post('id_profile');
      $title_website   = $this->input->post('title_website');
      $title_paragraf   = $this->input->post('title_paragraf');
      $welcomeparagraf = $this->input->post('welcomeparagraf');
      $author = $this->input->post('author');
      $coppyright = $this->input->post('coppyright');
      $description = $this->input->post('description');
      $keywords = $this->input->post('keywords');

      $path = './assets/picture/';

      $kondisi = array('id_profile' => $id_profile );

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
                            'title_website'       => $title_website,
                            'title_paragraf'       => $title_paragraf,
                            'welcomeparagraf'       => $welcomeparagraf,
                            'author'       => $author,
                            'coppyright'       => $coppyright,
                            'description'       => $description,
                            'keywords'       => $keywords,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Profile_website->update($data,$kondisi);
              redirect('ProfileWebsite');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

} 
