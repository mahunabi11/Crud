-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct_366`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `cell` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `location` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `age`, `location`, `gender`, `photo`, `status`) VALUES
(17, 'Rohan John', 'rohansia@yahoo.com', '01678499994', 27, 'Pubail', 'male', '0d57191b6d44ed6fb8951716bbe90c5e.jpg', 'active'),
(18, 'Nowshin Sarkar', 'nowhin@gmail.com', '019185151573', 25, 'Banani', 'female', 'c759e402eccc981ca67032364ca80d9b.jpg', 'active'),
(19, 'Rana Mia', 'rana@hotmail.com', '01718485955', 40, 'Mirpur', 'male', '11fe5c62c5b3801347cd3230edfba272.jpg', 'active'),
(20, 'Ashiq Ahmed', 'ashiq@yahoo.com', '0173455555', 35, 'Dhanmondi', 'male', 'fd21661ce7f408ab6753cccc8ac29a6f.png', 'active'),
(22, 'Naina Jaman', 'naian@gmail.com', '016111e999', 45, 'Joydebpur', 'female', 'fecab95386776ab75a322a34a72f7034.jpg', 'active'),
(23, 'Bulbuli Ahmed', 'bulbul@yahoo.com', '01899949044', 50, 'Mirpur', 'female', 'f9f07b2717fce0775c759c39d722f6b5.jpg', 'active'),
(24, 'Saiful Khan', 'saiful@gmali.com', '01759595552', 60, 'Banani', 'male', '8b455f7a495df7e81ae39ea410911b12.jpg', 'active'),
(25, 'Kakuli khatun', 'kale@hotmail.com', '019395959959', 44, 'Mirpur', 'female', 'facf5d91d635767a75f37654a76bca59.jpg', 'active'),
(26, 'Babul Mia', 'babu@coderstrust.com', '01560606060', 80, 'Gulshan', 'male', '8c064271327fa241a86e40d00b577a95.jpg', 'active'),
(27, 'Rokeya Yesmin', 'rokeya@coderstrust.c', '01694884444', 70, 'Banani', 'female', '1a68cfa064960dff6530f1ed9c01dc00.png', 'active'),
(28, 'Jemim Ali', 'janeee@gmail.com', '01500404044', 67, 'Joydebpur', 'female', '8d703fe620c804467e74b1c0c41c9cd7.png', 'active'),
(29, 'Haider Hossain', 'haider@yahoo.com', '094888055055', 83, 'Pubail', 'male', '4af0741bc098b2c7203f4ae7f8448e36.jpg', 'active'),
(30, 'Iqbal Max', 'max@yahoo.com', '01749299222', 22, 'Dhanmondi', 'male', '678bf2c79b2af735946bae5091c909a4.jpg', 'active'),
(31, 'Hassina sek', 'sek@gmail.com', '01866566444', 90, 'Joydebpur', 'female', '3012380ee3592e823a886315cf4a8738.jpg', 'active'),
(32, 'Kate winslet', 'kat@coderstrust.com', '01611554532', 20, 'Pubail', 'female', '5ab5b626df8066775379f8410a38f073.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
