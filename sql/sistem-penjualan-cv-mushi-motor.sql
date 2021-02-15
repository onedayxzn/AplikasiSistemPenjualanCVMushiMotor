-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2021 pada 14.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-penjualan-cv-mushi-motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `Id_kendaraan` int(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Jenis` varchar(30) NOT NULL,
  `Harga_awal` int(20) NOT NULL,
  `Tahun` year(4) NOT NULL,
  `No_polisi` varchar(20) NOT NULL,
  `No_Mesin` varchar(20) NOT NULL,
  `No_rangka` varchar(20) NOT NULL,
  `No_bpkb` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`Id_kendaraan`, `Merk`, `Jenis`, `Harga_awal`, `Tahun`, `No_polisi`, `No_Mesin`, `No_rangka`, `No_bpkb`, `Warna`, `Harga`) VALUES
(243022, 'Yamaha', 'RX 1000', 11000000, 2020, 'D 2020 AB', 'ywueh2e38', 'd3i2hei8cjd', 'weijd23879i', 'hitam', 15000000),
(243035, 'Vespa', 'primavera iget', 7000000, 2019, 'D ABC 24', 'qeyuadjbdsbd213', 'sada34esdaszxasd', '3243edssaxasd32', 'Merah', 10000000),
(243037, 'Yamaha', 'Aerox Maxi Signature', 20000000, 2020, 'D ABK 20', 'ajdiajsdijweij33e', 'd32dsidjfj23i93', 'fdsLLMDKM9', 'hitam', 25000000),
(243038, 'Yamaha', 'Aerox Maxi Signature', 20000000, 2020, 'D AAAA 20', 'dhasdhiuq8238he', 'MjsdhuuDhssdI', 'GHjdnsdU899du', 'Putih', 25000000),
(243039, 'Suzuki', 'Vespa', 1000000, 2017, 'D 6780 AA', 'asdnNisuduD', 'Ts7dasdUdjdnu', 'HgaSDkjkjDsd', 'ksajdiUJISd80', 20000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan_keluar`
--

CREATE TABLE `kendaraan_keluar` (
  `Id_kendaraanKeluar` int(11) NOT NULL,
  `Id_kendaraan` int(10) NOT NULL,
  `Tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan_keluar`
--

INSERT INTO `kendaraan_keluar` (`Id_kendaraanKeluar`, `Id_kendaraan`, `Tgl_keluar`) VALUES
(17, 243022, '2021-02-14'),
(18, 243021, '2021-02-14'),
(19, 243037, '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan_masuk`
--

CREATE TABLE `kendaraan_masuk` (
  `Id_kendaraanMasuk` int(11) NOT NULL,
  `Id_kendaraan` int(10) NOT NULL,
  `Tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan_masuk`
--

INSERT INTO `kendaraan_masuk` (`Id_kendaraanMasuk`, `Id_kendaraan`, `Tgl_masuk`) VALUES
(16, 243022, '2021-02-14'),
(17, 243026, '2021-02-14'),
(18, 243035, '2021-02-14'),
(20, 243037, '2021-02-14'),
(21, 243038, '2021-02-15'),
(22, 243039, '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `Id_laporan` int(11) NOT NULL,
  `Kas` int(50) NOT NULL,
  `Piutang` int(50) NOT NULL,
  `Persediaan_kendaraan` int(50) NOT NULL,
  `Service` int(50) NOT NULL,
  `Gedung` int(50) NOT NULL,
  `Peralatan` int(50) NOT NULL,
  `Utang` int(50) NOT NULL,
  `Gaji_karyawan` int(50) NOT NULL,
  `Modal` int(50) NOT NULL,
  `Tgl_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`Id_laporan`, `Kas`, `Piutang`, `Persediaan_kendaraan`, `Service`, `Gedung`, `Peralatan`, `Utang`, `Gaji_karyawan`, `Modal`, `Tgl_laporan`) VALUES
(20, 20000000, 1000000, 200000, 200000, 2000000, 10000000, 200000000, 50510000, 25000000, '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `Id_stok` int(11) NOT NULL,
  `Id_kendaraan` int(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `Jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_transaksi` int(10) NOT NULL,
  `Id_kendaraan` int(30) NOT NULL,
  `Nama_konsumen` varchar(30) NOT NULL,
  `Alamat_konsumen` varchar(50) NOT NULL,
  `Tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`Id_transaksi`, `Id_kendaraan`, `Nama_konsumen`, `Alamat_konsumen`, `Tgl_transaksi`) VALUES
(62, 243026, 'Listyo Adi Pamungkas', 'Bandung, Jawabarat', '2021-02-15'),
(65, 243022, 'Naufal Zaki Musyafa', 'Cairo, Mesir', '2021-02-15'),
(66, 243037, 'kim jong un', 'pyoengyang, north korea', '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_telepon` varchar(16) NOT NULL,
  `Gaji` int(20) DEFAULT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Photo` varchar(5000) DEFAULT NULL,
  `Tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `Username`, `Nama`, `Email`, `Password`, `Level`, `Alamat`, `No_telepon`, `Gaji`, `Jenis_kelamin`, `Photo`, `Tgl_lahir`) VALUES
(242884, 'onedayxzn', 'Sukma Ramadhan Asri', 'sukmaramadhanasri@gmail.com', '03c242b6a3167f525992d558cbf2f197', 'Admin', 'Bandung', '08986451033', 0, '', '', '2001-11-24'),
(242901, 'arif', 'Arif Rachmawan', 'mbaharif@gmail.com', '9e014682c94e0f2cc834bf7348bda428', 'Karyawan', 'Bandung', '0893848324', 7500000, 'Laki-Laki', '', '1998-07-20'),
(242902, 'Rahma', 'Rahma Salsa Bilah', 'Rahmasalsa28@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Manajemen Keuangan', 'Cikalong wetan, Jawa barat', '08838198312', 8000000, 'Perempuan', '', '2000-11-28'),
(242903, 'helen', 'Helena Meilina', 'helena@gmail.com', 'a4151d4b2856ec63368a7c784b1f0a6e', 'Manajemen Keuangan', 'Sumedang, Jawa barat', '0819398313', 8000000, 'Perempuan', '', '2001-07-11'),
(242908, 'saya', 'Saya', 'saya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Karyawan', 'Bandung', '089812939823', 7000000, 'Laki-Laki', '', '0000-00-00'),
(242909, 'songheng', 'soeng heung min', 'heungmin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Gudang', 'north korea', '0898938923', 10000000, 'Laki-Laki', '', '1980-02-20'),
(242910, 'kubo', 'Takefuso kubo', 'kubo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Manajemen Keuangan', 'Tokyo', '08923982138', 10000000, 'Laki-Laki', '', '2002-07-20'),
(242911, 'asd', 'asd', 'asdsd@sadsad', '1ae33248d11c82a1510813fd743f6be9', 'Gudang', 'ushdjh', '012398938938', 10000, 'Laki-Laki', '', '2000-11-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`Id_kendaraan`);

--
-- Indeks untuk tabel `kendaraan_keluar`
--
ALTER TABLE `kendaraan_keluar`
  ADD PRIMARY KEY (`Id_kendaraanKeluar`),
  ADD KEY `Id_kendaraan` (`Id_kendaraan`) USING BTREE;

--
-- Indeks untuk tabel `kendaraan_masuk`
--
ALTER TABLE `kendaraan_masuk`
  ADD PRIMARY KEY (`Id_kendaraanMasuk`),
  ADD KEY `Id_kendaraan` (`Id_kendaraan`) USING BTREE;

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`Id_laporan`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`Id_stok`),
  ADD KEY `Id_kendaraan` (`Id_kendaraan`) USING BTREE;

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_transaksi`),
  ADD UNIQUE KEY `Id_kendaraan` (`Id_kendaraan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `Id_kendaraan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243040;

--
-- AUTO_INCREMENT untuk tabel `kendaraan_keluar`
--
ALTER TABLE `kendaraan_keluar`
  MODIFY `Id_kendaraanKeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kendaraan_masuk`
--
ALTER TABLE `kendaraan_masuk`
  MODIFY `Id_kendaraanMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `Id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `Id_stok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242912;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`Id_kendaraan`) REFERENCES `kendaraan` (`Id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
