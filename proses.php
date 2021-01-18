<?php
include 'koneksi.php';
class Proses extends Koneksi{

    public function testrue(){
        echo '<script>alert("Lanjutkan Diagnosa")</script>';

    }
    public function alurProses(){
        if(isset($_POST['submit'])){
        //mencari id penyakit berdasarkan gejala yang di inputkan
            $qry='SELECT id from tb_rule where ';
            array_pop($_POST);
            $rule_input=array();
            foreach ($_POST as $where) {
                $qry.=$where."=1 and ";
                array_push($rule_input,$where);
            }
            $qry.="1=1";
            $data=mysqli_query($this->kon,$qry);
            $id='';
        //memindahkan rule dari database ke array
            $db_rule=mysqli_query($this->kon,"SELECT * from tb_rule");
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
                $cari_kerusakan="SELECT * from tb_kerusakan where id=$id";
                $db=mysqli_query($this->kon,$cari_kerusakan);
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
}
}

////////////////////////////////////////////////////////////////////////////////

?>