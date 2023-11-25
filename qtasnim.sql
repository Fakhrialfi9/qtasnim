-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2023 at 09:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qtasnim`
--

-- --------------------------------------------------------

--
-- Table structure for table `FormInput`
--

CREATE TABLE `FormInput` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `FormInput`
--

INSERT INTO `FormInput` (`id`, `nama_barang`, `stock`, `jumlah_terjual`, `tanggal`, `jenis_barang`) VALUES
(11, 'Kopi', 100, 10, '2021-05-01', 'Konsumsi'),
(12, 'Teh', 100, 19, '2021-05-05', 'Konsumsi'),
(13, 'Kopi', 90, 15, '2021-05-10', 'Konsumsi'),
(14, 'Pasta Gigi', 100, 20, '2021-05-11', 'Pembersih'),
(15, 'Sabun Mandi', 100, 30, '2021-05-11', 'Pembersih'),
(16, 'Sampo', 100, 25, '2021-05-12', 'Pembersih'),
(17, 'Teh', 81, 5, '2021-05-12', 'Konsumsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FormInput`
--
ALTER TABLE `FormInput`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FormInput`
--
ALTER TABLE `FormInput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
