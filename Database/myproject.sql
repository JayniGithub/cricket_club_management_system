-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 09:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `post`, `username`, `password`) VALUES
(0, 'Jayani', 'Hettiarachchi', 'IT Operator', 'ioperator', 'iop1001'),
(0, 'Jayani', 'Hettiarachchi', 'IT Operator', 'ioperator', 'iop1001'),
(0, 'Jayani', 'Hettiarachchi', 'IT Operator', 'ioperator', 'iop1001'),
(0, 'Jayani', 'Hettiarachchi', 'IT Operator', 'ioperator', 'iop1001');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `booking_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batch_regi`
--

CREATE TABLE `batch_regi` (
  `member_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `batch_time` time NOT NULL,
  `row_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch_regi`
--

INSERT INTO `batch_regi` (`member_id`, `name`, `contact_no`, `type`, `batch_time`, `row_no`) VALUES
(0, '', 0, 'regular', '08:00:00', 1),
(36, 'Jayani Hettiarachchi', 764722653, 'regular', '08:00:00', 7),
(25, 'Malan', 1020304050, 'regular', '08:00:00', 8),
(24, 'Savidu', 112455879, 'vacation', '02:00:00', 9),
(28, 'wdff', 1020304050, 'vacation', '08:00:00', 10),
(36, 'Jayani Hettiarachchi', 764722653, 'vacation', '02:00:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `calc`
--

CREATE TABLE `calc` (
  `item_no` int(5) NOT NULL,
  `member_fee` float NOT NULL,
  `ground_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calc`
--

INSERT INTO `calc` (`item_no`, `member_fee`, `ground_fee`) VALUES
(1, 2000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachid` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ground_booking`
--

CREATE TABLE `ground_booking` (
  `booking_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id` int(10) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `no_of_years` int(5) NOT NULL,
  `member_fee` float NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `email`, `dob`, `id`, `contact_no`, `no_of_years`, `member_fee`, `address`) VALUES
(1, '2021-08-19', '60465', '0000-00-00', 412220696, 0, 0, 0, ''),
(24, 'Savidu', 'savidu@gmail.com', '2021-09-16', 64687988, 112455879, 2, 4000, 'Matale'),
(25, 'Malan', 'malan@gmai.com', '2021-09-20', 60465, 1020304050, 2, 4000, 'Colombo'),
(26, 'malan', 'malan@gmai.com', '2021-09-20', 785412, 2147483647, 3, 6000, 'Galle'),
(27, 'malan', 'malan@gmai.com', '2021-09-20', 785412, 2147483647, 3, 6000, 'Galle'),
(28, 'wdff', 'ravi@yahoo.com', '2021-09-14', 102030, 1020304050, 4, 0, 'Matale'),
(29, 'cxf', 'kapila@gmail.com', '2021-09-14', 60465, 1020304050, 3, 6000, 'Walasmulla'),
(31, '111111', 'saku@gmail.com', '0000-00-00', 0, 444444, 5, 10000, '55555'),
(32, '123', 'ravi@yahoo.com', '0000-00-00', 1111111111, 1478522369, 2, 4000, 'Colombo'),
(33, '22222', 'kapila@gmail.com', '2021-09-13', 444444444, 112455879, 2, 4000, 'Matale'),
(34, 'a', 'sx', '2021-09-14', 48, 654, 2, 0, 'asc'),
(35, 'aaaaaaa', 'saku@gmail.com', '2021-09-15', 788878878, 112455879, 2, 4000, 'Matara'),
(36, 'Jayani Hettiarachchi', 'jaye@gmail.com', '2021-09-22', 987341408, 764722653, 1, 2000, 'Matara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `batch_regi`
--
ALTER TABLE `batch_regi`
  ADD PRIMARY KEY (`row_no`);

--
-- Indexes for table `calc`
--
ALTER TABLE `calc`
  ADD PRIMARY KEY (`item_no`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coachid`);

--
-- Indexes for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_regi`
--
ALTER TABLE `batch_regi`
  MODIFY `row_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coachid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ground_booking`
--
ALTER TABLE `ground_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `approval_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `ground_booking` (`booking_id`);

--
-- Constraints for table `calc`
--
ALTER TABLE `calc`
  ADD CONSTRAINT `calc_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD CONSTRAINT `ground_booking_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `calc` (`item_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
