-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 02:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2018_09_20_060527_create_tourists_table', 1),
(17, '2018_09_21_081439_create_tourpackages_table', 1),
(18, '2018_09_21_095917_create_tourenquiries_table', 1),
(19, '2018_09_21_100120_create_tourbookings_table', 1),
(20, '2018_09_21_100736_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tourbookings`
--

CREATE TABLE `tourbookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `packageId` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fromDate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toDate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regDate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cancelledBy` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourbookings`
--

INSERT INTO `tourbookings` (`id`, `packageId`, `email`, `fromDate`, `toDate`, `regDate`, `status`, `cancelledBy`, `created_at`, `updated_at`) VALUES
(1, '1', 'garima@gmail.com', '12/14/51', '545646', '23456765', 0, 'user', NULL, NULL),
(2, '10', 'gara@gmail.com', '12/14/51', '545646', '23456765', 0, 'user', '2018-09-21 07:56:50', '2018-09-21 07:56:50'),
(3, '12', 'aditeesaxena96@gmail.com', '2018-09-28', '2018-09-30', NULL, 0, NULL, '2018-09-24 04:19:34', '2018-09-24 04:19:34'),
(4, '12', 'aditeesaxena96@gmail.com', '2018-09-28', '2018-09-29', NULL, 0, NULL, '2018-09-24 04:20:19', '2018-09-24 04:20:19'),
(5, '14', 'aditeesaxena96@gmail.com', '2018-09-27', '2018-09-30', NULL, 0, NULL, '2018-09-24 04:22:38', '2018-09-24 04:22:38'),
(6, '12', 'aditeesaxena96@gmail.com', '2018-09-29', '2018-09-28', NULL, 0, NULL, '2018-09-24 04:26:34', '2018-09-24 04:26:34'),
(7, '12', 'aditeesaxena96@gmail.com', '2018-09-29', '2018-09-28', NULL, 0, NULL, '2018-09-24 04:26:45', '2018-09-24 04:26:45'),
(8, '12', 'aditeesaxena96@gmail.com', '2018-09-28', '2018-09-30', NULL, 0, NULL, '2018-09-24 04:27:34', '2018-09-24 04:27:34'),
(9, '12', 'aditeesaxena96@gmail.com', '2018-09-28', '2018-09-29', NULL, 0, NULL, '2018-09-24 04:29:18', '2018-09-24 04:29:18'),
(10, '12', 'aditeesaxena96@gmail.com', NULL, NULL, NULL, 0, NULL, '2018-09-24 07:00:34', '2018-09-24 07:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `tourenquiries`
--

CREATE TABLE `tourenquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mobileNumber` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourenquiries`
--

INSERT INTO `tourenquiries` (`id`, `name`, `email`, `mobileNumber`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(2, 'aditee', 'ayusheesaxena@gmail.com', '9765413212', 'fxgfchg', 'bvxgfvbnv n', '2018-09-21 07:58:56', '2018-09-21 07:58:56'),
(3, 'aditee', 'ayusheesaxena@gmail.com', '9765413212', 'fxgfchg', 'bvxgfvbnv n', '2018-09-21 07:59:14', '2018-09-21 07:59:14'),
(4, 'aditee', 'ayusheesaxena@gmail.com', '9765413212', 'fxgfchg', 'bvxgfvbnv n', '2018-09-23 06:57:57', '2018-09-23 06:57:57'),
(5, 'Ayushee Saxena', 'ayusheesaxena@gmail.com', '8965230147', 'Shima Trip enquiry', 'please give data with all facilities', '2018-09-24 06:22:06', '2018-09-24 06:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE `tourists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileNumber` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`id`, `name`, `mobileNumber`, `email`, `password`, `created_at`, `updated_at`) VALUES
(22, 'Akanksha Chaudhary', '8965230147', 'akanksha@gmail.com', '123654', '2018-09-24 02:10:03', '2018-09-24 02:10:03'),
(23, 'Aditee Saxena', '+918384810746', 'aditeesaxena96@gmail.com', '123654', '2018-09-24 02:17:23', '2018-09-24 02:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackages`
--

CREATE TABLE `tourpackages` (
  `id` int(10) UNSIGNED NOT NULL,
  `packageName` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `packageType` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `packageLocation` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `packagePrice` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `packageFeatures` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `packageImage` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`id`, `packageName`, `packageType`, `packageLocation`, `packagePrice`, `packageFeatures`, `packageImage`, `created_at`, `updated_at`) VALUES
(12, 'Manali', 'Family', 'Manali', '50000', 'enjoy', 'Manali.jpeg', '2018-09-21 07:49:25', '2018-09-21 07:49:25'),
(13, 'Delhi Trip', 'Family', 'Delhi', '4500', 'Historical Monuments', 'delhi.jpeg', NULL, NULL),
(14, 'Kerala Trip', 'Family', 'Kerala', '8000', 'Beaches, Temple', 'kerala.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aditee', 'aditee', NULL, '$2y$10$I0dpZt0bWUmUR8OFMg93CONhHr/SfE8hKdcuzVws8xJCGQNJw2w.q', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tourbookings`
--
ALTER TABLE `tourbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourenquiries`
--
ALTER TABLE `tourenquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourpackages`
--
ALTER TABLE `tourpackages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tourbookings`
--
ALTER TABLE `tourbookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tourenquiries`
--
ALTER TABLE `tourenquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tourpackages`
--
ALTER TABLE `tourpackages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
