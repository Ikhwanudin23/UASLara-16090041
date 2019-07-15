-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 18.40
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tegal_event`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `filename`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Lomba', '1563202247.jpg', '1', NULL, NULL, '2019-07-15 07:50:47', '2019-07-15 07:50:47'),
(2, 'olahraga', '1563202289.jpg', '1', NULL, NULL, '2019-07-15 07:51:29', '2019-07-15 07:51:29'),
(3, 'kesehatan', '1563204745.jpg', '1', NULL, NULL, '2019-07-15 08:32:25', '2019-07-15 08:32:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `nama_client`, `email`, `password`, `id_event`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'ikhwanudin', 'ikhwanudin@gmail.com', '$2y$10$EHvJt5kJPhd0Pn.XowVlQ.PkzUOzUb2AwmYf7UC/NZXClCmbF48bS', 1, '1', NULL, NULL, '2019-07-15 07:56:01', '2019-07-15 07:56:01'),
(2, 'damar permadani', 'damar@gmail.com', '$2y$10$37ECqM4vd6MfgTS4.Lmc7.gYO0GPM8lNv4XJju4HHCjswUn5qNINS', 2, '0', NULL, NULL, '2019-07-15 08:38:40', '2019-07-15 08:38:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_registrasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama_event`, `tanggal_pelaksanaan`, `jam`, `tempat`, `link_registrasi`, `contact_person`, `deskripsi`, `persyaratan`, `id_kategori`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sepak Bola antar desa', '2019-07-25', '08:15:00', 'Politeknik Harapan bersama', 'sepakbola.com', '082328727705', 'Buat kalian, siswa siswi SMA yang menggemaskan. Let us introduce our biggest program, acara kimia paling bergengsi di Indonesia hadir lagi. \"Kompetisi Kimia Universitas Airlangga 2019\" Dengan timeline:\r\n\r\nPenyisihan 1 : 22 September 2019\r\n\r\nPenyisihan 2 : 2 November 2019\r\n\r\nSemifinal-Final : 3 November 2019\r\n\r\nBukan cuma ilmu, tapi pengalaman dan rasakan sensasi berkompetisi dengan orang-orang hebat se indonesia.Kapan lagi ya kan? SEMUANYA TIDAK AKAN ADA YANG SIA SIA. Semua peserta akan tetap kami apresiasi melalui sertifikat yang bertaraf nasional yang nantinya akan sangat berguna jika kalian ingin melanjutkan pendidikan ke perguruan tinggi atau melamar beasiswa. Juga kami sediakan beberapa soal tahun-tahun sebelumnya serta pembahasan yang bisa dipelajari. Tidak berhenti disitu, kami juga akan memberikan artikel serta kuis dan try out berhadiah yang akan membantu kalian mempersiapkan KK UNAIR 2019.', 'Pastikan kalian adalah Anak SMA yang berstatus pelajar aktif. Setiap tim terdiri dari 2 orang dan harus dalam sekolah yang sama. Biaya pendaftaran hanya sebesar Rp. 135.000,- per tim. . Cara mendaftar:\r\n\r\nOFFLINE : Melalui CP Regional atau Sekretariat Himaki Unair Surabaya\r\n\r\nONLINE : Melalui website pendaftaran.kkunair.com\r\n\r\nUntuk info lebih lanjut kalian dapat mengunjungi beberapa sosial media kami.\r\n\r\nSocial Profile', 1, '1', NULL, NULL, '2019-07-15 07:54:41', '2019-07-15 08:03:58'),
(2, 'Donor darah', '2019-07-26', '14:10:00', 'Politeknik Harapan bersama', 'www.balapulang.co.id', '082328727705', 'ini adalah deskripsi dari event donor darah yang sangat baik', 'ini adalah persyaratan untuk mengikuti event donor darah', 3, '0', NULL, NULL, '2019-07-15 08:35:23', '2019-07-15 08:37:25');

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
(3, '2019_05_02_071832_create_clients_table', 1),
(4, '2019_05_02_072518_create_events_table', 1),
(5, '2019_05_02_073030_create_categories_table', 1),
(6, '2019_05_02_073450_create_sponsors_table', 1),
(7, '2019_05_02_073819_add_constraint_table_event', 1),
(8, '2019_05_02_073837_add_constraint_table_category', 1),
(9, '2019_06_21_065307_add_column_time_on_table_event', 1);

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
-- Struktur dari tabel `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_sponsor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'adminlte', 'adminlte@gmail.com', NULL, '$2y$10$9CNeARoOsLK1bP0Yac9Xfu0JZY97icK9NnZRUbda2lNNSZG457AZu', NULL, '2019-07-15 07:49:51', '2019-07-15 07:49:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD KEY `clients_id_event_foreign` (`id_event`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
