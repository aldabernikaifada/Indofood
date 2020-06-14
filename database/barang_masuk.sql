-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 06:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(255) NOT NULL,
  `kode_barangmasuk` varchar(255) NOT NULL,
  `kode_supplier` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_satuan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `kode_barangmasuk`, `kode_supplier`, `nama_produk`, `jenis_produk`, `satuan`, `harga_satuan`, `jumlah`, `tanggal_masuk`) VALUES
(9187263, 'FW5677', 'EMN366', 'Facial Wash Emina Bright Stuff', 'Facial Wash', 'pcs', 14, 50, '2020-06-12'),
(9187264, 'FW0878', 'GRN28973', 'Facial Wash Garnier Lemon Light Complete', 'Facial Wash', 'pcs', 25, 70, '2020-06-14'),
(9187265, 'SNZ028', '18276', 'Body Scrub Shinzui', 'Lulur', 'pcs', 11, 65, '2020-06-12'),
(9187266, 'S9278', '27819', 'Marina Body Scrub Mutiara', 'Lulur', 'pcs', 13, 55, '2020-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9187267;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
