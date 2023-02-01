<?php
    include '../../Koneksi.php';

    $judul_berita  = $_POST['judul_berita'];
    $headnews  = $_POST['headnews'];
    $isi_berita  = $_POST['isi_berita'];
    $tanggal_kirim  = $_POST['tanggal_kirim'];
    $pengirim  = $_POST['pengirim'];
    
    $rand = rand();
    $allowed =  array('jpg','jpeg', 'png');
    $filename = $_FILES['gambar']['name'];

 
    if($filename == ""){
        header("location:../../view/Kades/Berita_Tambah.php?alert=gagal");
    }else{
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$allowed) ) {
            header("location:../../view/Kades/Berita_Tambah.php?alert=gagal");
        }else{
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../../assets/image/berita/berita'.$rand.'_'.$filename);
            $file_gambar = $rand.'_'.$filename;
            mysqli_query($koneksi, "insert into berita values (NULL,'$judul_berita','$headnews','$isi_berita','$tanggal_kirim','$pengirim','$file_gambar')");
            header("location:../../view/Kades/Berita.php");
        }
    }



?>