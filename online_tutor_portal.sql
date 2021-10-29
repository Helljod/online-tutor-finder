-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 10:34 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tutor_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_course_id` varchar(255) NOT NULL,
  `appointment_user_id` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_course_id`, `appointment_user_id`, `appointment_date`) VALUES
(1, '1', '2', '19 March,2020'),
(2, '1', '8', '19 March,2020'),
(3, '1', '9', '19 March,2020'),
(4, '1', '10', '3 March,2020'),
(5, '1', '2', '18 March,2020'),
(6, '1', '2', '11 March,2020'),
(7, '1', '10', '10 March,2020'),
(8, '7', '19', '24 October,2021'),
(9, '7', '2', '26 October,2021');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Mumbai'),
(2, 'Delhi'),
(3, 'Chenai'),
(4, 'Banglore'),
(5, 'Varanasi'),
(6, 'Kolkatta');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_image`) VALUES
(1, 'BPB Publication', 'bsb.jpeg'),
(2, 'Sahani Publication ', 'sahni.jpg'),
(3, 'Tata Publication', 'tata.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_tutor_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_experience` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_fees` varchar(255) NOT NULL,
  `course_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_tutor_id`, `course_name`, `course_experience`, `course_duration`, `course_image`, `course_fees`, `course_description`) VALUES
(1, '10', 'C Language', '10 years', '6 Months', 'c.png', '100', 'C Language Course'),
(2, '10', 'MySQL', '5 Years', '10 Months', 'mysql.jpg', '90', 'MySQL Course'),
(3, '10', 'PHP', '5 Years', '9 Months', 'php.jpg', '400', 'PHP Course'),
(4, '10', 'Java', '5 Years', '6 Months', 'java.jpeg', '100', 'Java Course'),
(5, '10', 'C#', '8 Years', '12 Months', 'csharp.jpeg', '250', 'C# Course'),
(6, '10', 'C++', '10 Years', '10 Months', 'cpp.jpg', '200', 'C++ Course'),
(7, '18', 'C ++', '5 years', '20 hours', 'cpp.jpg', '6000', 'Basic Introduction to C ++ Programming');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_user_id` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_amount` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_user_id`, `order_date`, `order_amount`, `order_status`) VALUES
(1, '2', '10 January,2019 05:32:32 PM', '200', 'Confirmed'),
(2, '2', '10 January,2019 05:33:08 PM', '200', 'Confirmed'),
(3, '2', '10 January,2019 05:34:04 PM', '1170', 'Confirmed'),
(4, '2', '10 January,2019 05:38:26 PM', '1100', 'Confirmed'),
(5, '2', '10 January,2019 05:48:36 PM', '4540', 'Confirmed'),
(6, '2', '10 January,2019 05:52:49 PM', '7140', 'Confirmed'),
(7, '2', '10 January,2019 05:57:06 PM', '4640', 'Confirmed'),
(8, '2', '10 January,2019 06:49:22 PM', '5840', 'Confirmed'),
(9, '2', '15 January,2019 05:19:29 PM', '12000', 'Confirmed'),
(10, '2', '17 January,2019 02:27:35 PM', '200', 'Confirmed'),
(11, '2', '19 January,2019 07:09:29 PM', '200', 'Confirmed'),
(12, '2', '22 July,2019 03:21:48 PM', '200', 'Confirmed'),
(13, '2', '19 August,2019 01:25:42 PM', '2540', 'Confirmed'),
(14, '2', '19 August,2019 01:41:47 PM', '200', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `oi_id` int(11) NOT NULL,
  `oi_order_id` varchar(255) NOT NULL,
  `oi_product_id` varchar(255) NOT NULL,
  `oi_price_per_unit` varchar(255) NOT NULL,
  `oi_cart_quantity` varchar(255) NOT NULL,
  `oi_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`oi_id`, `oi_order_id`, `oi_product_id`, `oi_price_per_unit`, `oi_cart_quantity`, `oi_total`) VALUES
(2, '13', '1', '200', '1', '200'),
(3, '13', '4', '1170', '1', '1170'),
(4, '13', '5', '1170', '1', '1170'),
(8, '1', '3', '1170', '1', '1170'),
(9, '2', '4', '1170', '1', '1170'),
(10, '3', '3', '1170', '1', '1170'),
(11, '4', '2', '1100', '1', '1100'),
(12, '5', '2', '1100', '2', '1100'),
(13, '5', '4', '1170', '2', '1170'),
(14, '6', '3', '1170', '1', '1170'),
(17, '6', '7', '1200', '1', '1200'),
(18, '6', '8', '1200', '1', '1200'),
(19, '6', '8', '1200', '1', '1200'),
(20, '6', '4', '1170', '1', '1170'),
(21, '6', '8', '1200', '1', '1200'),
(22, '7', '6', '1170', '1', '1170'),
(23, '7', '7', '1200', '1', '1200'),
(25, '7', '4', '1170', '1', '1170'),
(26, '7', '2', '1100', '1', '1100'),
(27, '8', '2', '1100', '1', '1100'),
(28, '8', '6', '1170', '1', '1170'),
(29, '8', '3', '1170', '1', '1170'),
(30, '8', '1', '1200', '1', '1200'),
(31, '8', '8', '1200', '1', '1200'),
(35, '9', '1', '12000', '1', '12000'),
(36, '10', '1', '200', '1', '200'),
(37, '11', '1', '200', '1', '200'),
(38, '12', '1', '200', '1', '200'),
(40, '14', '1', '200', '1', '200');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `os_id` int(11) NOT NULL,
  `os_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`os_id`, `os_title`) VALUES
