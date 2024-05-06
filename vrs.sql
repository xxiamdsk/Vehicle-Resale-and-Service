-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 05:29 AM
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
  `car_id` varchar(11) NOT NULL,
  `resg_no` varchar(11) NOT NULL,
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

INSERT INTO `approved_cars` (`car_id`, `resg_no`, `uid`, `brand`, `model`, `insp_no`, `price`, `location`) VALUES
('INSP001', 'REG001', 'CUST001', 'Toyota', 'Corolla', 'INSP001', 25000, 'City A'),
('INSP003', 'REG003', 'CUST003', 'Ford', 'Fusion', 'INSP003', 28000, 'City C'),
('INSP004', 'REG004', 'CUST004', 'Chevrolet', 'Malibu', 'INSP004', 26000, 'City D');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_no` varchar(11) NOT NULL,
  `resg_no` varchar(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `sc_id` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `location` varchar(21) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_no`, `resg_no`, `uid`, `brand`, `model`, `sc_id`, `amount`, `location`, `date`, `status`) VALUES
('BK001', 'ABC123', 'CUST001', 'Toyota', 'Corolla', 'SC001', 200, 'New York', '2024-05-01', 'Confirmed'),
('BK002', 'DEF456', 'CUST002', 'Honda', 'Civic', 'SC002', 180, 'Los Angeles', '2024-05-02', 'Confirmed'),
('BK003', 'GHI789', 'CUST003', 'Ford', 'Fusion', 'SC003', 220, 'Chicago', '2024-05-03', 'Pending'),
('BK004', 'JKL012', 'CUST004', 'Chevrolet', 'Malibu', 'SC004', 240, 'Houston', '2024-05-04', 'Confirmed'),
('BK005', 'MNO345', 'CUST005', 'Nissan', 'Altima', 'SC005', 210, 'Phoenix', '2024-05-05', 'Confirmed'),
('BK006', 'PQR678', 'CUST006', 'Toyota', 'Camry', 'SC006', 230, 'Philadelphia', '2024-05-06', 'Pending'),
('BK007', 'STU901', 'CUST007', 'Honda', 'Accord', 'SC007', 190, 'San Antonio', '2024-05-07', 'Confirmed'),
('BK008', 'VWX234', 'CUST008', 'Ford', 'Focus', 'SC008', 200, 'San Diego', '2024-05-08', 'Pending'),
('BK009', 'YZA567', 'CUST009', 'Chevrolet', 'Impala', 'SC009', 250, 'Dallas', '2024-05-09', 'Confirmed'),
('BK010', 'BCD890', 'CUST010', 'Nissan', 'Sentra', 'SC010', 220, 'San Jose', '2024-05-10', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `insp_no` varchar(11) NOT NULL,
  `resg_no` varchar(11) NOT NULL,
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
('INSP001', 'REG001', 'CUST001', 'Toyota', 'Corolla', 25000, '2024-03-04', 5000, 'City A', 'Full Inspection', 'Pass'),
('INSP002', 'REG002', 'CUST002', 'Honda', 'Civic', 22000, '2024-03-04', 4000, 'City B', 'Basic Inspection', 'Fail'),
('INSP003', 'REG003', 'CUST003', 'Ford', 'Fusion', 28000, '2024-03-04', 6000, 'City C', 'Full Inspection', 'Pass'),
('INSP004', 'REG004', 'CUST004', 'Chevrolet', 'Malibu', 26000, '2024-03-04', 5500, 'City D', 'Basic Inspection', 'Pass'),
('INSP005', 'REG005', 'CUST005', 'Nissan', 'Altima', 27000, '2024-03-04', 5800, 'City E', 'Full Inspection', 'Fail'),
('INSP007', 'REG007', 'CUST007', 'Honda', 'Accord', 32000, '2024-03-04', 6500, 'City G', 'Full Inspection', 'Fail'),
('INSP009', 'REG009', 'CUST009', 'Chevrolet', 'Cruze', 29000, '2024-03-04', 5800, 'City I', 'Full Inspection', 'Fail');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `uid` varchar(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `ph_no` int(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`uid`, `name`, `email`, `pswd`, `ph_no`, `address`) VALUES
('CUST001', 'John Doe', 'john@example.com', '', 1234567890, '123 Main St, Anytown, USA'),
('CUST002', 'Jane Smith', 'jane@example.com', '', 2147483647, '456 Elm St, Othertown, USA'),
('CUST003', 'Bob Johnson', 'bob@example.com', '', 2147483647, '789 Oak St, Anycity, USA'),
('CUST004', 'Alice Williams', 'alice@example.com', '', 1112223333, '321 Pine St, Someplace, USA'),
('CUST005', 'David Brown', 'david@example.com', '', 2147483647, '678 Maple St, Othercity, USA'),
('CUST007', 'Emily Davis', 'emily@example.com', '', 2147483647, '202 Sunrise Ave, Anywhere, USA'),
('CUST009', 'Jessica Taylor', 'jessica@example.com', '', 1231231234, '404 Ocean Dr, Anycity, USA'),
('CUST010', 'Christopher Martinez', 'christopher@example.c', '', 2147483647, '505 Mountain Rd, Someplace, USA'),
('CUST011', 'Deepak Singh Kushwaha', 'ds2390521@gmail.com', '12', 8269513, 'Lathiya village Bari bazar Varanasi uttarpradesh');

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

CREATE TABLE `service_center` (
  `sc_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ph_no` varchar(11) NOT NULL,
  `location` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_center`
--

INSERT INTO `service_center` (`sc_id`, `name`, `ph_no`, `location`) VALUES
('SC001', 'Service Cent', '1234567890', 'Location 1'),
('SC002', 'Service Cent', '2345678901', 'Location 2'),
('SC003', 'Service Cent', '3456789012', 'Location 3'),
('SC004', 'Service Cent', '4567890123', 'Location 4'),
('SC005', 'Service Cent', '5678901234', 'Location 5'),
('SC006', 'Service Cent', '6789012345', 'Location 6'),
('SC007', 'Service Cent', '7890123456', 'Location 7'),
('SC008', 'Service Cent', '8901234567', 'Location 8'),
('SC009', 'Service Cent', '9012345678', 'Location 9'),
('SC010', 'Service Cent', '0123456789', 'Location 10');

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
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `approved_resg_no` (`resg_no`);

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
  ADD UNIQUE KEY `resg_no` (`resg_no`),
  ADD KEY `cars_uid` (`uid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`uid`);

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
  ADD CONSTRAINT `approved_resg_no` FOREIGN KEY (`resg_no`) REFERENCES `cars` (`resg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_uid` FOREIGN KEY (`uid`) REFERENCES `customer` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sold_cars`
--
ALTER TABLE `sold_cars`
  ADD CONSTRAINT `sold_cars_uid` FOREIGN KEY (`uid`) REFERENCES `customer` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
