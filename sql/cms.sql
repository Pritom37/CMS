-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 08:11 AM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_user_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_user_type` varchar(15) NOT NULL,
  `attendance_course_type` varchar(25) DEFAULT NULL,
  `attendance_course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_user_id`, `attendance_date`, `attendance_user_type`, `attendance_course_type`, `attendance_course_id`) VALUES
(1, 1, '2022-04-12', 'student', 'cse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `course_instructor` varchar(50) NOT NULL,
  `course_instructor_id` int(11) NOT NULL,
  `course_credit` int(11) NOT NULL,
  `course_assignment` varchar(50) DEFAULT NULL,
  `course_report` varchar(100) DEFAULT NULL,
  `course_session` varchar(50) NOT NULL,
  `course_assignment_marks` int(11) DEFAULT NULL,
  `course_report_marks` int(11) DEFAULT NULL,
  `course_attendance_marks` int(11) DEFAULT NULL,
  `course_quiz_ct_marks` int(11) DEFAULT NULL,
  `course_written_marks` int(11) DEFAULT NULL,
  `course_viva_marks` int(11) DEFAULT NULL,
  `course_total_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_title`, `course_type`, `course_instructor`, `course_instructor_id`, `course_credit`, `course_assignment`, `course_report`, `course_session`, `course_assignment_marks`, `course_report_marks`, `course_attendance_marks`, `course_quiz_ct_marks`, `course_written_marks`, `course_viva_marks`, `course_total_marks`) VALUES
(1, 'cse-1101', 'Computer Fandamental', 'cse', 'M.halder Sir', 49, 2, 'assignment 1', 'Good', '2017-18', 30, 10, 8, 15, 72, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_marks` int(11) NOT NULL,
  `exam_user_id` int(11) NOT NULL,
  `exam_course_id` int(11) NOT NULL,
  `exam_course_type` varchar(50) NOT NULL,
  `exam_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(11) NOT NULL,
  `query_type` varchar(255) NOT NULL,
  `query_message` varchar(2555) NOT NULL,
  `quey_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(15) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_roll_number` varchar(15) DEFAULT NULL,
  `user_registration_number` varchar(50) DEFAULT NULL,
  `user_registration_date` date NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_dept` varchar(50) NOT NULL,
  `user_semester` varchar(50) DEFAULT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_session` varchar(50) DEFAULT NULL,
  `user_fathers_name` varchar(50) DEFAULT NULL,
  `user_mothers_name` varchar(50) DEFAULT NULL,
  `user_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `username`, `password`, `email`, `user_type`, `user_roll_number`, `user_registration_number`, `user_registration_date`, `user_phone`, `user_dept`, `user_semester`, `user_address`, `user_session`, `user_fathers_name`, `user_mothers_name`, `user_photo`) VALUES
(1, 'Anik', 'kk', 'kk@gmail.com', 'admin', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(49, 'admin', 'admin', 'admin@gmail.com', 'admin', NULL, NULL, '0000-00-00', '', '', NULL, '', NULL, NULL, NULL, ''),
(60, 'teacher', 'teacher', 'teacher@gmail.c', 'teacher', NULL, NULL, '0000-00-00', '', '', NULL, '', NULL, NULL, NULL, ''),
(61, 'student', 'student', 'student@gmail.c', 'student', NULL, NULL, '0000-00-00', '', '', NULL, '', NULL, NULL, NULL, ''),
(62, 'staff', 'staff', 'staff@gmail.com', 'staff', NULL, NULL, '0000-00-00', '', '', NULL, '', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `attendance_course_id` (`attendance_course_id`),
  ADD KEY `attendance_user_id` (`attendance_user_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_instructor_id` (`course_instructor_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `exam_user_id` (`exam_user_id`),
  ADD KEY `exam_course_id` (`exam_course_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`),
  ADD KEY `query_ibfk_1` (`quey_user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`attendance_course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`attendance_user_id`) REFERENCES `tbl_user` (`uid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`course_instructor_id`) REFERENCES `tbl_user` (`uid`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`exam_user_id`) REFERENCES `tbl_user` (`uid`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`exam_course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `query`
--
ALTER TABLE `query`
  ADD CONSTRAINT `query_ibfk_1` FOREIGN KEY (`quey_user_id`) REFERENCES `tbl_user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
