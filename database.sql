-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 08:43 AM
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
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_konser`
--

CREATE TABLE `tiket_konser` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_tiket` varchar(25) NOT NULL,
  `harga_tiket` varchar(25) NOT NULL,
  `jumlah_tiket` varchar(25) NOT NULL,
  `total_harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket_konser`
--

INSERT INTO `tiket_konser` (`id`, `nama`, `tanggal_lahir`, `jenis_tiket`, `harga_tiket`, `jumlah_tiket`, `total_harga`) VALUES
(1, 'Alika Putri', '28/02/2002', 'konser', '1.000.000', '2', '2.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_konser`
--
ALTER TABLE `tiket_konser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket_konser`
--
ALTER TABLE `tiket_konser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
