<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$Tempatkp = $_POST['Tempatkp'];
$Alamatkp = $_POST['Alamatkp'];
$Tanggal_mulai = $_POST['Tanggal_mulai'];
$Tanggal_selesai = $_POST['Tanggal_selesai'];
$Anggota_Kelompok_Id = $_POST['Anggota_Kelompok_Id'];
$Dosen_id = $_POST['Dosen_id'];
$Perusahaan_Id = $_POST['Perusahaan_Id'];

// upload proposal
$direktori = "daftarKp/";
$proposal=$_FILES['Proposal']['name'];
move_uploaded_file($_FILES['Proposal']['tmp_name'], $direktori.$proposal);
   
// insert data ke database
mysqli_query($koneksi, "INSERT INTO pendaftaran_kp value(' ', '$Tempatkp', '$Alamatkp', '$Tanggal_mulai', '$Tanggal_selesai', '$proposal', '$Anggota_Kelompok_Id', '$Dosen_id', '$Perusahaan_Id' )");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:daftar_kp.php");


?>