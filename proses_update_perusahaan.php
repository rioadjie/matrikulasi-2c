<?php 

// start session
session_start();

// koneksi ke database
include 'database.php';

// menangkap data 
$id = $_POST['Id'];
$Nama_Perusahaan = $_POST['Nama_Perusahaan'];
$Alamat = $_POST['Alamat'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];

// insert data ke database
mysqli_query($koneksi, "UPDATE perusahaan SET 
                        Nama_Perusahaan='$Nama_Perusahaan',   
                        Alamat='$Alamat',
                        Email='$Email',
                        Telephone='$Telephone' 
                        where Id='$id'
                        ");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Di Update';

// kembali ke halaman tabel mahasiswa
header("location:perusahaan.php");


?>