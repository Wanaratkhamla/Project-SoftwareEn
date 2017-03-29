-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 05:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `donateID` int(11) NOT NULL,
  `IDCard` varchar(13) DEFAULT NULL,
  `donateName` varchar(50) DEFAULT NULL,
  `donateSize` varchar(20) DEFAULT NULL,
  `donateweight` varchar(20) DEFAULT NULL,
  `donateEA` varchar(20) DEFAULT NULL,
  `donatecolor` varchar(100) DEFAULT NULL,
  `donateType` varchar(50) DEFAULT NULL,
  `donateDetail` varchar(500) DEFAULT NULL,
  `donatePathIMG` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`donateID`, `IDCard`, `donateName`, `donateSize`, `donateweight`, `donateEA`, `donatecolor`, `donateType`, `donateDetail`, `donatePathIMG`) VALUES
(3, '1330800246735', 'นอส', '30', '50', '2', 'ดำ', 'เครื่องสาย', 'yyy', '14908024632584.jpg'),
(4, '1330800246735', 'นอส', '30', '50', '3', 'ดำ', 'เครื่องสาย', 'yyyy', '14908024877270.jpg'),
(5, '1330800246735', 'นอส', '30', '50', '3', 'ดำ', 'เครื่องสาย', 'yyyy', '149080258123463.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `IDCard` varchar(13) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Tel` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  `Province` varchar(30) DEFAULT NULL,
  `Didtrict` varchar(30) DEFAULT NULL,
  `Postcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`IDCard`, `Fname`, `Lname`, `Address`, `Tel`, `Email`, `Password`, `Province`, `Didtrict`, `Postcode`) VALUES
('1330800246735', 'วนราช', 'คำหล้า', '118 ถนนศรีสุนทร ต.ในเมือง', '08-2750-56', 'wanarat_k@kkumail.com', '7d1fdab96428260175221521a4859b429e093ce1d537abd0008c4a94454855db', 'เมือง', 'ขอนแก่น', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `status`) VALUES
(1, 'iPhone 6 Plus', '25000.00', 1),
(2, 'iPhone 6', '22000.00', 1),
(3, 'True SMART 4.0', '5000.00', 1),
(4, 'Samsung Galaxy ALPHA', '12000.00', 1),
(5, 'Samsung Galaxy Note', '23000.00', 1),
(6, 'iPhone 5S', '20000.00', 1),
(7, 'Samsung Galaxy S5', '20000.00', 1),
(8, 'Galaxy K Zoom 3G', '21000.00', 1),
(9, 'OPPO Joy Plus', '4500.00', 1),
(10, 'Galaxy S DUOS 2', '3900.00', 1),
(11, 'OPPO Joy Plus', '3490.00', 1),
(12, 'Huawei Alek 4G', '5460.00', 1),
(13, 'Huawei P8 Lite', '7900.00', 1),
(14, 'OPPO N1 Mini', '9900.00', 1),
(15, 'Samsung Galaxy E7', '11500.00', 1),
(16, 'LG G4', '22900.00', 1),
(17, 'i-Mobile IQ X Lucus', '5900.00', 1),
(18, 'i-mobile I-Style 8.3', '4990.00', 1),
(19, 'I-Mobile I-Style 210', '2490.00', 1),
(20, 'i-mobile IQ 5.7', '4490.00', 1),
(21, 'Galaxy Win 4.7', '7900.00', 1),
(22, 'Galaxy Note 3 LTE', '19900.00', 1),
(23, 'Nokia Lumia 630', '4990.00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`donateID`),
  ADD KEY `donate_foreign` (`IDCard`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`IDCard`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `donateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_foreign` FOREIGN KEY (`IDCard`) REFERENCES `member` (`IDCard`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
