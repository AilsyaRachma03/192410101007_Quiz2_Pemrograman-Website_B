-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2021 pada 08.26
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs_unej`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `nim`, `prodi`, `fakultas`, `email`) VALUES
(1, 'NurIndah123', '$2y$10$5nShPdzFX6oR6NeutnIvOulGkphctwmzbcdeYU94ySDxd35pZzWg.', 'Nur Indah Fidia Wati', '192410101039', 'Sistem Informasi', 'Ilmu Komputer', 'nurindahfidiawati22@gmail.com'),
(2, 'RachmaAilsya09', '$2y$10$A5VQnSCaMr.8Mm1A5HV/7OIM2qKSn7U/DCGGTTqxyOP798T8DItMK', 'Rachma Ailsya', '192410101007', 'Sistem Informasi', 'Ilmu Komputer', 'rachmaailsya9@gmail.com'),
(4, 'mamanMegeli', '$2y$10$AjVdaSStYvkOnKVR5L9dRet3UR4PDl2oBk9Y9V7ENBjvZdJ2n25rS', 'Azril Ihza Rachman', '202410101090', 'Sistem Informasi', 'Ilmu Komputer', 'maman@gmail.com'),
(5, 'DimasFaperta', '$2y$10$7O0lOIbHzsjMkN38Y/4s7uhzHSKVYnkZuXaaNT7SDoP.ILDlVuJZC', 'Dimas Ristian Putra', '191510501127', 'Agroteknologi', 'Pertanian', 'dimasristian77@gmail.com'),
(8, 'BaiduriZahra123', '$2y$10$Oev6yJkGw.nW0wyN9Pr5LeUzFspQGXBKFQZsqd8cVba5EvhkXMa16', 'Baiduri Zahra', '190910201064', 'Administrasi Negara', 'Ilmu Sosial Politik', '190910201064@students.unej.ac.id'),
(9, 'LusianaCandra_1', '$2y$10$w8TV9CxATIAxj5OSd35DEO6F3wI1Q/HHEtUyvLMErqNB7UW/zhyCK', 'Chandra Lusiana Nurcholifah', '190210401104', 'Pendidikan Bahasa Inggris', 'Keguruan dan Ilmu Pendidikan', '190210401104@students.unej.ac.id'),
(10, 'Afi_Juna', '$2y$10$eUd1bGO2MrNhe6pbN5u4CuMbVKZWURl9wSQ445S/tzEFCB8XevVRi', 'Nama : Muhammad Afi Junaidi', '181910101060', 'Teknik Mesin', 'Teknik', 'tavishlevithian@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
