-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 12.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penelitian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penelitian`
--

CREATE TABLE `tbl_penelitian` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `nim_mhs` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penelitian`
--

INSERT INTO `tbl_penelitian` (`id`, `nama_dosen`, `nik`, `topik`, `judul`, `waktu`, `nama_mhs`, `nim_mhs`, `link`) VALUES
(4, 'Firman Asharudin, S.Kom, M.Kom', '190302096', 'Teknologi Informasi', 'Analisis dan Perancangan Aplikasi Penyusunan Jadwal Mengajar Sesuai Jadwal Kesediaan Mengajar Dosen Di Fakultas Teknologi Informasi ', '2020-2021', 'Afra Amalia', '20.01.4547', 'https://journal.maranatha.edu/index.php/jutisi/article/view/580/576'),
(8, 'Dwi Rahayu, S.Kom., M.Kom', '190302238', 'Animasi Visual ', 'PEMANFAATAN PEMROGRAMAN VISUAL SEBAGAI ALTERNATIF PEMBUATAN MEDIA BELAJAR BERBASIS GAME DAN ANIMASI', '2021-2022', 'Noviana Sami Ratri', '20.01.4552', 'https://journals.ums.ac.id/index.php/warta/article/view/1984'),
(11, 'Moch Farid Fauzi, M.Kom', '19045689', 'Sistem Informasi', 'SISTEM INFORMASI GEOGRAFIS PEMETAAN POTENSI SMA/SMK BERBASIS WEB ', '2023-2024', 'Irvan Guntur Rahayu', '20.01.4561', 'https://core.ac.uk/download/pdf/295347966.pdf'),
(13, 'Toto Indriyatmoko, M.Kom', '190459089', 'E-Commerce', 'Perancangan E-commerce Untuk Memperluas Produk Komunikasi di PT. Golden Communication Berbasis Web Mobile', '2024-2025', 'Umi Ade Ningsih', '20.01.4571', 'http://ojs3.lppm-uis.org/index.php/JT-IBSI/article/view/87');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_penelitian`
--
ALTER TABLE `tbl_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_penelitian`
--
ALTER TABLE `tbl_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
