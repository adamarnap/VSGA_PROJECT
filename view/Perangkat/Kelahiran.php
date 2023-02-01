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
          <h2>Data Kelahiran Desa</h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "successUpdate") {
                            echo "<div class='alert alert-success'>Data Kelahiran Berhasil di Ubah</div>";
                        }elseif($_GET['alert'] == "successDelete"){
                          echo "<div class='alert alert-danger'>Data Kelahiran Berhasil di Hapus</div>";
                        }elseif ($_GET['alert'] == "success") {
                          echo "<div class='alert alert-success'>Tambah Data Kelahiran Baru Berhasil.</b> </div>";
                        } 
                    }
                ?>
          <a href="Kelahiran_Tambah.php" class="btn btn-primary">Tambah Data Kelahiran Baru</a>
          <a href="Cetak_Kelahiran.php" class="btn btn-warning">Cetak Data Kelahiran</a>
          <a href="Excel_Kelahiran.php" class="btn btn-success">Spreadsheet Data Kelahiran</a>


          <table class="table card-element">

            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Lahir</th>
                <th scope="col">Nama Anak</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Nama Ortu Laki-Laki</th>                
                <th scope="col">Nama Ortu Perempuan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include '../../Koneksi.php';
              $kelahiran = mysqli_query($koneksi,"select * from kelahiran");
              $no = 1;
              while ($people = mysqli_fetch_array($kelahiran)) {
            ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $people['no_lahir'] ?></td>
                <td><?php echo $people['nama_bayi'] ?></td>
                <td><?php echo $people['tempat_lahir'] ?></td>
                <td><?php echo $people['tanggal_lahir'] ?></td>
                <td><?php echo $people['gender'] ?></td>
                <td><?php echo $people['nama_ayah'] ?></td>
                <td><?php echo $people['nama_ibu'] ?></td>
                <td><?php echo $people['alamat'] ?></td>

                <td>
                  <a class="btn btn-warning" href="Kelahiran_Edit.php?no_lahir=<?=$people['no_lahir']?>">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menhapus Data InI ?')" 
                  href="../../controller/Perangkat/Aksi_Hapus_Kelahiran.php?no_lahir=<?=$people['no_lahir']?>">Hapus</a>
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