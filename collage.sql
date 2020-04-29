-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 08:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(200) NOT NULL,
  `collegename` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `collegename`, `branch`) VALUES
(1, 'Sisulka', 'Rathnapura'),
(2, 'Sinethma', 'Gampaha'),
(3, 'kkk', 'kkkkkk'),
(4, 'yyy', 'Gampaha');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(200) NOT NULL,
  `role_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Co Admin');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(200) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `college_id` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentname`, `college_id`, `gender`, `email`, `subject`) VALUES
(2, 'suraj', 1, 'Male', 'suraj@gmail.com', 'Maths'),
(3, 'pooja', 1, 'Female', 'pooja@gmail.com', 'Science'),
(4, 'ravi', 2, 'Male', 'ravi@gmail.com', 'Science'),
(5, 'atul', 2, 'Male', 'atul@gmail.com', 'Commerce'),
(6, 'nirman', 1, 'Male', 'nirman@gmail.com', 'Maths'),
(7, 'raj', 2, 'Male', 'raj@gmail.com', 'Commerce'),
(8, 'kkkkkkkk', 3, 'Male', 'kkkkkkkkk@gmail.com', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `college_id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role_id` int(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confpwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `college_id`, `email`, `gender`, `role_id`, `password`, `confpwd`) VALUES
(1, 'pradeep', 0, 'pradeep@gmail.com', 'Male', 1, '6edf8b2bd1b6e03a535504401e6969c850269632', '6edf8b2bd1b6e03a535504401e6969c850269632'),
(2, 'waruni', 0, 'waruni@gmail.com', 'Female', 2, '716e101d43fbf30c171821f773086f7cafef922c', '716e101d43fbf30c171821f773086f7cafef922c'),
(3, 'sahan', 0, 'sahan@gmail.com', 'Male', 1, 'c2815d83679ebe7fa0164fb675bc530cfa4a3288', 'c2815d83679ebe7fa0164fb675bc530cfa4a3288'),
(5, 'warna', 0, 'warna@gmail.com', 'Male', 2, '73752294a962e48bc561ef2eafaef26a6514b26d', '73752294a962e48bc561ef2eafaef26a6514b26d'),
(6, 'waruni', 1, 'waruni@gmail.com', 'Female', 2, '716e101d43fbf30c171821f773086f7cafef922c', '716e101d43fbf30c171821f773086f7cafef922c'),
(7, 'pradeep', 1, 'pradeep@gmail.com', 'Male', 1, '6edf8b2bd1b6e03a535504401e6969c850269632', '6edf8b2bd1b6e03a535504401e6969c850269632'),
(8, 'sahan', 2, 'sahan@gmail.com', 'Male', 1, 'c2815d83679ebe7fa0164fb675bc530cfa4a3288', 'c2815d83679ebe7fa0164fb675bc530cfa4a3288'),
(9, 'warna', 2, 'warna@gmail.com', 'Male', 2, '73752294a962e48bc561ef2eafaef26a6514b26d', '73752294a962e48bc561ef2eafaef26a6514b26d'),
(10, 'kkkkkkkkk', 0, 'kkkkkkkkk@gmail.com', 'Male', 1, '5150d2104c8cd974b27fad3f25ec4e8098bb7bbe', '5150d2104c8cd974b27fad3f25ec4e8098bb7bbe'),
(11, 'kkkkkkkkk', 3, 'kkkkkkkkk@gmail.com', 'Male', 1, '5150d2104c8cd974b27fad3f25ec4e8098bb7bbe', '5150d2104c8cd974b27fad3f25ec4e8098bb7bbe'),
(13, 'zzz', 2, 'zzz@gmail.com', 'Male', 1, '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4'),
(15, 'sss', 0, 'sss@gmail.com', 'Male', 1, 'bf9661defa3daecacfde5bde0214c4a439351d4d', 'bf9661defa3daecacfde5bde0214c4a439351d4d'),
(16, 'ddd', 0, 'ddd@gmail.com', 'Male', 1, '9c969ddf454079e3d439973bbab63ea6233e4087', '9c969ddf454079e3d439973bbab63ea6233e4087'),
(17, 'ppp', 0, 'ppp@gmail.com', 'Male', 2, 'b3054ff0797ff0b2bbce03ec897fe63e0b6490e0', 'b3054ff0797ff0b2bbce03ec897fe63e0b6490e0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
