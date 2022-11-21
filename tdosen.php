<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$Nama_dosen = $_POST['Nama_dosen'];
$Nik = $_POST['Nik'];

// insert data ke database
mysqli_query($koneksi, "INSERT INTO dosen value(' ', '$Nama_dosen', '$Nik')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:dosen.php");


?>