-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 01:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `datee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`id`, `name`, `email`, `title`, `descrip`, `datee`) VALUES
(1, 'Sagar', 'sagar16135@gmail.com', 'Chicken Fry', 'Chicken fry per piece 100 taka', '-2037'),
(2, 'Sagar', 'sagar16135@gmail.com', 'Chicken Fry', 'testy food', '-2030'),
(3, 'S.M Shuvo', 'sagar16135@gmail.com', 'Mawa Feri ghat . Elish er nesha', 'salkjhggs;k', '-2033'),
(4, 'Sagar', 'shipon45@gmail.com', 'Beaf stick', 'Beaf stick is very popular ', '-2033');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `cmnt` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `fname`, `password`) VALUES
(4, 'sagar16135@gmail.com', 'Sagar', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `per_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `per_id`, `email`, `gender`, `phone`, `password`, `bdate`, `country`) VALUES
(7, 'Sagar Barai', '161-35-1561', 'sagar16135@gmail.com', 'Male', '01747711488', 'Sagar', '1997-05-17', 'Bangladesh'),
(8, 'Shipon', '161-35-1562', 'shipon16135@gmail.com', 'Male', '01687260731', '1234', '2019-08-18', 'Bangladesh'),
(9, 'Rahat', '161-35-1563', 'rahat16135@gmail.com', 'Male', '01748711488', '1234', '2019-08-24', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
