-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2022 at 03:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `acourse`
--

CREATE TABLE `acourse` (
  `facultyId` int(11) NOT NULL,
  `facultyName` varchar(20) NOT NULL,
  `courseName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acourse`
--

INSERT INTO `acourse` (`facultyId`, `facultyName`, `courseName`) VALUES
(11, 'Shoikot Hasan', 'COA'),
(12, 'Fariha Anjum', 'Physics 2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseName`) VALUES
(9, 'Math 5'),
(10, 'Electric Circuit'),
(11, 'Math 3'),
(12, 'Math 6'),
(13, 'Electric Device'),
(14, 'TOC'),
(15, 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'BBA'),
(4, 'LAW');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `facultyName` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `facultyName`, `gender`, `email`, `contactNo`, `salary`) VALUES
(101, 'Abir Mahmud', 'Male', 'abir@aiub.edu', '01715625383', '70000'),
(102, 'S.M Nafiz Uddin', 'Male', 'nafiz@aiub.edu', '01796280685', '75000'),
(103, 'Sadia Akter', 'Female', 'sadia@aiub.edu', '01911403403', '65000'),
(104, 'Fariha Anjum', 'Female', 'fariha@aiub.edu', '01734912738', '70000'),
(105, 'Tanseer Ali', 'Male', 'tanseer@aiub.edu', '01830280211', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id` int(11) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`id`, `major`) VALUES
(1, 'computationalTheory'),
(2, 'informationSystem'),
(3, 'softwareEngineering'),
(4, 'softwareEngineering'),
(5, 'informationSystem');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `No` int(11) NOT NULL,
  `NoticeName` varchar(50) NOT NULL,
  `NoticeDetails` text NOT NULL,
  `Date` date NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`No`, `NoticeName`, `NoticeDetails`, `Date`, `image`) VALUES
(1, 'Lab Quiz', 'Syllabus: slide 5, 6', '2022-08-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` text NOT NULL,
  `productDetails` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDetails`, `photo`) VALUES
(1, 'iPhone', 'good', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `roomNo` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`courseId`, `courseName`, `roomNo`, `time`) VALUES
(9, 'Math 5', '6201', '15:30:00'),
(10, 'Electric Circuit', '3210', '09:30:00'),
(11, 'Math 3', '6012', '11:00:00'),
(12, 'Math 6', '2108', '16:46:00'),
(13, 'Electric Device', '1220', '01:01:00'),
(14, 'TOC', '1221', '00:00:02'),
(15, 'WebTech', '2000', '02:30:00'),
(16, 'C#', '1225', '03:30:00'),
(17, 'Computer Graphics', '2500', '03:30:00'),
(18, 'Physics 2', '2556', '11:00:00'),
(19, 'Computer Networks', '2200', '11:00:00'),
(20, 'TOC', '2250', '15:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `scourse`
--

CREATE TABLE `scourse` (
  `id` int(11) NOT NULL,
  `CourseId` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scourse`
--

INSERT INTO `scourse` (`id`, `CourseId`, `subject`, `grade`) VALUES
(1, 'MAT1102', 'DIFFERENTIAL CALCULUS', '(2018-2019, Spring)[A]'),
(2, 'PHY1101', 'PHYSICS 1', '(2018-2019, Spring)[B]'),
(3, 'PHY1102', 'PHYSICS 1 LAB', '(2018-2019, Spring)[A+] '),
(4, 'ENG1101', 'ENGLISH READING SKILLS & PUBLIC SPEAKING', '(2018-2019, Spring)[A+]'),
(5, 'CSC1102', 'INTRODUCTION TO PROGRAMMING', '(2018-2019, Spring)[B] ');

-- --------------------------------------------------------

--
-- Table structure for table `sresult`
--

CREATE TABLE `sresult` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creditC` varchar(50) NOT NULL,
  `courseC` varchar(20) NOT NULL,
  `cgpa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sresult`
--

INSERT INTO `sresult` (`id`, `name`, `creditC`, `courseC`, `cgpa`) VALUES
('19-40131-1', 'Shezan Ahmed', '107', '38', '3.40');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `cgpa` varchar(11) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `email`, `cgpa`, `contactNo`, `address`) VALUES
(1, 'Asif', 'Male', 'asif@yahoo.com', '3.30', 1796775774, 'Gazipur'),
(2, 'Hasinur', 'Male', 'hasinur123@gmail.com', '3.10', 1911381382, 'Gazipur'),
(3, 'Abir', 'Male', 'abir321@gmail.com', '4.00', 1715625383, 'Dhaka'),
(4, 'Soron', 'Male', 'soron@gmai.com', '3.90', 1712342134, 'Dhaka'),
(6, 'Shakil', 'Male', 'shakil@gmail.com', '3.80', 1796280685, 'Mawna'),
(8, 'Shuvo', 'Male', 'shuvo@gmail.com', '3.01', 1755044012, 'Dhaka'),
(9, 'Nasir', 'Male', 'nasir@gmail.com', '3.65', 1996280685, 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'Asif', 'asif', 'asif@aiub.edu', 'administration');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acourse`
--
ALTER TABLE `acourse`
  ADD PRIMARY KEY (`facultyId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `scourse`
--
ALTER TABLE `scourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sresult`
--
ALTER TABLE `sresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acourse`
--
ALTER TABLE `acourse`
  MODIFY `facultyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `scourse`
--
ALTER TABLE `scourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
