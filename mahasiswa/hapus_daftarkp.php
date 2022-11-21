<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$id = $_GET['id'];

// insert data ke database
mysqli_query($koneksi, "DELETE FROM pendaftaran_kp WHERE id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// kembali ke halaman tabel mahasiswa
header("location:daftar_kp.php");


?>

