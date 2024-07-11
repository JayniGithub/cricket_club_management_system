-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 08:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `post`, `username`, `password`) VALUES
(1, 'Super', 'Admin', 'Admin', 'superAdmin', 'sp10001');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `approval_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`approval_id`, `name`, `nic`, `email`, `contact_no`, `purpose`, `booking_date`, `end_date`, `no_of_days`, `amount`) VALUES
(2, 'Tharindu Narasinghe', '199410254v', 'sony.94@gmail.com', '0764722653', 'Academy Match', '2024-08-10', '2024-08-11', 1, 5000);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_regi`
--

INSERT INTO `batch_regi` (`member_id`, `name`, `contact_no`, `type`, `batch_time`, `row_no`) VALUES
(1, 'Test User', 764722653, 'vacation', '02:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_fee`
--

CREATE TABLE `booking_fee` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `acc_no` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_fee`
--

INSERT INTO `booking_fee` (`id`, `booking_id`, `name`, `ref_no`, `acc_no`, `image`) VALUES
(1, 1, 'Rajantha Chandula', '10027653', '10083572', 'Annotation 2023-12-15 143638.png');

-- --------------------------------------------------------

--
-- Table structure for table `calc`
--

CREATE TABLE `calc` (
  `item_no` int(5) NOT NULL,
  `member_fee` float NOT NULL,
  `ground_fee` float NOT NULL,
  `reg_fee` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calc`
--

INSERT INTO `calc` (`item_no`, `member_fee`, `ground_fee`, `reg_fee`) VALUES
(1, 2000, 5000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachid` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `btype` varchar(50) DEFAULT NULL,
  `btime` varchar(50) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coachid`, `name`, `bday`, `contact`, `nic`, `address`, `email`, `btype`, `btime`, `details`, `image`) VALUES
(1, 'Rajantha Chandula', '1992-07-22', '0772988123', '199207222v', 'No:15 Rahula Road, Matara', 'chandul.r92@gmail.com', 'regular', '8:00-12:00', 'Former player in u19 National Team', 'rajantha_coach.jpg'),
(2, 'Tharindu Narasinghe', '1994-04-27', '0773649734', '199404276v', 'No:20 Alawella Road, Matara', 'sony.94@gmail.com', 'regular', '8:00-12:00', 'Former player in u19 National Team', 'tharindu_coach.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ground_booking`
--

CREATE TABLE `ground_booking` (
  `booking_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `no_of_days` int(5) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ground_booking`
--

INSERT INTO `ground_booking` (`booking_id`, `name`, `nic`, `email`, `contact_no`, `purpose`, `booking_date`, `end_date`, `no_of_days`, `amount`) VALUES
(1, 'Rajantha Chandula', '987341408v', 'jukyk77@gmai.com', 764722653, 'Academy Match', '2024-07-27', '2024-07-28', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `btype` varchar(20) DEFAULT NULL,
  `btime` varchar(20) DEFAULT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `acc_no` varchar(20) DEFAULT NULL,
  `attach` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `member_id`, `name`, `btype`, `btime`, `ref_no`, `acc_no`, `attach`) VALUES
(1, 1, 'Test User', 'regular', '8:00-12:00', '100012365', '100023765', 'Annotation 2023-10-1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `email`, `dob`, `id`, `contact_no`, `no_of_years`, `member_fee`, `address`) VALUES
(1, 'Test User', 'jayanihettiarachchi98@gmail.com', '1998-08-21', 199808214, 764722653, 1, 2000, 'Walgama, Matara');

-- --------------------------------------------------------

--
-- Table structure for table `membership_fee`
--

CREATE TABLE `membership_fee` (
  `id` int(11) NOT NULL,
  `memberid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `acc_no` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_fee`
--

INSERT INTO `membership_fee` (`id`, `memberid`, `name`, `ref_no`, `acc_no`, `image`) VALUES
(1, 1, 'Test User', '100012846', '100023764', 'Annotation 2023-10-03 171859.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`approval_id`);

--
-- Indexes for table `batch_regi`
--
ALTER TABLE `batch_regi`
  ADD PRIMARY KEY (`row_no`);

--
-- Indexes for table `booking_fee`
--
ALTER TABLE `booking_fee`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `membership_fee`
--
ALTER TABLE `membership_fee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batch_regi`
--
ALTER TABLE `batch_regi`
  MODIFY `row_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_fee`
--
ALTER TABLE `booking_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coachid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ground_booking`
--
ALTER TABLE `ground_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_fee`
--
ALTER TABLE `membership_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
