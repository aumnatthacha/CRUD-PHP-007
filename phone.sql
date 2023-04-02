-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 10:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `p1`
--

CREATE TABLE `p1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `dattery` varchar(500) NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p1`
--

INSERT INTO `p1` (`id`, `name`, `price`, `camera`, `dattery`, `img`) VALUES
(1, 'OPPO A 78 5G', '8,499 บาท', 'กล้อง AI 50MP ภาพคมชัดเป็นพิเศษ', 'แบตเตอรี่ความจุสูง 5,000 mAh', 'https://media-cdn.bnn.in.th/266447/OPPO-Smartphone-A78-Glowing-Purple-5G-1-square_medium.jpg'),
(2, 'OPPO Reno8 T 5G', '13,990 บาท', 'กล้องหน้า 32 MP', 'แบตเตอรี่ใช้งานยาวนานชาร์จเร็ว', 'https://media-cdn.bnn.in.th/270911/OPPO-Smartphone-Reno8TSunrise-Gold-1-square_medium.jpg'),
(3, 'Samsung Galaxy 23 Ultra', '43,900 บาท', 'ขนาดหน้าจอ 6.8 นิ้ว', 'แบตเตอรี่ 5,000 mAh', 'https://media-cdn.bnn.in.th/269611/Samsung-Smartphone-Galaxy-S23-Ultra-Phantom-Black-5G-1-square_medium.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p1`
--
ALTER TABLE `p1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p1`
--
ALTER TABLE `p1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
