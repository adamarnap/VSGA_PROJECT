<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Kades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">  
    <link rel="stylesheet" type="text/css" href="../../assets/styles/berita.css">  
</head>
  <body>

    <!-- NAV BAR-->
    <?php 
    include '../Template/Navbar_Kades.php';
    ?>
    <!--MAIN CONTENT-->
        <main>
          <h2>Data Berita Desa</h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "successUpdate") {
                            echo "<div class='alert alert-success'>Data Berita Berhasil di Ubah</div>";
                        }elseif($_GET['alert'] == "successDelete"){
                          echo "<div class='alert alert-danger'>Data Berita Berhasil di Hapus</div>";
                        }
                    }
                ?>
          <a href="Berita_Tambah.php" class="btn btn-primary">Tambah Berita Baru</a>

          <table class="table card-element">

            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Head News</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Gambar</th>
                <th scope="col">Detail</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include '../../Koneksi.php';
              $berita = mysqli_query($koneksi,"select * from berita");
              $no = 1;
              while ($news = mysqli_fetch_array($berita)) {
            ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $news['judul_berita'] ?></td>
                <td><?php echo $news['headnews'] ?></td>
                <td><?php echo $news['tanggal_kirim'] ?></td>
                <td><?php echo $news['pengirim'] ?></td>
                <td><?="<img src='../../assets/image/berita/berita".$news['gambar']."'style='width:200px; height:100px; border-radius: 5px;'>"?></img></td>
                <td>                 
                  <a class="btn btn-primary" href="Berita_Detail.php?no_berita=<?=$news['no_berita']?>">Detail</a>
                </td>
                <td>
                  <a class="btn btn-warning" href="Berita_Edit.php?no_berita=<?=$news['no_berita']?>">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menhapus Data InI ?')" 
                  href="../../controller/Kades/Aksi_Hapus_Berita.php?no_berita=<?=$news['no_berita']?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </main>


    <!--FOOTER-->
    <?php 
    include '../Template/Footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html