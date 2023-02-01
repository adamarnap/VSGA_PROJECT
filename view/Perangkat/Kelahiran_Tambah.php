<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Perangkat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">  
    <link rel="stylesheet" type="text/css" href="../../assets/styles/perangkat.css">  
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
</head>
  <body>

    <!-- NAV BAR-->
    <?php 
    include '../Template/Navbar_Kades.php';
    include '../../Koneksi.php';      
    ?>
    <!--MAIN CONTENT-->
        <main class="">
    
          <form class="row g-3 card-element penduduk-form" enctype='multipart/form-data' method="POST" action="../../controller/Perangkat/Aksi_Tambah_Kelahiran.php">
          <h2><b>Form Tambah Data Kelahiran Desa</b></h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger'>Upload Data Gagal, Pastikan Formulir Terisi Dengan Benar !  </div>";
                        } 
                    }
                ?>
          
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Anak</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama_bayi" placeholder="Tuliskan nama anak ..." required>
                </div> 
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="validationDefault02" name="tempat_lahir" placeholder="Tuliskan tempat lahir penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="validationDefault02" name="tanggal_lahir" placeholder="Tuliskan tanggal lahir penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="floatingSelect" name="gender" aria-label="Floating label select example" required>
                        <option selected>Pilih Jenis Kelamin Penduduk</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Orang Tua Laki-Laki</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama_ayah" placeholder="Tuliskan  nama orang tua laki-laki disini..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Orang Tua Perempuan</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama_ibu" placeholder="Tuliskan  nama orang tua perempuan disini..." required>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="validationDefault02" name="alamat" placeholder="Tuliskan  alamat disini ..." required>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Kirim Data Kelahiran Baru</button>
                    <button class="btn btn-danger" type="reset">Reset Formulir</button>
                </div>
 
                
            </form>
        </main>


    <!--FOOTER-->
    <?php 
    include '../Template/Footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html