-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 11:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `UploadFileName` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Email`, `PhoneNumber`, `Message`, `UploadFileName`, `file_type`, `file_size`) VALUES
(1, 'Dhruv', 'jadav.dhruv.74@gmail.com', '07069291739', '123456', '51511-01.jfif', 'image/jpeg', '13.5078125');

-- --------------------------------------------------------

--
-- Table structure for table `hoblist`
--

CREATE TABLE `hoblist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `pets` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoblist`
--

INSERT INTO `hoblist` (`id`, `name`, `bath`, `date`, `comment`, `pets`) VALUES
(17, 'Inside oven', '2.00 PM', '2022-03-04', '', ''),
(18, 'Inside cabinets', '2.00 PM', '1970-01-01', 'bs bau thai gyu hve', ''),
(19, 'Inside cabinets', '2.00 PM', '1970-01-01', '', 'on'),
(20, 'Inside oven', '2.00 PM', '1970-01-01', '', ''),
(21, 'Inside oven', '2.00 PM', '1970-01-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `UserTypeId` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `lastname`, `email`, `password`, `cpassword`, `mobile`, `token`, `status`, `UserTypeId`, `user_id`) VALUES
(8, 'Dhruv', 'Jadav', 'jadavdhruv77@gmail.com', '$2y$10$EY15JydCZCmuzxoAzKC9Autu2V1ZNhYkL2ajIBcxFlArpbXlQUbxC', '$2y$10$WdkMQQTuxIhu4IVmD6VbF.FoB8nTR5EDh0t0f3clmP0CH9wNZF/Wa', '07069291739', '523a16beb5ba8709c064ad8cab0078', 'active', 'user', 'EEM_18538_8'),
(9, 'Dhruv', 'Jadav', 'jadav.dhruv.74@gmail.com', '$2y$10$FlhV7jLfrZS9jJf4dGJg6.fcAkdZupmACOBYdRqBJC1mrOkx27WPm', '$2y$10$LkyIA9u4.T0KGZ7z5.nvheSHxJ.00m62lVNClePZZjDym4RlpgUny', '07069291739', 'cce2f2dbe398cd23457b5420dd2233', 'active', 'user', 'EEM_27175_9');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `id` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `UserId` varchar(255) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `ServiceStartDate` datetime(3) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `ServiceFrequency` tinyint(3) UNSIGNED DEFAULT NULL,
  `Extra` varchar(255) NOT NULL,
  `ServiceHourlyRate` decimal(8,2) DEFAULT NULL,
  `ServiceHours` double NOT NULL,
  `ExtraHours` double DEFAULT NULL,
  `SubTotal` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `TotalCost` decimal(8,2) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `PaymentTransactionRefNo` varchar(50) DEFAULT NULL,
  `PaymentDue` tinyint(4) NOT NULL DEFAULT 0,
  `JobStatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `ServiceProviderId` int(11) DEFAULT NULL,
  `SPAcceptedDate` datetime(3) DEFAULT NULL,
  `HasPets` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `CreatedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedBy` int(11) DEFAULT NULL,
  `RefundedAmount` decimal(8,2) DEFAULT NULL,
  `Distance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `HasIssue` tinyint(4) DEFAULT NULL,
  `PaymentDone` tinyint(4) DEFAULT NULL,
  `RecordVersion` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`id`, `ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceFrequency`, `Extra`, `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) VALUES
