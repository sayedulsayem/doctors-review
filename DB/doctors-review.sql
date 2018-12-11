-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 10:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors-review`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nid` double NOT NULL,
  `fathers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `dr_main_ol` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `nid`, `fathers_name`, `mothers_name`, `date_of_birth`, `dr_main_ol`, `field`, `explanation`, `created_at`, `updated_at`) VALUES
(1, 1, 12322445, 'hytjuty', 'thdyt', '2016-02-01', 'jhffkfkglk\r\nkfkf', 'kghdfgh', 'kdfgjhdfkg', '2018-12-11 02:16:10', '2018-12-11 02:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `drdegrees`
--

CREATE TABLE `drdegrees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drdegrees`
--

INSERT INTO `drdegrees` (`id`, `user_id`, `name`, `license`, `institute`, `year_of_passing`, `created_at`, `updated_at`) VALUES
(1, 1, 'MBBS', '346564', 'gdfgdh', 2016, '2018-12-11 02:16:10', '2018-12-11 02:16:10'),
(2, 1, 'MBChB', NULL, 'alsdkghalskg', 2016, '2018-12-11 02:16:10', '2018-12-11 02:16:10'),
(3, 1, 'MBBCh', NULL, 'fdgsdfhg', 2016, '2018-12-11 02:16:10', '2018-12-11 02:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `drschedules`
--

CREATE TABLE `drschedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `chamber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date DEFAULT NULL,
  `staring_time` time NOT NULL,
  `ending_time` time NOT NULL,
  `total_appointment` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `road` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drschedules`
--

INSERT INTO `drschedules` (`id`, `user_id`, `chamber`, `starting_date`, `ending_date`, `staring_time`, `ending_time`, `total_appointment`, `house_no`, `road`, `dist`, `sub_dist`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'popular hospital', '2018-12-05', '2018-12-10', '10:00:00', '14:00:00', 30, 2, '2', 'Dhaka', 'Dhanmondi', 1205, '2018-12-11 02:17:14', '2018-12-11 02:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `drspecilities`
--

CREATE TABLE `drspecilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drspecilities`
--

INSERT INTO `drspecilities` (`id`, `user_id`, `name`, `explanation`, `created_at`, `updated_at`) VALUES
(1, 1, 'dtjfyjh', 'shsfgh', '2018-12-11 02:16:10', '2018-12-11 02:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_superadmins_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_31_201611_create_patients_table', 1),
(4, '2018_11_13_075746_create_users_table', 1),
(5, '2018_11_13_081229_create_doctors_table', 1),
(6, '2018_11_14_095648_create_drdegrees_table', 1),
(7, '2018_11_14_095706_create_drschedule_table', 1),
(8, '2018_11_15_071056_create_drspecilities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nid` double NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` int(11) NOT NULL,
  `road` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `nid`, `date_of_birth`, `mobile`, `house_no`, `road`, `sub_dist`, `dist`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 2, 1985629346, '2018-12-04', '98673489', 4, 'green road', 'Dhanmondi', 'Dhaka', 1189, '2018-12-11 02:33:05', '2018-12-11 02:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'doctor', 'doctor@gmail.com', 'doctor1', 1, '2018-12-11 02:15:06', '2018-12-11 02:15:06'),
(2, 'patient', 'patient@gmail.com', 'patient1', 2, '2018-12-11 02:32:33', '2018-12-11 02:32:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_nid_unique` (`nid`);

--
-- Indexes for table `drdegrees`
--
ALTER TABLE `drdegrees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drdegrees_license_unique` (`license`);

--
-- Indexes for table `drschedules`
--
ALTER TABLE `drschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drspecilities`
--
ALTER TABLE `drspecilities`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_nid_unique` (`nid`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `superadmins_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drdegrees`
--
ALTER TABLE `drdegrees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drschedules`
--
ALTER TABLE `drschedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drspecilities`
--
ALTER TABLE `drspecilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
