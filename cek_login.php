<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'database.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['id_role']== 1 ){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_role'] = 1 ;
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");
 
	// cek jika user login sebagai Mahasiswa
	}else if($data['id_role']== 2 ){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_role'] = 2 ;
		// alihkan ke halaman dashboard Mahasiswa
		header("location:mahasiswa/dashboard_mahasiswa.php");
 
	// cek jika user login sebagai Dosen
	}else if($data['id_role']== 3 ){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_role'] = 3;
		// alihkan ke halaman dashboard Dosen
		header("location:dosen/dashboard_dosen.php");
 
    // cek jika user login sebagai Koor KP
	}else if($data['id_role']== 4 ){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_role'] = 4;
		// alihkan ke halaman dashboard Koor KP
		header("location:koorKP/dashboard_koorkp.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>