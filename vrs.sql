-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 08:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_cars`
--

CREATE TABLE `approved_cars` (
  `resg_no` varchar(15) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `insp_no` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_cars`
--

INSERT INTO `approved_cars` (`resg_no`, `uid`, `brand`, `model`, `insp_no`, `price`, `location`) VALUES
('UP 65AB 1234', 'CUST001', 'Maruti', 'Swift', 'INSP001', 500000, 'Lucknow'),
('UP 65AB 1236', 'CUST003', 'Honda', 'City', 'INSP003', 900000, 'Prayagraj'),
('UP 65AB 1238', 'CUST005', 'Toyota', 'Innova', 'INSP005', 1200000, 'Lucknow'),
('UP 65AB 1240', 'CUST007', 'Mahindra', 'Scorpio', 'INSP007', 1100000, 'Prayagraj'),
('UP 65AB 1242', 'CUST009', 'Renault', 'Duster', 'INSP009', 700000, 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_no` varchar(11) NOT NULL,
  `resg_no` varchar(20) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `sc_id` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `service` varchar(25) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_no`, `resg_no`, `uid`, `brand`, `model`, `sc_id`, `amount`, `location`, `date`, `service`, `status`) VALUES
('BK001', 'UP 65AB 1234', 'CUST001', 'Maruti', 'Swift', 'SC002', 5000, 'Lucknow', '2024-06-01', 'Oil Change', 'Completed'),
('BK002', 'UP 65AB 1235', 'CUST002', 'Hyundai', 'i20', 'SC001', 6000, 'Varanasi', '2024-06-02', 'Tire Replacement', 'Pending'),
('BK003', 'UP 65AB 1236', 'CUST003', 'Honda', 'City', 'SC004', 7000, 'Prayagraj', '2024-06-03', 'Brake Service', 'Completed'),
('BK004', 'UP 65AB 1237', 'CUST004', 'Tata', 'Nexon', 'SC003', 8000, 'Kanpur', '2024-06-04', 'Battery Check', 'In Progress'),
('BK005', 'UP 65AB 1238', 'CUST005', 'Toyota', 'Innova', 'SC002', 9000, 'Lucknow', '2024-06-05', 'Engine Service', 'Pending'),
('BK006', 'UP 65AB 1239', 'CUST006', 'Ford', 'Ecosport', 'SC001', 5500, 'Varanasi', '2024-06-06', 'Transmission Check', 'Completed'),
('BK007', 'UP 65AB 1240', 'CUST007', 'Mahindra', 'Scorpio', 'SC004', 7500, 'Prayagraj', '2024-06-07', 'Suspension Repair', 'Completed'),
('BK008', 'UP 65AB 1241', 'CUST008', 'Kia', 'Seltos', 'SC003', 6000, 'Kanpur', '2024-06-08', 'Oil Change', 'Pending'),
('BK009', 'UP 65AB 1242', 'CUST009', 'Renault', 'Duster', 'SC002', 6500, 'Lucknow', '2024-06-09', 'Tire Replacement', 'In Progress'),
('BK010', 'UP 65AB 1243', 'CUST010', 'Volkswagen', 'Polo', 'SC001', 7000, 'Varanasi', '2024-06-10', 'Brake Service', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `insp_no` varchar(11) NOT NULL,
  `resg_no` varchar(20) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `kms` int(11) NOT NULL,
  `location` varchar(31) NOT NULL,
  `inspection` varchar(21) NOT NULL,
  `result` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`insp_no`, `resg_no`, `uid`, `brand`, `model`, `price`, `date`, `kms`, `location`, `inspection`, `result`) VALUES
