<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/styles/login.css">  
</head>
  <body>
    <!--Navbar-->
    <?php 
    include 'Template/Navbar.php';
    ?>
    <!--Main Content-->
    <main>
        <form action="../controller/Aksi_login.php" method="POST" class="form card-element">

        <?php
        if (isset($_GET['alert'])) {
          if ($_GET['alert'] == "gagal") {
            echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
          } else if ($_GET['alert'] == "logout") {
            echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
          } else if ($_GET['alert'] == "belum_login") {
            echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
          } else if ($_GET['alert'] == "akun_null") {
            echo "<div class='alert alert-danger'>AKUN ANDA TIDAK TERSEDIA, SILAHKAN UNTUK MELAKUKAN TAHAP REGISTRASI TERLEBIH DAHULU</div>";
          }
        }
        ?>
        <h2><b>Halaman Login Website Desa Ngendrosari</b></h2>
            <div class="form-group">
                <label for="">Nomor Induk Kependudukan</label>
                <input type="text" name="NIK" class="form-control" placeholder="Silahkan masukkan NIK disini ...">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Silahkan masukkan Password disini ...">
            </div>

            <button type="submit" class="btn btn-primary">Masuk</button>
            <br>
            <p>Belum memiliki akun ? <a href="register.php"><b>Daftar disini</b></a></p>
        </form>
    </main>

    <!--Footer-->
    <?php 
    include 'Template/Footer.php';
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html