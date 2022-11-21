<?php 

// start session
session_start();

// koneksi ke database
include '../database.php';

// menangkap data 
$id = $_POST['Id'];
$Tempatkp = $_POST['Tempatkp'];
$Alamatkp = $_POST['Alamatkp'];
$Tanggal_mulai = $_POST['Tanggal_mulai'];
$Tanggal_selesai = $_POST['Tanggal_selesai'];
$Anggota_Kelompok_Id = $_POST['Anggota_Kelompok_Id'];
$Dosen_id = $_POST['Dosen_id'];
$Perusahaan_Id = $_POST['Perusahaan_Id'];

// update file
$direktori = "daftarKp/";
$file=$_FILES['Proposal']['name'];
if(isset($_FILES['Proposal']['name']) && ($_FILES['Proposal']['name'] != "")) {
    // hapus file lama
    unlink("daftarKp/$old_file");
    // file baru
    move_uploaded_file($_FILES['Proposal']['tmp_name'], $direktori.$file);
} 
else {
    $file = $old_file;
}


// update data ke database
mysqli_query($koneksi, "UPDATE pendaftaran_kp SET Tempatkp='$Tempatkp', Alamatkp='$Alamatkp', Tanggal_mulai='$Tanggal_mulai', Tanggal_selesai='$Tanggal_selesai', Proposal='$file', Anggota_Kelompok_Id='$Anggota_Kelompok_Id', Dosen_id='$Dosen_id', Perusahaan_Id='$Perusahaan_Id' where Id='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Diupdate';

// kembali ke halaman tabel mahasiswa
header("location:daftar_kp.php");


?>