<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$id = $_POST['Id'];
$Tanggal = $_POST['Tanggal'];
$Anggota_Kelompok_Id = $_POST['Anggota_Kelompok_Id'];
// update file
$direktori = "lembarKerja/";
$file=$_FILES['File']['name'];
if(isset($_FILES['File']['name']) && ($_FILES['File']['name'] != "")) {
    // hapus file lama
    unlink("lembarKerja/$old_file");
    // file baru
    move_uploaded_file($_FILES['File']['tmp_name'], $direktori.$file);
} 
else {
    $file = $old_file;
}


// update data ke database
mysqli_query($koneksi, "UPDATE lembar_kerja SET Tanggal='$Tanggal', File='$file', Anggota_Kelompok_Id='$Anggota_Kelompok_Id' where Id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Diupdate';

// kembali ke halaman tabel mahasiswa
header("location:lembar_kerja.php");


?>