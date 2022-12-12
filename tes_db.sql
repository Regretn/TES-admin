-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `image` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `teacher_id`, `student_id`, `time`) VALUES
(1, 2, 2, 2, 2, 2, 2, 2, 3, 3, 0, 0, '0000-00-00'),
(2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(2, 1, 4, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '0000-00-00'),
(4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, '0000-00-00'),
(4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, '0000-00-00'),
(4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, '0000-00-00'),
(4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, '0000-00-00'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 201212020, 0, '0000-00-00'),
(0, 1, 2, 2, 2, 2, 2, 2, 2, 3, 20202020, 0, '0000-00-00'),
(1, 2, 3, 3, 3, 2, 3, 5, 5, 4, 201212020, 0, '2022-12-01'),
(1, 2, 3, 3, 3, 2, 3, 5, 5, 4, 201212020, 0, '2022-12-01'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(1, 2, 1, 2, 2, 2, 2, 2, 3, 2, 20202020, 0, '2022-12-02'),
(1, 2, 1, 2, 2, 2, 2, 2, 3, 2, 20202020, 0, '2022-12-02'),
(1, 2, 1, 2, 2, 2, 2, 2, 3, 2, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202221, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202221, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20202020, 0, '2022-12-02'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_number` int(50) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `image` varbinary(255) NOT NULL,
  `date` int(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `user_name`, `password`, `student_number`, `gmail`, `description`, `subject`, `section`, `image`, `date`, `year`) VALUES
(1, 'Aaron Jefte F. Eusala', 'aaron', 'aaron', 202010642, '202010642@gordoncollege.edu.ph', 'waka waka', 'Science', 'Emerald', '', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `teacher_id` int(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `section` varchar(11) NOT NULL,
  `image` varbinary(255) NOT NULL,
  `score` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `user_name`, `password`, `teacher_id`, `user_type`, `gmail`, `description`, `subject`, `section`, `image`, `score`, `date`, `year`) VALUES
(1, 'henrico roque', 'henrico', 'henrico', 20202020, 'teacher', '20202020@gmail.com', 'Waka waka asdw ', 'Science', 'Emerald', '', 0, 21211, 8),
(2, 'JC ocampo', 'ocampo', 'ocampo', 20202221, 'admin', '202022210@gmail.com', 'wakawakaewwww', 'Science', 'Emerald', '', 0, 21211, 8),
(3, 'mark thads', 'mark', 'mark', 201212020, 'teacher', '201212020@gmail.com', 'waakakaakaka', 'Science', 'Emerald', '', 0, 1231232, 8),
(4, 'mark vil', 'mvil', 'mvil', 102101202, 'teacher', '102101202@gmail.com', 'wakakwakaka', 'Science', 'Gold', '', 0, 22121, 9),
(5, 'Aaron', 'aaron', 'aaron', 20202020, 'teacher', '20202020@gmail.com', 'wakawakwakw', 'Science', 'Emerald', '', 0, 21212, 9),
(6, 'Coll matre', 'Coll', 'Coll', 20202020, 'teacher', '20202020@gmail.com', 'wwwkakakaww', 'Science', 'Emerald', '', 0, 21332232, 10),
(7, 'John colling', 'John', 'John', 213123123, 'teacher', 'asdad!@gmail.com', 'waklasmndasdan', 'Science', 'Lobo', '', 0, 12312321, 10),
(8, 'Silica Mish', 'Silica s', 'Silica s', 202022211, 'teacher', '123sajf', 'o2jowjodjaso', 'asda', 'wew', '', 0, 1231231, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
