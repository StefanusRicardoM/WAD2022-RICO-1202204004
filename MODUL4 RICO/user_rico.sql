-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111:8111
-- Generation Time: Nov 29, 2022 at 05:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_Rico`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_rico`
--

CREATE TABLE `user_rico` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rico`
--

INSERT INTO `user_rico` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Rico', 'stevanusmascarenhas@gmail.com', '1202204004', '081910637800'),
(26, 'coko', 'mimi@gmail.com', '1234', '0908861213'),
(28, 'Rico', 'rico@gmail.com', '1202204004', '0819212131'),
(33, 'koo', '123@gmail.com', '1234', '124151335'),
(34, 'ninini', 'asasi@gmail.com', '1234', '10124153');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_rico`
--
ALTER TABLE `user_rico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_rico`
--
ALTER TABLE `user_rico`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
