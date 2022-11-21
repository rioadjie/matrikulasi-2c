<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data
$Nama_Anggota = $_POST['Nama_Anggota'];
$Nim = $_POST['Nim'];

// insert data ke database
mysqli_query($koneksi, "INSERT INTO anggota_kelompok value(' ', '$Nama_Anggota', '$Nim')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:anggota_kp.php");


?>