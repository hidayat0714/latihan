<?php
$server = "localhost";
$user = "root";
$password ="";
$nama_database = "db_wisata";
$db  = mysqli_connect($server, $user, $password, $nama_database);
echo "berhasil terkoneksi.....    ";
if ( !$db){
    die("gagal terhubung dengan database: " mysqli_connect_error());
}