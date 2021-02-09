-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 11:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `amount` decimal(19,0) DEFAULT NULL,
  `available_amount` decimal(19,0) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `created_on` varchar(20) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `updated_on` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `Name`, `amount`, `available_amount`, `month`, `year`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(5, 'hlojl;m;m', '77080808', '4000', 'December', ' 2020', 'jimmy', '2020/12/23', 'jimmy', '2020/12/23'),
(6, 'jojpkjpk', '121212', '4000', 'December', ' 2020', 'jimmy', '2020/12/28', 'jimmy', '2020/12/28'),
(18, 'my budget', '400000', '4000', 'January', ' 2021', '15', '2021/01/13', '15', '2021/01/13'),
(20, 'amma', '300000', '4000', 'January', ' 2021', '16', '2021/01/15', '16', '2021/01/15'),
(30, 'my budget', '10000', '4000', 'January', ' 2021', '19', '2021/01/16', '19', '2021/01/16'),
(66, 'molly mathew', '1000000', '4000', 'January', ' 2021', '27', '2021/01/25', '27', '2021/01'),
(68, 'jojpkjpk', '10000', '4000', 'January', ' 2021', '28', '2021/01/25', '28', '2021/01'),
(69, 'my budget', '100000', '4000', 'January', ' 2021', '29', '2021/01/30', '29', '2021/01/30'),
(70, 'House', '5000', '4000', 'January', ' 2021', '30', '2021/01/30', '30', '2021/01/30');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `amount` decimal(19,0) DEFAULT NULL,
  `Date` varchar(20) DEFAULT NULL,
  `category` varchar(256) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `created_on` varchar(20) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `updated_on` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `Name`, `amount`, `Date`, `category`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(5, 'jimmy mathew', '678900', '2020-12-01', 'audi', 'jimmy', '2020/12/31', 'jimmy', '2020/12/31'),
(79, 'yyy', '1111', '2021-01-07', 'Housing', '2', '2021/01/13', '2', '2021/01/13'),
(80, 'zzz', '78787', '2021-01-19', 'Housing', '2', '2021/01/13', '2', '2021/01/13'),
(81, 'mathew joji', '6666', '2021-01-12', 'Housing', '4', '2021/01/13', '4', '2021/01/13'),
(82, 'check', '9999', '2021-01-21', 'Personal care', '4', '2021/01/13', '4', '2021/01/13'),
(85, 'john1', '200000', '2021-01-12', 'Housing', '15', '2021/01/13', '15', '2021/01/13'),
(86, 'john2', '100000', '2021-01-11', 'Housing', '15', '2021/01/13', '15', '2021/01/13'),
(87, 'joji', '333', '2021-01-13', 'Housing', '13', '2021/01/15', '13', '2021/01/15'),
(88, 'joji', '50000', '2021-01-14', 'Housing', '13', '2021/01/15', '13', '2021/01/15'),
(89, 'ammammmamma', '111', '2021-01-20', 'Housing', '17', '2021/01/15', '17', '2021/01/15'),
(127, 'joji', '234', '2003-01-22', 'Housing', '27', '2021/01/25', '27', '2021/01/25'),
(128, 'joji', '668', '2003-01-21', 'Housing', '27', '2021/01/25', '27', '2021/01/25'),
(129, 'joji', '444', '2003-01-21', 'Housing', '28', '2021/01/25', '28', '2021/01/25'),
(130, 'molly', '3333', '2003-01-15', 'Housing', '28', '2021/01/25', '28', '2021/01/25'),
(131, 'joji', '3', '2003-01-21', 'Housing', '28', '2021/01/25', '28', '2021/01/25'),
(132, '33', '33', '2003-01-14', 'Housing', '28', '2021/01/25', '28', '2021/01/25'),
(135, 'Veg', '1000', '2021-01-05', 'Health care', '30', '2021/01/30', '30', '2021/01/30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `d_o_b` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `module` varchar(256) DEFAULT NULL,
  `marital_Status` varchar(8) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `created_on` varchar(256) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `updated_on` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `d_o_b`, `age`, `sex`, `email`, `mobile`, `password`, `module`, `marital_Status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(6, 'molly mathew', '2003-01-05', 17, 'male', 'molly.mathew941@gmail.com', '2147483647', '111', 'budget,calculator', 'single', 'jimmy', '2020/12/31', 'jimmy', '2020/12/31'),
(7, 'Joji Mathew', '2003-01-01', 17, 'male', 'joji.mathew@gmailaaa.com', '2147483647', '1', 'budget,calculator', 'married', 'jimmy', '2020/12/31', 'jimmy', '2020/12/31'),
(8, 'Joji Mathew', '2003-01-01', 17, 'male', 'joji.mathew@gm.com', '2147483647', '1', 'budget', 'single', 'jimmy', '2020/12/31', 'jimmy', '2020/12/31'),
(10, 'Joji Mathew', '2003-01-07', 18, 'male', 'joji.mathew941@gmail.com', '2147483647', '222', 'budget,calculator', 'single', 'jimmy', '2021/01/06', 'jimmy', '2021/01/06'),
(11, 'Joji Mathew', '2003-01-09', 18, 'male', 'jimmy.connect@gmail.com', '2147483647', '55', 'budget,calculator', 'single', 'jimmy', '2021/01/06', 'jimmy', '2021/01/06'),
(12, 'Joji Mathew', '2003-01-01', 18, 'male', 'joji.mathew1111111@gmail.com', '2147483647', 'n', 'budget', 'single', 'jimmy', '2021/01/07', 'jimmy', '2021/01/07'),
(13, 'Joji Mathew', '2003-01-01', 18, 'male', 'joji.mathew000000@gmail.com', '123321', '1', 'budget,calculator', 'single', 'jimmy', '2021/01/12', 'jimmy', '2021/01/12'),
(17, 'amma', '2003-01-03', 18, 'male', 'amma@gmail.com', '09791095216', '1', 'budget', 'single', 'jimmy', '2021/01/15', 'jimmy', '2021/01/15'),
(18, 'Jimmy Mathew', '1992-07-21', 29, 'male', 'jimmy.connect@gma', '9840440135', 'jim123', 'budget,calculator,option3', 'single', 'jimmy', '2021/01/16', 'jimmy', '2021/01/16'),
(19, 'Joji Mathew', '2003-01-07', 18, 'male', 'joji.mat111@gmail.com', '09791095216', '1', 'budget', 'single', 'jimmy', '2021/01/16', 'jimmy', '2021/01/16'),
(20, 'Joji Mathew', '2003-01-01', 18, 'male', 'jjjj.mmm@gmail.com', '7910952163', '1', 'budget', 'single', 'jimmy', '2021/01/16', 'jimmy', '2021/01/16'),
(27, 'baasha', '2003-01-03', 18, 'male', 'baasha@gmail.com', '0979109521', '1', 'budget', 'single', 'jimmy', '2021/01/25', 'jimmy', '2021/01/25'),
(28, 'baasha1', '2003-01-03', 18, 'male', 'baasha1@gmail.com', '0979109521', '1', 'calculator', 'single', 'jimmy', '2021/01/25', 'jimmy', '2021/01/25'),
(29, 'baasha2', '2003-01-01', 18, 'male', 'baasha2@gmail.com', '0979109521', '1', 'budget', 'single', 'jimmy', '2021/01/30', 'jimmy', '2021/01/30'),
(30, 'Jimmy Mathew', '1992-07-21', 29, 'male', 'jimmy.mathew@gmail.com', '9840440135', 'jimmy123', 'budget,calculator,option3', 'single', 'jimmy', '2021/01/30', 'jimmy', '2021/01/30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
