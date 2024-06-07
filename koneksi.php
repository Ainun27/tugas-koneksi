<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "uts_312310013";

$koneksi   = mysqli_connect($host, $user, $password, $database);

if($koneksi == false){
echo"Koneksi KeServer Gagal!";
die();
} else {
echo "Koneksi Berhasil";
}
?>