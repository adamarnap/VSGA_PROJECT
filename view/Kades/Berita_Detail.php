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
            <?php
              include '../../Koneksi.php';
              $berita = mysqli_query($koneksi,"select * from berita");
              while ($news = mysqli_fetch_array($berita)) {
            ?>

                <marquee><b>BERITA DALAM DESA. PADA HALAMAN INI AKAN DISAJIKAN DETAIL DARI BERITA AKTUAL TERUPDATE YANG ANDA PILIH. WASPADA BERITA PALSU YANG BEREDARAN DI LUAR SANA !!!</b></marquee>
                <div class="content card-element-left" style="font-family: 'Times New Roman', Times, serif;
">
                    <h3><b><?php echo $news['headnews'] ?></b></h3>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                
                    <div class="carousel-inner">
                    <?="<img src='../../assets/image/berita".$news['gambar']."'style='width:940px; height:500px; border-radius: 5px;'>"?></img>                    </div>

                    </div>
                        <p><?php echo $news['isi_berita'] ?></p>
                    </div>
                <div class="aside card-element-right">
                    <h4><b>Keterangan Berita<b></h4>
                    <table style="text-align: left;">
                        <tr>
                            <td>Judul Berita</td>
                            <td> : </td>
                            <td><?php echo $news['judul_berita'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Upload Berita</td>
                            <td> : </td>
                            <td><?php echo $news['tanggal_kirim'] ?></td>
                        </tr>
                        <tr>
                            <td>Pengirim Berita</td>
                            <td> : </td>
                            <td><?php echo $news['pengirim'] ?></td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
        </main>


    <!--FOOTER-->
    <?php 
    include '../Template/Footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html