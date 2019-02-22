-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 07:44 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(9) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `email`, `password`, `contact`, `city`, `age`) VALUES
('abc', 'ab@gm.com', 'abc', 2147483647, 'jhanshi', 21),
('abhishek', 'abhi@gm.com', '1234', 2147483647, 'jhanshi', 23),
('sashikant pal', 'sasi@gmail.com', 'sasi', 2147483647, 'jhanshi', 23),
('shivendra yadav', 'yshivendra117@gmail.com', '1234', 2147483647, 'jhanshi', 21);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(5) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(7,2) NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `title`, `price`, `author`) VALUES
(1, 'One man army', 500.00, 'Indain soldiar'),
(2, 'Harry potter', 550.00, 'J k rowling'),
(3, 'My name is khan', 369.00, 'Srk khan'),
(4, 'Amity wale', 665.00, 'Amibook'),
(5, 'Pepe', 245.00, 'R s smash'),
(6, 'Bharat ke khoj', 549.00, 'Neheru'),
(9, 'SYhs', 64.00, 'SGsg'),
(11, 'rt', 35.00, 'et'),
(12, 'rtg', 353.00, 'rgsdg'),
(13, 'Zhs', 57.00, 'Zhs'),
(14, 'Aandhi ', 50.00, 'Poorwa'),
(15, 'GSHS', 79.00, 'HSs'),
(16, 'fnkwa', 234.00, 'DD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
