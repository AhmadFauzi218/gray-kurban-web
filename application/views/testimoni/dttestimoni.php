<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?? "" ;?></title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('dashboard');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Your App</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php $this->load->view('template/menu'); ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="<?=base_url('assets/');?>img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">
       
          <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Informasi Testimonial Pengunjung</h1>
              </div>
            </div>
          </div>
          <div class="card mb-4 py-3 border-bottom-primary card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Testimoni</h3>

              <a href="<?=base_url()?>index.php/Testimoni/tambah" class="btn btn-success">Tambah Testimoni</a>
              <br>
                  </div>
                  <div class="box-body">
                    <div class="table table-responsive">
                      <table id="example1" class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">FullName Testimonial</th>
                            <th>Deskripsi Testimonial</th>
                            <th class="text-center">Detail Testimonial</th>
                            
                            <th class="text-center">Foto</th>
                            <th></th>
                          </tr>
                        </thead>
                      <?php $no =1; 
                        foreach ($data as $data): 
                        
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $data->fullname_testimonial?></td>
                            <td class="text-center"><?php echo $data->description_testimonial?></td>
                            <td class="text-center"><?php echo $data->detail_testimonial?></td>
                            <td class="text-center"><img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto" style="width: 120px;"></td>
                            <td>  <a href="<?=base_url()?>index.php/Testimoni/edit/<?=$data->id_testimonial?>" class="btn btn-success btn-sm">
                                <i class=""></i> Edit
                              </a> |
                              <a href="<?=base_url()?>index.php/Testimoni/deletedata/<?=$data->id_testimonial?>" class="btn btn-danger btn-sm">
                                <i class=""></i> Hapus
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <?php $this->load->view('template/footer'); ?>
