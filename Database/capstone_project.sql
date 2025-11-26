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
-- Database: `capstone_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_info`
--

CREATE TABLE `address_info` (
  `user_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `taluka` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `pincode` bigint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address_info`
--

INSERT INTO `address_info` (`user_name`, `address`, `state`, `district`, `taluka`, `village`, `pincode`) VALUES
('50', 'Mondha', 'Maharashtra', 'Ch>sambhjinagr', 'VAijapur', 'Ghar', 123123),
('varad_vaidya', 'MondhaNaka', 'Maharashtra', 'Ch.Sambhajinagr', 'Aurangabad', 'None', 431001),
('sagar_patil', 'MondhaNaka', 'Maharashtra', 'Ch.Sambhajinagr', 'Aurangabad', 'None', 431001),
('nandan', 'Juna Bhausingpura Chhatrapati Sambhajinagar.', 'Maharashtra', 'Thane', 'Dahanu', 'Bhausingpura', 431001),
('mohini5', 'Mathura Nagar, Jogeshwari,Aurangabad,Maharashtra', 'Uttar_Pradesh', 'Ujjain', 'Ghatiya', 'Bhausingpura', 431133),
('sakshi5', 'WAluj Jawal', 'Maharashtra', 'Washim', 'Anjankhed', 'Waluj', 545454),
('sagar5', 'Near sahakar bhawan, jafar gate, mondha road', 'Maharashtra', 'Washim', 'Anjankhed', 'waluj', 431001),
('vaishnavi_', 'Near sahakar bhawan, jafar gate, mondha road', 'Maharashtra', 'Washim', 'Anjankhed', 'waluj', 431001),
('pratap9', 'Near sahakar bhawan, jafar gate, mondha road', 'Maharashtra', 'Thane', 'Ambarnath', 'waluj', 431001);

-- --------------------------------------------------------

--
-- Table structure for table `current_course`
--

CREATE TABLE `current_course` (
  `admission_year` varchar(50) DEFAULT NULL,
  `institute_state` varchar(50) DEFAULT NULL,
  `institute_district` varchar(50) DEFAULT NULL,
  `collge_name` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `stream` varchar(50) DEFAULT NULL,
  `admission_type` varchar(50) DEFAULT NULL,
  `marks` varchar(50) DEFAULT NULL,
  `cap_id` varchar(50) DEFAULT NULL,
  `study_year` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `marksheet` varchar(50) NOT NULL,
  `admission_category` varchar(50) DEFAULT NULL,
  `gap_year` int(2) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `current_course`
--

INSERT INTO `current_course` (`admission_year`, `institute_state`, `institute_district`, `collge_name`, `course`, `qualification`, `stream`, `admission_type`, `marks`, `cap_id`, `study_year`, `status`, `marksheet`, `admission_category`, `gap_year`, `mode`, `user_name`) VALUES
('2023', 'Delhi', 'South Delhi', 'Birla Vidya Niketan', 'POST SSC Diploma in ELECTRICAL ENGINEERING', 'HSC', 'Art', 'NON-CAP', '89', 'DEN2111520', '2020', 'Completed', 'Screenshot (46).png', 'General', 0, 'Regular', 'mohini5'),
('2021', 'Delhi', 'South Delhi', 'Birla Vidya Niketan', 'POST SSC Diploma in COMPUTER ENGINEERING', 'HSC', 'Art', 'CAP', '89', 'DEN2111520', '2021', 'Completed', 'Screenshot (45).png', 'General', 0, 'Regular', 'nandan'),
('2021', 'Madhya_Pradesh', 'Ujjain', 'Ujjain Polytechnic College, Ujjain', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'HSC', 'Art', 'NON-CAP', '1234', 'DEN1234567', '2021', 'Completed', 'CSMSS logo.jpg', 'General', 0, 'Regular', 'pratap9'),
('2022', 'Rajasthan', 'Jaisalmer', 'Ecb Polytechnic College', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'SSC', 'Commerce', 'NON-CAP', '12', 'DEN1234567', '2021', 'Completed', 'CSMSS logo.jpg', 'General', 0, 'Regular', 'sagar5'),
('2024', 'Bihar', 'Jabalpur', 'Vidya Niketan', 'Diploma', 'None', 'None', 'CAP', '2022', '2021', '2025', 'Fail', '', 'None', 0, 'Regular', 'sagar_patil'),
('2020', 'Delhi', 'South Delhi', 'Birla Vidya Niketan', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'SSC', 'Commerce', 'CAP', '78', 'DEN2323232', '2024', 'Completed', 'IMG_20220330_175653-1.jpg', 'General', 8, 'Regular', 'sakshi5'),
('2023', 'Delhi', 'South Delhi', 'Birla Vidya Niketan', 'POST SSC Diploma in ELECTRONINCS ENGINEERING', 'SSC', 'Commerce', 'NON-CAP', '12', 'DEN1234567', '2021', 'Completed', 'CSMSS logo.jpg', 'General', 0, 'Regular', 'vaishnavi_'),
('2022', 'Bihar', 'Jabalpur', 'Vidya Niketan', 'Diploma', 'None', 'None', 'CAP', '2022', '2021', '2025', 'Fail', '', 'None', 0, 'Regular', 'varad_vaidya');

-- --------------------------------------------------------

--
-- Table structure for table `past_qualification`
--

CREATE TABLE `past_qualification` (
  `user_name` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `stream` varchar(50) DEFAULT NULL,
  `completed` varchar(50) DEFAULT NULL,
  `institute_state` varchar(50) DEFAULT NULL,
  `institute_region` varchar(50) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `board_university` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `admission_year` varchar(50) DEFAULT NULL,
  `passing_year` varchar(50) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `percentage` varchar(50) DEFAULT NULL,
  `attempts` varchar(50) DEFAULT NULL,
  `marksheet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `past_qualification`
--

INSERT INTO `past_qualification` (`user_name`, `qualification`, `stream`, `completed`, `institute_state`, `institute_region`, `school_name`, `board_university`, `course`, `mode`, `admission_year`, `passing_year`, `result`, `percentage`, `attempts`, `marksheet`) VALUES
('varad_vaidya', 'None', 'None', 'None', 'Maharshtra', 'Marathwada', 'Maharshtra', 'MSbte', 'Not Known', 'Regular', '2024', '2027', 'NOne', '67', '20', 'None'),
('sagar_patil', 'None', 'None', 'None', 'Bihar', 'Marathwada', 'Maharshtra', 'MSbte', 'Diploma', 'Regular', '2022', '2027', 'NOne', '67', '20', 'None'),
('nandan', 'HSC', 'Science', 'Passed', 'Uttar Pradesh', 'Aligarh', 'Akshat International School.', 'MPBU', 'POST SSC Diploma in ELECTRONINCS ENGINEERING', 'Distance/Correspondece', '2023', '2022', 'Passed', '89', '0', 'Screenshot (43).png'),
('mohini5', 'SSC', '', 'Passed', 'Rajasthan', 'Kota', 'Nalanda Academy', 'JNU', 'POST SSC Diploma in ELECTRICAL ENGINEERING', 'Distance/Correspondece', '2023', '2022', 'Passed', '89', '0', 'Screenshot (67).png'),
('sakshi5', 'HSC', 'Art', 'Passed', 'Rajasthan', 'Jaipur', 'Neerja Modi School', 'JNU', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'Distance/Correspondece', '2022', '2024', 'Passed', '78', '1', 'IMG_20220330_175653-1.jpg'),
('sagar5', 'HSC', 'Art', 'Passed', 'Uttar Pradesh', 'Aligarh', 'Akshat International School.', 'JNU', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'Regular', '19', '2020', 'Passed', '20', '0', 'CSMSS logo.jpg'),
('vaishnavi_', 'HSC', 'Commerce', 'Passed', 'Uttar Pradesh', 'Aligarh', 'Amazing Kids Academy', 'DSEU', 'POST SSC Diploma in ARTIFICIAL INTELLIGENCE', 'Distance/Correspondece', '19', '2020', 'Passed', '20', '0', 'CSMSS logo.jpg'),
('pratap9', 'HSC', '..Select..', 'Passed', 'Uttar Pradesh', 'Ayodhya', 'The Iconic School', 'AUTONOMOUS', 'POST SSC Diploma in ELECTRONINCS ENGINEERING', 'Regular', '19', '2020', 'Passed', '20', '0', 'CSMSS logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `user_name` varchar(50) DEFAULT NULL,
  `institute_status` varchar(50) DEFAULT NULL,
  `current_state_status` varchar(50) DEFAULT NULL,
  `home_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`user_name`, `institute_status`, `current_state_status`, `home_status`) VALUES
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('varad_vaidya', 'Accepted', NULL, NULL),
('sagar_patil', 'Accepted', NULL, NULL),
('sagar_patil', 'Accepted', NULL, NULL),
('prasad_', 'Accepted', NULL, NULL),
('varad_vaidya', 'Accepted', NULL, NULL),
('', 'Accepted', NULL, NULL),
('sagar_patil', 'Accepted', NULL, NULL),
('sagar_patil', 'Accepted', NULL, NULL),
('1', 'Accepted', NULL, NULL),
('niranjan5', 'Approved By Institute', 'Accepted', NULL),
('niranjan5', 'Accepted', 'Accepted', NULL),
('nandan', 'Accepted', NULL, NULL),
('mohini5', 'Accepted', 'Accepted', 'Accepted'),
('sakshi5', 'Accepted', 'Accepted', 'Accepted'),
('sagar5', 'Accepted', 'Accepted', 'Accepted'),
('vaishnavi_', 'Accepted', 'Accepted', 'Accepted'),
('pratap9', 'Accepted', 'Accepted', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user_from`
--

CREATE TABLE `user_from` (
  `user_name` varchar(50) DEFAULT NULL,
  `schmes` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `caste_certificate` varchar(50) NOT NULL,
  `domicile` varchar(50) NOT NULL,
  `income_certificate` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `last_sem_marksheet` varchar(50) NOT NULL,
  `ssc_marksheet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_from`
--

INSERT INTO `user_from` (`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES
('niranjan5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OPEN', 'Screenshot (44).png', 'Screenshot (45).png', 'Screenshot (30).png', 8767676878989, 'Mathura Nagar, Jogeshwari,Aurangabad,Maharashtra', 'Gaurav Internship Report.pdf', 'Gaurav Internship Report.pdf'),
('nandan', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OPEN', 'Hey.png', 'Screenshot (43).png', 'Screenshot (30).png', 45936547193, 'Juna Bhausingpura Chhatrapati Sambhajinagar.', 'Screenshot (45).png', 'Screenshot (43).png'),
('mohini5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OPEN', 'Screenshot (30).png', 'Screenshot (67).png', 'Screenshot (66).png', 8767676878989, 'Mathura Nagar, Jogeshwari,Aurangabad,Maharashtra', 'Screenshot (46).png', 'Screenshot (67).png'),
('sakshi5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OPEN', 'IMG_20220821_110647_286.jpg', '1669649521374.jpg', '1669649521362.jpg', 989898989898, 'WAluj Jawal', 'IMG_20220330_175653-1.jpg', 'IMG_20220330_175653-1.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('sagar5', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('vaishnavi_', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg'),
('pratap9', 'POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS', 'OPEN', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 50100642697611, 'Near sahakar bhawan, jafar gate, mondha road', 'CSMSS logo.jpg', 'CSMSS logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_name` varchar(50) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `applicant_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `caste_detail` varchar(50) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `domocile` varchar(50) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `ifsc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_name`, `aadhar_no`, `applicant_name`, `email`, `mobile_no`, `dob`, `gender`, `caste`, `caste_detail`, `income`, `domocile`, `bank_account`, `ifsc`) VALUES
('2', '565656565656', 'Varad Vaidya', 'vaidyavarad8@gmail.com', '0878824891', '01/01/2003', 'Male', 'Parsi', 'angel infotech.jpg', 'CSMSS logo.jpg', 'css.png', '50100642697611', 'HDFC0000712'),
('2', '565656565656', 'Varad Vaidya', 'vaidyavarad8@gmail.com', '0878824891', '01/01/2003', 'Male', 'Hindu', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', '50100642697611', 'HDFC0000712'),
('varad_vaidya', '12341233', 'Varad ', 'varad8@gmail.com', '1231231231', '1232132132', 'Male', 'Hindu', 'Lingayat', 'none', 'none', 'noen', 'none'),
('sagar_patil', '12341233', 'Varad ', 'varad8@gmail.com', '1231231231', '1232132132', 'Male', 'Hindu', 'Maratha', 'none', 'none', 'noen', 'none'),
('2', '565656565656', 'Varad Vaidya', 'vaidyavarad8@gmail.com', '0878824891', '01/01/2003', 'Male', 'Hindu', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', '50100642697611', 'HDFC0000712'),
('nandan', '4326-7193-6439', 'Nandan Navnath Lokha', 'nandan123@gmail.com', '8237913747', '10/06/2005', 'Male', 'OPEN', 'Hey.png', 'Screenshot (30).png', 'Screenshot (43).png', '45936547193', 'IPOS0000001'),
('mohini5', '8787-8787-8787', 'Mohini Jadhav', 'mj@gmail.com', '0942293535', '01/01/2002', 'Female', 'OPEN', 'Screenshot (30).png', 'Screenshot (66).png', 'Screenshot (67).png', '8767676878989', 'HDFC0000172'),
('sakshi5', '1234-1234-1234', 'Sakshi Gaikwad', 'gaikwad@gmail.com', '9898989898', '22/03/2003', 'Female', 'OPEN', 'IMG_20220821_110647_286.jpg', '1669649521362.jpg', '1669649521374.jpg', '989898989898', 'HDFC0000072'),
('sagar5', '5656-5656-5656', 'Varad Vaidya', 'sagar@gmail.com', '0878824891', '01/01/2003', 'Male', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', '50100642697611', 'HDFC0000712'),
('vaishnavi_', '5656-5656-5656', 'Varad Vaidya', 'vaidyavarad8@gmail.com', '0878824891', '01/01/2003', 'Male', 'OBC', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', '50100642697611', 'HDFC0000712'),
('pratap9', '5656-5656-5656', 'Pratap Singh', 'varadv995@gmail.com', '0878824891', '01/01/2003', 'Female', 'OPEN', 'CSMSS logo.jpg', 'CSMSS logo.jpg', 'CSMSS logo.jpg', '50100642697611', 'HDFC0000712');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_course`
--
ALTER TABLE `current_course`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
