-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 06.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_13_062508_create_news_table', 1),
(4, '2019_07_13_065721_create_produks_table', 1),
(5, '2019_07_13_070243_create_pesanans_table', 1),
(6, '2019_07_13_070424_add_fk_produk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `kontent`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tfgyhujikpol[;pjhug edit', 'gyhujiopl\'[lkjhgfccvhbnjmkl; edit', 'news/n6EZdfz5M6MJp80MRYRn0iobYVz31VxYUTM3hNkL.jpeg', '1', '2019-07-13 03:21:56', '2019-07-13 03:29:14'),
(2, 'tfgyhujikpol[;pjhug', 'gyhujiopl\'[lkjhgfccvhbnjmkl;', 'news/1Vu42DH1YmMZ9SvCyUPs3zFx5xnRw72Cd9MTnb4w.jpeg', '0', '2019-07-13 03:22:16', '2019-07-13 03:29:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `nama`, `email`, `id_produk`, `alamat`, `no_hp`, `konfirmasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adinda', 'adinda@gmail.com', 1, 'Tegal', '0877874787', '1', '0', NULL, '2019-07-13 02:12:07'),
(2, 'dinda', 'adindarj220@gmail.com', 2, 'aaaa', '', '1', '0', NULL, '2019-07-14 06:19:33'),
(3, 'adindar', 'adindarj@gmail.com', 2, 'aaaaaaaaaa', '23456789', '1', '0', '2019-07-13 03:01:57', '2019-07-14 11:54:53'),
(4, 'adindar', 'adindarj@gmail.com', 2, 'aaaaaaaaaa', '23456789', '1', '0', '2019-07-13 03:02:09', '2019-07-14 11:54:58'),
(5, 'helfanza', 'nanda@mail.com', 1, 'tegal', '089663543354', '1', '1', '2019-07-13 03:06:58', '2019-07-14 12:02:29'),
(6, 'adinn', 'adin@gmail.com', 1, 'adiwerna', '085645348734', '0', '1', '2019-07-14 12:06:25', '2019-07-14 12:06:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `harga`, `foto`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KITTEN IN JELLY & GRAVY', 78000, 'berita/zZCIZ8pyiUEgpFOG0qngxEb0oMbcKOGYTIhxD03g.jpeg', 'Royal Canin Kitten in Jelly & Gravy hadir dalam tekstur yang disukai dan mudah untuk dikonsumsi anak kucingmu, serta mengandung nutrisi yang membantu menjaga sistem imun.', '1', '2019-07-13 01:19:15', '2019-07-14 07:55:08'),
(2, 'Mantap ANjing', 98000, 'produk/QTREBBrHUvbOBXyR74f5pr64qtGoCridKDbxSf9O.jpeg', 'Rasanya pedes', '0', '2019-07-13 01:51:37', '2019-07-14 07:41:39'),
(3, '(GRAVY) KITTEN INSTINCTIVE', 100000, 'produk/TB2keNo0Sdhe7YfdAMqRoC11ABpxFMNllZAK7qXW.jpeg', 'Diformulasi secara khusus untuk membantu mendukung sistem kekebalan tubuh anak kucing lewat nutrisi seimbang.', '1', '2019-07-14 07:40:42', '2019-07-14 07:42:25'),
(4, 'Mini Starter Mother & Babydog', 60000, 'produk/abpDRfOtgWjMy4v7Tp9rBCFwQ6duuiQ3Nue3doxN.jpeg', 'Selain membutuhkan susu dari induk, anak anjing membutuhkan asupan yang dapat mendukung pertahanan sistem imun untuk menjaga kesehatan pencernaannya secara aktif.', '1', '2019-07-14 08:20:20', '2019-07-14 08:20:20'),
(5, 'makan hewan anjing', 78000, 'produk/DW6rd85j7S5KdMFuDpuCq6y9DadLnkHgIpFeyurD.jpeg', 'untuk umur 4-5 thn', '1', '2019-07-14 12:03:49', '2019-07-14 12:03:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adinda', 'admin@gmail.com', NULL, '$2y$10$WMfEFDbHV/C8bMUK3ouJ9uZjN1teDjAzLJg9FkrVg3/3.WF6tRjHq', NULL, '2019-07-13 01:11:35', '2019-07-13 01:11:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanans_id_produk_foreign` (`id_produk`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
