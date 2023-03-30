-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 05:28 AM
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
-- Database: `fly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_tb`
--

CREATE TABLE `airlines_tb` (
  `id` int(30) NOT NULL,
  `airlines` varchar(35) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines_tb`
--

INSERT INTO `airlines_tb` (`id`, `airlines`, `image`) VALUES
(31, 'Cebu pacific', 'Cebu_Pacific_logo.png'),
(32, 'flyone', 'Fly_One_Logo_2016.png'),
(33, 'Sky Airline', 'Logo_SKYAirline.jpg'),
(34, 'Midway Airlines', 'Logomidwayairlines1985.png');

-- --------------------------------------------------------

--
-- Table structure for table `airport_tb`
--

CREATE TABLE `airport_tb` (
  `id` int(20) NOT NULL,
  `airport` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport_tb`
--

INSERT INTO `airport_tb` (`id`, `airport`, `location`) VALUES
(7, 'AIR INDIA (AI)', 'DELHI,MUMBAI'),
(8, 'AIX CONNECT', 'BENGALURU'),
(9, 'INDIGO', 'DELHI,MUMBAI,BENGALU'),
(10, 'SPICEJET', 'DELHI,HYDERABAD'),
(11, 'VISTARA', 'DELHI,MUMBAI');

-- --------------------------------------------------------

--
-- Table structure for table `bookasyour_tb`
--

CREATE TABLE `bookasyour_tb` (
  `book_id` int(11) NOT NULL,
  `p_id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `DepartureLocation` varchar(30) NOT NULL,
  `Arrivallocation` varchar(35) NOT NULL,
  `preferedairline` varchar(35) NOT NULL,
  `preferedseating` varchar(35) NOT NULL,
  `Departuredate` datetime NOT NULL,
  `Departuretime` time(6) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `infant` int(11) NOT NULL,
  `oneorround` varchar(40) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookasyour_tb`
--

INSERT INTO `bookasyour_tb` (`book_id`, `p_id`, `name`, `DepartureLocation`, `Arrivallocation`, `preferedairline`, `preferedseating`, `Departuredate`, `Departuretime`, `adult`, `children`, `infant`, `oneorround`, `class`) VALUES
(1, 0, 'athul123@gmail.com', 'CCU Kolkata,India', 'SIN Singapore,Singapore', 'Alliance Air(LLR)', 'Aisle', '2023-03-29 12:50:00', '00:00:00.000000', 2, 1, 1, 'one way', 'Economy'),
(2, 0, 'athul123@gmail.com', 'kochi', 'dubai', 'IndiGo(IGO)', 'Window', '2023-03-31 22:10:00', '00:00:00.000000', 1, 1, 0, 'one way', 'Economy');

-- --------------------------------------------------------

--
-- Table structure for table `bookedflights`
--

CREATE TABLE `bookedflights` (
  `b_id` int(20) NOT NULL,
  `Airline` varchar(20) NOT NULL,
  `flightNo` varchar(20) NOT NULL,
  `DepartureLocation` varchar(20) NOT NULL,
  `Arrivallocation` varchar(20) NOT NULL,
  `Departuredate` datetime(6) NOT NULL,
  `arrivaldate` datetime(6) NOT NULL,
  `seats` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details_tb`
--

CREATE TABLE `details_tb` (
  `d_id` int(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `passport` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `air_reward` varchar(15) NOT NULL,
  `adhaar_no` varchar(20) NOT NULL,
  `noofpass` varchar(20) NOT NULL,
  `baggage` varchar(35) NOT NULL,
  `adult` varchar(10) NOT NULL,
  `children` varchar(10) NOT NULL,
  `infant` varchar(10) NOT NULL,
  `oneorround` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `package` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_tb`
--

INSERT INTO `details_tb` (`d_id`, `email`, `passport`, `dob`, `air_reward`, `adhaar_no`, `noofpass`, `baggage`, `adult`, `children`, `infant`, `oneorround`, `class`, `package`) VALUES
(1, '0', 'vendordb.php', '2023-03-15', 'no', '3423 5645 3424', '3', 'bag2', '1', '1', '1', 'one way', 'Bussiness', 'Basic'),
(2, '', 'Salini k b.jpg', '2023-03-01', 'yes', '345423542343', '3', 'bag3', '1', '1', '1', 'one way', '', 'Basic'),
(3, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(5, 'athul123@gmail.com', 'Base paper 2.pdf', '2023-03-18', 'no', '4534 4534 5645', '3', 'bag2', '1', '1', '1', 'one way', '', 'Basic'),
(6, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(11, 'athul123@gmail.com', 'Salini k b.jpg', '2023-03-01', 'NO', '3423 4545 3434', '3', 'BAG2', '1', '1', '1', 'one way', 'Bussiness', 'Basic'),
(12, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(14, '', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-01', 'no', '1134 2344 2334 2233', '7', 'i bag', '3', '2', '1', 'one way', 'Bussiness', 'Basic'),
(15, '', '', '0000-00-00', '', '', '', '', '', '', '', 'one way', '', ''),
(16, '', '', '0000-00-00', '', '', '', '', '', '', '', 'one way', '', ''),
(17, 'aeadty', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-04', 'no', '56587', '', 'njk', '', '', '', '', '', ''),
(18, 'aeadty', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-04', 'no', '56587', '', 'njk', '', '', '', '', '', ''),
(19, 'aeadty', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-04', 'no', '56587', '', 'njk', '', '', '', '', '', ''),
(20, 'aeadty', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-04', 'no', '56587', '', 'njk', '', '', '', '', '', ''),
(21, 'aeadty', 'AWS_Academy_Graduate___AWS_Academy_', '2023-03-04', 'no', '56587', '', 'njk', '', '', '', '', '', ''),
(22, 'gsil', 'Salini K B_MCA_Amal Jyothi College ', '2014-01-17', 'no', '3243 3454 3455 ', '', 'bag1', '', '', '', '', '', ''),
(23, 'gsil', 'Salini K B_MCA_Amal Jyothi College ', '2014-01-17', 'no', '3243 3454 3455 ', '', 'bag1', '', '', '', '', '', ''),
(24, 'gsil', 'Salini K B_MCA_Amal Jyothi College ', '2014-01-17', 'no', '3243 3454 3455 ', '', 'bag1', '', '', '', '', '', ''),
(25, 'FKYVI', 'Salini K B_MCA_Amal Jyothi College ', '2023-02-15', 'NO', '4534 5645 5666 6756', '', 'BJK', '', '', '', '', '', ''),
(26, 'salinikb2000@gmail.com', '', '2023-03-17', 'no', '472162305741', '', 'gykf', '', '', '', '', '', ''),
(27, 'salinikb2000@gmail.com', '', '2023-03-17', 'no', '472162305741', '', 'gykf', '', '', '', '', '', ''),
(28, 'salinikb2000@gmail.com', '', '2023-03-17', 'no', '472162305741', '', 'gykf', '', '', '', '', '', ''),
(29, 'salinikb2000@gmail.com', 'Salini K B (7).pdf', '2000-11-04', 'No', '345245364564', '', 'Baggage 1', '', '', '', '', '', ''),
(30, 'athul123@gmail.com', 'Salini K B_MCA_Amal Jyothi College ', '2012-06-28', 'no', '456767567878', '', 'Bag1 bag2', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `f_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `view` varchar(40) NOT NULL,
  `comments` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_tb`
--

INSERT INTO `feedback_tb` (`f_id`, `name`, `view`, `comments`, `status`) VALUES
(1, '', 'Good', 'Good Experience with Booking ', ''),
(2, '', 'Excellent', 'good', ''),
(3, '', 'Good', 'Good ', ''),
(4, '', '', 'good', ''),
(5, '', '', 'good', ''),
(6, '', '', 'good', ''),
(7, 'athul123@gmail.com', 'Excellent', 'good', '');

-- --------------------------------------------------------

--
-- Table structure for table `flights_tb`
--

CREATE TABLE `flights_tb` (
  `id` int(20) NOT NULL,
  `c_id` int(35) NOT NULL,
  `Airline` varchar(20) NOT NULL,
  `flightNo` varchar(20) NOT NULL,
  `DepartureLocation` varchar(30) NOT NULL,
  `Arrivallocation` varchar(30) NOT NULL,
  `Departuredate` datetime(6) NOT NULL,
  `arrivaldate` datetime(6) NOT NULL,
  `seats` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights_tb`
--

INSERT INTO `flights_tb` (`id`, `c_id`, `Airline`, `flightNo`, `DepartureLocation`, `Arrivallocation`, `Departuredate`, `arrivaldate`, `seats`, `price`, `status`) VALUES
(7, 0, 'Go first(GOW)', '10001', 'MUMBAI', 'DELHI', '2023-02-01 16:04:00.000000', '2023-02-01 18:06:00.000000', 90, 45000, 'low'),
(8, 0, 'Akasa Air(Akj)', '10002', 'BANGLORE', 'DELHI', '2023-02-21 18:07:00.000000', '2023-02-24 21:09:00.000000', 90, 32000, 'low'),
(9, 0, 'Airarabia(AXB)', '10003', 'MUMBAI', 'KOCHI', '2023-02-22 22:12:00.000000', '2023-02-22 19:09:00.000000', 90, 56000, 'low'),
(11, 0, 'Go first(GOW)', 'A3WQ', 'KARNATAKA', 'UTTARPRADESH', '2023-02-28 17:51:00.000000', '2023-02-28 19:15:00.000000', 100, 70000, 'high'),
(12, 0, 'Go first(GOW)', 'GOW12', 'UTTARPRADESH', 'MUMBAI', '2023-03-09 14:27:00.000000', '2023-03-09 15:28:00.000000', 50, 45000, 'low'),
(13, 0, 'Jet Airways(JAI)', 'JAI345', 'BANGLORE', 'GOA', '2023-03-10 15:28:00.000000', '2023-03-10 15:29:00.000000', 86, 50000, 'low'),
(14, 0, 'IndiGo(IGO)', 'DELO7', 'DEL New Delhi,India', 'BOM Mumbai,India', '2023-03-10 09:16:00.000000', '2023-03-10 11:16:00.000000', 60, 60000, 'low'),
(15, 0, 'Go first(GOW)', 'GOW23', 'BOM Mumbai,India', 'BLR Banglore,India', '2023-03-26 16:10:00.000000', '2023-03-26 17:10:00.000000', 56, 60000, 'high'),
(18, 0, 'Vistara(VTI)', 'JHILHJP ', 'KOCHI(COK)', 'MALDIVES(MLD)', '2023-03-22 21:50:00.000000', '2023-03-12 15:51:00.000000', 78, 78000, 'high'),
(19, 0, 'Vistara(VTI)', 'VTI567', 'SIN Singapore,singapore', 'HYD Hyderabad,India', '2023-03-25 09:47:00.000000', '2023-03-25 10:30:00.000000', 70, 80000, 'high'),
(20, 0, 'IndiGo(IGO)', 'IGO144', 'DXB Dubai,United Arab Emirates', 'SIN Singapore,Singapore', '2023-03-28 10:00:00.000000', '2023-03-28 17:10:00.000000', 60, 65000, 'high'),
(21, 0, 'Alliance Air(LLR)', 'LLR23', 'CCU Kolkata,India', 'BLR Banglore,India', '2023-03-29 12:50:00.000000', '2023-03-28 14:50:00.000000', 60, 80000, 'high'),
(22, 0, 'Jet Airways(JAI)', 'mkgs;j', 'kochi', 'dubai', '2023-03-31 22:10:00.000000', '2023-03-31 02:10:00.000000', 56, 80000, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reg_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `email`, `password`, `name`, `role`, `status`, `reg_id`) VALUES
(1, 'admin123@gmail.com', 'Admin@12', '', 'admin', 1, 1),
(2, 'salinikb2000@gmail.c', 'Salini@1', '', '', 0, 0),
(3, 'athul123@gmail.com', 'Athul@12', '', '', 0, 0),
(4, 'riya123@gmail.com', 'Riya@123', '', '', 0, 0),
(5, 'ajinvk@gmail.com', 'Ajin@123', '', '', 0, 0),
(6, 'arya12@gmail.com', 'Arya@123', '', '', 0, 0),
(7, 'maya@gmail.com', 'Maya@123', '', '', 0, 0),
(8, 'clara@gmail.com', 'Clara@12', '', '', 0, 0),
(10, 'ss@gmail.com', 'Asd12345', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `p_id` int(35) NOT NULL,
  `book_id` int(35) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tb`
--

INSERT INTO `payment_tb` (`p_id`, `book_id`, `name`, `amount`, `payment_id`, `payment_status`) VALUES
(1, 0, 'athul123@gmail.com', 80000, 'pay_LVJXQzcKWgYzcZ', 'completed'),
(2, 0, 'athul123@gmail.com', 65000, 'pay_LWSvQBdBOqr4Dy', 'completed'),
(3, 0, 'athul123@gmail.com', 65000, 'pay_LWYlGMy2jxdBcB', 'completed'),
(4, 0, 'athul123@gmail.com', 65000, 'pay_LWZC6eNr4lAh17', 'completed'),
(5, 0, 'athul123@gmail.com', 80000, 'pay_LXIMGoajsENUOJ', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `prediction_tb`
--

CREATE TABLE `prediction_tb` (
  `price_id` int(20) NOT NULL,
  `Airline` varchar(35) NOT NULL,
  `Date_of_Journey` date NOT NULL,
  `Source` varchar(35) NOT NULL,
  `Destination` varchar(35) NOT NULL,
  `Route` varchar(100) NOT NULL,
  `Dep_Time` datetime(6) NOT NULL,
  `Arrival_Time` datetime(6) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Total_Stops` varchar(20) NOT NULL,
  `Additional_Info` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `market_demand` varchar(35) NOT NULL,
  `fare_class` varchar(35) NOT NULL,
  `seasonality` varchar(20) NOT NULL,
  `holiday` varchar(35) NOT NULL,
  `num_flights` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prediction_tb`
--

INSERT INTO `prediction_tb` (`price_id`, `Airline`, `Date_of_Journey`, `Source`, `Destination`, `Route`, `Dep_Time`, `Arrival_Time`, `Duration`, `Total_Stops`, `Additional_Info`, `Price`, `status`, `market_demand`, `fare_class`, `seasonality`, `holiday`, `num_flights`) VALUES
(1, 'Indigo', '2023-03-29', 'Kochi', 'dubai', 'kOC->DUB', '2023-03-31 22:00:21.000000', '2023-03-30 22:00:21.000000', '5', '2', 'NO', '2000', 'high', 'G', 'economy', 'summer', 'saturday', '3'),
(5, 'vistara', '2023-03-30', 'Mumbai', 'Banglore', 'MUM->BAN', '2023-03-31 22:00:21.000000', '2023-03-30 22:00:21.000000', '4', '2', 'NO', '80000', 'high', 'G', 'economy', 'winter', 'sunday', '5');

-- --------------------------------------------------------

--
-- Table structure for table `register_td`
--

CREATE TABLE `register_td` (
  `reg_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_td`
--

INSERT INTO `register_td` (`reg_id`, `username`, `contact`, `status`) VALUES
(1, 'achu', '9656315951', 0),
(2, 'riya', '3456234567', 0),
(3, 'ajin', '3456234678', 0),
(4, 'arya', '4356234567', 0),
(5, 'maya', '9078978965', 0),
(6, 'clara', '9045645678', 0),
(7, 'riya', '6785453456', 0),
(8, 'ss', '1234567893', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seats_tb`
--

CREATE TABLE `seats_tb` (
  `seat_id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `seat_no` varchar(40) NOT NULL,
  `book_id` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `bk_id` int(35) NOT NULL,
  `login_id` int(35) NOT NULL,
  `id` int(35) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`bk_id`, `login_id`, `id`, `status`) VALUES
(5, 0, 1, 0),
(6, 0, 1, 0),
(7, 0, 1, 0),
(8, 0, 1, 0),
(9, 0, 1, 0),
(10, 0, 1, 0),
(11, 0, 1, 0),
(12, 0, 1, 0),
(18, 4, 5, 0),
(20, 4, 1, 0),
(21, 4, 5, 0),
(22, 4, 5, 0),
(23, 4, 5, 0),
(24, 4, 5, 0),
(25, 4, 5, 0),
(26, 4, 5, 0),
(27, 4, 5, 0),
(28, 4, 5, 0),
(29, 4, 5, 0),
(48, 3, 11, 0),
(51, 3, 0, 0),
(53, 0, 11, 0),
(68, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `reg_id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`reg_id`, `fullname`, `password`, `email`, `gender`, `nationality`, `phone`, `type`) VALUES
(19, 'salini', 'Salini@123', 'salinikb2000@gmail.c', 'Female', 'austrian', '5645342356', 'user'),
(22, 'aravind', 'araving', 'aravind23@gmail.com', 'Male', 'antiguans', '6545324567', 'user'),
(23, 'sandra', 'san', 'sangdf@gmail.com', 'Female', 'azerbaijani', '7865434234', 'user'),
(24, 'salini', 'salu', 'salinikb2000', 'Female', 'australian', '3423456787', 'user'),
(25, 'admin', 'admin', 'adminkb200@gmail.com', 'female', 'indian', '9656915950', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_tb`
--
ALTER TABLE `airlines_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport_tb`
--
ALTER TABLE `airport_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookasyour_tb`
--
ALTER TABLE `bookasyour_tb`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `bookedflights`
--
ALTER TABLE `bookedflights`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `details_tb`
--
ALTER TABLE `details_tb`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `flights_tb`
--
ALTER TABLE `flights_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `prediction_tb`
--
ALTER TABLE `prediction_tb`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `register_td`
--
ALTER TABLE `register_td`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `seats_tb`
--
ALTER TABLE `seats_tb`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines_tb`
--
ALTER TABLE `airlines_tb`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `airport_tb`
--
ALTER TABLE `airport_tb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bookasyour_tb`
--
ALTER TABLE `bookasyour_tb`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookedflights`
--
ALTER TABLE `bookedflights`
  MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details_tb`
--
ALTER TABLE `details_tb`
  MODIFY `d_id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flights_tb`
--
ALTER TABLE `flights_tb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `p_id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prediction_tb`
--
ALTER TABLE `prediction_tb`
  MODIFY `price_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register_td`
--
ALTER TABLE `register_td`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seats_tb`
--
ALTER TABLE `seats_tb`
  MODIFY `seat_id` int(35) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `bk_id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
