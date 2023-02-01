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
        
        <form action="" class="form card-element">
        <h2><b>Halaman Register Website Desa Ngendrosari</b></h2>
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
            <p>Sudah memiliki akun ? <a href="login.php"><b>Masuk disini</b></a></p>
        </form>
    </main>

    <!--footer-->
    <?php 
    include 'Template/Footer.php';
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html