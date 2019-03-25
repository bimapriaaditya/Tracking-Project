-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 03:11 AM
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
-- Database: `ujicoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('Pemenang','Potensi Project') NOT NULL,
  `id_ref_instansi` int(11) NOT NULL,
  `id_ref_jenis_project` int(11) NOT NULL,
  `id_ref_perusahaan_pengguna` int(11) DEFAULT NULL,
  `id_ref_perusahaan_peminjam` int(11) DEFAULT NULL,
  `id_ref_lokasi` int(11) NOT NULL,
  `id_ref_kriteria` int(11) NOT NULL,
  `id_ref_metode_pembayaran` int(11) DEFAULT NULL,
  `nos_spk` varchar(255) NOT NULL,
  `penanggungjawab_lapangan` varchar(255) DEFAULT NULL,
  `penanggungjawab_administrasi` varchar(255) DEFAULT NULL,
  `status_admin` varchar(255) DEFAULT NULL,
  `status_teknis` varchar(255) DEFAULT NULL,
  `status_kak` enum('Belum','Proses','Sudah') NOT NULL,
  `status_proposal` enum('Belum','Proses','Sudah') NOT NULL,
  `status_laporan_bulan` enum('Belum','Proses','Sudah') NOT NULL,
  `status_rab` enum('Belum','Proses','Sudah') NOT NULL,
  `status_spk` enum('Belum','Proses','Sudah') NOT NULL,
  `status_ssp_ppn` enum('Belum','Proses','Sudah') NOT NULL,
  `status_ssp_pph` enum('','Belum','Proses','Sudah') NOT NULL,
  `status_sp2d` enum('Belum','Proses','Sudah') NOT NULL,
  `status_skb` enum('Belum','Proses','Sudah') NOT NULL,
  `status_bast` enum('Belum','Proses','Sudah') NOT NULL,
  `status_referensi_ta` enum('Belum','Proses','Sudah') NOT NULL,
  `status_pembelian_barang` varchar(255) DEFAULT NULL,
  `administrasi` varchar(255) DEFAULT NULL,
  `progress` int(3) DEFAULT NULL,
  `keterangan` text,
  `pagu` float(20,0) DEFAULT NULL,
  `nilai_kontrak` decimal(20,0) DEFAULT NULL,
  `nilai_akhir` decimal(20,5) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `pajak_ppn` text,
  `pajak_pph` text,
  `rentang_waktu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projek`
--

INSERT INTO `projek` (`id`, `kode`, `urutan`, `nama`, `tahun`, `tanggal_mulai`, `tanggal_selesai`, `status`, `id_ref_instansi`, `id_ref_jenis_project`, `id_ref_perusahaan_pengguna`, `id_ref_perusahaan_peminjam`, `id_ref_lokasi`, `id_ref_kriteria`, `id_ref_metode_pembayaran`, `nos_spk`, `penanggungjawab_lapangan`, `penanggungjawab_administrasi`, `status_admin`, `status_teknis`, `status_kak`, `status_proposal`, `status_laporan_bulan`, `status_rab`, `status_spk`, `status_ssp_ppn`, `status_ssp_pph`, `status_sp2d`, `status_skb`, `status_bast`, `status_referensi_ta`, `status_pembelian_barang`, `administrasi`, `progress`, `keterangan`, `pagu`, `nilai_kontrak`, `nilai_akhir`, `jenis`, `pajak_ppn`, `pajak_pph`, `rentang_waktu`) VALUES
(45, 'PP.P.J.001-B.Kabayan', 1, 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2019, '2019-02-10', '2019-08-10', 'Potensi Project', 19, 3, 5, 9, 6, 3, 1, '5132.008.063 B/Kontrak/PPK-PNBP/6/2018', '', '', '', '', 'Belum', 'Belum', 'Proses', 'Proses', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Sudah', '', '', 67, '', 14560000, '14560000', '0.00000', 'Jasa', 'No. Pajak PPN Nya Ada', 'No. Pajak PPh Juga Ada', '0 Tahun, 6 Bulan, 0 Hari '),
(46, 'PP.P.J.002-B.Kabayan', 2, 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2019, '2019-02-10', '2019-08-10', 'Potensi Project', 19, 3, 5, 9, 6, 3, 2, '5132.008.063 B/Kontrak/PPK-PNBP/6/2018', '', '', '', '', 'Belum', 'Belum', 'Proses', 'Proses', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Sudah', '', '', 67, '', 14560000, '14560000', '0.00000', 'Jasa', 'No. Pajak PPN Nya Ada', 'No. Pajak PPh Juga Ada', '0 Tahun, 6 Bulan, 0 Hari '),
(47, '18.P.J.003-A.PT BIT', 3, 'PKL (Praktek Kerja Lapangan) SMKN 2 Bandung ', 2018, '2019-01-07', '2019-04-07', 'Pemenang', 18, 2, 1, NULL, 1, 1, 2, '2040/D7.12/KU/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', '', '', 35, 'Tidak Ada Keterangan Lebih Lanjut', 198171600, '197230000', '0.00000', 'Jasa', 'Ini No. Pajak PPN', '', '0 Tahun, 3 Bulan, 0 Hari '),
(48, '18.L.J.004-A.Waditra', 4, 'IT Support', 2018, '2019-04-24', '2019-05-27', 'Pemenang', 14, 1, 4, NULL, 2, 2, 1, '800/1264.A/Biro Kepeg/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 67, '', 424632992, '424633000', '0.00000', 'Jasa', '', '', '0 Tahun, 1 Bulan, 3 Hari '),
(49, '18.L.J.005-A.Hegar Daya', 5, 'Pembuatan Sistem Perizinan Elektronik PTSP ', 2018, '2019-06-01', '2019-10-31', 'Pemenang', 4, 1, 6, NULL, 4, 2, 2, '5132.008.063 B/Kontrak/PPK-PNBP/6/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 44, 'Termin Baru Dimulai', 942899968, '849000000', '0.00000', 'Jasa', '123456', '12345678910', '0 Tahun, 4 Bulan, 29 Hari '),
(50, '18.P.J.006-A.PT BIT', 6, 'Pemeliharaan Jaringan Komputer/ LAN', 2019, '2019-03-19', '2019-06-29', 'Pemenang', 8, 3, 1, NULL, 1, 2, 1, '023/1037/Pegum', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 25, '', 48000000, '48000000', '0.00000', 'Jasa', '', '', '0 Tahun, 3 Bulan, 10 Hari '),
(51, '18.P.J.007-A.Kabayan', 7, 'Jasa Konsultansi Pembangunan Website Versi Mobile', 2019, '2019-03-02', '2019-05-02', 'Pemenang', 8, 3, 5, NULL, 1, 2, 2, '047 / 1024 / PEGUM', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Proses', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 15, '', 49390000, '49390000', '0.00000', 'Jasa', '', '', '0 Tahun, 2 Bulan, 0 Hari '),
(52, '18.P.J.008-A.PT BIT', 8, 'Pengembangan Sistem Informasi Laboratorium Pengujian (SI-LAPI)', 2019, '2019-03-25', '2019-08-25', 'Pemenang', 23, 3, 1, NULL, 1, 2, 1, '003/PPK/Entry-DB/Distaru/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 20, 'Ini Adalah Keterangan ', 299777504, '327415000', '0.00000', 'Jasa', 'No. PPN', 'No. PPH', '0 Tahun, 5 Bulan, 0 Hari '),
(53, '18.P.J.009-B.BIT', 9, 'Jasa Konsultasi Pembuatan E-Library BPSDM Provinsi Jawa Barat', 2019, '2019-03-19', '2019-05-19', 'Pemenang', 7, 3, 3, 5, 1, 2, 1, '020/48/Pj-Bid.SKPK/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Sudah', '', '', 30, '', 48100000, '48100000', '0.00000', 'Jasa', '', '', '0 Tahun, 2 Bulan, 0 Hari '),
(54, '18.L.J.0010-A.DAMACO', 10, 'Pengadaasn LMS Tahap 2 (Sistem Informasi Geografis Lahan Berbasis Web GIS)', 2019, '2019-03-30', '2019-06-21', 'Pemenang', 4, 1, 7, NULL, 3, 2, 1, 'III/5123.009.064.H/18359398/SPJ-LMS/PPK-5123-PNBP/08/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', NULL, '', 1658040064, '1658040000', '0.00000', 'Jasa', '', '', '0 Tahun, 2 Bulan, 22 Hari '),
(55, '18.P.J.0011-B.BIT', 11, 'Belanja Jasa Konsultansi Pengembangan Sistem Informasi Bangrir - Pengembangan Sistem Informasi Manajemen Karir', 2019, '2019-05-07', '2019-06-05', 'Pemenang', 3, 3, 3, 5, 1, 2, 2, '027/23/PPK-22.002-2/BKPP/V/2018', '', '', '', '', 'Belum', 'Belum', 'Belum', 'Belum', 'Sudah', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', 'Belum', '', '', 45, '', 48950000, '48950000', '0.00000', 'Jasa', '', '', '0 Tahun, 0 Bulan, 29 Hari ');

-- --------------------------------------------------------

--
-- Table structure for table `projek_termin`
--

CREATE TABLE `projek_termin` (
  `id` int(11) NOT NULL,
  `id_projek` int(11) NOT NULL,
  `termin` int(11) NOT NULL,
  `persen` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projek_termin`
