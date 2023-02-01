<?php
    include '../../Koneksi.php';

    $nama_bayi  = $_POST['nama_bayi'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $gender  = $_POST['gender'];
    $nama_ayah  = $_POST['nama_ayah'];
    $nama_ibu  = $_POST['nama_ibu'];
    $alamat  = $_POST['alamat'];
    
 

        if($nama_bayi == null) {
            header("location:../../view/Perangkat/Kelahiran_Tambah.php?alert=gagal");
        }else{
            mysqli_query($koneksi, "insert into kelahiran values (NULL,'$nama_bayi','$tempat_lahir','$tanggal_lahir','$gender','$nama_ayah','$nama_ibu','$alamat')");
            header("location:../../view/Perangkat/Kelahiran.php?alert=success");
        }
 



?>