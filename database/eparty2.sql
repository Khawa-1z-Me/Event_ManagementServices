-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eparty2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(10) UNSIGNED NOT NULL,
  `events` varchar(30) NOT NULL,
  `namecake` varchar(255) DEFAULT NULL,
  `nameoutfit` varchar(255) DEFAULT NULL,
  `namevenue` varchar(255) DEFAULT NULL,
  `namefood` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `events`, `namecake`, `nameoutfit`, `namevenue`, `namefood`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Wedding', 'Baby bear cake', 'Queen of the Night', 'Prom of the 90s', NULL, 'btestin@example.com', '2025-06-29 23:38:47', '2025-06-29 23:38:47'),
(4, 'Reunion', 'Oreo', 'Man of the hour', 'Prom of the 90s', NULL, 'btestin@example.com', '2025-06-29 23:44:35', '2025-06-29 23:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `idcake` int(10) UNSIGNED NOT NULL,
  `namecake` varchar(100) NOT NULL,
  `typecake` varchar(255) NOT NULL,
  `prices` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`idcake`, `namecake`, `typecake`, `prices`, `created_at`, `updated_at`, `email`) VALUES
(1, 'balcla', 'spongy', 10.00, '2025-06-27 07:12:14', '2025-06-27 07:12:14', 'derick.franecki@example.net'),
(2, 'Red Velvet', 'Cream cheese', 12.00, '2025-06-28 00:34:11', '2025-06-28 00:34:11', 'btestin@example.com'),
(3, 'Carrot Cake', 'Carrot Pudding', 14.00, '2025-06-28 00:35:30', '2025-06-28 00:35:30', 'btestin@example.com'),
(4, 'Sponge Cake', 'foam-style', 13.00, '2025-06-28 00:36:19', '2025-06-28 00:36:19', 'btestin@example.com'),
(5, 'Cheese Cake', 'Cheese', 15.00, '2025-06-28 00:37:04', '2025-06-28 00:37:04', 'btestin@example.com'),
(6, 'Chocolate Cake', 'Moist', 12.00, '2025-06-28 00:37:29', '2025-06-28 00:37:29', 'btestin@example.com'),
(7, 'Chiffon Cake', 'Light Cake', 12.00, '2025-06-28 00:44:30', '2025-06-28 00:44:30', 'btestin@example.com'),
(8, 'Harley Cheese', 'Cheese', 13.00, '2025-06-28 07:14:31', '2025-06-28 07:14:31', 'btestin@example.com'),
(9, 'Sponge Cake', 'Moist', 13.00, '2025-06-28 07:30:32', '2025-06-28 07:30:32', 'btestin@example.com'),
(10, 'Pineapple', 'upside-down', 14.00, '2025-06-29 07:47:03', '2025-06-29 07:47:03', 'btestin@example.com'),
(11, 'Oreo', 'Black Forest', 56.00, '2025-06-29 08:51:18', '2025-06-29 08:51:18', 'btestin@example.com'),
(14, 'Coffee Cake', 'Coffee', 45.00, '2025-06-29 09:10:13', '2025-06-29 09:10:13', 'btestin@example.com'),
(15, 'Baby bear cake', 'cupcake', 9.00, '2025-06-29 09:24:04', '2025-06-29 09:24:04', 'btestin@example.com'),
(16, 'asdfa', 'asdf', 12.00, '2025-06-29 10:31:40', '2025-06-29 10:31:40', 'btestin@example.com');

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
-- Table structure for table `foodbeverages`
--

