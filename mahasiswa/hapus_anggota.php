<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data yang dikirim dari POST tambah_mahasiswa
$id = $_GET['id'];

// insert data ke database
mysqli_query($koneksi, "DELETE FROM anggota_kelompok WHERE id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// kembali ke halaman tabel mahasiswa
header("location:anggota_kp.php");


?>