(1, 0, 'EEM_27175_9', 0, '2022-02-19 21:43:00.000', '', NULL, 'Inside cabinets,Inside fridge', NULL, 5, NULL, '0.00', NULL, '0.00', 'Sarkhu krjo', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-17 08:43:04.544', '2022-02-17 08:43:04.544', NULL, NULL, '0.00', NULL, NULL, NULL),
(2, 0, 'EEM_18538_8', 0, '2022-02-17 21:44:00.000', '', NULL, 'Interiror windows', NULL, 3, NULL, '0.00', NULL, '0.00', 'Bs bs', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-17 08:43:27.783', '2022-02-17 08:43:27.783', NULL, NULL, '0.00', NULL, NULL, NULL),
(3, 0, 'EEM_18538_8', 0, '2022-02-06 16:46:00.000', '', NULL, 'Inside fridge,Inside oven', NULL, 5, NULL, '0.00', NULL, '0.00', '9599494949', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-17 16:45:16.355', '2022-02-17 16:45:16.355', NULL, NULL, '0.00', NULL, NULL, NULL),
(4, 0, 'EEM_18538_8', 0, '2022-02-10 11:23:00.000', '', NULL, 'Inside fridge,Inside oven', NULL, 5, NULL, '0.00', NULL, '0.00', '111111111111111111111111111', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-18 09:22:07.999', '2022-02-18 09:22:07.999', NULL, NULL, '0.00', NULL, NULL, NULL),
(5, 0, 'EEM_18538_8', 0, '2022-02-10 11:23:00.000', '', NULL, 'Inside fridge,Inside oven', NULL, 5, NULL, '0.00', NULL, '0.00', '111111111111111111111111111', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-18 09:42:08.568', '2022-02-18 09:42:08.568', NULL, NULL, '0.00', NULL, NULL, NULL),
(6, 0, 'EEM_18538_8', 0, '2022-02-10 11:23:00.000', '', NULL, 'Inside fridge,Inside oven', NULL, 5, NULL, '0.00', NULL, '0.00', '111111111111111111111111111', NULL, 0, NULL, NULL, NULL, 0, NULL, '2022-02-18 09:42:23.275', '2022-02-18 09:42:23.275', NULL, NULL, '0.00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`name`, `lastname`, `contact`, `address`, `id`) VALUES
('dhruv', 'dhanjibhai', '123456', 'heyy', 1),
('asss', 'sss', 'sssss', 'asdasdasd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `UserTypeId` varchar(255) NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `email`, `password`, `cpassword`, `Mobile`, `UserTypeId`, `Status`, `token`) VALUES
(1, 'Dhruv', 'Jadav', 'jadav.dhruv.74@gmail.com', '$2y$10$0vIV.acm7rT7/5dKpSf7sOq5e7LG3lorYs22zNkclA4MhwX0rYRkO', '$2y$10$.vUfzqZibKzG1s1VJKiFaOnKf51KAPaUrqIAND0w7SP2ChzjbiIN.', '07069291739', 'user', 'active', 'f4ef6d6dba2abdb3895347dc123e8d'),
(2, 'Dhruv', 'Jadav', 'jadavdhruv77@gmail.com', '$2y$10$mUU8OHF8wbZjdauecgr.V.XY3c6syl7rH1J97eVAnfY91qF.A.epm', '$2y$10$I63EbloN6XDbPSNB/R.PLOW3eDL.UHRj9ULSDvCEMAPI4C45FYUt.', '07069291739', 'user', 'active', 'e9b67fa20d742c26528b4c3ecd9017');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `AddressId` int(11) NOT NULL,
  `UserId` varchar(255) NOT NULL,
  `AddressLine1` varchar(200) NOT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `IsDefault` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`, `Type`) VALUES
(42, 'EEM_27175_9', 'Ramjibhai', NULL, 'Dhrangadhra', NULL, '363310', 0, 0, '123456', NULL, NULL),
(44, 'EEM_27175_9', 'ssssssssssss', NULL, 'Dhrangadhra', NULL, '363310', 0, 0, '123456', NULL, NULL),
(45, 'EEM_18538_8', 'Ramjibhai ni shop pachad narshihpara ', NULL, 'Dhrangadhra', NULL, '363310', 0, 0, '07069291739', NULL, NULL),
(46, 'EEM_18538_8', 'Ramjibhai ni shop pachad narshihpara ', NULL, 'Dhrangadhra', NULL, '363310', 0, 0, '07069291739', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userhoblist`
--

CREATE TABLE `userhoblist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hoblist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userhoblist`
--

INSERT INTO `userhoblist` (`id`, `user_id`, `hoblist_id`) VALUES
(5, 1, 1),
(6, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoblist`
--
ALTER TABLE `hoblist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`AddressId`);

--
-- Indexes for table `userhoblist`
--
ALTER TABLE `userhoblist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoblist`
--
ALTER TABLE `hoblist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `userhoblist`
--
ALTER TABLE `userhoblist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