CREATE TABLE `foodbeverages` (
  `idfood` int(10) UNSIGNED NOT NULL,
  `typesfood` varchar(255) NOT NULL,
  `Namefood` varchar(255) NOT NULL,
  `participant` tinyint(4) NOT NULL,
  `description` varchar(150) NOT NULL,
  `prices` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_23_212748_create_cakes_table', 1),
(5, '2021_04_06_185610_create_outfits_table', 1),
(6, '2021_04_06_185831_create_venues_table', 1),
(7, '2021_04_06_185911_create_foodbeverages_table', 1),
(8, '2021_05_06_180716_create_booking_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outfits`
--

CREATE TABLE `outfits` (
  `idoutfit` int(10) UNSIGNED NOT NULL,
  `nameoutfit` varchar(50) NOT NULL,
  `typeofoutfit` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `prices` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outfits`
--

INSERT INTO `outfits` (`idoutfit`, `nameoutfit`, `typeofoutfit`, `size`, `colour`, `prices`, `created_at`, `updated_at`, `email`) VALUES
(1, 'Man of the hour', 'Tuxedo', 'Medium', 'Black', 15.00, '2025-06-29 07:49:18', '2025-06-29 07:49:18', 'btestin@example.com'),
(2, 'Queen of the Night', 'One Piece', 'Small', 'Classy Red', 99.00, '2025-06-29 07:53:28', '2025-06-29 07:53:28', 'btestin@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Prof. Lambert Bayer Jr.', 'tcummerata@example.org', '2025-06-27 06:48:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MgzBEEFa19zXhQCL7vf0jCRD945qX2u0dwcryyfrv3XPRcXW8wrPyqjolVgS', '2025-06-27 06:48:40', '2025-06-27 06:48:40'),
(2, 'Helena Hegmann', 'caterina21@example.org', '2025-06-27 06:48:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'V7ipjXIGf6', '2025-06-27 06:48:40', '2025-06-27 06:48:40'),
(3, 'Dr. Emmy Heaney PhD', 'derick.franecki@example.net', '2025-06-27 06:48:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bzxgqzb7Uf5BxL92ojWehoW4tBgoQVJiUfg2cxDmLfbuSzp2SErpjqHpToE0', '2025-06-27 06:48:40', '2025-06-27 06:48:40'),
(4, 'Edgardo Thiel Sr.', 'rowe.lesly@example.net', '2025-06-27 06:48:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VmYqB6un6V', '2025-06-27 06:48:40', '2025-06-27 06:48:40'),
(5, 'Axel Farrell IV', 'gmorissette@example.net', '2025-06-27 06:48:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rp2vxbrcLh', '2025-06-27 06:48:40', '2025-06-27 06:48:40'),
(6, 'Atest', 'atester@example.com', NULL, '$2y$10$4CZRz8iavPnjkTgRcthAvOMz5qjDqfw/FhWjp34HYkuK1mtkop2ly', NULL, '2025-06-27 17:38:41', '2025-06-27 17:38:41'),
(7, 'Btestin', 'btestin@example.com', NULL, '$2y$10$D2wYKPjEQ1hGkqbDL1ddQ.dUEZ8SBSOYIBY1WrhHtW5FSWZ6CWVLS', NULL, '2025-06-27 18:17:17', '2025-06-27 18:17:17'),
(8, 'Cuba Try', 'CTry@example.com', NULL, '$2y$10$EhziEB9.j0gH6yYZxfkGyOIXdEJ.bm216XALK6RIl0W/kKS94uceq', NULL, '2025-06-27 23:39:58', '2025-06-27 23:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `idvenue` int(10) UNSIGNED NOT NULL,
  `Typevenue` varchar(255) NOT NULL,
  `namevenue` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prices` double(4,2) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`idvenue`, `Typevenue`, `namevenue`, `address`, `description`, `prices`, `time`, `created_at`, `updated_at`, `email`) VALUES
(1, 'Hall', 'Prom of the 90s', 'Tun Razak Exchange Culture', 'A place where the old are resurrected for the sakes of nostalgia', 99.00, '2000', '2025-06-29 07:55:00', '2025-06-29 07:55:00', 'btestin@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `booking_email_foreign` (`email`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`idcake`),
  ADD KEY `cake_email_foreign` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foodbeverages`
--
ALTER TABLE `foodbeverages`
  ADD PRIMARY KEY (`idfood`),
  ADD KEY `foodbeverages_email_foreign` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outfits`
--
ALTER TABLE `outfits`
  ADD PRIMARY KEY (`idoutfit`),
  ADD KEY `outfits_email_foreign` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`idvenue`),
  ADD KEY `venues_email_foreign` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `idcake` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodbeverages`
--
ALTER TABLE `foodbeverages`
  MODIFY `idfood` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `outfits`
--
ALTER TABLE `outfits`
  MODIFY `idoutfit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `idvenue` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `cake`
--
ALTER TABLE `cake`
  ADD CONSTRAINT `cake_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `foodbeverages`
--
ALTER TABLE `foodbeverages`
  ADD CONSTRAINT `foodbeverages_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `outfits`
--
ALTER TABLE `outfits`
  ADD CONSTRAINT `outfits_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `venues_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
