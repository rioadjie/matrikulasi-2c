<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$Nama_mahasiswa = $_POST['Nama_mahasiswa'];
$Nim = $_POST['Nim'];
$Kelas = $_POST['Kelas'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];

// insert data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (Nama_mahasiswa,Nim,Kelas,Email,Alamat) value('$Nama_mahasiswa', '$Nim', '$Kelas', '$Email', '$Alamat')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:mahasiswa.php");


?>