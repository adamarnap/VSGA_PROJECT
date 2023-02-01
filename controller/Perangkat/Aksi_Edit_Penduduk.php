<?php

    include '../../Koneksi.php';
    $NIK = $_POST['NIK'];
    $nama  = $_POST['nama'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $gender  = $_POST['gender'];
    $agama  = $_POST['agama'];
    $pendidikan  = $_POST['pendidikan'];
    $pekerjaan  = $_POST['pekerjaan'];
    $status  = $_POST['status'];
    $nama_ayah  = $_POST['nama_ayah'];
    $nama_ibu  = $_POST['nama_ibu'];
    $kewarganegaraan  = $_POST['kewarganegaraan'];
    $golongan_darah  = $_POST['golongan_darah'];
    $no_tlp  = $_POST['no_tlp'];
    $rt  = $_POST['rt'];
    $rw  = $_POST['rw'];
    $dusun  = $_POST['dusun'];
    $password  = $_POST['password'];
    $level  = $_POST['level'];
    $status_akun  = $_POST['status_akun'];
    
    $rand = rand();
    $allowed =  array('jpg','jpeg', 'png');
    $filename = $_FILES['foto_profil']['name'];

    if($filename == ""){
        header("location:../../view/Perangkat/Penduduk_Edit.php?NIK=$NIK");
        } else{$ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed) ) {
                header("location:../../view/Perangkat/Penduduk_Edit.php?NIK=$NIK"); 
            }else{
                move_uploaded_file($_FILES['foto_profil']['tmp_name'], '../../assets/image/profil_user/profil_user'.$rand.'_'.$filename);
                $file_gambar = $rand.'_'.$filename;

                $data = "update penduduk set NIK='$NIK',
                nama='$nama',
                tempat_lahir='$tempat_lahir',
                tanggal_lahir= '$tanggal_lahir',
                gender='$gender',
                agama='$agama',
                pendidikan='$pendidikan',
                pekerjaan='$pekerjaan',
                status='$status',
                nama_ayah='$nama_ayah',
                nama_ibu='$nama_ibu',
                kewarganegaraan='$kewarganegaraan',
                golongan_darah='$golongan_darah',
                no_tlp='$no_tlp',
                rt='$rt',
                rw='$rw',
                dusun='$dusun',
                password='$password',
                level='$level',
                status_akun='$status_akun',
                foto_profil= '$file_gambar'
                where NIK = '$NIK'";
                mysqli_query($koneksi,$data);
               
                            
                header("location:../../view/Perangkat/Penduduk.php?alert=successUpdate");
            }
    }
?>