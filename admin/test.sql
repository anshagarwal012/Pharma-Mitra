-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 01:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `credintials`
--

CREATE TABLE `credintials` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credintials`
--

INSERT INTO `credintials` (`id`, `email`, `pass`, `name`, `dp`) VALUES
(1, 'ansh@weblytechnolab.tech', 'DoubleAA', 'Ansh Agarwal', 'assets/img/ansh.jpg'),
(2, 'abhishek@weblytechnolab.tech', 'DoubleAA', 'Manav Singh', 'assets/img/manav.jpeg'),
(3, 'ashu@weblytechnolab.tech', 'DoubleAA', 'Ashu Srivastava', 'assets/img/ashu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `login_name` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone`, `whatsapp`, `login_name`, `date`) VALUES
(1, 'Ansh Agarwal', 'New Para Colony, Rajajipuram Lucknow', 'info.ansh012@gmail.com', '9696084837', '9696084837', 'Ansh', '10/04/2021'),
(2, 'Ashu', 'Para Rajajipuram Lucknow', 'ashu@gmail.com', '9794803959', '9794803959', 'Manav', '11/04/2021'),
(3, 'Abhishek', 'Para Rajajipuram Lucknow', 'abhishek@weblytechnolab.tech', '8417916695', '8417916695', 'Ansh', '17/04/2021');

-- --------------------------------------------------------

--
-- Table structure for table `daybook`
--

CREATE TABLE `daybook` (
  `id` int(10) NOT NULL,
  `debit_credit` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Method` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Description` longtext NOT NULL,
  `login_name` varchar(20) NOT NULL,
  `Date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daybook`
--

INSERT INTO `daybook` (`id`, `debit_credit`, `Name`, `Method`, `Price`, `Description`, `login_name`, `Date`) VALUES
(1, 'Credit', 'Varun', 'Cash', '3000', 'For Animation Project Advance', 'Ansh', '10/04/2021'),
(2, 'Credit', 'Varun', 'Cash', '7000', 'Animation Project Payment', 'Ansh', '10/04/2021'),
(4, 'Debit', 'Abhishek', 'Cash', '2000', 'For Animation Project Advance', 'Ashu Srivastava', '18/04/2021'),
(5, 'Debit', 'Abhishek', 'UPI', '1000', 'Amount Left', 'Ashu Srivastava', '18/04/2021');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `i_no` varchar(10) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `advance` varchar(10) NOT NULL,
  `login_name` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `i_no`, `c_id`, `s_id`, `category`, `qty`, `price`, `advance`, `login_name`, `date`) VALUES
(1, '1', '3', 'Web', '[\"Advance Logo Designing\",\"Basic Logo Designing\",\"\",\"\",\"\",\"\",\"\"]', '[\"1\",\"2\",\"\",\"\",\"\",\"\",\"\"]', '[\"500\",\"250\",\"\",\"\",\"\",\"\",\"\"]', '500', 'Ansh', '17/04/2021'),
(2, '2', '2', 'Web', '[\"Basic 3d Animation(5 Video)\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"5\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"4000\",\"\",\"\",\"\",\"\",\"\",\"\"]', '7000', 'Ansh', '17/04/2021'),
(3, '3', '1', 'Designing', '[\"Basic SEO\",\"Basic Website\",\"\",\"\",\"\",\"\",\"\"]', '[\"8\",\"1\",\"\",\"\",\"\",\"\",\"\"]', '[\"500\",\"6000\",\"\",\"\",\"\",\"\",\"\"]', '1000', 'Ansh', '17/04/2021'),
(4, '4', '1', 'Animation', '[\"Advance Logo Designing\",\"Basic 3d Animation(5 Video)\",\"\",\"\",\"\",\"\",\"\"]', '[\"2\",\"8\",\"\",\"\",\"\",\"\",\"\"]', '[\"500\",\"200\",\"\",\"\",\"\",\"\",\"\"]', '2600', 'Ansh', '17/04/2021');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `p_id`, `mob`, `url`) VALUES
(9, 'Ansh', '1', '9696084837', 'upload/Business Card - Ansh.pdf'),
(10, 'Abhishek', '2', '9696969696', 'upload/Business Card - Abhishek.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `category` varchar(15) NOT NULL,
  `login_name` varchar(15) NOT NULL,
  `Date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `price`, `category`, `login_name`, `Date`) VALUES
(1, 'Basic Website', '5000', 'Web', 'Ansh', '10/04/2021'),
(2, 'Basic SEO', '2000', 'Web', 'Ansh', '10/04/2021'),
(3, 'SSL', '1000', 'Web', 'Ansh', '10/04/2021'),
(4, 'Domain + Hosting Combo (1year)', '2200', 'Web', 'Ansh', '10/04/2021'),
(5, 'Basic 3d Animation(5 Video)', '17000', 'Animation', 'Ansh', '10/04/2021'),
(6, 'Basic Logo Designing', '500', 'Designing', 'Ansh', '10/04/2021'),
(7, 'Advance Logo Designing', '1000', 'Designing', 'Ansh', '10/04/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credintials`
--
ALTER TABLE `credintials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daybook`
--
ALTER TABLE `daybook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credintials`
--
ALTER TABLE `credintials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daybook`
--
ALTER TABLE `daybook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
