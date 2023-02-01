<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Perangkat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
  <body>

        <main>
         <center><h2 style="margin: 10px 0;"><b> Data Penduduk Desa Ngendrosari</b></h2> </center>
                
          <table class="table table-bordered border-primary" border="1" style="font-size: xx-small;text-align:center; margin-left: 2px; margin-right: 2px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Status</th>
                <th scope="col">Ayah</th>
                <th scope="col">Ibu</th>
                <th scope="col">Warga</th>
                <th scope="col">Gol. Dar</th>
                <th scope="col">Nomor Telephone</th>
                <th scope="col">RT</th>
                <th scope="col">RW</th>
                <th scope="col">Dusun</th>
                <th scope="col">Kedudukan</th>
                <th scope="col">Status Akun</th>
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
                <td><?php echo $people['tempat_lahir'] ?></td>
                <td><?php echo $people['tanggal_lahir'] ?></td>
                <td><?php echo $people['gender'] ?></td>
                <td><?php echo $people['agama'] ?></td>
                <td><?php echo $people['pendidikan'] ?></td>
                <td><?php echo $people['pekerjaan'] ?></td>
                <td><?php echo $people['status'] ?></td>
                <td><?php echo $people['nama_ayah'] ?></td>
                <td><?php echo $people['nama_ibu'] ?></td>
                <td><?php echo $people['kewarganegaraan'] ?></td>
                <td><?php echo $people['golongan_darah'] ?></td>
                <td><?php echo $people['no_tlp'] ?></td>
                <td><?php echo $people['rt'] ?></td>
                <td><?php echo $people['rw'] ?></td>
                <td><?php echo $people['dusun'] ?></td>
                <td><?php echo $people['level'] ?></td>
                <td><?php echo $people['status_akun'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </main>


        <script type="text/javascript">
                        window.print();
                    </script>

    <!--FOOTER-->
    <footer style="text-align: center;">
        <p>CopyRight &copy; <b>Adam Arnap</b> | 2022</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
</html