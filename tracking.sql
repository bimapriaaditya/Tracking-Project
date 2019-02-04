-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2019 pada 05.21
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jenis_instansi`
--

CREATE TABLE `ref_jenis_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_jenis_instansi`
--

INSERT INTO `ref_jenis_instansi` (`id_instansi`, `nama`) VALUES
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
-- Struktur dari tabel `ref_jenis_proyek`
--

CREATE TABLE `ref_jenis_proyek` (
  `id_jenis_proyek` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_jenis_proyek`
--

INSERT INTO `ref_jenis_proyek` (`id_jenis_proyek`, `nama`) VALUES
(1, 'LELANG'),
(2, 'LELANG/PL'),
(3, 'Penunjukan Langsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_kriteria`
--

CREATE TABLE `ref_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_kriteria`
--

INSERT INTO `ref_kriteria` (`id_kriteria`, `nama`) VALUES
(1, 'Jaringan'),
(2, 'Aplikasi'),
(3, 'Survei');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_lokasi`
--

CREATE TABLE `ref_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_lokasi`
--

INSERT INTO `ref_lokasi` (`id_lokasi`, `nama`) VALUES
(1, 'Bandung'),
(2, 'Jakarta'),
(3, 'BP Batam'),
(4, 'Batam'),
(5, 'Kalteng'),
(6, 'Tasik Malaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_perusahaan`
--

CREATE TABLE `ref_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_perusahaan`
--

INSERT INTO `ref_perusahaan` (`id_perusahaan`, `nama`) VALUES
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
-- Struktur dari tabel `ref_rentang_waktu`
--

CREATE TABLE `ref_rentang_waktu` (
  `id_rentang_waktu` int(11) NOT NULL,
  `bulan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_rentang_waktu`
--

INSERT INTO `ref_rentang_waktu` (`id_rentang_waktu`, `bulan`) VALUES
(1, '0 Bulan'),
(2, '1 Bulan'),
(3, '2 Bulan'),
(4, '3 Bulan'),
(5, '4 Bulan'),
(7, '5 Bulan'),
(8, '6 Bulan'),
(9, '7 Bulan'),
(10, '8 Bulan'),
(11, '9 Bulan'),
(12, '10 Bulan'),
(13, '11 Bulan'),
(14, '12 Bulan'),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_rentang_waktu_hari`
--

CREATE TABLE `ref_rentang_waktu_hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_rentang_waktu_hari`
--

INSERT INTO `ref_rentang_waktu_hari` (`id_hari`, `hari`) VALUES
(1, '1 hari'),
(2, '2 hari'),
(3, '3 hari'),
(4, '4 hari'),
(5, '5 hari'),
(6, '6 hari'),
(7, '7 hari'),
(8, '8 hari'),
(9, '9 hari'),
(10, '10 hari'),
(11, '11 hari'),
(12, '12 hari'),
(13, '13 hari'),
(14, '14 hari'),
(15, '15 hari'),
(16, '16 hari'),
(17, '17 hari'),
(18, '18 hari'),
(19, '19 hari'),
(20, '20 hari'),
(21, '21 hari'),
(22, '22 hari'),
(23, '23 hari'),
(24, '24 hari'),
(25, '25 hari'),
(26, '26 hari'),
(27, '27 hari'),
(28, '28 hari'),
(29, '29 hari'),
(30, '30 hari'),
(31, '31 hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_transaksi` int(11) NOT NULL,
  `kode_proyek` varchar(255) NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Tgl_mulai` date NOT NULL,
  `Tgl_akhir` date NOT NULL,
  `Status_proyek` varchar(255) NOT NULL,
  `Id_instansi` int(11) NOT NULL,
  `Id_jenis_proyek` int(11) NOT NULL,
  `Id_perusahaan_pengguna` int(11) NOT NULL,
  `Id_perusahaan_peminjam` int(11) NOT NULL,
  `Jenis_proyek` varchar(255) NOT NULL,
  `Id_kriteria` int(11) NOT NULL,
  `Id_rentang_waktu` int(11) NOT NULL,
  `nos_spk` varchar(255) NOT NULL,
  `Penanggungjawab_lap` varchar(255) NOT NULL,
  `Penanggungjawab_am` varchar(255) NOT NULL,
  `Status_admin` varchar(255) NOT NULL,
  `Status_teknis` varchar(255) NOT NULL,
  `KAK` varchar(255) NOT NULL,
  `Proposal` varchar(255) NOT NULL,
  `Laporan_bulan` varchar(255) NOT NULL,
  `RAB` varchar(255) NOT NULL,
  `SPK` varchar(255) NOT NULL,
  `SSP_PPN` varchar(255) NOT NULL,
  `SSP_PPh` varchar(255) NOT NULL,
  `SP2D` varchar(255) NOT NULL,
  `SKB` varchar(255) NOT NULL,
  `BAST` varchar(255) NOT NULL,
  `Referensi_TA` varchar(255) NOT NULL,
  `Pembelian_barang` varchar(255) NOT NULL,
  `AM` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pagu` int(11) NOT NULL,
  `Nilai_kontrak` int(11) NOT NULL,
  `Id_lokasi` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `id_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ref_jenis_instansi`
--
ALTER TABLE `ref_jenis_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `ref_jenis_proyek`
--
ALTER TABLE `ref_jenis_proyek`
  ADD PRIMARY KEY (`id_jenis_proyek`);

--
-- Indeks untuk tabel `ref_kriteria`
--
ALTER TABLE `ref_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `ref_lokasi`
--
ALTER TABLE `ref_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `ref_perusahaan`
--
ALTER TABLE `ref_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `ref_rentang_waktu`
--
ALTER TABLE `ref_rentang_waktu`
  ADD PRIMARY KEY (`id_rentang_waktu`);

--
-- Indeks untuk tabel `ref_rentang_waktu_hari`
--
ALTER TABLE `ref_rentang_waktu_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_transaksi`),
  ADD KEY `Id_instansi` (`Id_instansi`),
  ADD KEY `Id_jenis_proyek` (`Id_jenis_proyek`),
  ADD KEY `Id_perusahaan_pengguna` (`Id_perusahaan_pengguna`),
  ADD KEY `Id_perusahaan_peminjam` (`Id_perusahaan_peminjam`),
  ADD KEY `Id_kriteria` (`Id_kriteria`),
  ADD KEY `Id_rentang_waktu` (`Id_rentang_waktu`),
  ADD KEY `Id_lokasi` (`Id_lokasi`),
  ADD KEY `id_hari` (`id_hari`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ref_jenis_instansi`
--
ALTER TABLE `ref_jenis_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `ref_jenis_proyek`
--
ALTER TABLE `ref_jenis_proyek`
  MODIFY `id_jenis_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ref_kriteria`
--
ALTER TABLE `ref_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ref_lokasi`
--
ALTER TABLE `ref_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ref_perusahaan`
--
ALTER TABLE `ref_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ref_rentang_waktu`
--
ALTER TABLE `ref_rentang_waktu`
  MODIFY `id_rentang_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `ref_rentang_waktu_hari`
--
ALTER TABLE `ref_rentang_waktu_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`Id_instansi`) REFERENCES `ref_jenis_instansi` (`id_instansi`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`Id_jenis_proyek`) REFERENCES `ref_jenis_proyek` (`id_jenis_proyek`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`Id_perusahaan_pengguna`) REFERENCES `ref_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`Id_perusahaan_peminjam`) REFERENCES `ref_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`Id_kriteria`) REFERENCES `ref_kriteria` (`id_kriteria`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`Id_rentang_waktu`) REFERENCES `ref_rentang_waktu` (`id_rentang_waktu`),
  ADD CONSTRAINT `transaksi_ibfk_7` FOREIGN KEY (`Id_lokasi`) REFERENCES `ref_lokasi` (`id_lokasi`),
  ADD CONSTRAINT `transaksi_ibfk_8` FOREIGN KEY (`id_hari`) REFERENCES `ref_rentang_waktu_hari` (`id_hari`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
