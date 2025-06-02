<?php
include 'koneksi.php';

// Menyimpan data yang di-edit ke dalam variabel
$id             = $_POST['id'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jurusan        = $_POST['jurusan'];
$alamat         = $_POST['alamat'];

// Query SQL untuk update data
$query = "UPDATE mahasiswa SET 
            nim='$nim', 
            nama='$nama', 
            jenis_kelamin='$jenis_kelamin', 
            jurusan='$jurusan', 
            alamat='$alamat' 
          WHERE id_mhs='$id'";

mysqli_query($koneksi, $query);

// Mengalihkan kembali ke halaman index.php
header("location:index.php");
?>