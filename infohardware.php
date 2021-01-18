
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

    <div style="margin-top:20px;" class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
             INFO HARDWARE
              </h3>
              <p class="subtitle-a">
            Memberikan Informasi data Hardware
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
   <style>
   #button {
  float: center;
  margin-top:-20px ;
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
   }
   </style>


    <form action="" method="POST" >
   <center>
   <input type="submit" name="cpu1" id="button" value="INPUT DEVICE">
   <input type="submit" id="button" name="cpu2" value="PROCESS DEVICE">
   <input type="submit" id="button" name="cpu3" value="OUTPUT DEVICE">
   <input type="submit" id="button" name="cpu4" value="STORAGE DEVICE">
  
  <br>
  <br>
   
  <center>     
  </form>
  <?php
require 'koneksi.php';

//input device
$infoip = new InputDevice(" Input Device ","Sesuai namanya, perangkat keras jenis process drive berfungsi untuk mengolah data dan menjalankan proses pada sistem komputer. ","perangkat proses", "process device yaitu CPU, RAM, VGA, dan sebagainya.");

// //input device
$infopd = new ProsesDevice(" Process Device","Jenis perangkat keras komputer ini berfungsi untuk memasukkan data atau informasi (dalam bentuk teks, gambar, video, dan audio) ke komputer. " ,"perangkat input/masukan","Beberapa contoh hardware yang termasuk input device seperti keyboard, mouse pen, microphone, webcam, joystick, dan lain-lain.");


// //input device
$infood = new OutputDevice( " Output Device  ", "ada jenis hardware untuk mencetak dan menampilkan informasi dari hasil input data. Untuk data tersebut berasal dari hardware input setelah hardware process ","perangkat output/keluaran","speaker, monitor, dan printer.");


// //input device
$infosd = new StorageDevice(" Storage Device  ", "Storage device merupakan perangkat keras komputer yang berfungsi sebagai media penyimpanan, berguna untuk menyimpan data-data komputer ", "perangkat untuk menyimpan",", hardisk, floppy disk, CD/DVD, dan flashdisk." );


//inpudevice
if (isset($_POST['cpu1'])) {
  if ($infoip->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infoip->lihatInfo();
    "<br/>";
    echo $infoip->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu2'])) {
  if ($infopd->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infopd->lihatInfo();
    "<br/>";
    echo $infopd->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu3'])) {
  if ($infood->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infood->lihatInfo();
    "<br/>";
    echo $infood->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu4'])) {
  if ($infosd->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infosd->lihatInfo();
    "<br/>";
    echo $infosd->Proses();
  }
}


?>