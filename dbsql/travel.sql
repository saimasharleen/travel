-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 06:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(100) NOT NULL,
  `image` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `image`, `updated_at`, `created_at`) VALUES
(7, '1565088118.png', '2019-08-06 04:41:58', '2019-08-06 04:41:58'),
(8, '1565089135.jpg', '2019-08-06 04:58:55', '2019-08-06 04:58:55'),
(9, '1565725072.jpg', '2019-08-13 13:37:52', '2019-08-13 13:37:52'),
(10, '1565949732.jpg', '2019-08-16 04:02:12', '2019-08-16 04:02:12'),
(11, '1566037217.jpg', '2019-08-17 04:20:17', '2019-08-17 04:20:17'),
(12, '1566148689.jpg', '2019-08-18 11:18:09', '2019-08-18 11:18:09'),
(13, '1566155846.jpg', '2019-08-18 13:17:26', '2019-08-18 13:17:26'),
(14, '1566188124.jpg', '2019-08-18 22:15:24', '2019-08-18 22:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `image` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `updated_at`, `created_at`) VALUES
(1, '1566188313.jpg', '2019-08-18 22:18:33', '2019-08-18 22:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(100) NOT NULL,
  `check-in-date` date NOT NULL,
  `check-out-date` date NOT NULL,
  `room` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `adult` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `hotelname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `children` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `check-in-date`, `check-out-date`, `room`, `adult`, `hotelname`, `city`, `children`) VALUES
(1, '2019-08-19', '2019-08-21', 'suite', '1', 'seoul shilla hotel', 'seoul', '0'),
(2, '2019-08-20', '2019-08-21', 'family', '4', 'golden tulip incheon airport hotel', 'incheon', '1'),
(3, '2019-08-21', '2019-08-23', 'superior', '3', 'hilton Busan', 'busan', '2'),
(4, '2019-08-22', '2019-08-24', 'luxury', '1', 'pan pacific sonargaon', 'dhaka', '0'),
(5, '2019-08-22', '2019-08-24', 'family', '1', 'six seasons hotel', 'dhaka', '0'),
(6, '2019-08-19', '2019-08-21', 'classic', '1', 'RYSE', 'seoul', '0'),
(7, '2019-08-19', '2019-08-21', 'classic', '1', 'The Grand Hotel Myeongdong', 'seoul', '0'),
(8, '2019-08-19', '2019-08-21', 'deluxe', '2', 'hotel pj', 'seoul', '2'),
(9, '2019-08-19', '2019-08-21', 'suite', '1', 'fars hotel', 'dhaka', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `postd` varchar(200) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `postd`) VALUES
(1, 'njhjh'),
(2, 'hagvvvvvv'),
(4, 'nnnn'),
(5, 'yoyo'),
(6, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `usertype` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `cname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `licenseno` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `contactno` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `postalcode` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `deposit` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `usertype`, `cname`, `licenseno`, `contactno`, `city`, `address`, `postalcode`, `deposit`, `img`) VALUES
(3, 'kim0', 'bts', 'btsexo0', 'laravelbts@gmail.com', 'superadmin', 'yoyo', '2143657878', '7676454343', 'Dhaka', 'sornali', '1206', '10000', '1566188217.jpg'),
(4, 'saima', 'sharleen', 'saimasharleen0', 'saimasharleen0@gmail.com', 'hotelagent', 'gogo', '1244465768677', '01827537100', 'Dhaka', 'fggfjvvhjv', '1206', '1000000', NULL),
(5, 'kim', 'sang', 'kimbum0', 'saimasharleen00@gmail.com', 'b2bagent', 'jjjj', '124256', '0097613124', 'Dhaka', 'bmkfmknm', '1206', '1000', NULL),
(6, 'nbn', 'bbkb', 'jjbkb', 'saimayoyo@gmail.com', 'flightagent', 'njknknk', '12345', '0897655', 'Dhaka', 'nnknkjnkn', '1206', '10000', NULL),
(7, 'aaabbb', 'aaabbb', 'aaabbb', 'admin@gmail.com', 'b2bagent', 'bhbb', '6456342341', '0097613124', 'Dhaka', 'bjbjkbjb', '1206', '100000', NULL),
(8, 'aaaaa', 'bbbb', 'aaaa', 'saima@gmail.com', 'hotelagent', 'gsdgg', '12345', '123456', 'Dhaka', 'dsg1206', '1206', '10000', NULL),
(10, 'aaaa', 'bbbb', 'aaa', 'saima333@gmail.com', 'hotelagent', 'gxgdzg12345', '123456', '01827537100', 'Dhaka', 'sfsaf1206', '1206', '10000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `usertype` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `password`, `usertype`, `status`) VALUES
(1, 'laravelbts@gmail.com', 'Btsexogot7**0', 'superadmin', 0),
(4, 'saimasharleen0@gmail.com', 'Btsexogot7**0', 'hotelagent', 0),
(5, 'saimasharleen00@gmail.com', 'Btsexogot7**0', 'b2bagent', 0),
(6, 'admin@gmail.com', '12345678', 'b2bagent', 0),
(7, 'saima333@gmail.com', '1234567', 'hotelagent', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
