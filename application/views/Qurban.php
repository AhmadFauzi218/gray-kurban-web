<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?? "" ;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <?php foreach ($icon as $icon): ?>
  <link href="<?=base_url()?>assets/picture/<?=$icon->foto?>" alt="foto" style ="width: 200px;" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <?php endforeach; ?>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/QurbanHome/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/QurbanHome/css/styleee.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v4.7.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php foreach ($dataweb as $dataweb): ?>
  <header id="header" class="fixed-top d-flex align-items-center " style="background : orange;">
    <div class="container d-flex align-items-center justify-content-between">

      <h3 class="logo"><a href="index.html"><?=$dataweb->title_website?></a></h3>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#daftarqurban">Daftar Qurban</a></li>
          <li><a class="nav-link scrollto" href="#tentangqurban">Tentang Qurban</a></li>
          <li><a class="nav-link scrollto" href="#mengapaberqurban">Mengapa Berqurban</a></li>
          <li><a class="nav-link scrollto" href="#tentangmereka">Tentang Mereka</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
   



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><u><?=$dataweb->title_paragraf?></u></h2>
          <p class="animate__animated animate__fadeInUp"><?=$dataweb->welcomeparagraf?></p>
          <a href="#daftarqurban" class="btn-get-started animate__animated animate__fadeInUp scrollto">Qurban Sekarang</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <?php endforeach; ?>

  <main id="main">

    <!-- ======= Pricing Section ======= -->
    <section id="daftarqurban" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1><b>Daftar Harga Qurban Tahun 2022/1443 H</b></h1>

        </div>

        <div class="row">
          <?php foreach ($data as $data): ?>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h5><?=$data->nama_hewan_qurban?></h5>
              <h4><img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto" style ="width: 200px; height: 250px;"></h4>
              <ul>
                <li> Jenis: <?=$data->jenis_hewan_qurban?></li>
                <li>Rp. <?= number_format_short($data->harga_hewan_qurban)?></li>
                <li>Stok Tersedia <?=$data->stok_hewan_qurban?></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" style="background: orange;">Qurban Sekarang</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="tentangqurban" class="why-us">
      <div class="container-fluid">

        <div class="row">
    <?php foreach ($datatentangqurban as $datatentangqurban): ?>

          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("<?=base_url()?>assets/picture/<?=$datatentangqurban->foto?>");' data-aos="fade-right">
            <a href="<?=$datatentangqurban->link?>" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3><?=$datatentangqurban->deskripsi2?></h3>
              <p align="justify">
                <?=$datatentangqurban->deskripsi3?>
              </p>
            </div>

            
                <br>
                <a href="#" class="btn btn-wrap" style="background: orange">Qurban Sekarang</a>
              </ul>
            

          </div>

        <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="mengapaberqurban" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Mengapa Berqurban </h3>
        </div>

        <div class="row">
    <?php foreach ($datawhyqurban as $datawhyqurban): ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
               <td class="text-center"><img src="<?=base_url()?>assets/picture/<?=$datawhyqurban->foto?>" alt="foto" style="width: 50px;"></td>
              <h4><a href="#"><?=$datawhyqurban->judul?></a></h4>
              <p align="justify"><?=$datawhyqurban->deskripsi?></p>
            </div>
          </div>
        <?php endforeach; ?>
         
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Laporan Qurban</h3>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Lihat Laporan</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="tentangmereka" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Kata Mereka Yang Berqurban</h3>
        </div>

        <div class="row">
          <?php foreach ($datatestimoni as $datatestimoni): ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 15px;">
            <div class="member d-flex align-items-start">
              <div class="pic" style="border-radius: 120%;"><img src="<?=base_url()?>assets/picture/<?=$datatestimoni->foto?>" alt="foto" class="img-fluid" alt=""  style ="width: 140px; height: 150px; border-radius: 950%;"></div>
              <div class="member-info">
                <h4><?=$datatestimoni->fullname_testimonial?></h4>
                <span><?=$datatestimoni->description_testimonial ?></span>
                <p><?=$datatestimoni->detail_testimonial ?></p>
                <br>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Contact Us</h3>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <?php foreach ($contact as $contact): ?>
          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?=$contact->location?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?=$contact->email?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?=$contact->no_hp?></p>
              </div>

            </div>

          </div>
        <?php endforeach; ?>
          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="<?=base_url()?>index.php/Qurban/insertdata"  method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="deskripsi" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">

              </div>
              <div class="text-center"><button type="submit" class="btn btn-warning" >Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
        <?php foreach ($kemitraan as $kemitraan): ?>
            <div class="swiper-slide"><img src="<?=base_url()?>assets/picture/<?=$kemitraan->foto?>" alt="foto" style="width: 120px;"  class="img-fluid" alt=""></div>
      <?php endforeach; ?>
          </div>
          
        </div>

      </div>
    </section><!-- End Clients Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php foreach ($footer as $footer): ?>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?=$footer->coppyright?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href=""><?=$footer->author?></a>
      </div>
    </div>
    <<?php endforeach; ?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/QurbanHome/assets/js/main.js"></script>

</body>

</html>