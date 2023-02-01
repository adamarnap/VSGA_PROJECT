<?php

    include '../../Koneksi.php';
    $no_berita = $_POST['no_berita'];
    $judul_berita  = $_POST['judul_berita'];
    $headnews  = $_POST['headnews'];
    $isi_berita  = $_POST['isi_berita'];
    $tanggal_kirim  = $_POST['tanggal_kirim'];
    $pengirim  = $_POST['pengirim'];
    
    $rand = rand();
    $allowed =  array('jpg','jpeg', 'png');
    $filename = $_FILES['gambar']['name'];
    echo $no_berita;

    if($filename == ""){
        header("location:../../view/Kades/Berita_Edit.php?no_berita=$no_berita");
        } else{$ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed) ) {
                header("location:../../view/Kades/Berita_Edit.php?no_berita=$no_berita"); 
            }else{
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../../assets/image/berita/berita'.$rand.'_'.$filename);
                $file_gambar = $rand.'_'.$filename;
                mysqli_query($koneksi, 
                            "update berita set no_berita= '$no_berita' ,
                            judul_berita='$judul_berita',
                            headnews='$headnews',
                            isi_berita= '$isi_berita',
                            tanggal_kirim='$tanggal_kirim',
                            pengirim='$pengirim',
                            gambar= '$file_gambar'
                            where no_berita = '$no_berita'");
                header("location:../../view/Kades/Berita.php?alert=successUpdate");
            }
    }
?>