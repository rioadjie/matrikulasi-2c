<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$Jadwal_ujian = $_POST['Jadwal_ujian'];
$Pendaftaran_KP_Id = $_POST['Pendaftaran_KP_Id'];
$ACC_ujian_Id = $_POST['ACC_ujian_Id'];

// upload proposal
$direktori = "daftarUjianKP/";
$Laporan_KP=$_FILES['Laporan_KP']['name'];
move_uploaded_file($_FILES['Laporan_KP']['tmp_name'], $direktori.$proposal);
   
// insert data ke database
mysqli_query($koneksi, "INSERT INTO pendaftaran_ujian_kp value(' ', '$Laporan_KP', '$Jadwal_ujian', '$Pendaftaran_KP_Id', '$ACC_ujian_Id')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman tabel mahasiswa
header("location:daftar_ujian.php");


?>