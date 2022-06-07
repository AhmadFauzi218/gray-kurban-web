<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarQurban extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Daftar_qurban');
    }

  public function index()
  {
    $data['title'] = "Daftar Qurban";
    $data['konten'] = "DaftarQurban";
    $data['isi'] = 'daftarqurban/dtqurban';
    $data['data'] =$this->Daftar_qurban->list_qurban();
    $this->load->view('daftarqurban/dtqurban', $data);
  }
  public function edit($id_qurban)
    {
          $data['title'] = "Profile Website";
      $kondisi = array('id_qurban' => $id_qurban );

      $data['data'] = $this->Daftar_qurban->get_by_id($kondisi);
      return $this->load->view('daftarqurban/edit_data',$data);
    }
    public function tambah()
    {
      $data['title'] = "Daftar Qurban";
    $data['konten'] = "DaftarQurban";
    $data['isi'] = 'daftarqurban/dtqurban';
      return $this->load->view('daftarqurban/tambahdata',$data);
    }
    public function insertdata()
    {
      $kode_hewan_qurban   = $this->input->post('kode_hewan_qurban');
      $nama_hewan_qurban   = $this->input->post('nama_hewan_qurban');
      $jenis_hewan_qurban = $this->input->post('jenis_hewan_qurban');
      $harga_hewan_qurban = $this->input->post('harga_hewan_qurban');
      $stok_hewan_qurban = $this->input->post('stok_hewan_qurban');

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
                            'kode_hewan_qurban'       => $kode_hewan_qurban,
                            'nama_hewan_qurban'       => $nama_hewan_qurban,
                            'jenis_hewan_qurban'       => $jenis_hewan_qurban,
                            'harga_hewan_qurban'       => $harga_hewan_qurban,
                            'stok_hewan_qurban'       => $stok_hewan_qurban,
                            'foto'       => $foto['file_name'],
                          );
              $this->Daftar_qurban->insert($data);
              redirect('DaftarQurban');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      }

    }
    public function updatedata()
    {
      $id_qurban   = $this->input->post('id_qurban');
      $kode_hewan_qurban   = $this->input->post('kode_hewan_qurban');
      $nama_hewan_qurban   = $this->input->post('nama_hewan_qurban');
      $jenis_hewan_qurban = $this->input->post('jenis_hewan_qurban');
      $harga_hewan_qurban = $this->input->post('harga_hewan_qurban');
      $stok_hewan_qurban = $this->input->post('stok_hewan_qurban');

      $path = './assets/picture/';

      $kondisi = array('id_qurban' => $id_qurban );

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
                            'kode_hewan_qurban'       => $kode_hewan_qurban,
                            'nama_hewan_qurban'       => $nama_hewan_qurban,
                            'jenis_hewan_qurban'       => $jenis_hewan_qurban,
                            'harga_hewan_qurban'       => $harga_hewan_qurban,
                            'stok_hewan_qurban'       => $stok_hewan_qurban,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Daftar_qurban->update($data,$kondisi);
              redirect('DaftarQurban');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

  public function deletedata($id_qurban,$foto)
  {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id_qurban' => $id_qurban );
      $this->Daftar_qurban->delete($where);
      return redirect('DaftarQurban');
  }

} 