--

INSERT INTO `projek_termin` (`id`, `id_projek`, `termin`, `persen`, `jumlah`, `keterangan`) VALUES
(59, 42, 1, 30, 3862950, ''),
(60, 42, 2, 45, 5794425, ''),
(61, 42, 3, 25, 3219125, ''),
(63, 44, 1, 36, 5241600, ''),
(64, 44, 2, 63, 9172800, ''),
(65, 46, 1, 29, 4222400, 'Tidak Ada'),
(66, 47, 1, 25, 49307500, 'Ini Termin Pertamanya'),
(67, 49, 1, 30, 254700000, ''),
(68, 55, 1, 30, 14685000, ''),
(69, 55, 2, 40, 19580000, ''),
(71, 47, 2, 40, 78892000, ''),
(76, 55, 3, 30, 14685000, ''),
(77, 51, 1, 25, 12347500, ''),
(78, 51, 2, 45, 22225500, ''),
(80, 51, 3, 30, 14817000, '');

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
-- Table structure for table `ref_metode_pembayaran`
--

CREATE TABLE `ref_metode_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_metode_pembayaran`
--

INSERT INTO `ref_metode_pembayaran` (`id`, `nama`) VALUES
(1, 'Langsung'),
(2, 'Termin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ref_perusahaan`
--

CREATE TABLE `ref_perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
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
(4, 'Fulan1', 2, 'Fulan2', '', ''),
(5, 'teknis', 3, 'teknis123', '', '');

--
-- Indexes for dumped tables
--

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
  ADD KEY `Id_lokasi` (`id_ref_lokasi`),
  ADD KEY `id_hari` (`id_ref_metode_pembayaran`) USING BTREE,
  ADD KEY `status` (`status`),
  ADD KEY `id_ref_metode_pembayaran` (`id_ref_metode_pembayaran`);

--
-- Indexes for table `projek_termin`
--
ALTER TABLE `projek_termin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ref_metode_pembayaran`
--
ALTER TABLE `ref_metode_pembayaran`
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
-- AUTO_INCREMENT for table `projek`
--
ALTER TABLE `projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `projek_termin`
--
ALTER TABLE `projek_termin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
-- AUTO_INCREMENT for table `ref_metode_pembayaran`
--
ALTER TABLE `ref_metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_perusahaan`
--
ALTER TABLE `ref_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projek`
--
ALTER TABLE `projek`
  ADD CONSTRAINT `projek_ibfk_1` FOREIGN KEY (`id_ref_perusahaan_pengguna`) REFERENCES `ref_perusahaan` (`id`),
  ADD CONSTRAINT `projek_ibfk_2` FOREIGN KEY (`id_ref_kriteria`) REFERENCES `ref_kriteria` (`id`),
  ADD CONSTRAINT `projek_ibfk_3` FOREIGN KEY (`id_ref_instansi`) REFERENCES `ref_instansi` (`id`),
  ADD CONSTRAINT `projek_ibfk_4` FOREIGN KEY (`id_ref_jenis_project`) REFERENCES `ref_jenis_projek` (`id`),
  ADD CONSTRAINT `projek_ibfk_5` FOREIGN KEY (`id_ref_lokasi`) REFERENCES `ref_lokasi` (`id`),
  ADD CONSTRAINT `projek_ibfk_6` FOREIGN KEY (`id_ref_perusahaan_peminjam`) REFERENCES `ref_perusahaan` (`id`),
  ADD CONSTRAINT `projek_ibfk_7` FOREIGN KEY (`id_ref_metode_pembayaran`) REFERENCES `ref_metode_pembayaran` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
