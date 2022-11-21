<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$id = $_POST['id'];
$Nama_dosen = $_POST['Nama_dosen'];
$Nik = $_POST['Nik'];

// insert data ke database
mysqli_query($koneksi, "UPDATE dosen SET Nama_dosen='$Nama_dosen', Nik='$Nik' where id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Di Update';

// kembali ke halaman tabel mahasiswa
header("location:dosen.php");


?>