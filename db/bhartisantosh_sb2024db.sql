-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2024 at 04:42 PM
-- Server version: 8.0.39
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhartisantosh_sb2024db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `slno` int NOT NULL,
  `displayEmail` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `last_login` varchar(50) NOT NULL,
  `last_login_time` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `displayPhone` varchar(50) NOT NULL,
  `contactMobile` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `addedOn` date NOT NULL,
  `loginIP` varchar(30) NOT NULL,
  `trackingCode` text NOT NULL,
  `loginStatus` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`slno`, `displayEmail`, `user_id`, `pwd`, `user_type`, `status`, `last_login`, `last_login_time`, `name`, `email`, `website`, `address`, `companyName`, `displayPhone`, `contactMobile`, `country`, `addedOn`, `loginIP`, `trackingCode`, `loginStatus`) VALUES
(1, 'sbhartimca09@gmail.com', 'santoshadmin', 'WP@santosh', 'admin', 'Y', '2021-01-16 15:40:46', '03:23:38pm', 'sbhartimca09@gmail.com', 'sbhartimca09@gmail.com', 'https://www.santoshbharti.com', '', '', '+91-8700611032', '+91-8700611032', 'India', '2023-10-14', '42.111.24.7', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `status` enum('Yes','No') NOT NULL,
  `created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `comments`, `status`, `created_date`) VALUES
(3, 'santosh kumar', 'sbhartimca09@gmail.com', '8700611032', 'fddg', 'dsffsdfd', 'No', '2024-02-17 17:28:50'),
(4, 'santosh kumar', 'santosh.bharti7719@gmail.com', '8700611032', 'test', 'dsffsdffsd', 'No', '2024-02-27 23:58:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `slno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
