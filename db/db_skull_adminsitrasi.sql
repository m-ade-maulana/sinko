-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220503.2d475d6680
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2023 pada 08.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skull_adminsitrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `jam_pulang` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`id`, `nama`, `tanggal`, `jam_masuk`, `jam_pulang`, `id_user`) VALUES
(19, 'M ade maulana', '15:Jun:2022', '03:10:47', '03:50:52', 964041);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_account`
--

CREATE TABLE `tb_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_account`
--

INSERT INTO `tb_account` (`id`, `username`, `password`, `id_user`, `level`) VALUES
(9, '123456789', '123456', 1234, 'admin'),
(10, '0001235673', '1234567', 964041, 'TU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_karyawan`
--

CREATE TABLE `tb_data_karyawan` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_karyawan`
--

INSERT INTO `tb_data_karyawan` (`id`, `id_karyawan`, `nik`, `nama`, `tanggal_lahir`, `email`, `no_telp`, `tanggal_masuk`, `jabatan`, `foto_profile`) VALUES
(5, 964041, '0001235673', 'M ade maulana', '2022-06-07', 'youremail@gmail.com', '089512345678', '2022-06-08', 'TU', 'picture-16079371001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_id_akses_user`
--

CREATE TABLE `tb_id_akses_user` (
  `id` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_akses` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_id_akses_user`
--

INSERT INTO `tb_id_akses_user` (`id`, `id_user`, `id_akses`, `keterangan`) VALUES
(1, 1, 9, 'Administrasi'),
(2, 2, 1, 'Tata Usaha Keuangan'),
(3, 3, 2, 'Tata Usaha Surat Menyurat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting_jam`
--

CREATE TABLE `tb_setting_jam` (
  `id` int(11) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `jam_pulang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_setting_jam`
--

INSERT INTO `tb_setting_jam` (`id`, `jam_masuk`, `jam_pulang`) VALUES
(1, '08:00:00', '16:12:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_id_akses_user`
--
ALTER TABLE `tb_id_akses_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_setting_jam`
--
ALTER TABLE `tb_setting_jam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_id_akses_user`
--
ALTER TABLE `tb_id_akses_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_setting_jam`
--
ALTER TABLE `tb_setting_jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
