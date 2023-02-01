<nav class="navbar  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Perangkat Desa Ngendrosari</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Utama</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari ..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../Perangkat/Dashboard.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../Perangkat/Profil_Desa.php">Profil Desa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../Perangkat/Visi_Misi.php">Visi Misi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Laporan Data Desa
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Perangkat/Penduduk.php">Data Penduduk</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Kelahiran.php">Data Kelahiran</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Kematian.php">Data Kematian</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Kedatangan.php">Data Kedatangan</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Pindahan.php">Data Pindahan</a></li>                                </ul>
                            </li>                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi Desa
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="../Perangkat/Berita.php">Berita Desa</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Ronda.php">Jadwal Ronda</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Event.php">Acara Desa</a></li>
                                </ul>
                            </li>  

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lainnya
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Perangkat/Kritik_Saran.php">Kritik & Saran</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Kontak_Kami.php">Kontak Kami</a></li>
                                    <li><a class="dropdown-item" href="../Perangkat/Tentang_Kami.php">Tentang Kami</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="controller/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
