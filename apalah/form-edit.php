<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

// membuat data jurusan menjadi array
$jurusan = array("TEKNIK INFORMATIKA", "TEKNIK ELEKTRO", "TEKNIK MESIN");

// function untuk set aktif radio button
function active_radio_button($value, $input){
    return $value == $input ? 'checked' : '';
}
?>