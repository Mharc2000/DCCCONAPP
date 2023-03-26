-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 10:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcccon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Message`, `Date`) VALUES
(1, 'Corina Bender', 'gahahahaha', '2023-03-27 03:16:53'),
(2, 'hi mother fuckkererss', 'whattt the fuuccckk is thisssss', '2023-03-27 03:25:47'),
(3, 'HOLLLI SHEETTT', '', '2023-03-27 03:26:08'),
(4, '', 'das', '2023-03-27 03:26:49'),
(5, 'Hi - Sheeshh', ' Shoutt ITE SHEEESSHHH', '2023-03-27 03:30:49'),
(6, 'Mharccc', 'Hiiiiiii asdasdas', '2023-03-27 03:39:38'),
(7, 'gasadsadas', 'hahaha', '2023-03-27 03:40:25'),
(8, 'PROGRAMMER ', 'THIS WEBSITE IS UNDER CONSTRUCTION.', '2023-03-27 03:44:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
