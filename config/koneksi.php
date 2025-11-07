<?php
$host = "localhost"; //alamat server database
$user = "root"; //username database
$password = ""; //password database 
$dbname = "db_profilsekolah"; //nama database

//Membuat koneksi ke MySQL
$koneksi = mysqli_connect($host, $user, $password, $dbname);

//Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
