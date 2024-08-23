<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $page = "Profile";
  include 'head.php'

  ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<style>
  .footer-bg {
    background-color: #f8f9fa;
    padding: 40px 0;
    color: #6c757d;
  }

  .footer-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .footer-contact-list,
  .footer-link-list {
    list-style: none;
    padding: 0;
  }

  .footer-contact-list li,
  .footer-link-list li {
    margin-bottom: 10px;
  }

  .footer-contact-list li i,
  .footer-link-list li a {
    color: #007bff;
    margin-right: 10px;
  }

  .footer-bottom {
    border-top: 1px solid #dee2e6;
    padding-top: 20px;
  }

  .social-media a {
    margin-right: 15px;
    color: #007bff;
    font-size: 18px;
    transition: color 0.3s;
  }

  .social-media a:hover {
    color: #0056b3;
  }

  .footer-credit {
    font-size: 14px;
    color: #6c757d;
  }
</style>

<body class="landing-page">
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <div class="page-wrapper landing-page">
    <div class="landing-home">
      <ul class="decoration">
        <li class="one"><img class="img-fluid" src="assets/images/landing/decore/1.png" alt=""></li>
        <li class="two"><img class="img-fluid" src="assets/images/landing/decore/2.png" alt=""></li>
        <li class="three"><img class="img-fluid" src="assets/images/landing/decore/4.png" alt=""></li>
        <li class="four"><img class="img-fluid" src="assets/images/landing/decore/3.png" alt=""></li>
        <li class="five"><img class="img-fluid" src="assets/images/landing/2.png" alt=""></li>
        <li class="six"><img class="img-fluid" src="assets/images/landing/decore/cloud.png" alt=""></li>
        <li class="seven"><img class="img-fluid" src="assets/images/landing/2.png" alt=""></li>
      </ul>
      <div class="container-fluid">
        <div class="sticky-header">
          <header>
            <nav class="navbar navbar-b navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu"><a class="navbar-brand p-0" href="#"><img class="img-fluid" src="assets/images/landing/landing_logo.png" alt=""></a>
              <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
              <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                  <li class="nav-item"><a class="nav-link" href="#fitur">Fitur Unggulan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#frameworks">Teknologi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#components">Components</a></li>
                  <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="checkout.php" target="_blank">Beli</a></li>
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <div class="row">
          <div class="col-xl-5 col-lg-6">
            <div class="content">
              <div>
                <h1 class="wow fadeIn">Selamat Datang di Medicine App!</h1>
                <h2 class="txt-secondary wow fadeIn">Lebih Cepat, Lebih Ringan & Ramah Pengembang</h2>
                <p class="mt-3 wow fadeIn">Medicine App memudahkan pengelolaan kesehatan Anda dengan desain modern dan bersih, mengurangi waktu integrasi proyek Anda. Aplikasi ini hadir banyak fitur unggulan, mode gelap, dan siap untuk integrasi ke mana saja</p>
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div class="wow fadeIn"><img class="screen1" src="assets/images/landing/screen1.jpg" alt=""></div>
            <div class="wow fadeIn"><img class="screen2" src="assets/images/landing/screen2.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <section class="section-space cuba-demo-section layout" id="fitur">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow pulse">
            <div class="cuba-demo-content">
              <div class="couting">
                <p>Beberapa Fitur Unggulan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row demo-imgs">
          <?php
          include 'koneksi.php';
          $sql = mysqli_query($koneksi, "SELECT * FROM fitur");
          while ($row = mysqli_fetch_array($sql)) {
          ?>
            <div class="col-lg-4 col-md-6 wow pulse demo-content">
              <div class="cuba-demo-img">
                <div class="overflow-hidden"><img class="img-fluid" src="<?= $row['urlgambar'] ?>" alt="default"></div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0"><?= $row['deskripsi'] ?></h3>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <section class="section-space cuba-demo-section app_bg frameworks-section" id="frameworks">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow pulse">
            <div class="cuba-demo-content mt50">
              <div class="couting">
              </div>
              <p class="mb-0">Menggunakan Teknologi Terbaru</p>
            </div>
          </div>
          <div class="col-sm-12 framworks">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item"><a class="nav-link d-flex active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> <img src="assets/images/landing/icon/html/html.png" alt="">
                  <div class="text-start">
                    <h5 class="mb-0">HTML</h5>
                    <p class="mb-0">Frameworks</p>
                  </div>
                </a></li>
              <li class="nav-item"><a class="d-flex nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> <img src="assets/images/landing/icon/react/react1.png" alt="">
                  <div class="text-start">
                    <h5 class="mb-0">React</h5>
                    <p class="mb-0">Frameworks</p>
                  </div>
                </a></li>
              <li class="nav-item"><a class="d-flex nav-link" id="pills-angular-tab" data-bs-toggle="pill" href="#pills-angular" role="tab" aria-controls="pills-angular" aria-selected="false"> <img src="assets/images/landing/icon/angular/angular.svg" alt="">
                  <div class="text-start">
                    <h5 class="mb-0">Angular</h5>
                    <p class="mb-0">Frameworks</p>
                  </div>
                </a></li>
              <li class="nav-item"><a class="d-flex nav-link" id="pills-vue-tab" data-bs-toggle="pill" href="#pills-vue" role="tab" aria-controls="pills-vue" aria-selected="false"> <img src="assets/images/landing/icon/vue/vue.png" alt="">
                  <div class="text-start">
                    <h5 class="mb-0">Vue</h5>
                    <p class="mb-0">Frameworks</p>
                  </div>
                </a></li>
              <li class="nav-item"><a class="d-flex nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"> <img src="assets/images/landing/icon/laravel/laravel.png" alt="">
                  <div class="text-start">
                    <h5 class="mb-0">Laravel</h5>
                    <p class="mb-0">Frameworks</p>
                  </div>
                </a></li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <ul class="framworks-list">
                  <li class="box wow fadeInUp">
                    <div> <img src="assets/images/landing/icon/html/bootstrap.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Booxstrap</h6>
                  </li>
                  <li class="box wow fadeInUp">
                    <div> <img src="assets/images/landing/icon/html/css.png" alt=""></div>
                    <h6 class="mb-0 mt-3">CSS</h6>
                  </li>
                  <li class="box wow fadeInUp">
                    <div> <img src="assets/images/landing/icon/html/sass.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Sass</h6>
                  </li>
                  <li class="box wow fadeInUp">
                    <div> <img src="assets/images/landing/icon/html/gulp.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Gulp</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/html/kit.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Starter Kit</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/html/forms.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Forms</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/html/table.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Tables</h6>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="framworks-list">
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/hook.png" alt=""></div>
                    <h6 class="mb-0 mt-3">React Hook</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/reactstrap.png" alt=""></div>
                    <h6 class="mb-0 mt-3">React Strap</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/noquery.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Jquery</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/chat.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Chat</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/animation.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Router Animation</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/props_state.png" alt=""></div>
                    <h6 class="mb-0 mt-3">State & Props</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/react/reactrouter.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Reactrouter</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/react/chart.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Amazing Chart</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/react/map.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Map</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/react/gallery.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Gallery</h6>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-angular" role="tabpanel" aria-labelledby="pills-angular-tab">
                <ul class="framworks-list">
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/1.png" alt=""></div>
                    <h6 class="mb-0 mt-3">SCSS</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/2.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Ng Bootstrap</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/3.png" alt=""></div>
                    <h6 class="mb-0 mt-3">RXjs</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/4.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Router</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/5.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Form</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/6.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Apex chart</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/7.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Chart.js</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/8.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Chartist</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/9.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Google Map</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/angular/10.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Gallery</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/angular/11.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Ecommerce</h6>
                  </li>
                  <li class="box wow bounceIn">
                    <div> <img src="assets/images/landing/icon/angular/14.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Chat</h6>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-vue" role="tabpanel" aria-labelledby="pills-vue-tab">
                <ul class="framworks-list">
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/nojquery.png" alt=""></div>
                    <h6 class="mb-0 mt-3">No jquery</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vuebootstrap.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vue Bootstrap</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vuex.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vuex</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/chart.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Chart</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vueswiper.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vue Swiper</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vuerouter.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vue Router</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vuemasonary.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vue Masonary</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/vuecli.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Vue Cli</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/animation.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Animation</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/vue/rangeslider.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Range Slider</h6>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <ul class="framworks-list">
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/laravel.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Laravel 10</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/bootstrap.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Bootstrap 5</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/html/sass.png" alt=""></div>
                    <h6 class="mb-0 mt-3">SASS</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/blade.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Blade</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/layouts.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Layouts</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/npm.png" alt=""></div>
                    <h6 class="mb-0 mt-3">NPM</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/mix.png" alt=""></div>
                    <h6 class="mb-0 mt-3">MIX</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/yarn.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Yarn</h6>
                  </li>
                  <li class="box">
                    <div> <img src="assets/images/landing/icon/laravel/sasswebpack.png" alt=""></div>
                    <h6 class="mb-0 mt-3">Sasswebpack</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-space cuba-demo-section bg-Widget pb-0 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow pulse">
            <div class="cuba-demo-content mt50">
              <div class="couting">
                <h2>Cards</h2>
              </div>
              <p>Card Untuk Memudahkan User</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid o-hidden">
        <div class="row landing-cards">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-sm-5 col-12"><img class="img-fluid landing-card" src="assets/images/landing/cards/1.jpg" alt=""></div>
              <div class="col-sm-4 col-7"><img class="img-fluid landing-card" src="assets/images/landing/cards/2.jpg" alt=""></div>
              <div class="col-sm-3 col-5"><img class="img-fluid landing-card" src="assets/images/landing/cards/3.jpg" alt=""></div>
              <div class="col-sm-8 col-12">
                <div class="row">
                  <div class="col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/4.jpg" alt=""></div>
                  <div class="col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/5.jpg" alt=""></div>
                  <div class="col-5"><img class="img-fluid landing-card" src="assets/images/landing/cards/7.jpg" alt=""></div>
                  <div class="col-7"><img class="img-fluid landing-card" src="assets/images/landing/cards/8.jpg" alt=""></div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="row">
                  <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/6.jpg" alt=""></div>
                  <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/9.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/10.jpg" alt=""></div>
              <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/15.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/11.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/21.jpg" alt=""></div>
              <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/14.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/13.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-space cuba-demo-section app_bg">
      <div class="container text-start">
        <h6>Tentang Kami</h6>
        <p>Medicine adalah aplikasi inovatif yang dirancang untuk memudahkan akses dan manajemen informasi medis bagi semua pengguna. Dengan tujuan utama untuk meningkatkan efisiensi dan kualitas pelayanan kesehatan, kami menawarkan berbagai fitur yang memungkinkan pengguna untuk mengakses informasi kesehatan, melacak riwayat medis, serta berinteraksi dengan profesional kesehatan secara lebih efektif.</p>

        <h6>Misi Kami</h6>
        <p>Di Medicine, misi kami adalah untuk mengembangkan solusi digital yang mendukung setiap aspek dari perjalanan kesehatan pengguna. Kami berkomitmen untuk memberikan platform yang aman, mudah digunakan, dan kaya akan fitur yang memberdayakan pengguna untuk mengelola kesehatan mereka dengan lebih baik.</p>

        <h6>Visi Kami</h6>
        <p>Kami bercita-cita untuk menjadi pemimpin dalam teknologi kesehatan digital, memberikan dampak positif pada kehidupan jutaan orang dengan menyediakan alat yang diperlukan untuk membuat keputusan kesehatan yang lebih baik.</p>
      </div>
    </section>
    <section class="section-space cuba-demo-section components-section" id="components">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow pulse">
            <div class="cuba-demo-content mt50">
              <div class="couting">
                <h2>Client Kami</h2>
              </div>
              <!-- <p>Yang Memanjakan User</p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="container container-modify">
        <div class="row component_responsive">
          <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM mitra");
          while ($row = mysqli_fetch_array($sql)) {
          ?>
            <div class="col-xl-2 col-md-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="<?= $row['gambar'] ?>" alt="">
                <h6 class="m-0 Pt-4"><?= $row['nama'] ?></h6>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <footer class="footer-bg">
      <div class="container">
        <div class="row ptb50">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="footer-logo">
              <img class="img-fluid" src="assets/images/landing/landing_logo.png" alt="Medicine">
            </div>
            <p class="footer-description mt-3">Medicine App adalah platform yang inovatif, membantu Anda untuk tetap terhubung dengan layanan kesehatan terbaik di seluruh Indonesia.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <h4 class="footer-title">Kontak Kami</h4>
            <ul class="footer-contact-list">
              <li><i class="fas fa-map-marker-alt"></i> Jl. Sehat No. 10, Tanjung Morawa, Indonesia</li>
              <li><i class="fas fa-envelope"></i> <a href="mailto:support@medicineapp.com">support@medicineapp.com</a></li>
              <li><i class="fas fa-phone"></i> <a href="tel:+62212345678">+62 21 234 5678</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12 mb-4">
            <h4 class="footer-title">Tautan Cepat</h4>
            <ul class="footer-link-list">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Layanan Kami</a></li>
              <li><a href="#">Hubungi Kami</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Syarat dan Ketentuan</a></li>
            </ul>
          </div>
        </div>
        <div class="row footer-bottom pt-3">
          <div class="col-md-6">
            <div class="social-media">
              <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-md-6 text-md-end">
            <p class="footer-credit">© 2024 Medicine App. Semua hak dilindungi undang-undang.</p>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <?php include 'script.php'; ?>
</body>

</html>