<?php
require 'koneksi.php';

$info = new InfoAplikasi("gas",0,0,0,0);
$info2 = new InfoDeveloper(0);
$info3 = new InfoUpdate(0,0,0,0);
$info4 = new InfoRilis(0,0,0,0);
$info5 = new Contact(0,0,0,0);
//infoAplikasi
if (isset($_POST['infoA'])) {
  if ($info->app() ==true) {
    $info->app();
   header('location : info.php');
  }else{
  }
}


//infoDeveloper
if (isset($_POST['infoD'])) {
  if ($info2->developer() ==true) {
   header ('location : info.php');
} else {
  
  }
}

//infoUpdate
if (isset($_POST['infoU'])) {
  if ($info3->update() ==true) {
   header ('location : info.php');
} else {
  
  }
}

//infoRilis
if (isset($_POST['infoR'])) {
  if ($info4->rolis() ==true) {
   header ('location : info.php');
} else {
  
  }
}

//Contact
if (isset($_POST['infoC'])) {
  if ($info5->contact() ==true) {
   header ('location : info.php');
} else {
  
  }
}




?>
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox.css" rel="stylesheet">
  <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="home.svg" width="30" height="30" class="d-inline-block align-top" alt="">HOME
      </a>
      <h4>Sistem Diagnosa Kerusakan Hardware Menggunakan Metode Forward Chaining</h4>
    </nav>
    <!-- ======= Services Section ======= -->
    <form action="" method="POST" >
    <section  id="service" class="services-mf pt-5 route" >
      <div class="container" >
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
             INFO 
              </h3>
              <p class="subtitle-a">
          Memberikan data Informasi
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row"  >
          <div class="col-md-4" >
            <div class="service-box">
              <div href="index.php" class="service-ico">
                <span class="ico-circle" > <i class="ion-monitor"   ></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Info Aplikasi</h2>
                <p class="s-description text-center">
                 copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <li class="nav-item">
           <input type="submit" name="infoA" value="klik disini">
            <!-- <a class="nav-link js-scroll active" href="#">Klik disini</a> -->
          </li>
          <center>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Info Hardware</h2>
                <p class="s-description text-center">
                copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <div class="w-like">
                      <a href="infohardware.php"> <span class="ion-ios-plus-outline"> Klik disini</span></a>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-camera"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">INFO DEVELOPER</h2>
                <p class="s-description text-center">
                copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <li class="nav-item">
           <input  type="submit" name="infoD" value="klik disini">
          <center>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">INFO UPDATE</h2>
                <p class="s-description text-center">
                copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <li class="nav-item">
           <input type="submit" name="infoU" value="klik disini">
          <center>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">INFO RILIS</h2>
                <p class="s-description text-center">
                copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <li class="nav-item">
           <input type="submit" name="infoR" value="klik disini">
          <center>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">CONTACT SERVICES</h2>
                <p class="s-description text-center">
                copy|| Stikom Banyuwangi 2021
                </p>
                <center>
                <li class="nav-item">
           <input type="submit" name="infoC" value="klik disini">
          <center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    </form>