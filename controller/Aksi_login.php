<?php 
// menghubungkan dengan koneksi
include '../Koneksi.php';

// menangkap data yang dikirim dari form
$NIK = $_POST['NIK'];
$password = $_POST['password'];


$login = mysqli_query($koneksi, "SELECT * FROM penduduk WHERE NIK='$NIK' AND password='$password'");
$cek = mysqli_num_rows($login);


echo ($NIK);
if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['NIK'] = $data['NIK'];
	$_SESSION['level'] = $data['level'];

	if($data['level'] == "Kades"){
		$_SESSION['status'] = "Kades_logedin";
		header("location:../view/Kades/Dashboard.php");
	}else if($data['level'] == "Perangkat"){
		$_SESSION['status'] = "Perangkat_logedin";
		header("location:../view/Perangkat/Dashboard.php");
	}elseif($data['level'] == "Masyarakat"){
		$_SESSION['status'] = "Masyarakat_logedin";
		header("location:../view/Masyarakat/Dashboard.php");
    }else{
		header("location:../view/Login.php?alert=gagal");
	}
}else{
	header("location:../view/Login.php?alert=akun_null");
}
