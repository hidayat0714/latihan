<?php
include 'koneksi.php';

// Menangkap ID dari URL
$id = $_GET['id_mhs'];

// Query untuk menghapus data
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id'";
mysqli_query($koneksi, $query);

// Arahkan kembali ke halaman utama
header("location:index.php");
?>