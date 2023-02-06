<?php 
$config_db_username     = "root";
$config_db_password     = "ru082211";
$config_db_host         = "localhost";
$config_db_nama         = "data_sktv";

$koneksi = mysqli_connect($config_db_host,$config_db_username,$config_db_password,$config_db_nama);

if($koneksi == true){
    // echo "<h1>Koneksi sukses</h1>";
}else{
    echo "<h1>Koneksi Gagal</h1>";
}
?>