(1, 'Confirmed'),
(2, 'Processing'),
(3, 'Packed'),
(4, 'Dispatched');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type_id` varchar(255) NOT NULL,
  `product_company_id` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_stock` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type_id`, `product_company_id`, `product_price`, `product_image`, `product_description`, `product_stock`) VALUES
(1, 'Handbook', '2', '1', '200', '1.jpg', 'Book', '12'),
(2, 'GATE Science', '1', '1', '450', '2.jpg', 'Book', '95'),
(3, 'Handbook', '4', '2', '500', '3.jpg', 'Book', '200'),
(4, 'PGT Guide', '5', '1', '250', '4.jpg', 'Book', '90'),
(5, 'Computer', '1', '3', '300', '5.jpg', 'Book', '16'),
(6, 'GATE Guide', '2', '1', '220', '6.jpg', 'Book', '17'),
(7, 'CSIR', '2', '3', '350', '7.jpg', 'Book', '98'),
(8, 'CBSE', '1', '2', '250', '8.jpg', 'Book', '100'),
(9, 'Mcqs', '3', '2', '400', '9.jpg', 'Book', '10'),
(10, 'Handbook', '3', '3', '180', '10.jpg', 'Book', '12');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(2, 'Student'),
(3, 'Tutor');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Maharastra'),
(2, 'Gujrat'),
(3, 'Bihar'),
(4, 'Uttar Pradesh'),
(5, 'Delhi'),
(6, 'Haryana');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_image`) VALUES
(1, 'Computer', 'computer.jpg'),
(2, 'Maths', 'math.jpg'),
(3, 'CBSE', 'cbse.jpg'),
(4, 'UGC', 'ugc.jpg'),
(5, 'Computer Science', 'cs.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(2, '2', 'student', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', '2', '1', '1', 'amit@gmail.com', '9324324546', '', '26 December,2015', 'p7.jpg'),
(8, '2', 'Student2', 'test', 'Suman Singh', 'House no : 768', 'Sector 2A', '1', '2', '1', 'suman@gmail.com', '987654321', '', '13 January,1961', 'p8.jpg'),
(9, '2', 'kaushal', 'test', 'Arun Kumar', 'House no : 768', 'Sector 2A', '1', '1', '1', 'arun@gmail.com', '987654321', '', '12 january, 2013', 'p9.jpeg'),
(10, '3', 'teacher', 'test', 'Naveen', 'New Delhi', 'India', '2', '2', '1', 'manasa@gmail.com', '9876543212', '', '18 January,1968', 'p5.jpg'),
(11, '3', 'John', 'test', 'John', 'Sector 120', 'Circel Road', '1', '1', '2', 'aman@gmail.com', '8978765654', '', '12 May,1999', 'p6.jpg'),
(12, '3', 'Cloudia', 'test', 'Cloudia', 'Sector 120', 'Sector 2A', '3', '5', '2', 'sdgsdfg@sdfg.vom', '2345345', '', '7 March,2020', 'p1.jpg'),
(13, '3', 'tutor', 'test', 'Mayank', 'Sector 120', 'Sector 2A', '3', '5', '2', 'sdgsdfg@sdfg.vom', '2345345', '', '7 March,2020', 'p2.jpg'),
(14, '3', 'Swami', 'test', 'Swami', 'Sector 120', 'Sector 2A', '3', '5', '1', '353453@zsdf.com', '4354435', '', '26 March,2020', 'p3.jpg'),
(15, '3', 'Rahul', 'test', 'Rahul', 'Sector 120', 'Sector 2A', '3', '5', '1', '353453@zsdf.com', '8978765654', '', '26 March,2020', 'p4.jpg'),
(16, '3', 'Asheef', 'test', 'Asheef', 'Sector 120', 'Sector 2A', '3', '5', '1', '353453@zsdf.com', '8978765654', '', '26 March,2020', 'p5.jpg'),
(17, '3', 'akash', 'akash123', 'Akash', 'abcd', 'xyz', '1', '1', '1', 'akash@gmail.com', '9004614040', '', '31 July,2001', 'c5.jpg'),
(18, '3', 'balaji', 'bala123', 'Balaji', 'Room no. 106, A-Wing, Pearl Residency', 'Near Gold Feild, Matunga', '1', '1', '1', 'balaji@gmail.com', '9867546567', '', '8 March,2021', '28bdc83.jpg'),
(19, '2', 'arya', 'arya123', 'Arya', 'abcd', 'efgh', '1', '1', '1', 'arya@gmail.com', '7865745676', '', '1 January,2021', 'p9.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`oi_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
