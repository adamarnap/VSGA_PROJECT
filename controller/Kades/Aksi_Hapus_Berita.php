<?php 
include '../../Koneksi.php';
$no_berita = $_GET['no_berita'];
$data = mysqli_query($koneksi, "select * from berita where no_berita='$no_berita'");
$d = mysqli_fetch_assoc($data);
$gambar = $d['gambar'];
unlink("../../assets/image/berita/$gambar");
mysqli_query($koneksi, "delete from berita where no_berita='$no_berita'");
header("location:../../view/Kades/Berita.php?alert=successDelete");
?>