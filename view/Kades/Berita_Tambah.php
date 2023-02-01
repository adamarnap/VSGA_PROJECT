<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Kades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">  
    <link rel="stylesheet" type="text/css" href="../../assets/styles/berita.css">  
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
    
          <form class="row g-3 card-element berita-edit" enctype='multipart/form-data' method="POST" action="../../controller/Kades/Aksi_Tambah_Berita.php">
          <h2><b>Form Tambah Data Berita Desa</b></h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger'>Upload Gambar Gagal, Pastikan Gamabr Terupload Dengan Benar ! <b>(File Harus Berupa : JPG, JPEG, PNG)</b> </div>";
                        } 
                    }
                ?>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="validationDefault01" name="judul_berita" placeholder="Tuliskan Judul Berita ..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Head News</label>
                    <input type="text" class="form-control" id="validationDefault02" name="headnews" placeholder="Tuliskan Head News ..." required>
                </div> 
                <div class="col-md-4">
                    <label for="validationDefault02"  class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar" id="validationDefault02"  >
                </div>
                <div class="col-md-4">
                    <input type="hidden" class="form-control" name="tanggal_kirim" id="validationDefault02"  value="<?php echo date("Y-m-d"); ?>" required>
                </div>
                <div class="col-md-4">
                    <input type="hidden" class="form-control" id="validationDefault02" name="pengirim" value=<?php echo $_SESSION['NIK']; ?>  required>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="isi_berita" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Isi Berita</label>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Kirim Berita</button>
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