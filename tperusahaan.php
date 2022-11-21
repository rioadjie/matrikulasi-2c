<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$Nama_Perusahaan = $_POST['Nama_Perusahaan'];
$Alamat = $_POST['Alamat'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];



// insert data ke database
mysqli_query($koneksi, "INSERT INTO perusahaan value(' ', '$Nama_Perusahaan', '$Alamat', '$Email', '$Telephone')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:perusahaan.php");


?>