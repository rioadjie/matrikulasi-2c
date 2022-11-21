<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$id = $_POST['Id'];
$Jadwal_ujian = $_POST['Jadwal_ujian'];
$Pendaftaran_KP_Id = $_POST['Pendaftaran_KP_Id'];
$ACC_ujian_Id = $_POST['ACC_ujian_Id'];

// update file
$direktori = "daftarUjianKP/";
$file=$_FILES['Laporan_KP']['name'];
if(isset($_FILES['Laporan_KP']['name']) && ($_FILES['Laporan_KP']['name'] != "")) {
    // hapus file lama
    unlink("daftarUjianKP//$old_file");
    // file baru
    move_uploaded_file($_FILES['Laporan_KP']['tmp_name'], $direktori.$file);
} 
else {
    $file = $old_file;
}


// update data ke database
mysqli_query($koneksi, "UPDATE pendaftaran_ujian_kp SET Laporan_KP='$file', Jadwal_ujian='$Jadwal_ujian', Pendaftaran_KP_Id='$Pendaftaran_KP_Id', ACC_ujian_Id='$ACC_ujian_Id' where Id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Diupdate';

// kembali ke halaman tabel mahasiswa
header("location:daftar_ujian.php");


?>