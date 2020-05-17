-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 06:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'Negative 4'),
(2, 1, 0, 'Negative 3'),
(3, 1, 0, '4'),
(6, 2, 0, 'Negative 5'),
(7, 2, 1, 'Negative 10'),
(8, 2, 0, '0'),
(17, 3, 1, '$30'),
(18, 3, 0, '$10'),
(19, 3, 0, '$20'),
(20, 3, 0, '$40'),
(21, 4, 0, '0.09'),
(22, 4, 0, '0.15'),
(23, 4, 0, '0.54'),
(24, 4, 1, '0.85'),
(25, 1, 0, '7'),
(26, 2, 0, '5'),
(27, 5, 1, '$26,000'),
(28, 5, 0, '$28,000'),
(29, 5, 0, '$29,000'),
(30, 5, 0, '$30,000'),
(31, 6, 0, 'K'),
(32, 6, 0, 'M'),
(33, 6, 0, 'R'),
(34, 6, 1, 'G'),
(35, 7, 1, '2.9 million'),
(37, 7, 0, '3.6 million'),
(38, 7, 0, '10.4 million'),
(39, 7, 0, '11.1 million'),
(40, 8, 1, 'immutable : alteration'),
(41, 8, 0, 'invincible : control'),
(42, 8, 0, 'independent : conquest'),
(43, 8, 0, 'inimitable : modification'),
(45, 9, 1, '-5'),
(46, 9, 0, '-1'),
(47, 9, 0, '7'),
(48, 9, 0, '9'),
(49, 10, 1, 'The width is 4o% of the length and all angles are of equal measure'),
(50, 10, 0, 'The quadrilateral contains equal sides'),
(51, 10, 0, 'If the perimeter was decreased by 50%, the area would decrease by 25%'),
(52, 10, 0, 'The quadrilateral is formed by combining two isosceles right triangles');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Rana', 'ashbdasdasd', 'asdhbashvdgasvd'),
(2, 'Rumman Ali', 'rummanrakib42@gmail.com', 'Can you add more math questions?'),
(3, 'Shohag Aust', 'Shohagaust@gmail.com', 'I love this site');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'If 5x plus 32 equals 4 minus 2x what is the value of x ?'),
(2, 'Which of the following numbers is farthest from the number 1 on the number line?'),
(3, 'A car got 33 miles per gallon using gasoline that cost $2.95 per gallon. Approximately what was the cost, in dollars, of the gasoline used in driving the car 350 miles?'),
(4, 'A certain jar contains 60 jelly beans — 22 white, 18 green, 11 yellow, 5 red and 4 purple. If a jelly bean is to be chosen at random, what is the probability that the jelly bean will be neither red nor purple?'),
(5, 'Each employee of a certain company is in either Department X or Department Y, and there are more than twice as many employees in Department X as in Department Y. The average (arithmetic mean) salary is $25,000 for the employees in Department X and $35,000 for the employees in Department Y. Which of the following amounts could be the average salary for all of the employees of the company?'),
(6, 'For which of the six businesses shown was the percent change in the value of the inventory from April to June greatest?'),
(7, 'In the workforce, the ratio of the number of union members to the number of nonmembers is the same for the sales sector as it is for the protective service area of the service sector. Which of the following is closest to the number of nonmembers in the sales sector?'),
(8, 'IMPREGNABLE : ASSAULT ::'),
(9, 'What are all the possible solutions of | |x – 2| – 2| = 5?'),
(10, 'A quadrilateral has a perimeter of 16. Which of the following alone would provide sufficient information to determine the area of the quadrilateral.');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `duration`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'rumman', 'ali', 'rummanrakib42@gmail.com', 'rumman'),
(2, 'runa', 'laila', 'runalaila@gmail.com', 'rumman'),
(3, 'mashrafi', 'morteza', 'rummanrakib11@gmail.com', 'rumman'),
(4, 'sani', 'pakhi', 'sanipakhi@gmail.com', 'sani'),
(5, 'anika', 'salsabil', 'anika@gmail.com', 'anika'),
(6, 'farzad', 'ahmed', 'farzadahmed@gmail.com', 'farzad'),
(7, 'ashik', 'islam', 'ashikulislam@gmail.com', 'ashik'),
(8, 'showmik', 'coder', 'showmik96@gmail.com', 'showmik'),
(9, 'showmik', 'shada', 'showmik97@gmail.com', 'showmik'),
(10, 'showmik', 'shada', 'tana7@gmail.com', 'showmik'),
(12, 'aslkd', 'jasdb', 'askjbd', 'ranaplaza'),
(13, 'shona', 'pachu', 'sona@gmail.com', 'aana'),
(14, 'bab', 'bab', 'ba', 'ba'),
(16, 'rumman', 'pachu', 'rashid@gmail.com', 'ranaplaza'),
(17, 'silver', 'moon', 'silvermoon@gmail.com', 'silver'),
(18, 'shohag', 'Aust', 'Shohagaust@gmail.com', 'shohag'),
(19, 'nafiul', 'ferdous', 'nafiul@gmail.com', 'nafiul'),
(20, 'Riyan', 'Ali', 'rafid@gmail.com', 'riyanali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
