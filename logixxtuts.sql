-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2020 at 11:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logixxtuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Mehmood', 'mehmoodkhalil@gmail.com', '0334711234657', '2020-01-10 00:00:00', '2020-01-03 00:00:00', '1'),
(2, 'Zaheer', 'zaheer@gmail.com', '0311213', '2020-01-03 00:00:00', '2020-01-04 00:00:00', '1'),
(3, 'Khan', 'mehmoodkhalil@gmail.com', '0334711234657', '2020-01-10 00:00:00', '2020-01-03 00:00:00', '1'),
(4, 'Moneeb', 'zaheer@gmail.com', '0311213', '2020-01-03 00:00:00', '2020-01-04 00:00:00', '1'),
(5, 'khalid', 'khalid@gmail.com', '03001321321', '2020-01-10 00:00:00', '2020-01-03 00:00:00', '1'),
(6, 'Noman', 'noman@gmail.com', '0300132132131', '2020-01-03 00:00:00', '2020-01-04 00:00:00', '1'),
(7, 'hassan', 'hassan@gmail.com', '03212132121', '2020-01-10 00:00:00', '2020-01-03 00:00:00', '1'),
(8, 'wasim', 'wasim@gmail.com', '012345454545', '2020-01-03 00:00:00', '2020-01-04 00:00:00', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
