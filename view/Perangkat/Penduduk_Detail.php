<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Perangkat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/perangkat.css">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">  
</head>
  <body>
    <!-- NAV BAR-->
    <?php 
    include '../Template/Navbar_Perangkat.php';
    ?>
    <!--MAIN CONTENT-->
        <main>
            <?php
              include '../../Koneksi.php';
              $NIK = $_GET['NIK'];
              $query    =mysqli_query($koneksi, "SELECT * FROM penduduk WHERE NIK='$NIK'");
              $peoples   =mysqli_fetch_array($query);
            ?>

        <div class="">
          <h2><b>Detail Biografi Penduduk Desa</b></h2>
          <div class="card-element-left">
            <?="<img src='../../assets/image/profil_user/profil_user".$peoples['foto_profil']." 'style='width:500px; height:500px; border-radius: 5px;'>"?></img>
          </div>

          <div class=" card-element-right tabel-biodata">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                <tr>
                    <th scope="row">NIK</th>
                    <td>:</td>
                    <td><?php echo $peoples['NIK'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Nama</th>
                    <td>:</td>
                    <td><?php echo $peoples['nama'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Tempat lahir</th>
                    <td>:</td>
                    <td><?php echo $peoples['tempat_lahir'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal Lahir</th>
                    <td>:</td>
                    <td><?php echo $peoples['tanggal_lahir'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>:</td>
                    <td><?php echo $peoples['gender'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Agama</th>
                    <td>:</td>
                    <td><?php echo $peoples['agama'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Pendidikan</th>
                    <td>:</td>
                    <td><?php echo $peoples['pendidikan'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Pekerjaan</th>
                    <td>:</td>
                    <td><?php echo $peoples['pekerjaan'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Status</th>
                    <td>:</td>
                    <td><?php echo $peoples['status'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Kedudukan</th>
                    <td>:</td>
                    <td><?php echo $peoples['level'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Nama Ortu Laki-Laki</th>
                    <td>:</td>
                    <td><?php echo $peoples['nama_ayah'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Nama Ortu Perempuan</th>
                    <td>:</td>
                    <td><?php echo $peoples['nama_ibu'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td>:</td>
                    <td><?php echo $peoples['kewarganegaraan'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Golongan Darah</th>
                    <td>:</td>
                    <td><?php echo $peoples['golongan_darah'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Nomor Kontak</th>
                    <td>:</td>
                    <td><?php echo $peoples['no_tlp'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Rukun Tangga</th>
                    <td>:</td>
                    <td><?php echo $peoples['rt'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Rukun Warga</th>
                    <td>:</td>
                    <td><?php echo $peoples['rw'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Dusun</th>
                    <td>:</td>
                    <td><?php echo $peoples['dusun'] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Status Akun</th>
                    <td>:</td>
                    <td><?php echo $peoples['status_akun'] ?></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

                
        </main>


    <!--FOOTER-->
    <?php 
    include '../Template/Footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html