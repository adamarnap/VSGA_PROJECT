<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Perangkat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">  
    <link rel="stylesheet" type="text/css" href="../../assets/styles/berita.css">  
</head>
  <body>

    <!-- NAV BAR-->
    <?php 
    include '../Template/Navbar_Perangkat.php';
    ?>
    <!--MAIN CONTENT-->
        <main>
          <h2>Data Penduduk Desa</h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "successUpdate") {
                            echo "<div class='alert alert-success'>Data Penduduk Berhasil di Ubah</div>";
                        }elseif($_GET['alert'] == "successDelete"){
                          echo "<div class='alert alert-danger'>Data Penduduk Berhasil di Hapus</div>";
                        }elseif ($_GET['alert'] == "success") {
                          echo "<div class='alert alert-success'>Tambah Data Penduduk Baru Berhasil.</b> </div>";
                        } 
                    }
                ?>
          <a href="Penduduk_Tambah.php" class="btn btn-primary">Tambah Data Penduduk Baru</a>
          <a href="Cetak_Penduduk.php" class="btn btn-warning">Cetak Data Penduduk</a>
          <a href="Excel_Penduduk.php" class="btn btn-success">Spreadsheet Data Penduduk</a>


          <table class="table card-element">

            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Kedudukan</th>
                <th scope="col">Status</th>                
                <th scope="col">Kontak</th>
                <th scope="col">Detail</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include '../../Koneksi.php';
              $penduduk = mysqli_query($koneksi,"select * from penduduk");
              $no = 1;
              while ($people = mysqli_fetch_array($penduduk)) {
            ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $people['NIK'] ?></td>
                <td><?php echo $people['nama'] ?></td>
                <td><?php echo $people['gender'] ?></td>
                <td><?php echo $people['agama'] ?></td>
                <td><?php echo $people['level'] ?></td>
                <td><?php echo $people['status'] ?></td>
                <td><?php echo $people['no_tlp'] ?></td>
                <td>                 
                  <a class="btn btn-primary" href="Penduduk_Detail.php?NIK=<?=$people['NIK']?>">Detail</a>
                </td>
                <td>
                  <a class="btn btn-warning" href="Penduduk_Edit.php?NIK=<?=$people['NIK']?>">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menhapus Data InI ?')" 
                  href="../../controller/Perangkat/Aksi_Hapus_Penduduk.php?NIK=<?=$people['NIK']?>">Hapus</a>
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