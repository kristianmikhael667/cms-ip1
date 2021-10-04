-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Okt 2021 pada 07.10
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temuip1_conver`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `username` varchar(110) NOT NULL,
  `alamat` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL,
  `upload_logo` varchar(110) NOT NULL,
  `Status` enum('AKTIF','NON AKTIF') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `id_admin`, `username`, `alamat`, `email`, `password`, `upload_logo`, `Status`, `created_at`, `updated_at`) VALUES
(3, '619287343826', 'adminoneplus', 'Jalan Ke pasar', 'krismo@gmail.com', '$2y$10$/IKV7CVZ1SEM7i9ruZtdAeAm99lM6EHd5LPiGNZlo.oa9DJEBBDP6', '1631210610_0bbe82578c11943d78cc.jpeg', 'AKTIF', '2021-09-09 04:21:48', '2021-09-09 13:03:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `upload_logo` varchar(100) NOT NULL,
  `Status` enum('AKTIF','NON AKTIF') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `id_customer`, `username`, `nama_perusahaan`, `password`, `alamat`, `upload_logo`, `Status`, `created_at`, `updated_at`) VALUES
(3, '471791623496', 'gracetarihoran', 'PT Tarihoran', '$2y$10$FakBHkVZP0rrISdUU1hu8eaDMZrjxdG0MgBK9lM/Kla7JiznPqREq', 'Jalan Dewi Sartika', '1631177385_f5a79890124b228bb3db.jpeg', 'AKTIF', '2021-09-09 03:49:46', '2021-09-09 03:49:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hoc`
--

CREATE TABLE `tbl_hoc` (
  `id` int(11) NOT NULL,
  `id_hoc` varchar(255) NOT NULL,
  `name_hoc` varchar(110) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hoc`
--

INSERT INTO `tbl_hoc` (`id`, `id_hoc`, `name_hoc`, `status`, `created_at`, `updated_at`) VALUES
(1, '1321', '192.168.100.1', 'aktif', '2021-10-03 19:18:50', '2021-10-03 19:18:50'),
(2, '132645868517', '192.168.1.0', 'AKTIF', '2021-10-03 12:24:55', '2021-10-03 12:24:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_customer` varchar(255) DEFAULT NULL,
  `username` varchar(110) NOT NULL,
  `alamat` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL,
  `upload_logo` varchar(110) NOT NULL,
  `Status` enum('AKTIF','NON AKTIF') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_user`, `id_customer`, `username`, `alamat`, `password`, `upload_logo`, `Status`, `created_at`, `updated_at`) VALUES
(21, '875249176839', '471791623496', 'basistarihoran', 'Jalan Dewi Sartika', '$2y$10$stv/fV5z1ooQvDQl9vofNusYdh/8OrIZHyY/OYBdJQF6ZQCOIJ1o6', 'defaultimg.png', 'AKTIF', '2021-09-09 03:50:22', '2021-09-09 03:50:22'),
(23, '413395296178', '471791623496', 'basistarihoransuku2', 'Jalan Dewi Sartika Toba', '$2y$10$cym0vms48C6FoAPr3EcXR.gDTNSX2CvnjBaXQC/tlU4Dtf8Z9vlMa', '1631178961_cba1915d7673021a53aa.png', 'AKTIF', '2021-09-09 04:16:01', '2021-09-09 04:16:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_hoc`
--
ALTER TABLE `tbl_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_hoc`
--
ALTER TABLE `tbl_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
