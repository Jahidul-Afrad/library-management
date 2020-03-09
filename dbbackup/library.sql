-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 08:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` text,
  `book_author` text,
  `book_rack` int(11) DEFAULT NULL,
  `issue_data` date DEFAULT NULL,
  `issue_expair` date DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_author`, `book_rack`, `issue_data`, `issue_expair`, `student_id`) VALUES
(3, 'ANCI', 'gragor', 1, '2018-04-27', '2018-05-05', 2147483647),
(4, 'graphics', 'gragor', 1, '2018-04-27', '2018-05-05', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `order_id` int(11) NOT NULL,
  `book_name` text,
  `buyer_firstname` text,
  `buyer_lastname` text,
  `buyer_email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_contact`
--

CREATE TABLE `buyer_contact` (
  `order_id` int(11) NOT NULL,
  `buyer_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `admin_id` int(11) NOT NULL,
  `admin_firstname` text,
  `admin_lastname` text,
  `admin_email` text,
  `admin_address` text,
  `gender` text,
  `password` int(11) DEFAULT NULL,
  `refdmin` int(11) DEFAULT NULL,
  `refadminemail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`admin_id`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_address`, `gender`, `password`, `refdmin`, `refadminemail`) VALUES
(1, 'jahidul', 'afrad', 'jahidulafrad29@gmail.com', 'Narsingdi', 'male', 12123, 2, 'hasem@gmail.com'),
(2, 'Hasem', 'afrad', 'hasem@gmail.com', 'Baghata', 'male', 123456, 1, 'jahidulafrad29@gmail.com'),
(3, 'rasel', 'afrad', 'rasel@gmail.com', 'Shippur', 'male', 12345, 2, 'hasem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_book`
--

CREATE TABLE `librarian_book` (
  `librarian_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `librarian_contact`
--

CREATE TABLE `librarian_contact` (
  `librarian_id` int(11) NOT NULL,
  `librarian_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_firstname` text,
  `student_lastname` text,
  `student_email` text,
  `student_department` text,
  `student_address` text,
  `gender` text,
  `password` int(11) DEFAULT NULL,
  `librarian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_email`, `student_department`, `student_address`, `gender`, `password`, `librarian_id`) VALUES
(4, 'sham', 'sahara', 'sham@gmail.com', 'cse', 'madaripu', 'male', 123456, NULL),
(7, 'Ripon', 'Afrad', '20151101024', 'cse', 'narsingdi', 'male', 123456, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_contact`
--

CREATE TABLE `student_contact` (
  `student_id` int(11) NOT NULL,
  `student_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `librarian_book`
--
ALTER TABLE `librarian_book`
  ADD PRIMARY KEY (`librarian_id`,`book_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
