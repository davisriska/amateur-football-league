-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2017 at 09:29 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amateur_football_league`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_01_07_112229_base_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `surname`, `type`, `team_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Creola', 'Lakin', 'player', 7, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(2, 'Reese', 'Adams', 'player', 11, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(3, 'Makayla', 'O\'Conner', 'player', 16, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(4, 'Karine', 'Torp', 'player', 4, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(5, 'Gilberto', 'Littel', 'player', 10, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(6, 'Mikel', 'Jenkins', 'player', 14, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(7, 'Griffin', 'Mitchell', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(8, 'Violette', 'Keebler', 'player', 12, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(9, 'Colton', 'Becker', 'player', 13, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(10, 'Misty', 'Gleason', 'player', 1, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(11, 'Aron', 'Reinger', 'player', 11, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(12, 'Adell', 'Auer', 'player', 11, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(13, 'Ford', 'Nitzsche', 'player', 19, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(14, 'Rosanna', 'Kemmer', 'player', 18, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(15, 'Gay', 'Klocko', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(16, 'Marjory', 'Rohan', 'player', 16, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(17, 'Octavia', 'Weimann', 'player', 10, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(18, 'Kris', 'Tremblay', 'player', 9, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(19, 'Salvador', 'Fadel', 'trainer', 7, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(20, 'Easton', 'Ullrich', 'player', 5, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(21, 'Ian', 'Skiles', 'player', 3, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(22, 'Tina', 'Heaney', 'player', 11, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(23, 'Ashlee', 'Yundt', 'player', 7, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(24, 'Trenton', 'Schamberger', 'player', 15, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(25, 'Judson', 'Heathcote', 'player', 1, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(26, 'Hallie', 'Hane', 'player', 18, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(27, 'Linnie', 'Hilpert', 'player', 5, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(28, 'Lon', 'Reichert', 'player', 10, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(29, 'Davion', 'Daugherty', 'player', 5, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(30, 'Tad', 'Kemmer', 'player', 14, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(31, 'Lura', 'Langworth', 'player', 15, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(32, 'Grant', 'Zieme', 'player', 15, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(33, 'Marie', 'Schmitt', 'player', 19, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(34, 'Gladyce', 'Boyle', 'player', 19, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(35, 'Kavon', 'Fisher', 'player', 3, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(36, 'Demario', 'Stokes', 'trainer', 20, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(37, 'Humberto', 'Swift', 'player', 17, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(38, 'Laila', 'Stoltenberg', 'player', 13, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(39, 'Fabian', 'Hauck', 'player', 14, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(40, 'Kailee', 'Thiel', 'player', 10, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(41, 'Ansel', 'Legros', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(42, 'Blair', 'Strosin', 'player', 12, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(43, 'Joey', 'Murazik', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(44, 'Thalia', 'Tremblay', 'trainer', 19, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(45, 'Imelda', 'Ritchie', 'player', 9, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(46, 'Hermina', 'Rolfson', 'player', 18, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(47, 'Merl', 'Feeney', 'player', 14, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(48, 'Wiley', 'Schuppe', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(49, 'Lonnie', 'McGlynn', 'player', 2, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(50, 'Callie', 'Kuhic', 'player', 17, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(51, 'Columbus', 'Jacobs', 'player', 17, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(52, 'Ervin', 'Kautzer', 'player', 13, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(53, 'Antonina', 'Toy', 'player', 7, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(54, 'Candice', 'Murazik', 'player', 5, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(55, 'Burdette', 'Turner', 'player', 3, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(56, 'Corene', 'Beer', 'player', 7, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(57, 'Tatyana', 'Mertz', 'player', 13, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(58, 'Dimitri', 'DuBuque', 'player', 6, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(59, 'Josefina', 'Kirlin', 'trainer', 1, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(60, 'Florida', 'Herman', 'player', 10, '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id_0` int(10) UNSIGNED NOT NULL,
  `team_id_1` int(10) UNSIGNED NOT NULL,
  `results` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `team_id_0`, `team_id_1`, `results`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 14, 1, '2:10', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(2, 6, 11, '7:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(3, 6, 3, '7:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(4, 18, 16, '7:7', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(5, 18, 18, '6:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(6, 18, 15, '3:4', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(7, 16, 12, '10:9', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(8, 1, 17, '1:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(9, 1, 18, '3:5', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(10, 15, 3, '6:1', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(11, 15, 1, '3:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(12, 9, 19, '9:7', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(13, 2, 20, '5:3', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(14, 19, 1, '8:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(15, 3, 14, '6:10', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(16, 2, 5, '4:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(17, 20, 15, '2:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(18, 1, 1, '2:5', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(19, 13, 8, '9:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(20, 15, 18, '1:9', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(21, 8, 16, '9:7', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(22, 17, 19, '4:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(23, 9, 16, '5:4', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(24, 13, 10, '4:9', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(25, 3, 18, '10:3', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(26, 3, 14, '10:4', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(27, 11, 4, '3:5', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(28, 17, 9, '9:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(29, 1, 8, '4:9', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(30, 3, 13, '7:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(31, 20, 16, '7:6', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(32, 8, 9, '8:2', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(33, 10, 16, '7:2', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(34, 2, 9, '5:7', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(35, 17, 20, '9:3', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(36, 7, 1, '6:8', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(37, 7, 11, '6:1', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(38, 16, 8, '4:1', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(39, 8, 1, '1:9', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(40, 9, 4, '7:7', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mrs. Alessia Padberg Jr.', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(2, 'Ms. Flo Davis Jr.', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(3, 'Prof. Wilfrid West', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(4, 'Demetrius Hessel IV', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(5, 'Mrs. Amelia Beahan', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(6, 'Lora Lind', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(7, 'Therese Borer', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(8, 'Isac Lueilwitz II', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(9, 'Retha Monahan', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(10, 'Dr. Samson Lind V', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(11, 'Ara Yundt', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(12, 'Gillian Greenfelder', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(13, 'Xzavier Shields I', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(14, 'Nicole Roob', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(15, 'Idell Paucek', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(16, 'Kolby Gorczany', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(17, 'Aaliyah Blick DVM', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(18, 'Prof. Emerald Nolan', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(19, 'Dr. Marlen Miller Sr.', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL),
(20, 'Krystina Gaylord', '2017-01-08 17:27:39', '2017-01-08 17:27:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$c/qvi2nNA9jny9cm39yZMudmvTMRizXjRhgkViDFIwkUJ25cR0T.m', 'ceATTe6V0m8S34D0lwuQsvDpbjdAMFqwpLnc7ENrSSDtVZacpF0I4yqjtIkZ', '2017-01-08 17:27:39', '2017-01-08 17:28:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_team_id_index` (`team_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_team_id_0_index` (`team_id_0`),
  ADD KEY `results_team_id_1_index` (`team_id_1`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_team_id_0_foreign` FOREIGN KEY (`team_id_0`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_team_id_1_foreign` FOREIGN KEY (`team_id_1`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
