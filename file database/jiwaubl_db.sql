-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 07.18
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
  `statusbidang` enum('T','F') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang_tb`
--

INSERT INTO `bidang_tb` (`idbidang`, `namabidang`, `statusbidang`) VALUES
(1, 'Kemandirian Pangan', 'T'),
(2, 'Energi dan Sumber Daya Alam', 'T'),
(3, 'Kesehatan dan Farmasi', 'T'),
(4, 'Transportasi', 'T'),
(5, 'Informasi dan Komunikasi', 'T'),
(6, 'Pertahanan dan Keamanan', 'T'),
(7, 'Kemaritiman', 'T'),
(8, 'Penanggulangan Kebencanaan', 'T'),
(9, 'Sosial Humaniora', 'T'),
(10, 'Seni Budaya', 'T'),
(11, 'Pendidikan', 'T'),
(12, 'Ekonomi dan Bisnis', 'T'),
(13, 'Material Maju', 'T'),
(14, 'Pariwisata dan Ekonomi Kreatif', 'T'),
(15, 'Pengembangan Infrastruktur', 'T'),
(16, 'Perdagangan', 'T'),
(17, 'Industri Manufaktur', 'T'),
(18, 'Tekstil', 'T');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inovasi_tb`
--

INSERT INTO `inovasi_tb` (`id_inovasi`, `judul`, `bidang`, `deskripsi_produk`, `harga_produk`, `unggah_dokumen`, `jenis_inovasi`, `status_inovasi`, `catatan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Tes judul inovasi 1', 5, 'Tes deskripsi inovasi', '20000000', '846715030.jpg', 'produk', '0', NULL, 1, '2023-05-15 04:28:15', NULL),
(2, 'Tes judul 2', 16, 'Tes deksripsi 2', '1200000', '1572206922.png', 'produk', '0', NULL, 1, '2023-05-15 03:10:53', NULL),
(3, 'Tes judul 3', 7, 'Tes deskripsi produk 3', '8900000', '561431608.png', 'produk', '0', NULL, 1, '2023-05-15 03:16:22', NULL),
(4, 'Tes judul 4', 4, 'Tes deskripsi produk 4', '9800000', '775146152.png', 'produk', '0', NULL, 1, '2023-05-15 03:18:02', NULL),
(5, 'Tes inovasi 5', 9, 'Tes deskripsi produk 5', '30000000', '667089465.PNG', 'produk', '0', NULL, 1, '2023-05-15 04:27:01', NULL),
(6, 'COBA', 5, 'JAJAL', '300000', '618137087.jpg', 'produk', '1', NULL, 1, '2023-05-15 04:39:04', NULL);

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
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$Lu0sCvUXnGTrS.8vz75jaunbwLgGbANZhzqB9xIYBy/l43xW6eQTC', '943279085.png', 1, 0, NULL, NULL, NULL);

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
,`statusbidang` enum('T','F')
,`id` int(10) unsigned
,`name` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_inovasi`
--
DROP TABLE IF EXISTS `v_inovasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_inovasi`  AS SELECT `inovasi_tb`.`id_inovasi` AS `id_inovasi`, `inovasi_tb`.`judul` AS `judul`, `inovasi_tb`.`deskripsi_produk` AS `deskripsi_produk`, `inovasi_tb`.`harga_produk` AS `harga_produk`, `inovasi_tb`.`unggah_dokumen` AS `unggah_dokumen`, `inovasi_tb`.`jenis_inovasi` AS `jenis_inovasi`, `inovasi_tb`.`status_inovasi` AS `status_inovasi`, `inovasi_tb`.`catatan` AS `catatan`, `inovasi_tb`.`created_at` AS `created_at`, `inovasi_tb`.`updated_at` AS `updated_at`, `bidang_tb`.`idbidang` AS `idbidang`, `bidang_tb`.`namabidang` AS `namabidang`, `bidang_tb`.`statusbidang` AS `statusbidang`, `users`.`id` AS `id`, `users`.`name` AS `name` FROM ((`inovasi_tb` join `bidang_tb` on(`bidang_tb`.`idbidang` = `inovasi_tb`.`bidang`)) join `users` on(`users`.`id` = `inovasi_tb`.`created_by`)) WHERE `bidang_tb`.`statusbidang` = 'T' ORDER BY `inovasi_tb`.`id_inovasi` AS `DESCdesc` ASC  ;

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
  MODIFY `idbidang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `inovasi_tb`
--
ALTER TABLE `inovasi_tb`
  MODIFY `id_inovasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
