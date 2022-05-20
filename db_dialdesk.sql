-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 05:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dialdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `leads_ads`
--

CREATE TABLE `leads_ads` (
  `idx` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `user` varchar(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads_ads`
--

INSERT INTO `leads_ads` (`idx`, `full_name`, `email`, `company_name`, `phone_number`, `user`, `created_date`, `updated_at`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'mass callnet', '9000034246', 'b', '2022-02-23 05:20:26', '2022-02-22 07:50:39'),
(2, 'xyz', 'xyz@gmail.com', 'mass callnet', '9000034246', 'a', '2022-02-21 11:02:26', '2022-02-22 07:50:39'),
(3, 'xyz', 'xyz@gmail.com', 'mass callnet', '9000034246', 'b', '2022-02-22 11:02:30', '2022-02-22 07:50:39'),
(4, 'xyz', 'xyz@gmail.com', 'mass callnet', '9000034246', 'c', '2022-02-22 11:02:33', '2022-02-22 07:50:39'),
(6, 'sample', 'sample@gmail.com', 'mas callnet', '0987654321', 'd', '2022-02-24 07:33:58', '2022-02-22 11:41:31'),
(7, 'demo7', 'demo7@gmail.com', 'demo7 company', '7777777777', 'a', '2022-02-23 04:41:49', '2022-02-23 04:33:17'),
(8, 'demo8', 'demo7@gmail.com', 'demo7 company', '7777777777', NULL, '2022-02-24 12:18:57', '2022-02-23 04:33:38'),
(9, 'demo9', 'demo9@gmail.com', 'demo9 company', '8218024554', 'd', '2022-02-23 07:30:03', '2022-02-23 06:16:41'),
(10, 'demo10', 'demo10@gmail.com', 'demo 10 company', '8218024554', NULL, '2022-02-24 12:01:54', '2022-02-23 12:01:54'),
(11, 'demo10', 'demo10@gmail.com', 'demo 10 company', '8218024554', NULL, '2022-02-24 12:17:19', '2022-02-23 12:17:19'),
(12, 'demo10', 'demo10@gmail.com', 'demo 10 company', '8218024554', NULL, '2022-02-24 12:19:46', '2022-02-23 12:19:46'),
(13, 'demo10', 'demo10@gmail.com', 'demo 10 company', '8218024554', NULL, '2022-02-24 12:41:18', '2022-02-23 12:41:18'),
(14, 'demo10', 'demo10@gmail.com', 'demo 10 company', '8218024554', 'a', '2022-02-24 07:34:06', '2022-02-23 12:43:18'),
(15, 'demo 15', 'demo@gmaii.com', 'company', '1234567890', 'a', '2022-02-24 06:09:50', '2022-02-24 04:43:39'),
(16, 'demo 15', 'demo@gmaii.com', 'company', '1234567890', 'a', '2022-02-24 06:09:50', '2022-02-24 04:43:39'),
(17, 'demo 15', 'demo@gmaii.com', 'company', '1234567890', NULL, '2022-02-24 11:50:07', '2022-02-24 04:43:39'),
(18, 'demo 15', 'demo@gmaii.com', 'company', '1234567890', NULL, '2022-02-24 11:20:39', '2022-02-24 04:43:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leads_ads`
--
ALTER TABLE `leads_ads`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leads_ads`
--
ALTER TABLE `leads_ads`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
