<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$Tanggal = $_POST['Tanggal'];
$Anggota_Kelompok_Id = $_POST['Anggota_Kelompok_Id'];
// upload file
$direktori = "lembarKerja/";
$file=$_FILES['File']['name'];
move_uploaded_file($_FILES['File']['tmp_name'], $direktori.$file);

// insert data ke database
mysqli_query($koneksi, "INSERT INTO lembar_kerja value(' ', '$Tanggal', '$file', '$Anggota_Kelompok_Id')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:lembar_kerja.php");


?>