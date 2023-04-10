-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 05:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(11) NOT NULL,
  `complainant` varchar(255) NOT NULL,
  `accusation` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `complainant`, `accusation`, `document`, `date`, `date_created`, `status`) VALUES
(1, 'Joe Doe', 'Mark Choi', 'test location', '2023-05-06 09:49:00', '2023-04-01 09:49:31', 'Active'),
(2, 'test', 'test', 'tset', '2023-05-31 09:59:00', '2023-04-01 09:59:22', 'Active'),
(3, 'test tes t', 'tset  est', 'tset sertest', '2023-03-30 10:00:00', '2023-04-01 10:00:31', 'Active'),
(4, 'test', 'test', '', '2023-04-04 10:17:00', '2023-04-04 10:17:31', 'Active'),
(5, 'tset2', 'test2', '', '2023-04-04 10:28:00', '2023-04-04 10:29:01', 'Active'),
(6, 'test32', 'test32', '1680577860_bx145604-FQ8gN4CPaiui.jpg', '2023-04-04 10:31:00', '2023-04-04 10:30:39', 'Active'),
(7, 'test', 'test', '1680579381_1761061797972252 (6).jpg', '2023-04-04 11:36:00', '2023-04-04 11:36:21', 'Settled');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_detail`
--

CREATE TABLE `brgy_detail` (
  `id` int(11) NOT NULL,
  `brgy_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `brgy_captain` varchar(255) NOT NULL,
  `pic_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_detail`
--

