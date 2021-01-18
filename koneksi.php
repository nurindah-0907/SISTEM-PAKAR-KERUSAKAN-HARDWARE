<?php

class Koneksi 
{
    public $server = "localhost";
    public $username = "root";
    public $password = "";
	public $database = "db_kerusakan";
	public $kon ='' ;

    public function __construct()
    {
        $this->kon = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " .mysqli_connect_error();
        } else {
			return $this->kon;
			
        }
    }
   
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//parent
class Info
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function infoL(){
        echo '<script>alert("klik || YA ")</script>';
    }
    
}


class InfoAplikasi extends Info
{
    //encapsulation
    private $kerusakan;
    private $solusi;

    public function __construct($kerusakan,$solusi){
        $this->kerusakan = $kerusakan;
        $this->solusi = $solusi;
    }
    //methode
    function respon(){
        return "nama : $this->name , kerusakan : $this->kerusakan, solusinya : $this->solusi";
    }
    public function app(){
    echo '<script>alert("YOSI MUGHNI SWANDARU 1119101697 || NUR INDAH PRATIWI 1119101747 || ACHAMT FAUIZI 1119101693 || DESY DWI HARIYANI 1119101785 ")</script>';
                
    }        
   
}


class InfoDeveloper extends Info
{
   
    
    public function developer(){
        echo '<script>alert("YOSI MUGHNI SWANDARU 1119101697 || NUR INDAH PRATIWI 1119101747 || ACHAMT FAUIZI 1119101693 || DESY DWI HARIYANI 1119101785 ")</script>';
        
    }  
     
}

class InfoUpdate extends Info
{
  
    private $tglupdate;

    function __construct($tglupdate){
        $this->tgl = $tglupdate;
    }

    function tanggalterbaru(){
        return " $this->tgl update terbaru kami ";
    }
    
    public function update(){
        echo '<script>alert("TERAKHIR DI UPDATE 17-01-2021 !! MAAF SAAT INI BELUM ADA UPDATE DATA ")</script>';
        
    }  
     
}

class InfoRilis extends Info
{

    private $new;

    function __construct($new){
        $this->new = $new;
    }

    function rilisterbaru(){
        return "tahun 2021 : $this->new , dengan nama : $this->name";
    }
    public function rolis(){
        echo '<script>alert("DI RILIS PADA 19-01-2021 ")</script>';
        
    }  
     
}

class Contact extends Info
{
  private $email;
  private $handphone;
  private $fb;

   function __construct($email, $handphone ,$fb){
       $this->email = $email;
       $this->handphone = $handphone;
       $this->fb = $fb;
   }
   function infocontact(){
       return "email : $this->email ,  '<br/>' ,handphone : $this->handphone ,  '<br/>' , facebook : $this->fb";
   } 
    

    public function contact(){
        echo '<script>alert(" kitasemua@gmail.com || Stikombanyuwangi.ac.id ")</script>';
        
    }  
     
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//(inheritance) pewarisan/turunan
//PARENT CLASS
class Hardware {
   public $nama;
   public $info ;
   public $ket;
   public $contoh;

   public function __construct($nama,$info,$ket,$contoh){
       $this->nama = $nama;
       $this->info = $info;
       $this->ket = $ket;
       $this->contoh = $contoh;
     }
   //method untuk class 
   function proses(){
       return "hardware membantu proses kinerja komputer";
    }
    public function infoL(){
        echo '<script>alert("klik || YA ")</script>';
    }
    public function lihatInfo(){
        return "Jenis Hardware : $this->nama , '<br/>' , Info Hardware : $this->info , '<br/>' , Keterangan : $this->ket , '<br/>', Contoh Hardware : $this->contoh";
    }
}


//pewarisan adalah sebuah mekanisme yang mengizinkan seorang child memiliki/meniru sifat dan kelakuan parent
//tanpa harus membuat ulang sifat atau kelakuan tersebut (inheritance)
//CHILD class 
class InputDevice extends Hardware{
 
   function input(){
       echo " inputan data";
   }
   
}


class ProsesDevice extends Hardware{
    
    
   function prosesdev(){
       echo " proses data";
   }
}

class OutputDevice extends Hardware{
    function ouput(){
        echo"ouput data";
    }
    
}

class StorageDevice extends Hardware{
    
  function storage(){
      echo " storage data";
  }
}

?>




<!-- // $kon=mysqli_connect("localhost","root","","db_kerusakan",3306);
// if(mysqli_connect_errno()){
// 	echo "Failed to Connect to Mysql : ".mysqli_connect_error();
// } -->

<!-- // class MySqlDb{
//     protected $host = "localhost";
//         protected $username ="root";
//         protected $password=" ";
//         protected $db = "db_kerusakan";
//         protected $conn;

//     // function __construct(){
//     // $this->host = $_ENV['mysql_host'];
//     //        $this->username = $_ENV['mysql_username'] ;
//     //        $this->password = $_ENV['mysql_password'] ;
//     //        $this->db = $_ENV['mysql_database'] ;      
//     //        $this->connect();
          
//     //     }
//     private function connect(){
//             $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
//             if ($this->conn->connect_error) {
//                 die("Connection failed: " . $this->conn->connect_error);
//             }
//             }

//             function getData($table, $where){
//                 //$this->connect();
//                 $sql = "SELECT * FROM ".$table." WHERE ".$where;          
//                 $sql = $this->conn->query($sql);
//                 $sql = $sql->fetch_assoc();
//                 return $sql;}
//         }
   -->