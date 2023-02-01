<?php
    include '../../Koneksi.php';

    $NIK  = $_POST['NIK'];
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
        header("location:../../view/Perangkat/Penduduk_Tambah.php?alert=gagal");
    }else{
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$allowed) ) {
            header("location:../../view/Perangkat/Penduduk_Tambah.php?alert=gagal");
        }else{
            move_uploaded_file($_FILES['foto_profil']['tmp_name'], '../../assets/image/profil_user/profil_user'.$rand.'_'.$filename);
            $file_gambar = $rand.'_'.$filename;
            mysqli_query($koneksi, "insert into penduduk values 
                        ('$NIK',
                        '$nama',
                        '$tempat_lahir',
                        '$tanggal_lahir',
                        '$gender',
                        '$agama',
                        '$pendidikan',
                        '$pekerjaan',
                        '$status',
                        '$nama_ayah',
                        '$nama_ibu',
                        '$kewarganegaraan',
                        '$golongan_darah',
                        '$no_tlp',
                        '$rt',
                        '$rw',
                        '$dusun',
                        '$password',
                        '$level',
                        '$status_akun',
                        '$file_gambar')");
            header("location:../../view/Perangkat/Penduduk.php?alert=success");
        }
    }



?>