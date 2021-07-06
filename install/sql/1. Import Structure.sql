-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 04:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `join_booomers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `invites_tb`
--

CREATE TABLE `invites_tb` (
                              `id` int(11) NOT NULL,
                              `invite_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `date_added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                              `status` set('redirected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'redirected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `waitlist_tb`
--

CREATE TABLE `waitlist_tb` (
                               `id` int(11) NOT NULL,
                               `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `full_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `date_added` datetime NOT NULL DEFAULT current_timestamp(),
                               `status` set('waiting','invited','returned') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invites_tb`
--
ALTER TABLE `invites_tb`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitlist_tb`
--
ALTER TABLE `waitlist_tb`
    ADD PRIMARY KEY (`id`),
  ADD KEY `country` (`country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invites_tb`
--
ALTER TABLE `invites_tb`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waitlist_tb`
--
ALTER TABLE `waitlist_tb`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
