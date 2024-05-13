-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 09:36 AM
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
-- Database: `mvc-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addburgercategory`
--

CREATE TABLE `tbl_addburgercategory` (
  `category_id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addburgercategory`
--

INSERT INTO `tbl_addburgercategory` (`category_id`, `categoryname`, `added_date`) VALUES
(1, 'burger peri feri', '2024-05-08'),
(2, 'burger combo', '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addfood`
--

CREATE TABLE `tbl_addfood` (
  `food_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `newprice` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addfood`
--

INSERT INTO `tbl_addfood` (`food_id`, `category_id`, `foodname`, `photo`, `qty`, `oldprice`, `newprice`, `descriptions`, `addeddate`) VALUES
(1, 2, 'burger combo with onion', 'uploads/burger6.jpg', 1, 145, 125, 'burger combo stock photos, vectors, and illustrations are available royalty-free for download. See burger combo stock ', '2024-05-08'),
(2, 1, 'burger with peri feri', 'uploads/burger5.jpg', 1, 85, 75, 'burger combo stock photos, vectors, and illustrations are available royalty-free for download. See burger combo stock ', '2024-05-08'),
(3, 2, 'burger big combo', 'uploads/burger4.webp', 1, 225, 185, 'burger combo stock photos, vectors, and illustrations are available royalty-free for download. See burger combo stock ', '2024-05-08'),
(4, 1, 'basic burger', 'uploads/burger.jpg', 1, 75, 65, 'basic burger stock photos, vectors, and illustrations are available royalty-free for download. See burger combo stock ', '2024-05-08'),
(5, 1, 'simple burger', 'uploads/burger1.avif', 1, 65, 55, 'burger combo stock photos, vectors, and illustrations are available royalty-free for download. See burger combo stock ', '2024-05-08'),
(6, 1, 'basics peri feri', 'uploads/burger3.jpg', 1, 45, 35, 'basics peri feri', '2024-05-08'),
(7, 2, 'buger combo with coldrinks', 'uploads/burgercombo.webp', 1, 125, 105, 'good', '2024-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'superadmin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `cityname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Junagad'),
(4, 1, 'Badodra'),
(5, 2, 'Lucknow'),
(6, 2, 'Varansi'),
(7, 2, 'Gaziabad'),
(8, 2, 'Mathura'),
(9, 2, 'Agra'),
(10, 2, 'Mirzapur'),
(11, 3, 'Bhopal'),
(12, 3, 'Gwalior'),
(13, 4, 'Pune'),
(14, 4, 'Mumbai'),
(15, 5, 'Navada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `countryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `countryname`) VALUES
(1, 'india'),
(2, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `added_date` varchar(2355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `name`, `email`, `password`, `mobile`, `address`, `country_id`, `state_id`, `city_id`, `added_date`) VALUES
(1, 'ishan', 'ishan@gmail.com', 'MTIzNDU2', 9998003879, '', 0, 0, 0, '13/05/2024 12:35:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `country_id`, `statename`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 1, 'Madhya pradesh'),
(4, 1, 'Mahrastra'),
(5, 2, 'California');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addburgercategory`
--
ALTER TABLE `tbl_addburgercategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_addfood`
--
ALTER TABLE `tbl_addfood`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addburgercategory`
--
ALTER TABLE `tbl_addburgercategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_addfood`
--
ALTER TABLE `tbl_addfood`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
