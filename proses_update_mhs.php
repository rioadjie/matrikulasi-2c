<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$id = $_POST['Id'];
$Nama_mahasiswa = $_POST['Nama_mahasiswa'];
$Nim = $_POST['Nim'];
$Kelas = $_POST['Kelas'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];

// insert data ke database
mysqli_query($koneksi, "UPDATE mahasiswa SET Nama_mahasiswa='$Nama_mahasiswa', Nim='$Nim', Kelas='$Kelas', Email='$Email', Alamat='$Alamat' where Id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Di Update';

// kembali ke halaman tabel mahasiswa
header("location:mahasiswa.php");


?>