-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 17, 2017 at 03:45 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirants`
--

CREATE TABLE `aspirants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regNo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `constituency` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `docket` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified',
  `votes` int(11) NOT NULL DEFAULT '0',
  `type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aspirants`
--

INSERT INTO `aspirants` (`id`, `name`, `regNo`, `gender`, `phoneno`, `email`, `county`, `constituency`, `ward`, `docket`, `party`, `user_id`, `status`, `votes`, `type`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Anita Ochieng', '3343343', 'Female', '+254706285999', 'info@anita.com', 'Nairobi', 'Makadara', 'Mbotela', 'Women Rep', 'JAP', 5, 'verified', 8, 'General ', '08/08/2017', '2017-06-16', '2017-06-17'),
(3, 'Chain Smoker', '394783734', 'Male', '0786666666', 'info@chain.com', 'Nairobi', 'Makadara', 'Mbotela', 'Governor', 'JAP', 8, 'verified', 5, 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(4, 'Alpha Muita', '878364', 'Male', '0745577777', 'info@alpha.com', 'Nairobi', 'Makadara', 'Mbotela', 'Mp', 'JAP', 9, 'verified', 8, 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(5, 'Julius Kingori', '9783483', 'Male', '0797388878', 'info@kingori.com', 'Nairobi', 'Makadara', 'Mbotela', 'MCA', 'JAP', 7, 'verified', 8, 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(6, 'Gas Per', '3487384', 'Male', '0765655655', 'info@gas.com', 'Nairobi', 'Makadara', 'Mbotela', 'Senator', 'JAP', 10, 'verified', 8, 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(7, 'Owl City', '7238783', 'Male', '0788865554', 'info@owl.com', 'Nairobi', 'Makadara', 'Mbotela', 'Governor', 'Wiper', 11, 'verified', 3, 'General ', '08/08/2017', '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `ballots`
--

CREATE TABLE `ballots` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `regNo` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ballots`
--

INSERT INTO `ballots` (`id`, `name`, `user_id`, `regNo`, `type`, `date`, `created_at`, `updated_at`) VALUES
(4, 'Anita Ochieng', 5, '3343343', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(5, 'Chain Smoker', 8, '394783734', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(6, 'Gas Per', 10, '3487384', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(7, 'Alpha Muita', 9, '878364', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(8, 'Julius Kingori', 7, '9783483', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(9, 'James Maina', 6, '292399988', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(10, 'Owl City', 11, '7238783', 'General ', '08/08/2017', '2017-06-17', '2017-06-17'),
(11, 'enoch kalama', 12, '31538513', 'General ', '08/08/2017', '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `constituencies`
--

CREATE TABLE `constituencies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `wards` int(11) NOT NULL,
  `voters` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `constituencies`
--

INSERT INTO `constituencies` (`id`, `name`, `county`, `wards`, `voters`, `created_at`, `updated_at`) VALUES
(1, 'Makadara', 'Nairobi', 3, 9, '2017-06-14', '2017-06-17'),
(2, 'Dagoretty', 'Nairobi', 3, 0, '2017-06-14', '2017-06-14'),
(3, 'Kibera', 'Nairobi', 3, 0, '2017-06-14', '2017-06-16'),
(4, 'Starehe', 'Nairobi', 3, 0, '2017-06-14', '2017-06-14'),
(5, 'Chepalungu', 'Bomet', 25, 0, '2017-06-16', '2017-06-16'),
(6, 'Bomet East', 'Bomet', 20, 0, '2017-06-16', '2017-06-16'),
(7, 'mvita', 'Mombasa', 3, 0, '2017-06-17', '2017-06-17'),
(8, 'likoni', 'Mombasa', 4, 0, '2017-06-17', '2017-06-17'),
(9, 'nyali', 'Mombasa', 6, 0, '2017-06-17', '2017-06-17'),
(10, 'bamburi', 'Mombasa', 5, 0, '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `constituencies` int(11) NOT NULL,
  `voters` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `name`, `code`, `constituencies`, `voters`, `created_at`, `updated_at`) VALUES
(2, 'Mombasa', '001', 4, 0, '2017-06-14', '2017-06-14'),
(3, 'Nairobi', '047', 7, 9, '2017-06-14', '2017-06-17'),
(5, 'Kilifi', '002', 3, 0, '2017-06-14', '2017-06-16'),
(6, 'Bomet', '036', 5, 0, '2017-06-16', '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `dockets`
--

CREATE TABLE `dockets` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dockets`
--

INSERT INTO `dockets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Governor', '2017-06-16', '2017-06-16'),
(3, 'Women Rep', '2017-06-16', '2017-06-16'),
(4, 'Mp', '2017-06-16', '2017-06-16'),
(5, 'MCA', '2017-06-16', '2017-06-16'),
(6, 'Senator', '2017-06-16', '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `date` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'closed',
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `type`, `year`, `date`, `status`, `updated_at`, `created_at`) VALUES
(4, 'General ', 2017, '08/08/2017', 'active', '2017-06-15', '2017-06-15'),
(5, 'by-election', 2017, '06/21/2017', 'closed', '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `name`, `slogan`, `created_at`, `updated_at`) VALUES
(1, 'JAP', 'Tuko Pamoja', '2017-06-16', '2017-06-16'),
(3, 'Wiper', 'Wipe', '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `regNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `constituency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regNo`, `name`, `gender`, `email`, `phoneno`, `county`, `constituency`, `ward`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '835748', 'Desmond Nerd', 'Male', 'info@geek.com', '+254792746432', 'Mombasa', 'Mvita', 'Tudor', 'admin', '$2y$10$4a66nAB1iI5PHd/73NgLpualxUp1TFLUcWAs.0qCU8y8IgfG0pihm', 'nLLbZBVNPHSrf0J7sAMUOInouq4ThZQvrNfMH7vmq8ggKOyb34FsDQWAz041', '2017-06-14 06:18:00', '2017-06-17 07:34:40'),
(5, '3343343', 'Anita Ochieng', 'Female', 'info@anita.com', '+254706285999', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$UdbJmR6lsaOxdEV7S39w3uG7BXgOTW9MqvTD5Ca1qPceMCj1F7J3K', 'gxSnJ9pqRXw6d0JYSWeAh7NgHK1jIIxvrqRfpZKfHnKuCtVTiS3aLtwyMjTs', '2017-06-16 14:04:58', '2017-06-17 06:00:01'),
(6, '292399988', 'James Maina', 'Male', 'info@maina.com', '+254712345678', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$zqpQFx1JXXXoCZXK0N0iK.hRfEfPe9is4JIHmQtSYqQMV9yTqqIU2', 'L2RDURLs1x3WRLkVrTsrirOhnPYrrbJoGx8hM7dPFY8DRsWhctDDQhXZwByt', '2017-06-16 19:42:40', '2017-06-17 06:07:09'),
(7, '9783483', 'Julius Kingori', 'Male', 'info@kingori.com', '0797388878', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$uPV3gWjS9/5/dZrf8WtbVOX4Y334f/I86OGezpj5.xvygqEUNeUWO', 'VN8T55h1yameQXlfkO4dPQ1Gvd7yiAi5o9CVmNUZyU0jlZtar9LeRLD3efzZ', '2017-06-17 04:49:57', '2017-06-17 06:06:29'),
(8, '394783734', 'Chain Smoker', 'Male', 'info@chain.com', '0786666666', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$5JNk4r51NYiyiXDXfPvveuJpsmLUyByc2QmNWGvEsAdP5or49ikYy', 'Uo3Q60iM8QMIVV1UDDUDCEF0mc4rSuL51j4jhNdtPgTZ0K9citigDhYBoXrF', '2017-06-17 04:52:14', '2017-06-17 06:01:03'),
(9, '878364', 'Alpha Muita', 'Male', 'info@alpha.com', '0745577777', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$1cozzlroBuIZIebYn8rnue1Kw6nVRibS762bv0RUdPuihQHVknEPS', 'xyqexwuuxlHD76DTO5bKgeczmi3qNAtVGws7zMnGw2mkO9gBW96dDJirbhf9', '2017-06-17 04:55:07', '2017-06-17 06:04:45'),
(10, '3487384', 'Gas Per', 'Male', 'info@gas.com', '0765655655', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$CzCWaGHAzbuINKkXQeSy..CnQsSQjJP3rWSVJjLgEEENB4/Vd64T6', 'J4Oicu10qAEgpf5MSwUNAMQsuvPJqaZjM9MTQgT749NmNDJOBgKE8nnjCgMR', '2017-06-17 05:22:16', '2017-06-17 06:01:45'),
(11, '7238783', 'Owl City', 'Male', 'info@owl.com', '0788865554', 'Nairobi', 'Makadara', 'Mbotela', 'normal', '$2y$10$UCPC4vspbLUU.jR9O9LRA./LRTCeuUasnGki4iAWi3Ec6iz74RPlO', 'k7LyrMcI4tYB0HVgnEhSmq1RHzco4eFmiY7JJ9X5r75oCDtJDU3JgLXenJhk', '2017-06-17 05:54:06', '2017-06-17 06:13:14'),
(12, '31538513', 'enoch kalama', 'Male', 'enochkalama@gmail.com', '0719343937', 'Mombasa', 'Kibera', 'Mbotela', 'normal', '$2y$10$9DMxW1OsMcA4mkEFvrL5Qe02akHUpZ90TCHVE6pYTjkheJcyhGQYC', 'JSVxZj6J4qucDv1W71REFXoRszW6CJTpQfW1lTPlIm8h3Vxq3O3SRvsLswVc', '2017-06-17 07:20:01', '2017-06-17 07:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regNo` int(11) NOT NULL,
  `phoneno` varchar(13) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `constituency` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified',
  `type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `user_id`, `name`, `regNo`, `phoneno`, `gender`, `email`, `county`, `ward`, `constituency`, `status`, `type`, `date`, `type_id`, `created_at`, `updated_at`) VALUES
(7, 5, 'Anita Ochieng', 3343343, '+254706285999', 'Female', 'info@anita.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-16', '2017-06-16'),
(8, 6, 'James Maina', 292399988, '+254712345678', 'Male', 'info@maina.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-16', '2017-06-16'),
(9, 2, 'Desmond Nerd', 835748, '+254792746432', 'Male', 'info@geek.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-16', '2017-06-16'),
(10, 7, 'Julius Kingori', 9783483, '0797388878', 'Male', 'info@kingori.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17'),
(12, 8, 'Chain Smoker', 394783734, '0786666666', 'Male', 'info@chain.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17'),
(13, 9, 'Alpha Muita', 878364, '0745577777', 'Male', 'info@alpha.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17'),
(14, 10, 'Gas Per', 3487384, '0765655655', 'Male', 'info@gas.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17'),
(15, 11, 'Owl City', 7238783, '0788865554', 'Male', 'info@owl.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17'),
(16, 12, 'enoch kalama', 31538513, '0719343937', 'Male', 'enochkalama@gmail.com', 'Nairobi', 'Mbotela', 'Makadara', 'verified', 'General ', '08/08/2017', 4, '2017-06-17', '2017-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(11) NOT NULL,
  `county` varchar(100) NOT NULL,
  `constituency` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `voters` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `county`, `constituency`, `name`, `voters`, `created_at`, `updated_at`) VALUES
(1, 'Nairobi', 'Makadara', 'Mbotela', 9, '2017-06-15', '2017-06-17'),
(2, 'Nairobi', 'Makadara', 'Bahati', 0, '2017-06-15', '2017-06-15'),
(3, 'Nairobi', 'Makadara', 'Buruburu', 0, '2017-06-15', '2017-06-16'),
(4, 'Bomet', 'Chepalungu', 'Kongasis', 0, '2017-06-16', '2017-06-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirants`
--
ALTER TABLE `aspirants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ballots`
--
ALTER TABLE `ballots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constituencies`
--
ALTER TABLE `constituencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dockets`
--
ALTER TABLE `dockets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phoneno_unique` (`phoneno`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirants`
--
ALTER TABLE `aspirants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ballots`
--
ALTER TABLE `ballots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `constituencies`
--
ALTER TABLE `constituencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dockets`
--
ALTER TABLE `dockets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
