-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 01:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bycheap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `image`, `account_name`, `username`, `password`) VALUES
(1, 'Buycheaptrip-logo.png', 'Administrator', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `image`) VALUES
(1, 'bg-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Noida'),
(2, 'Hariyana'),
(3, 'Sultanpur'),
(4, 'kjckjck12'),
(5, 'HongKong2');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `address_1` varchar(500) NOT NULL,
  `address_2` varchar(500) NOT NULL,
  `address_3` varchar(500) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `address_1`, `address_2`, `address_3`, `mobile`, `email`, `web`) VALUES
(1, 'Reg. Office - 5/324 Viram Khand-5', 'Gomati Nagar Lucknow', ' Uttar Pradesh-226010', '7887031889', ' info@apmleeducational.com', 'ampleeducationalsociety.org');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hcity_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hcity_id`) VALUES
(1, 'taj hotel', 1),
(9, 'jkvjj', 3),
(10, 'Delhi Hotels', 3),
(12, 'demo hotel', 5),
(13, 'Noida Hotel', 2),
(14, 'BMDU hoteks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_categories`
--

CREATE TABLE `hotel_categories` (
  `hcategory_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `hc_id` int(10) NOT NULL,
  `prices` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_categories`
--

INSERT INTO `hotel_categories` (`hcategory_id`, `category_name`, `hc_id`, `prices`) VALUES
(2, 'Economy1', 9, 15000),
(17, 'VIP', 10, 15000),
(18, 'Economy', 12, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'MANISH2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sightseeing`
--

CREATE TABLE `sightseeing` (
  `sight_id` int(11) NOT NULL,
  `sight_name` varchar(150) NOT NULL,
  `prices` double NOT NULL,
  `tsight_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sightseeing`
--

INSERT INTO `sightseeing` (`sight_id`, `sight_name`, `prices`, `tsight_id`) VALUES
(1, 'rever Front2', 1520, 1),
(4, 'rever Front2', 15000, 3),
(5, 'rever Front2', 15000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `trans_id` int(11) NOT NULL,
  `transport_name` varchar(150) NOT NULL,
  `prices` double NOT NULL,
  `tcity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`trans_id`, `transport_name`, `prices`, `tcity_id`) VALUES
(1, 'Sector-62 to Sector -90', 150, 5),
(3, 'Sector-62 to Sector -65', 150, 1),
(4, 'Sector-62 to Sector -75', 1500, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_categories`
--
ALTER TABLE `hotel_categories`
  ADD PRIMARY KEY (`hcategory_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sightseeing`
--
ALTER TABLE `sightseeing`
  ADD PRIMARY KEY (`sight_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotel_categories`
--
ALTER TABLE `hotel_categories`
  MODIFY `hcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sightseeing`
--
ALTER TABLE `sightseeing`
  MODIFY `sight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
