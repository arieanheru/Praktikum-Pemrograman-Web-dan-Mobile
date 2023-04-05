-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 12.24
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelanggan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id`, `nama`, `kategori`, `jk`) VALUES
(1, 'Amari Gibbs', 'Mahasiswa', 'P'),
(2, 'Darwin Mcclure', 'Siswa', 'L'),
(3, 'Amelie Houston', 'Siswa', 'P'),
(4, 'Will Martinez', 'Mahasiswa', 'L'),
(5, 'Rafael Lam', 'Mahasiswa', 'L'),
(6, 'Rashad Arroyo', 'Mahasiswa', 'L'),
(7, 'Annie Johnston', 'Siswa', 'P'),
(8, 'Christine Stephenson', 'Siswa', 'P'),
(9, 'Reese Oconnor', 'Mahasiswa', 'P'),
(10, 'Lawson Hickman', 'Mahasiswa', 'L'),
(11, 'Emilie House', 'Mahasiswa', 'P'),
(12, 'Claudia Costa', 'Siswa', 'P'),
(13, 'Konner Peck', 'Mahasiswa', 'L'),
(14, 'Giancarlo Bautista', 'Mahasiswa', 'P'),
(15, 'Nicholas Hansen', 'Siswa', 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
