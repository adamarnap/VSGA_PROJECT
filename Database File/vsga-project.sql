-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 03:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsga-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `no_berita` int(11) NOT NULL,
  `judul_berita` varchar(25) NOT NULL,
  `headnews` text NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`no_berita`, `judul_berita`, `headnews`, `isi_berita`, `tanggal_kirim`, `pengirim`, `gambar`) VALUES
(18, 'Jalan Ditutup', 'Pengalihan jalan alternatif', 'Jalan di tutup mulai 2 agustus 22 hingga selesai', '2022-08-26', '22222', '1566396172_image2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `dusun` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`dusun`) VALUES
('Bantengan'),
('Pencar'),
('Pranan'),
('Saragan'),
('Taleman'),
('Tambakan');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `no_event` int(11) NOT NULL,
  `judul_event` varchar(50) NOT NULL,
  `isi_event` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan`
--

CREATE TABLE `kedatangan` (
  `no_datang` int(11) NOT NULL,
  `tgl_datang` date NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `no_lahir` int(11) NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(13) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`no_lahir`, `nama_bayi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nama_ayah`, `nama_ibu`, `alamat`) VALUES
(9, 'Risha', 'Jakarta', '2022-08-02', 'Wanita', 'Hartono', 'Farida', 'Gang 03, Pranan, Ngendrosari');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `no_kematian` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `tempat_meninggal` varchar(50) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `usia` varchar(3) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `makam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `no_kritik` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `isi_kritik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(13) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Perangkat','Masyarakat','Kades','') NOT NULL,
  `status_akun` enum('AKTIF','NONAKTIF','','') NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `pendidikan`, `pekerjaan`, `status`, `nama_ayah`, `nama_ibu`, `kewarganegaraan`, `golongan_darah`, `no_tlp`, `rt`, `rw`, `dusun`, `password`, `level`, `status_akun`, `foto_profil`) VALUES
('111111', 'Hanif Albar', 'Temanggung', '2022-08-01', 'Pria', 'Islam', 'S1', 'Pegawai Negeri', 'Kawin', 'Waluyo', 'Ita', 'WNI', '-', '085678345567', '001', '002', 'Pranan', '123', 'Kades', 'AKTIF', '1300736375_1604977289-picsayh.png'),
('22222', 'Tegar', 'Jakarta', '2022-08-05', 'Pria', 'Islam', 'SMA', 'Wiraswasta', 'Kawin', 'Rajasa', 'Intan', 'WNI', 'o', '085789876789', '007', '001', 'Pranan', '123', 'Masyarakat', 'AKTIF', '1018951743_1604977289-picsay.png'),
('333333', 'Marno', 'Magelang', '2022-08-04', 'Pria', 'Islam', 'SMA', 'Wiraswasta', 'Kawin', 'Darman', 'Isti', 'WNI', 'A', '0876756876', '001', '003', 'Taleman', '123', 'Perangkat', 'AKTIF', '1863358827_MASTER.png');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `no_permohonan` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `jenis_dokumen` varchar(25) NOT NULL,
  `fungsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pindahan`
--

CREATE TABLE `pindahan` (
  `no_kepergian` int(11) NOT NULL,
  `tgl_kepergian` date NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ronda`
--

CREATE TABLE `ronda` (
  `id_ronda` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `rt` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt`) VALUES
('001'),
('002'),
('003'),
('004'),
('005'),
('006'),
('007'),
('008'),
('009'),
('010');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw`) VALUES
('001'),
('002'),
('003'),
('004'),
('005'),
('006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`no_berita`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`dusun`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`no_event`);

--
-- Indexes for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`no_datang`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`no_lahir`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`no_kematian`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`no_kritik`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `rt` (`rt`) USING BTREE,
  ADD KEY `dusun` (`dusun`) USING BTREE,
  ADD KEY `rw` (`rw`) USING BTREE;

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`no_permohonan`),
  ADD KEY `NIK` (`NIK`) USING BTREE;

--
-- Indexes for table `pindahan`
--
ALTER TABLE `pindahan`
  ADD PRIMARY KEY (`no_kepergian`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `ronda`
--
ALTER TABLE `ronda`
  ADD PRIMARY KEY (`id_ronda`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`rt`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`rw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `no_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `no_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `no_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `no_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `no_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `no_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `no_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pindahan`
--
ALTER TABLE `pindahan`
  MODIFY `no_kepergian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ronda`
--
ALTER TABLE `ronda`
  MODIFY `id_ronda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD CONSTRAINT `kedatangan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `kematian`
--
ALTER TABLE `kematian`
  ADD CONSTRAINT `kematian_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`rt`) REFERENCES `rt` (`rt`),
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`dusun`) REFERENCES `dusun` (`dusun`),
  ADD CONSTRAINT `penduduk_ibfk_3` FOREIGN KEY (`rw`) REFERENCES `rw` (`rw`);

--
-- Constraints for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD CONSTRAINT `permohonan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `pindahan`
--
ALTER TABLE `pindahan`
  ADD CONSTRAINT `pindahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
