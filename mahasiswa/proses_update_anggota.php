<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$id = $_POST['Id'];
$Nama_Anggota = $_POST['Nama_Anggota'];
$Nim = $_POST['Nim'];

// insert data ke database
mysqli_query($koneksi, "UPDATE anggota_kelompok SET Nama_Anggota='$Nama_Anggota', Nim='$Nim' where Id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Di Update';

// kembali ke halaman tabel mahasiswa
header("location:anggota_kp.php");


?>