-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 05:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv-nang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dieukien`
--

CREATE TABLE `dieukien` (
  `MaHPDK` bigint(20) UNSIGNED NOT NULL,
  `Loai` varchar(255) NOT NULL,
  `MaHP` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dieukien`
--

INSERT INTO `dieukien` (`MaHPDK`, `Loai`, `MaHP`, `created_at`, `updated_at`) VALUES
(1, 'Khá', 1, '2023-04-16 20:22:03', '2023-04-16 20:22:03'),
(2, 'Giỏi', 2, '2023-04-16 20:22:10', '2023-04-16 20:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoc`
--

CREATE TABLE `hoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DiemQT` varchar(255) NOT NULL,
  `DiemCK` varchar(255) NOT NULL,
  `KetQua` varchar(255) NOT NULL,
  `MaSV` bigint(20) UNSIGNED NOT NULL,
  `MaLop` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoc`
--

INSERT INTO `hoc` (`id`, `DiemQT`, `DiemCK`, `KetQua`, `MaSV`, `MaLop`, `created_at`, `updated_at`) VALUES
(1, '8', '9', 'gioi', 2, 1, '2023-04-16 20:23:29', '2023-04-16 20:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` bigint(20) UNSIGNED NOT NULL,
  `TenHP` varchar(255) NOT NULL,
  `SoTC` varchar(255) NOT NULL,
  `HeSoCKy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`, `SoTC`, `HeSoCKy`, `created_at`, `updated_at`) VALUES
(1, 'JAVA', '5', '5', '2023-04-16 20:21:45', '2023-04-16 20:21:45'),
(2, 'HTML', '3', '3', '2023-04-16 20:21:54', '2023-04-16 20:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `loptc`
--

CREATE TABLE `loptc` (
  `MaLop` bigint(20) UNSIGNED NOT NULL,
  `HocKy` varchar(255) NOT NULL,
  `MaHP` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loptc`
--

INSERT INTO `loptc` (`MaLop`, `HocKy`, `MaHP`, `created_at`, `updated_at`) VALUES
(1, '2', 1, '2023-04-16 20:22:19', '2023-04-16 20:22:19'),
(2, '3', 2, '2023-04-16 20:22:26', '2023-04-16 20:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_10_063155_create_hocphan_table', 1),
(6, '2023_04_10_063155_create_sinhvien_table', 1),
(7, '2023_04_10_063232_create_dieukien_table', 1),
(8, '2023_04_10_063232_create_loptc_table', 1),
(9, '2023_04_10_063347_create_hoc_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` bigint(20) UNSIGNED NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `GioiTinh` varchar(255) NOT NULL,
  `NgaySinh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `GioiTinh`, `NgaySinh`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Công Lộc', 'Nam', '2003-05-11', '2023-04-16 20:22:44', '2023-04-16 20:22:44'),
(2, 'Đoàn Công Năng', 'Nam', '2000-01-19', '2023-04-16 20:23:15', '2023-04-16 20:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Doan Cong Nang', 'doancongnang2003@gmail.com', NULL, '$2y$10$H8EQ9VQ4kXrNE/VEU4/k0OdHzZAcx74VMgKxq8n5Tw1hF6Qsd5THC', NULL, '2023-04-16 20:21:31', '2023-04-16 20:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dieukien`
--
ALTER TABLE `dieukien`
  ADD PRIMARY KEY (`MaHPDK`),
  ADD KEY `dieukien_mahp_foreign` (`MaHP`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hoc`
--
ALTER TABLE `hoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoc_masv_foreign` (`MaSV`),
  ADD KEY `hoc_malop_foreign` (`MaLop`);

--
-- Indexes for table `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Indexes for table `loptc`
--
ALTER TABLE `loptc`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `loptc_mahp_foreign` (`MaHP`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dieukien`
--
ALTER TABLE `dieukien`
  MODIFY `MaHPDK` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoc`
--
ALTER TABLE `hoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hocphan`
--
ALTER TABLE `hocphan`
  MODIFY `MaHP` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loptc`
--
ALTER TABLE `loptc`
  MODIFY `MaLop` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSV` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dieukien`
--
ALTER TABLE `dieukien`
  ADD CONSTRAINT `dieukien_mahp_foreign` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);

--
-- Constraints for table `hoc`
--
ALTER TABLE `hoc`
  ADD CONSTRAINT `hoc_malop_foreign` FOREIGN KEY (`MaLop`) REFERENCES `loptc` (`MaLop`),
  ADD CONSTRAINT `hoc_masv_foreign` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `loptc`
--
ALTER TABLE `loptc`
  ADD CONSTRAINT `loptc_mahp_foreign` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
