<?php 
include '../../Koneksi.php';
$NIK = $_GET['NIK'];
$data = mysqli_query($koneksi, "select * from penduduk where NIK='$NIK'");
$d = mysqli_fetch_assoc($data);
$foto_profil = $d['foto_profil'];
unlink("../../assets/image/berita/$foto_profil");
mysqli_query($koneksi, "delete from penduduk where NIK='$NIK'");
header("location:../../view/Perangkat/Penduduk.php?alert=successDelete");
?>