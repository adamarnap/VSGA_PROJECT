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
</head>
  <body>

    <!-- NAV BAR-->
    <?php 
    include '../Template/Navbar_Perangkat.php';
    include '../../Koneksi.php';
    $NIK = $_GET['NIK'];
    $query    =mysqli_query($koneksi, "SELECT * FROM penduduk WHERE NIK='$NIK'");
    $peoples   =mysqli_fetch_array($query);
    ?>
    <!--MAIN CONTENT-->
        <main class="">
          

        <form class="row g-3 card-element penduduk-form" enctype='multipart/form-data' method="POST" action="../../controller/Perangkat/Aksi_Edit_Penduduk.php">
          <h2><b>Form Edit Data Penduduk Desa</b></h2>
                <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger'>Upload Gambar Gagal, Pastikan Gamabr Terupload Dengan Benar ! <b>(File Harus Berupa : JPG, JPEG, PNG)</b> </div>";
                        } 
                    }
                ?>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Nomor Induk Kependudukan</label>
                    <input type="text" class="form-control" id="validationDefault01" name="NIK" value="<?php echo $peoples['NIK']?>" placeholder="Tuliskan NIK penduduk ..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Penduduk</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama" value="<?php echo $peoples['nama']?>" placeholder="Tuliskan nama penduduk ..." required>
                </div> 
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="validationDefault02" name="tempat_lahir" value="<?php echo $peoples['tempat_lahir']?>" placeholder="Tuliskan tempat lahir penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="validationDefault02" name="tanggal_lahir" value="<?php echo $peoples['tanggal_lahir']?>" placeholder="Tuliskan tanggal lahir penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="floatingSelect" name="gender"  aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['gender']?>"><?php echo $peoples['gender']?></option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Agama</label>
                    <select class="form-select" id="floatingSelect" name="agama" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['agama']?>"><?php echo $peoples['agama']?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" id="validationDefault02" name="pendidikan" value="<?php echo $peoples['pendidikan']?>" placeholder="Tuliskan  pendidikan penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="validationDefault02" name="pekerjaan" value="<?php echo $peoples['pekerjaan']?>" placeholder="Tuliskan  pekerjaan penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Status</label>
                    <select class="form-select" id="floatingSelect" name="status"  aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['status']?>"><?php echo $peoples['status']?></option>
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Orang Tua Laki-Laki</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama_ayah" value="<?php echo $peoples['nama_ayah']?>" placeholder="Tuliskan  nama orang tua laki-laki disini..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nama Orang Tua Perempuan</label>
                    <input type="text" class="form-control" id="validationDefault02" name="nama_ibu" value="<?php echo $peoples['nama_ibu']?>" placeholder="Tuliskan  nama orang tua perempuan disini..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Kewarganegaraan</label>
                    <select class="form-select" id="floatingSelect" name="kewarganegaraan" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['kewarganegaraan']?>"><?php echo $peoples['kewarganegaraan']?></option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Golongan Darah</label>
                    <input type="text" class="form-control" id="validationDefault02" name="golongan_darah" value="<?php echo $peoples['golongan_darah']?>" placeholder="Tuliskan  golongan darah penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Nomor Kontak</label>
                    <input type="text" class="form-control" id="validationDefault02" name="no_tlp" value="<?php echo $peoples['no_tlp']?>" placeholder="Tuliskan  nomor kontak penduduk..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">RT</label>

                    <select class="form-select" id="floatingSelect" name="rt" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['rt']?>"><?php echo $peoples['rt']?></option>
                        <?php
                            $rt = mysqli_query($koneksi,"select * from rt");
                            while ($people = mysqli_fetch_array($rt)) {
                            ?>
                                <option value="<?php echo $people['rt']?>"><?php echo $people['rt']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">RW</label>
                    <select class="form-select" id="floatingSelect" name="rw" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['rw']?>"><?php echo $peoples['rw']?></option>
                        <?php
                            $rw = mysqli_query($koneksi,"select * from rw");
                            while ($people = mysqli_fetch_array($rw)) {
                            ?>
                                <option value="<?php echo $people['rw']?>"><?php echo $people['rw']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Dusun</label>
                    <select class="form-select" id="floatingSelect" name="dusun" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['dusun']?>"><?php echo $peoples['dusun']?></option>
                        <?php
                            $dusun = mysqli_query($koneksi,"select * from dusun");
                            while ($people = mysqli_fetch_array($dusun)) {
                            ?>
                                <option value="<?php echo $people['dusun']?>"><?php echo $people['dusun']?></option>
                        <?php } ?>
                    </select>
                </div>
                    
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Password Penduduk</label>
                    <input type="password" class="form-control" id="validationDefault02" name="password" value="<?php echo $peoples['password']?>" placeholder="Tuliskan  password akun penduduk..." required>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Level Akun</label>
                    <select class="form-select" id="floatingSelect" name="level" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['level']?>"><?php echo $peoples['level']?></option>
                        <option value="Masyarakat">Masyarakat</option>
                        <option value="Perangkat">Perangkat</option>
                        <option value="Kades">Kepala Desa</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Status Akun</label>
                    <select class="form-select" id="floatingSelect" name="status_akun" aria-label="Floating label select example" required>
                        <option selected value="<?php echo $peoples['status_akun']?>"><?php echo $peoples['status_akun']?></option>
                        <option value="AKTIF">Aktif</option>
                        <option value="NONAKTIF">Nonaktif</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault02"  class="form-label">Foto Profil</label>
                    <input type="file" class="form-control" value="<?php echo $peoples['foto_profil']?>" name="foto_profil" id="validationDefault02"  required>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Update Perubahan Data Penduduk</button>
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