INSERT INTO `brgy_detail` (`id`, `brgy_name`, `address`, `mobile_number`, `brgy_captain`, `pic_logo`) VALUES
(1, 'Barangay Pinyahan', 'Quezon City', '09123456789', 'John D. Doe', 'brgy-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_official`
--

CREATE TABLE `brgy_official` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `committee` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_official`
--

INSERT INTO `brgy_official` (`id`, `fullname`, `committee`, `position`, `contact_number`) VALUES
(1, 'JESUS P. LIPNICA III', '', 'Barangay Captain', '09123456789'),
(2, 'RICARDO A. VILLAFLOR', '', 'Barangay Member 1', '09123456789'),
(3, 'MARITES M. PALMA', '', 'Barangay Member 2', '09123456789'),
(4, 'MARITES T. FAJARDO', '', 'Barangay Member 3', '09123456789'),
(5, 'SUSAN G. DUMAPAT', '', 'Barangay Member 4', '09123456789'),
(6, 'ANNA MARIE U. ASPE', '', 'Barangay Member 5', ''),
(7, 'EDWIN C. BERNAL', '', 'Barangay Member 6', ''),
(8, 'ANTHONY T. PRODIGALIDAD', '', 'Barangay Member 7', ''),
(9, 'ALFREDO L. CARIAGA, JR.', '', 'SK Chairperson', ''),
(10, 'CAROL T. CAGURANGAN', '', 'Barangay Secretary', ''),
(11, 'ANALYN S. LAZO', '', 'Barangay Treasurer', '');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tax_cert_no` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `contact_number`, `address`, `tax_cert_no`, `purpose`, `control`) VALUES
(1, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', 'test address', '12345', 'test purpose', '6');

-- --------------------------------------------------------

--
-- Table structure for table `clearance_id`
--

CREATE TABLE `clearance_id` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `precinct_no` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `id_pic` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clearance_id`
--

INSERT INTO `clearance_id` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `gender`, `birth_date`, `precinct_no`, `contact_number`, `purpose`, `control`, `id_no`, `id_pic`, `street`) VALUES
(1, 27, 'Reid', 'Kurt', 'Cruz', '', '', '2000-01-02', '23323A', '09123456789', '', '9', '2023-00001', '1679613223_', 'mendoza st.'),
(2, 27, 'Reid', 'Kurt', 'Cruz', '', '', '2000-01-02', '2323AN', '09123456789', '', '10', '2023-00002', '1679613289_unicorn-png-28749.png', 'mendoza st.');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `photo`) VALUES
(1, 'content0001.png');

-- --------------------------------------------------------

--
-- Table structure for table `indigency`
--

CREATE TABLE `indigency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `postal_address_no` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indigency`
--

INSERT INTO `indigency` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `contact_number`, `postal_address_no`, `purpose`, `control`) VALUES
(1, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', '123', 'SCHOLARSHIP', '1'),
(2, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', 'test update', 'test update', '3');

-- --------------------------------------------------------

--
-- Table structure for table `permit`
--

CREATE TABLE `permit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit`
--

INSERT INTO `permit` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `contact_number`, `address`, `business_name`, `business_address`, `business_type`, `category`, `purpose`, `control`) VALUES
(2, 0, 'Jojo', 'Mojo', '', '', '09123456789', '', 'Jojo Printing Services', '', '', '', 'TEST', '4'),
(3, 27, 'Reid', 'Kurt', 'Cruz', '', '98123456789', 'test address', 'Kurt Shop', 'test address', 'Grocery Store', 'Renewal', 'test purpose', '7'),
(4, 27, 'Reid', 'Kurt', 'Cruz', '', '98123456789', 'testaddress2', 'sari sari shop', 'test address business', 'sari-sari store', '', 'test purpose', '8');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_type` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `date_completed` datetime DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `form_id`, `form_type`, `req_status`, `feedback`, `date_completed`, `date_created`, `qty`) VALUES
(1, 27, 1, 'Barangay Indigency', 'Approved', 'Good', NULL, '2023-02-19 05:01:00', 1),
(2, 27, 1, 'Barangay Residency', 'Approved', '', NULL, '2023-03-14 11:34:45', 1),
(3, 27, 2, 'Barangay Indigency', 'wait for approval', '', NULL, '2023-03-14 11:52:43', 1),
(4, 27, 2, 'Barangay Residency', 'Completed', 'approve test', '2023-03-14 23:08:42', '2023-03-14 11:57:25', 1),
(5, 27, 3, 'Barangay Residency', 'wait for approval', '', NULL, '2023-03-14 12:43:01', 2),
(6, 27, 1, 'Barangay Clearance', 'Completed', 'approve clearance', NULL, '2023-03-14 13:24:42', 1),
(7, 27, 3, 'Barangay Permit', 'Approved', 'good permit', NULL, '2023-03-23 15:21:02', 1),
(8, 27, 4, 'Barangay Permit', 'wait for approval', '', NULL, '2023-03-23 17:08:50', 1),
(9, 27, 1, 'Barangay Clearance-ID', 'Cancelled', '', NULL, '2023-03-23 23:13:43', 1),
(10, 27, 2, 'Barangay Clearance-ID', 'Approved', 'good id', NULL, '2023-03-23 23:14:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `residency`
--

CREATE TABLE `residency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `postal_address` varchar(255) NOT NULL,
  `resident_since` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residency`
--

INSERT INTO `residency` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `contact_number`, `postal_address`, `resident_since`, `purpose`, `control`) VALUES
(1, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', 'test', '2021', 'test', '2'),
(2, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', 'test again update', '2021', 'test again', '4'),
(3, 27, 'Reid', 'Kurt', 'Cruz', '', '09123456789', 'test number 3', '2020', 'test 3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `pwd_id` varchar(255) NOT NULL,
  `family_monthly_income` int(11) NOT NULL,
  `indigent` varchar(255) NOT NULL,
  `solo_parent` varchar(255) NOT NULL,
  `solo_parent_id` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `pantawid_pamilya` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `to_contact_fullname` varchar(255) NOT NULL,
  `to_contact_relationship` varchar(255) NOT NULL,
  `to_contact_number` varchar(255) NOT NULL,
  `to_contact_address` varchar(255) NOT NULL,
  `national_id_no` varchar(255) NOT NULL,
  `philhealth_no` varchar(255) NOT NULL,
  `sss_no` varchar(255) NOT NULL,
  `pagibig_no` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `voter_id_no` varchar(255) NOT NULL,
  `covid_status` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL,
  `date_death` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `last_name`, `first_name`, `middle_name`, `suffix`, `gender`, `birth_date`, `birth_place`, `civil_status`, `nationality`, `religion`, `occupation`, `contact_number`, `pwd`, `pwd_id`, `family_monthly_income`, `indigent`, `solo_parent`, `solo_parent_id`, `voter`, `pantawid_pamilya`, `purok`, `house_no`, `street`, `to_contact_fullname`, `to_contact_relationship`, `to_contact_number`, `to_contact_address`, `national_id_no`, `philhealth_no`, `sss_no`, `pagibig_no`, `tin_no`, `voter_id_no`, `covid_status`, `vaccinated`, `date_registered`, `date_death`, `status`, `profile_pic`, `added_by`, `updated_by`) VALUES
(1, 'Jojo', 'Mojo', 'Doe', '', 'Male', '2000-01-12', 'Quezon City', 'Single', 'FILIPINO', '', '', '', 'No', '', 0, 'No', 'No', '', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '2023-01-31 14:11:03', '0000-00-00', 'Alive', '1675145492_', 'Admin:    ', ''),
(2, 'Cruz', 'Marie', 'Choi', '', 'Female', '2001-01-12', 'Quezon City', 'Single', 'FILIPINO', '', '', '09123456789', 'No', '', 0, 'No', 'No', '', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '2023-01-31 14:22:09', '0000-00-00', 'Alive', '1675146190_', 'Admin:    ', ''),
(3, 'Cruz', 'Drake', 'France', '', 'Male', '2002-03-02', 'Quezon City', 'Single', 'FILIPINO', '', '', '09123456787', 'No', '', 0, 'Yes', 'No', '', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '2023-01-31 14:27:28', '0000-00-00', 'Alive', '1675146523_', 'Admin:    ', ''),
(4, 'Reid', 'Kurt', 'Cruz', '', 'Male', '2000-01-02', 'Test', 'Single', 'FILIPINO', '', '', '', 'No', '', 0, 'No', 'No', '', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '2023-02-19 17:51:08', '0000-00-00', 'Alive', '1676800345_', 'Admin:    ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `account_type` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sup_document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `suffix`, `password`, `date_created`, `account_type`, `profile_pic`, `status`, `sup_document`) VALUES
(0, 'admin', '', '', '', '', '$2y$10$omvn7f1y3EHTTs0.1Z4VPe.eM8DwMQUQo.sr3IiJMm603/pRaClD6', '0000-00-00', 1, '', '', ''),
(27, 'kurt123', 'Kurt', 'Cruz', 'Reid', '', '$2y$10$3UYtPlIH5b3FEkCcvQaW6elnODfpH3SJtFqBtZAfAh0k94vE0jN7y', '0000-00-00', 0, 'kurt123.jpg', 'Verified', 'kurt123sup.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `walk_in`
--

CREATE TABLE `walk_in` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_type` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `walk_in`
--

INSERT INTO `walk_in` (`id`, `user_id`, `form_id`, `form_type`, `date_created`, `qty`, `status`) VALUES
(1, 0, 27, 'Barangay Indigency', '2021-12-19 03:32:28', 1, 'success'),
(2, 0, 2, 'Barangay Clearance-ID', '2022-01-06 14:28:39', 2, 'success'),
(3, 0, 3, 'Barangay Clearance-ID', '2022-01-06 14:30:38', 1, 'success'),
(4, 0, 2, 'Barangay Permit', '2023-02-10 11:44:57', 1, 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_detail`
--
ALTER TABLE `brgy_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_official`
--
ALTER TABLE `brgy_official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `clearance_id`
--
ALTER TABLE `clearance_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indigency`
--
ALTER TABLE `indigency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indigency_ibfk_1` (`user_id`);

--
-- Indexes for table `permit`
--
ALTER TABLE `permit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `residency`
--
ALTER TABLE `residency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walk_in`
--
ALTER TABLE `walk_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brgy_detail`
--
ALTER TABLE `brgy_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brgy_official`
--
ALTER TABLE `brgy_official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clearance_id`
--
ALTER TABLE `clearance_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indigency`
--
ALTER TABLE `indigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permit`
--
ALTER TABLE `permit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `residency`
--
ALTER TABLE `residency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `walk_in`
--
ALTER TABLE `walk_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `clearance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clearance_id`
--
ALTER TABLE `clearance_id`
  ADD CONSTRAINT `clearance_id_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `indigency`
--
ALTER TABLE `indigency`
  ADD CONSTRAINT `indigency_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permit`
--
ALTER TABLE `permit`
  ADD CONSTRAINT `permit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residency`
--
ALTER TABLE `residency`
  ADD CONSTRAINT `residency_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `walk_in`
--
ALTER TABLE `walk_in`
  ADD CONSTRAINT `walk_in_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
