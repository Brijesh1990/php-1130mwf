-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 09:01 AM
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
(6, 1, 'basics peri feri', 'uploads/burger3.jpg', 1, 45, 35, 'basics peri feri', '2024-05-08');

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
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
