-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2020 pada 16.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `spesialis`) VALUES
(2, 'Siti Aminah Sp.FK', 'Farmakologi Klinik'),
(4, 'M. Hadi Sp.GK', 'Ahli Gizi'),
(5, 'Moh. Bejo Sp.An', 'Anestesiologi'),
(6, 'Bambang Sudjatmiko Sp.PD', 'Penyakit Dalam'),
(7, 'Vera Bramasta Sp.A', 'Kesehatan Anak'),
(8, 'Arini Nur Safitri Sp.M', 'Kesehatan Mata'),
(9, 'Ariana Noor Sp. Rad', 'Radiologi'),
(10, 'Susilo Pramono Sp.BS', 'Bedah Saraf'),
(11, 'Tatiana Jong Sp.RM', 'Kedokteran Fisik dan Rehabilitasi'),
(12, 'Katy Shafira Sp.BP-RE', 'Bedah Plastik Rekonstruksi dan Estetik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `usia` varchar(25) DEFAULT NULL,
  `kamar` varchar(50) DEFAULT NULL,
  `checkin` varchar(50) DEFAULT NULL,
  `checkout` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `usia`, `kamar`, `checkin`, `checkout`) VALUES
(3, 'Sukma', 'Kapas', '19', 'IGD', '14 Februari 2020', '17 Februari 2020'),
(5, 'Riyan', 'Balen', '24', 'Marwah', '12 Desember 2020', '14 Desember 2020'),
(7, 'Fathin ', 'Sumberrejo', '20', 'Mina', '01 Januari 2019', '02 Januari 2019'),
(8, 'Thalia', 'Kalitidu', '20', 'Marwah', '17 Januari 2018', '19 Januari 2018'),
(9, 'Ahmad Azmi', 'Bojonegoro', '21', 'Marwah', '20 Maret 2020', '23 Maret 2020'),
(10, 'Alyadini', 'Klangon', '22', 'IGD', '01 Mei 2020', '01 Mei 2020'),
(11, 'Chandra Kirana', 'Kalitidu', '27', 'Marwah', '02 Mei 2020', '12 Mei 2020'),
(12, 'Erlina Febrianti', 'Mejuwet', '19', 'Mina', '12 Maret 2019', '14 Maret 2019'),
(13, 'Novita Eka', 'Dander', '23', 'Marwah', '13 Juni 2017', '22 Juni 2017'),
(14, 'Siti Safitri', 'Sukosewu', '25', 'IGD', '09 September 2019', '10 September 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `username`, `password`) VALUES
(1, 'petugas', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
