-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 03:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `username`, `password`) VALUES
(1, 'pimpinan', '7d3207a13dc221ac13c2f3dac3011f50'),
(2, 'username', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('Pemenang','Potensi Project') NOT NULL,
  `id_ref_instansi` int(11) NOT NULL,
  `id_ref_jenis_project` int(11) NOT NULL,
  `id_ref_perusahaan_pengguna` int(11) DEFAULT NULL,
  `id_ref_perusahaan_peminjam` int(11) DEFAULT NULL,
  `id_ref_kriteria` int(11) NOT NULL,
  `nos_spk` varchar(255) NOT NULL,
  `penanggungjawab_lapangan` varchar(255) DEFAULT NULL,
  `penanggungjawab_administrasi` varchar(255) DEFAULT NULL,
  `status_admin` varchar(255) DEFAULT NULL,
  `status_teknis` varchar(255) DEFAULT NULL,
  `status_kak` enum('Belum','Proses','Sudah') NOT NULL,
  `status_proposal` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_laporan_bulan` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_rab` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_spk` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_spp_ppn` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_spp_pph` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_sp2d` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_skb` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_bast` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_referensi_ta` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_pembelian_barang` varchar(255) DEFAULT NULL,
  `administrasi` varchar(255) DEFAULT NULL,
  `progress` int(3) NOT NULL,
  `keterangan` text,
  `pagu` float(20,0) DEFAULT NULL,
  `nilai_kontrak` float(20,0) DEFAULT NULL,
  `id_ref_lokasi` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projek`
--

INSERT INTO `projek` (`id`, `kode`, `nama`, `tahun`, `tanggal_mulai`, `tanggal_selesai`, `status`, `id_ref_instansi`, `id_ref_jenis_project`, `id_ref_perusahaan_pengguna`, `id_ref_perusahaan_peminjam`, `id_ref_kriteria`, `nos_spk`, `penanggungjawab_lapangan`, `penanggungjawab_administrasi`, `status_admin`, `status_teknis`, `status_kak`, `status_proposal`, `status_laporan_bulan`, `status_rab`, `status_spk`, `status_spp_ppn`, `status_spp_pph`, `status_sp2d`, `status_skb`, `status_bast`, `status_referensi_ta`, `status_pembelian_barang`, `administrasi`, `progress`, `keterangan`, `pagu`, `nilai_kontrak`, `id_ref_lokasi`, `jenis`, `bulan`, `hari`) VALUES
(16, '18.L.J.004-A.BIT', 'ULA', 2018, '2018-04-23', '2018-08-21', 'Pemenang', 14, 1, 3, NULL, 2, '027/1964/Pusdatin', 'Fulan1', 'Fulan2', 'Ada', 'Ada juga', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', 'Tidak', 80, '', 445750016, 426520608, 2, 'Jasa', NULL, NULL),
(17, '18.L.J.005-A.Hegar Daya', 'Jasa Konsultasi Pengembangan Sistem Evaluasi Dan Monitoring Media', 2018, '2018-08-10', '2018-12-30', 'Pemenang', 12, 1, 6, NULL, 2, 'SPPBJ/17/VIII/2018/JASA KONSULTANSI', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 100, '', 14892527616, 14892527616, 2, 'Jasa', NULL, NULL),
(18, '18.P.J.007-A.KABAYAN', 'Jasa Konsultansi Pembangunan Website Versi Mobile', 2018, '2018-03-02', '2018-05-02', 'Pemenang', 8, 3, 5, NULL, 2, '047 / 1024 / PEGUM', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 75, '', 49390000, 49390000, 1, 'Jasa', NULL, NULL),
(19, '18.L.J.0010-A.BIT', 'Entry Data Base Arsip', 2018, '2018-06-22', '2018-11-18', 'Pemenang', 10, 1, 3, NULL, 2, '003/PPK/Entry-DB/Distaru/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 299777504, 327415008, 1, 'Jasa', NULL, NULL),
(20, '18.P.J.0012-B.BIT', 'Jasa Konsultasi Pembuatan E-Library BPSDM Provinsi Jawa Barat', 2018, '2018-03-19', '2018-05-19', 'Pemenang', 7, 3, 3, 5, 2, '020/48/Pj-Bid.SKPK/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', NULL, '', 20, '', 48100000, 48100000, 1, 'Jasa', NULL, NULL),
(21, '18.P.J.0013-A.BIT', 'Maintenance Jaringan', 2018, '2018-01-01', '2018-12-31', 'Pemenang', 21, 3, 3, NULL, 1, '555/SPK-06/Hal', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 150000000, 150000000, 1, 'Jasa', NULL, NULL),
(22, '18.P.J.0016-B.BIT', 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2018, '2018-05-07', '2018-06-05', 'Pemenang', 3, 3, 3, 5, 2, '027/23/PPK-22.002-2/BKPP/V/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 48950000, 48950000, 1, 'Jasa', NULL, NULL),
(23, '18.L.J.0017-B.BIT', 'Pemuktahiran Data Sektoral Kabupaten Tasikmalaya', 2018, '2018-03-21', '2018-06-18', 'Pemenang', 9, 1, 3, 9, 2, '480/8/PPK/Diskominfo/2017', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 266390304, 266390304, 6, 'Jasa', NULL, NULL),
(24, '18.L.J.003-A.Hegar Daya', 'Pembuatan Sistem Perizinan Elektronik PTSP ', 2018, '2018-01-06', '2018-10-31', 'Pemenang', 4, 1, 6, NULL, 2, '5132.008.063 B/Kontrak/PPK-PNBP/6/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 942899968, 849000000, 4, 'Jasa', NULL, NULL),
(25, '18.L.J.0010-A.BIT', 'Entry Data Base Arsip', 2018, '2018-06-22', '2018-11-18', 'Pemenang', 10, 1, 3, NULL, 2, '003/PPK/Entry-DB/Distaru/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 299777504, 327415008, 1, 'Jasa', NULL, NULL),
(26, '18.P.J.0016-B.BIT', 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2018, '2018-05-07', '2018-06-05', 'Pemenang', 3, 3, 3, 5, 2, '027/23/PPK-22.002-2/BKPP/V/2018', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', NULL, '', 0, '', 48950000, 48950000, 1, 'Jasa', NULL, NULL),
(27, '18.L.J.002-A.Waditra', 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2019, '2019-01-04', '2019-01-31', 'Pemenang', 17, 2, 9, 2, 2, '5132.008.063 B/Kontrak/PPK-PNBP/6/2018', '', '', NULL, NULL, 'Proses', 'Belum', 'Belum', 'Proses', 'Sudah', 'Proses', 'Proses', 'Belum', 'Belum', 'Sudah', 'Proses', NULL, '', 0, 'Ini adalah Keterangan yang dibuat oleh Admin', 98700096, 98700080, 1, 'Barang', NULL, NULL),
(28, '1', '1', 1, '2019-02-12', '2019-02-21', 'Pemenang', 1, 1, 1, 1, 1, '1222112', '', '', NULL, NULL, 'Belum', 'Belum', 'Belum', 'Proses', 'Sudah', 'Proses', 'Belum', 'Belum', 'Belum', 'Proses', 'Belum', NULL, '', 20, '', 12212121, 12121212, 1, 'Barang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_instansi`
--

CREATE TABLE `ref_instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_instansi`
--

INSERT INTO `ref_instansi` (`id`, `nama`) VALUES
(1, 'BBPK'),
(2, 'BKD Kalteng'),
(3, 'BKPP'),
(4, 'BP Batam'),
(5, 'BPN'),
(6, 'BPBD Kota Bandung'),
(7, 'BPSDM'),
(8, 'Diperta'),
(9, 'Diskominfo tasik'),
(10, 'Distaru'),
(11, 'FARMALKES'),
(12, 'Humas Mabes Polri'),
(13, 'Kemendag'),
(14, 'Kemendagri'),
(15, 'Kemenkes'),
(16, 'KFN'),
(17, 'KKI'),
(18, 'LPMP'),
(19, 'LPMUKP'),
(20, 'Mabes Polri'),
(21, 'Sanditel'),
(22, 'TASIK'),
(23, 'Tekmira');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_projek`
--

CREATE TABLE `ref_jenis_projek` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_jenis_projek`
--

INSERT INTO `ref_jenis_projek` (`id`, `nama`) VALUES
(1, 'LELANG'),
(2, 'LELANG/PL'),
(3, 'Penunjukan Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kriteria`
--

CREATE TABLE `ref_kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kriteria`
--

INSERT INTO `ref_kriteria` (`id`, `nama`) VALUES
(1, 'Jaringan'),
(2, 'Aplikasi'),
(3, 'Survei');

-- --------------------------------------------------------

--
-- Table structure for table `ref_lokasi`
--

CREATE TABLE `ref_lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_lokasi`
--

INSERT INTO `ref_lokasi` (`id`, `nama`) VALUES
(1, 'Bandung'),
(2, 'Jakarta'),
(3, 'BP Batam'),
(4, 'Batam'),
(5, 'Kalteng'),
(6, 'Tasik Malaya');

-- --------------------------------------------------------

--
-- Table structure for table `ref_perusahaan`
--

CREATE TABLE `ref_perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_perusahaan`
--

INSERT INTO `ref_perusahaan` (`id`, `nama`) VALUES
(1, 'PT BIT'),
(2, 'Andra'),
(3, 'BIT'),
(4, 'Waditra'),
(5, 'Kabayan'),
(6, 'Hegar Daya'),
(7, 'DAMACO'),
(8, 'MBA'),
(9, 'Rustek');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `id_role`, `password`, `authKey`, `accessToken`) VALUES
(1, 'admin', 1, 'admin123', 'admin123', '321admin'),
(2, 'pimpinan', 2, 'pimpinan123', 'pimpinan123', '321pimpinan'),
(3, 'Bima', 1, 'Pria', '', ''),
(4, 'Fulan1', 2, 'Fulan2', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_instansi` (`id_ref_instansi`),
  ADD KEY `Id_jenis_proyek` (`id_ref_jenis_project`),
  ADD KEY `Id_perusahaan_pengguna` (`id_ref_perusahaan_pengguna`),
  ADD KEY `Id_perusahaan_peminjam` (`id_ref_perusahaan_peminjam`),
  ADD KEY `Id_kriteria` (`id_ref_kriteria`),
  ADD KEY `Id_rentang_waktu` (`bulan`),
  ADD KEY `Id_lokasi` (`id_ref_lokasi`),
  ADD KEY `id_hari` (`hari`) USING BTREE,
  ADD KEY `status` (`status`);

--
-- Indexes for table `ref_instansi`
--
ALTER TABLE `ref_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jenis_projek`
--
ALTER TABLE `ref_jenis_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_kriteria`
--
ALTER TABLE `ref_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_lokasi`
--
ALTER TABLE `ref_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_perusahaan`
--
ALTER TABLE `ref_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projek`
--
ALTER TABLE `projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ref_instansi`
--
ALTER TABLE `ref_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ref_jenis_projek`
--
ALTER TABLE `ref_jenis_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_kriteria`
--
ALTER TABLE `ref_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_lokasi`
--
ALTER TABLE `ref_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_perusahaan`
--
ALTER TABLE `ref_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
