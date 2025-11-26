-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoen_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_applicant_login`
--

CREATE TABLE `check_applicant_login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `check_applicant_login`
--

INSERT INTO `check_applicant_login` (`username`, `password`, `uid`) VALUES
('GanpatiBappaMorya', 'Ganpati11', 1),
('OmNamahShivay', 'HARHARMAHADEV108', 2),
('prasad03', 'prasad03', 3),
('payal', 'payal5', 4),
('xyz45', 'xyz45', 5),
('sagar', 'sagar5', 6),
('shravan8', 'shravan7', 7),
('Mahadev', 'mahadev108', 8),
('vaishu_', 'vaishu5', 9),
('sagar5', 'sagar5', 10),
('vaishnavi_', 'vaishnavi_5', 11),
('pratap9', 'pratap9', 12);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `f_name`, `l_name`, `email`, `contact`, `DOB`, `username`, `password`) VALUES
(1, 'varad', 'vaidya', 'varad8@gmail.com', 9309395933, '15/12/12', 'ksjdbskj', 'iuvgf'),
(2, '[value-2]', '[value-3]', '[value-4]', 0, '1234567890', '[value-7]', '[value-8]'),
(3, 'samadhan', 'bodkhe', 'samadhan12@gmail.com', 1234567890, '15/07/2005', '1234567890', 'ijbc'),
(4, '', '', '', 0, '', '', ''),
(5, '', '', '', 0, '', '', ''),
(6, '', '', '', 0, '', '', ''),
(7, '', '', '', 0, '', '', ''),
(8, '', '', '', 0, '', '', ''),
(9, '', '', '', 0, '', '', ''),
(10, 'Varad', 'Vaidya', 'vaidyavarad8@gmail.com', 8989898989, '2024-02-01', 'varad', 'Pass@123'),
(11, 'Varad', 'Vaidya', 'vaidyavarad8@gmail.com', 8989898989, '2024-02-01', 'varad', 'Pass@123'),
(12, 'ABC', 'ABC', 'ABC@GMAIL.COM', 8989898989, '2024-02-01', 'varad', 'pass@123'),
(13, 'Varad', 'Vaidya', 'vaidyavarad8@gmail.com', 8989898989, '2024-02-02', 'varad', 'pass123'),
(14, 'Samadhan', 'Bodkhe', 'samadhanbodkhe222@gmail.com', 9309295922, '2024-02-02', 'varad', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `institute_data`
--

CREATE TABLE `institute_data` (
  `institute_name` varchar(100) DEFAULT NULL,
  `institute_code` varchar(4) DEFAULT NULL,
  `institute_state` varchar(20) DEFAULT NULL,
  `institute_region` varchar(20) DEFAULT NULL,
  `institute_address` varchar(100) DEFAULT NULL,
  `institute_contact` varchar(10) DEFAULT NULL,
  `institute_email` varchar(50) DEFAULT NULL,
  `institute_type` varchar(40) DEFAULT NULL,
  `institute_username` varchar(50) DEFAULT NULL,
  `institute_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute_data`
--

INSERT INTO `institute_data` (`institute_name`, `institute_code`, `institute_state`, `institute_region`, `institute_address`, `institute_contact`, `institute_email`, `institute_type`, `institute_username`, `institute_password`) VALUES
('CSMSS', '1152', 'MAHARASHTRA', 'Marathwada', 'Kanchanwadi', '8989898989', 'vaidyavarad8@gamial.com', 'Polytechnic', NULL, NULL),
('CSMSS', '1152', 'MAHARASHTRA', 'Marathwada', 'Kanchanwadi', '8989898989', 'vaidyavarad8@gamial.com', 'Polytechnic', NULL, NULL),
('CSMSS', '1152', 'MAHARASHTRA', 'Marathwada', 'Kanchanwadi', '8989898989', 'vaidyavarad8@gamial.com', 'Polytechnic', NULL, NULL),
('MIT', '', 'rajasthan', '#', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('Varad Vaidya', '', 'delhi', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('MGM', '', 'rajasthan', '', 'MEE nahi sanganrr', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('Peoples College Of Engineering', '', 'madhya_pradesh', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('Varad Vaidya', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('CH.Sambhajinagar College ', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', NULL, NULL),
('xxxxxxx', '', 'rajasthan', '', 'xxza', 'xscc', 'axx', 'Engineering', 'username__', 'password__'),
('user', '', 'uttar_pradesh', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'password__', 'username__'),
('Birla Vidya Niketan', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'birla_niketan', 'birla_niketan'),
('Vidya Niketan', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'birla_niketan1', 'birla_niketan1'),
('Vidya Niketan', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'birla_niketan2', 'birla_niketan2'),
('Vidya Niketan', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'insti', 'insti'),
('Sambhajinagar', '', 'delhi', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'sambha_', 'sambha_'),
('CSMSS Punjab', '', 'uttar_pradesh', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'Easy', 'Easy'),
('Ecb Polytechnic College', '', 'rajasthan', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'ecb_', 'ecb_'),
('Ujjain Polytechnic College, Ujjain', '', 'madhya_pradesh', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Engineering', 'upc', 'upc'),
('xyz', '', 'uttar_pradesh', '', 'Near sahakar bhawan, jafar gate, mondha road', '0878824891', 'vaidyavarad8@gmail.com', 'Polytechnic', 'opopop', 'opopop');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwordd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_applicant_login`
--
ALTER TABLE `check_applicant_login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_applicant_login`
--
ALTER TABLE `check_applicant_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
