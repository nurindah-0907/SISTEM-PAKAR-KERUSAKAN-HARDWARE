<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
//mencari id penyakit berdasarkan gejala yang di inputkan
	$qry='select id from tb_rule where ';
	array_pop($_POST);
	$rule_input=array();
	foreach ($_POST as $where) {
		$qry.=$where."=1 and ";
		array_push($rule_input,$where);
	}
	$qry.="1=1";
	$data=mysqli_query($kon,$qry);
	$id='';
//memindahkan rule dari database ke array
	$db_rule=mysqli_query($kon,"select * from tb_rule");
	while ($d=mysqli_fetch_array($db_rule)) {
		$arr_rule[]=$d;
	}
//mencari value dari  yg memiliki nilai 1 dan akan di simpan dalam array rule
	$rule=array();
	for ($i=0; $i <sizeof($arr_rule) ; $i++) { 
		$key=array_keys($arr_rule[$i]);
		$val=$arr_rule[$i];
		$sub_rule=array();
		for($j=3;$j<(sizeof($key));$j+=2){
			if($val[$key[$j]]==1)
				$sub_rule[]=$key[$j];
		}
		$rule[]=$sub_rule;
	}
	$status=false;
//mencocokan gejala yang di inputkan user dengan rule yang ada
	for ($i=0; $i <sizeof($rule); $i++) {
		$result=($rule_input==$rule[$i]);
		if ($result) {
			$status=true;
		}
	}
//jika di temukan akan menampilkan info dan solusi dari penyakit yang di derita
	if($status==true){
		while ($d=mysqli_fetch_array($data)) {
			$id=$d['id'];
		}
		$cari_kerusakan="select * from tb_kerusakan where id=$id";
		$db=mysqli_query($kon,$cari_kerusakan);
		while ($d=mysqli_fetch_array($db)) {
			$kerusakan=$d['kerusakan'];
			// $info=$d['info'];
			$solusi=$d['solusi'];
			include 'hasil.php';
		}
//jika tidak
	}else{
		include 'error.php';
	}
}

// <?php
// $kon=mysqli_connect("localhost","root","","db_kerusakan",3306);
// if(mysqli_connect_errno()){
// 	echo "Failed to Connect to Mysql : ".mysqli_connect_error();
// }
// ?>
?>


//koneksi

class Database
{
    public $server = "localhost";
    public $username = "root";
    public $password = "";
	public $database = "db_kerusakan";
	public $kon ;

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


parent
abstract class Info
{
    
    // memiliki required argument: $infolengkap
    abstract public function infoLengkap();

    
}
//child 
class infoAplikasi extends Info
{
    public function showName(){
        return "Bagus Admin";
    }

    public function infoLengkap(){
        echo '<script>alert("aplikasi adalah ")</script>';

    }
}

class infoHardware extends Info
{
    public function showName(){
        return "Andre Editor";
    }

    public function infoLengkap(){
        echo '<script>alert("aplikasi adalah hardware ")</script>';
    }
}

class infoDeveloper extends info
{
    public function showName(){
        return "Bambang Reporter";
    }
    
    public function infoLengkap(){
        echo '<script>alert("aplikasi adalah ")</script>';
    }  
     
}
