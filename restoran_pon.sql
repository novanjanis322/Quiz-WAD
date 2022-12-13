-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 12:26 PM
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
-- Database: `restoran_pon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Peepo', 'peepo@gmail.com', 'sadge', '0808080');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_stok` int(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `stok` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_stok`, `menu`, `harga`, `stok`) VALUES
(1, 'Fried Rice', 13000, 21),
(2, 'Fried Noodle', 13000, 27),
(3, 'Pizza', 18000, 11),
(4, 'Chicken Katsu', 14000, 23),
(5, 'Beef Teriyaki', 13000, 21),
(6, 'Beef Yakiniku', 15000, 25),
(7, 'Iced Tea', 5000, 22),
(8, 'Lemon Tea', 4000, 19),
(9, 'Chocolate', 7000, 21),
(10, 'Thai Tea', 7000, 25),
(11, 'Lemon Mojito', 9000, 25),
(12, 'Soda Gembira', 8000, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `no_meja` int(20) NOT NULL,
  `makanan` varchar(255) NOT NULL,
  `minuman` varchar(255) NOT NULL,
  `biaya` int(255) NOT NULL,
  `metode_bayar` varchar(255) NOT NULL,
  `metode_makan` varchar(255) NOT NULL,
  `status_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `nama`, `no_hp`, `no_meja`, `makanan`, `minuman`, `biaya`, `metode_bayar`, `metode_makan`, `status_order`) VALUES
(18, 'novanjanis', '0812123123123', 11, 'Fried Rice', 'Chocolate', 20000, 'Cash', 'Dine-In', 'Selesai'),
(21, 'novanjanis', '0812123123123', 44, 'Beef Teriyaki', 'Lemon Tea', 17000, 'Cash', 'Dine-In', 'Selesai'),
(22, 'nope', '089090', 4, 'Chicken Katsu', 'Lemon Tea', 18000, 'OVO', 'Dine-In', 'Selesai'),
(23, 'novanjanis', '0812123123123', 44, 'Beef Teriyaki', 'Soda Gembira', 21000, 'Cash', 'Dine-In', 'Selesai'),
(24, 'novanjanis', '0812123123123', 4, 'Chicken Katsu', 'Iced Tea', 19000, 'Gopay', 'Dine-In', 'Selesai'),
(25, 'novanjanis', '0812123123123', 33, 'Fried Noodle', 'Iced Tea', 18000, 'Gopay', 'Dine-In', 'Selesai'),
(26, 'novanjanis', '0812123123123', 3, 'Beef Teriyaki', 'Lemon Tea', 17000, 'Gopay', 'Dine-In', 'Process'),
(27, 'novanjanis', '0812123123123', 4, 'Beef Teriyaki', 'Chocolate', 20000, 'Cash', 'Take-Away', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'novanjanis', 'novan@123.com', '12345', '0812123123123'),
(3, 'nope', 'nop@tes.com', '555', '089090');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_stok` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