('INSP001', 'UP 65AB 1234', 'CUST001', 'Maruti', 'Swift', 500000, '2024-05-01', 20000, 'Lucknow', '2024-05-10', 'Passed'),
('INSP002', 'UP 65AB 1235', 'CUST002', 'Hyundai', 'i20', 600000, '2024-05-02', 15000, 'Varanasi', '2024-05-11', 'Failed'),
('INSP003', 'UP 65AB 1236', 'CUST003', 'Honda', 'City', 900000, '2024-05-03', 30000, 'Prayagraj', '2024-05-12', 'Passed'),
('INSP004', 'UP 65AB 1237', 'CUST004', 'Tata', 'Nexon', 800000, '2024-05-04', 25000, 'Kanpur', '2024-05-13', 'Failed'),
('INSP005', 'UP 65AB 1238', 'CUST005', 'Toyota', 'Innova', 1200000, '2024-05-05', 40000, 'Lucknow', '2024-05-14', 'Passed'),
('INSP006', 'UP 65AB 1239', 'CUST006', 'Ford', 'Ecosport', 750000, '2024-05-06', 18000, 'Varanasi', '2024-05-15', 'Failed'),
('INSP007', 'UP 65AB 1240', 'CUST007', 'Mahindra', 'Scorpio', 1100000, '2024-05-07', 35000, 'Prayagraj', '2024-05-16', 'Passed'),
('INSP008', 'UP 65AB 1241', 'CUST008', 'Kia', 'Seltos', 950000, '2024-05-08', 22000, 'Kanpur', '2024-05-17', 'Failed'),
('INSP009', 'UP 65AB 1242', 'CUST009', 'Renault', 'Duster', 700000, '2024-05-09', 28000, 'Lucknow', '2024-05-18', 'Passed'),
('INSP010', 'UP 65AB 1243', 'CUST010', 'Volkswagen', 'Polo', 650000, '2024-05-10', 16000, 'Varanasi', '2024-05-19', 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `uid` varchar(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `ph_no` bigint(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`uid`, `name`, `email`, `pswd`, `ph_no`, `address`) VALUES
('CUST001', 'Aarav Sharma', 'aarav.sharma@example.com', 'password123', 9123456780, '123 MG Road, Mumbai, Maharashtra'),
('CUST002', 'Anaya Gupta', 'anaya.gupta@example.com', 'password123', 9123456781, '456 MG Road, Pune, Maharashtra'),
('CUST003', 'Vivaan Singh', 'vivaan.singh@example.com', 'password123', 9123456782, '789 MG Road, Delhi, Delhi'),
('CUST004', 'Diya Patel', 'diya.patel@example.com', 'password123', 9123456783, '321 MG Road, Ahmedabad, Gujarat'),
('CUST005', 'Ayaan Kumar', 'ayaan.kumar@example.com', 'password123', 9123456784, '654 MG Road, Bengaluru, Karnataka'),
('CUST006', 'Isha Reddy', 'isha.reddy@example.com', 'password123', 9123456785, '987 MG Road, Hyderabad, Telangana'),
('CUST007', 'Arjun Menon', 'arjun.menon@example.com', 'password123', 9123456786, '147 MG Road, Kochi, Kerala'),
('CUST008', 'Riya Kapoor', 'riya.kapoor@example.com', 'password123', 9123456787, '258 MG Road, Jaipur, Rajasthan'),
('CUST009', 'Krishna Iyer', 'krishna.iyer@example.com', 'password123', 9123456788, '369 MG Road, Chennai, Tamil Nadu'),
('CUST010', 'Sara Desai', 'sara.desai@example.com', 'password123', 9123456789, '471 MG Road, Surat, Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

CREATE TABLE `service_center` (
  `sc_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pswd` varchar(21) NOT NULL,
  `ph_no` varchar(11) NOT NULL,
  `location` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_center`
--

INSERT INTO `service_center` (`sc_id`, `name`, `email`, `pswd`, `ph_no`, `location`) VALUES
('SC001', 'Service Cent', 'sc1@gmail.com', 'sc1', '1234567890', 'Varanasi'),
('SC002', 'Service Cent', 'sc2@gmail.com', 'sc2', '2345678901', 'Lucknow'),
('SC003', 'Service Cent', 'sc3@gmail.com', 'sc3', '3456789012', 'Kanpur'),
('SC004', 'Service Center', 'sc4@gmail.com', 'sc4', '8269513294', 'Prayagraj');

-- --------------------------------------------------------

--
-- Table structure for table `sold_cars`
--

CREATE TABLE `sold_cars` (
  `resg_no` varchar(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_cars`
--
ALTER TABLE `approved_cars`
  ADD PRIMARY KEY (`resg_no`),
  ADD UNIQUE KEY `app_insp_np` (`insp_no`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_no`),
  ADD KEY `booking_sc_id` (`sc_id`),
  ADD KEY `booking_uid` (`uid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`insp_no`),
  ADD KEY `cars_uid` (`uid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `service_center`
--
ALTER TABLE `service_center`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `sold_cars`
--
ALTER TABLE `sold_cars`
  ADD PRIMARY KEY (`resg_no`),
  ADD KEY `sold_cars_uid` (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approved_cars`
--
ALTER TABLE `approved_cars`
  ADD CONSTRAINT `approved_regs-no` FOREIGN KEY (`insp_no`) REFERENCES `cars` (`insp_no`);

--
-- Constraints for table `sold_cars`
--
ALTER TABLE `sold_cars`
  ADD CONSTRAINT `sold_cars_uid` FOREIGN KEY (`uid`) REFERENCES `customer` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
