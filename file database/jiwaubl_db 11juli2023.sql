-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 16.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiwaubl_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_tb`
--

CREATE TABLE `bidang_tb` (
  `idbidang` int(3) NOT NULL,
  `namabidang` varchar(100) NOT NULL,
  `jenis_bidang` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=produk,1=jasa',
  `statusbidang` enum('T','F') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang_tb`
--

INSERT INTO `bidang_tb` (`idbidang`, `namabidang`, `jenis_bidang`, `statusbidang`) VALUES
(1, 'Kemandirian Pangan', '1', 'T'),
(2, 'Energi dan Sumber Daya Alam', '0', 'T'),
(3, 'Kesehatan dan Farmasi', '1', 'T'),
(4, 'Transportasi', '1', 'T'),
(5, 'Informasi dan Komunikasi', '1', 'T'),
(6, 'Pertahanan dan Keamanan', '0', 'T'),
(7, 'Kemaritiman', '1', 'T'),
(8, 'Penanggulangan Kebencanaan', '1', 'T'),
(9, 'Sosial Humaniora', '1', 'T'),
(10, 'Seni Budaya', '0', 'T'),
(11, 'Pendidikan', '1', 'T'),
(12, 'Ekonomi dan Bisnis', '0', 'T'),
(13, 'Material Maju', '0', 'T'),
(14, 'Pariwisata dan Ekonomi Kreatif', '0', 'T'),
(15, 'Pengembangan Infrastruktur', '1', 'T'),
(16, 'Perdagangan', '1', 'T'),
(17, 'Industri Manufaktur', '1', 'T'),
(18, 'Tekstil', '0', 'T'),
(19, 'Labing', '1', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovasi_tb`
--

CREATE TABLE `inovasi_tb` (
  `id_inovasi` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `bidang` int(2) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` varchar(11) NOT NULL,
  `unggah_dokumen` varchar(100) NOT NULL,
  `jenis_inovasi` enum('produk','jasa') NOT NULL,
  `status_inovasi` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0=menunggu konfirmasi,1=publish,2=perbaikan,3=ditolak',
  `catatan` text DEFAULT NULL,
  `created_by` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inovasi_tb`
--

INSERT INTO `inovasi_tb` (`id_inovasi`, `judul`, `bidang`, `deskripsi_produk`, `harga_produk`, `unggah_dokumen`, `jenis_inovasi`, `status_inovasi`, `catatan`, `created_by`, `created_at`, `updated_at`) VALUES
(33, 'Tes judul inovasi 1 wa', 10, 'coba12', '9800000', '88068982.PNG', 'jasa', '0', NULL, 15, '2023-06-23 15:30:25', NULL),
(34, 'Tes produk 1', 13, 'Tes desipi produk1', '8900000', '432152260.png', 'produk', '0', NULL, 15, '2023-06-23 15:35:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider_tb`
--

CREATE TABLE `slider_tb` (
  `idslider` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'sliderweb1.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` enum('slider1','slider2','slider3','slider4') NOT NULL,
  `activate` enum('T','F') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slider_tb`
--

INSERT INTO `slider_tb` (`idslider`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`, `position`, `activate`) VALUES
(1, 'Kegiatan PPIK 1 rev 02', 'Kegiatan PPIK tahun 2023 1 rev 02', '1171216336.jpg', '2023-07-05 02:43:47', '2023-07-05 04:20:30', 'slider1', 'F'),
(2, 'Tes judul slider 2 rev 03', 'Deskripsi slider 2 rev 03', '1293915586.jpeg', '2023-07-05 02:43:47', '2023-07-05 04:35:54', 'slider2', 'T'),
(3, 'Tes judul slider 3 rev 02', 'Deskripsi slider 3 rev 02', '66906926.jpg', '2023-07-05 02:46:24', '2023-07-05 04:42:59', 'slider3', 'T'),
(4, 'Tes judul slider 4 rev 02', 'Deskripsi slider 4 rev 02', '1603608177.jpg', '2023-07-05 02:46:50', '2023-07-05 04:50:12', 'slider4', 'F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahapan`
--

CREATE TABLE `tahapan` (
  `idstep` int(4) NOT NULL,
  `id_inovasi` int(4) NOT NULL,
  `status_step` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0=menunggu konfirmasi,1=publish,2=perbaikan,3=ditolak',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tahapan`
--

INSERT INTO `tahapan` (`idstep`, `id_inovasi`, `status_step`, `created_at`, `updated_at`) VALUES
(4, 21, '0', '2023-06-17 05:29:59', NULL),
(5, 22, '1', '2023-06-17 05:32:07', '2023-06-17 13:59:53'),
(6, 23, '0', '2023-06-17 17:03:48', NULL),
(7, 24, '0', '2023-06-17 17:22:30', NULL),
(8, 25, '0', '2023-06-17 17:36:22', NULL),
(9, 26, '0', '2023-06-17 17:40:03', NULL),
(10, 27, '3', '2023-06-18 09:57:37', '2023-06-18 10:26:03'),
(11, 28, '0', '2023-06-18 12:55:45', NULL),
(12, 29, '3', '2023-06-18 13:12:31', '2023-06-18 13:55:50'),
(13, 31, '0', '2023-06-23 15:24:09', NULL),
(14, 32, '0', '2023-06-23 15:25:01', NULL),
(15, 33, '0', '2023-06-23 15:30:25', NULL),
(16, 34, '0', '2023-06-23 15:35:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `pasfoto` varchar(250) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `roles` int(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `pasfoto`, `isAdmin`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$s/8EIF2jti8I2HXHIuXkku2dLQI7cn4/YhWUN9uuW1jBWA/JqdZgi', '913534294.png', 1, 0, NULL, NULL, NULL),
(15, 'Akun Satu', 'tes@gmail.com', NULL, '$2y$10$/ncwYuZTi283SxtEIQEXQuAHW2dz6dhVFiMG718uTo6v4ba4nrCPO', '1212807423.png', 0, 1, NULL, '2023-06-18 09:55:34', NULL),
(16, 'Akun Dua', 'tes2@gmail.com', NULL, '$2y$10$XemayNa4mFW6OBpgqQUiLuc8sKZwvQnyyjycn.x/5nHCOTj//vzsO', '472199283-default.png', 0, 1, NULL, '2023-06-18 14:50:32', NULL),
(19, 'Bagas Dwijayanto', 'bagasdwijayanto760@gmail.com', NULL, '$2y$10$2q6u8Ndz.J8uEnczu.JUQuCvEqbgPW9GUqftCjyWS5jSb3ehnUTSi', '1271451994-default.png', 0, 1, NULL, '2023-06-24 04:08:12', NULL),
(21, 'Lumen Robot', 'lumenrobot@gmail.com', NULL, '$2y$10$LHPO6weaLAPP6X/K3CCfY.t7jxIzJ9UNXJWBp05PtqfDFIo.9yL6G', '1330429976-default.png', 0, 1, NULL, '2023-06-25 00:07:34', NULL),
(22, 'PPIK UBL', 'infoppik@ubl.ac.id', NULL, '$2y$10$b9mfcMQS/WCC7BXu4FZPWeZIpBIIf3a8GukQ7q8hEaPWC3hygBHSa', '2019540499-default.png', 0, 1, NULL, '2023-06-25 00:17:39', NULL),
(23, 'Artech arta gemilang', 'ari.kurniawan.saputra92@gmail.com', NULL, '$2y$10$33pv6YybCUZd3TCMTnj8n.FNjToazJ4gFhjv7xhqM/3M9e1InhNwi', '1822133375-default.png', 0, 1, NULL, '2023-06-25 00:18:03', NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_inovasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_inovasi` (
`id_inovasi` int(4)
,`judul` varchar(100)
,`deskripsi_produk` text
,`harga_produk` varchar(11)
,`unggah_dokumen` varchar(100)
,`jenis_inovasi` enum('produk','jasa')
,`status_inovasi` enum('0','1','2','3')
,`catatan` text
,`created_at` timestamp
,`updated_at` timestamp
,`idbidang` int(3)
,`namabidang` varchar(100)
,`jenis_bidang` enum('0','1')
,`statusbidang` enum('T','F')
,`id` int(10) unsigned
,`name` varchar(255)
,`email` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_tahapan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_tahapan` (
`idinovasi` int(4)
,`iduser` int(3)
,`jenis` enum('produk','jasa')
,`idstep` int(4)
,`status_step` enum('0','1','2','3')
,`catatan` text
,`tgl` timestamp
,`nextdate` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_inovasi`
--
DROP TABLE IF EXISTS `v_inovasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_inovasi`  AS SELECT `inovasi_tb`.`id_inovasi` AS `id_inovasi`, `inovasi_tb`.`judul` AS `judul`, `inovasi_tb`.`deskripsi_produk` AS `deskripsi_produk`, `inovasi_tb`.`harga_produk` AS `harga_produk`, `inovasi_tb`.`unggah_dokumen` AS `unggah_dokumen`, `inovasi_tb`.`jenis_inovasi` AS `jenis_inovasi`, `inovasi_tb`.`status_inovasi` AS `status_inovasi`, `inovasi_tb`.`catatan` AS `catatan`, `inovasi_tb`.`created_at` AS `created_at`, `inovasi_tb`.`updated_at` AS `updated_at`, `bidang_tb`.`idbidang` AS `idbidang`, `bidang_tb`.`namabidang` AS `namabidang`, `bidang_tb`.`jenis_bidang` AS `jenis_bidang`, `bidang_tb`.`statusbidang` AS `statusbidang`, `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email` FROM ((`inovasi_tb` join `bidang_tb` on(`bidang_tb`.`idbidang` = `inovasi_tb`.`bidang`)) join `users` on(`users`.`id` = `inovasi_tb`.`created_by`)) WHERE `bidang_tb`.`statusbidang` = 'T' ORDER BY `inovasi_tb`.`id_inovasi` AS `DESCdesc` ASC  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_tahapan`
--
DROP TABLE IF EXISTS `v_tahapan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tahapan`  AS SELECT `inovasi_tb`.`id_inovasi` AS `idinovasi`, `inovasi_tb`.`created_by` AS `iduser`, `inovasi_tb`.`jenis_inovasi` AS `jenis`, `tahapan`.`idstep` AS `idstep`, `tahapan`.`status_step` AS `status_step`, `inovasi_tb`.`catatan` AS `catatan`, `tahapan`.`created_at` AS `tgl`, `tahapan`.`updated_at` AS `nextdate` FROM (`tahapan` join `inovasi_tb` on(`inovasi_tb`.`id_inovasi` = `tahapan`.`id_inovasi`)) ORDER BY `tahapan`.`idstep` AS `DESCdesc` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_tb`
--
ALTER TABLE `bidang_tb`
  ADD PRIMARY KEY (`idbidang`);

--
-- Indeks untuk tabel `inovasi_tb`
--
ALTER TABLE `inovasi_tb`
  ADD PRIMARY KEY (`id_inovasi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `slider_tb`
--
ALTER TABLE `slider_tb`
  ADD PRIMARY KEY (`idslider`);

--
-- Indeks untuk tabel `tahapan`
--
ALTER TABLE `tahapan`
  ADD PRIMARY KEY (`idstep`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_tb`
--
ALTER TABLE `bidang_tb`
  MODIFY `idbidang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `inovasi_tb`
--
ALTER TABLE `inovasi_tb`
  MODIFY `id_inovasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `slider_tb`
--
ALTER TABLE `slider_tb`
  MODIFY `idslider` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tahapan`
--
ALTER TABLE `tahapan`
  MODIFY `idstep` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
