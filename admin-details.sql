-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhijit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-details`
--

CREATE TABLE `admin-details` (
  `slno` int(11) NOT NULL,
  `Shop-Name` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `h_start` varchar(255) NOT NULL,
  `h_end` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `Phone-Number` int(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `Product-Type` varchar(30) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin-details`
--

INSERT INTO `admin-details` (`slno`, `Shop-Name`, `photo`, `h_start`, `h_end`, `person`, `area`, `Phone-Number`, `Address`, `payment_type`, `Product-Type`, `timestamp`) VALUES
(18, 'ram', 'Full-Hd-Wallpapers-Pc-1920X1080-1080P-Free-Download-Wallpaperxyz.com-32.jpg', '9am', '5pm', '20', '5km', 2147483647, 'Garia station kolkata', 'card', 'jualary', '2021-06-14 19:12:31'),
(19, 'ABHIJIT', 'abstract-red-❤-4k-hd-desktop-wallpaper-for-•-wide-ultra.jpg', '8am', '10pm', '4', '9km', 1234512345, 'Garia station kolkata', 'cash', 'bear', '2021-06-14 21:24:40'),
(20, 'saheli', 'images.jpg', '12pm', '6pm', '5', '5km', 2147483647, 'Garia station kolkata', 'cash', 'grocery', '2021-06-14 23:54:00'),
(21, 'ABHIJIT enterprize', '21a.jpg', '10am', '6pm', '10', '5km', 4567890, 'Garia station kolkata', 'card', 'jualery', '2021-06-14 23:55:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-details`
--
ALTER TABLE `admin-details`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-details`
--
ALTER TABLE `admin-details`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
