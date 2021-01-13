-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2020 at 01:47 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-24+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `categoryStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryStatus`) VALUES
(1, 'main', 1),
(2, 'starter', 1),
(3, 'desserts', 1),
(4, 'drinks', 1),
(5, 'ice-cream', 0),
(6, 'test', 0),
(7, 'ssssssssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gst_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `phone`, `address`, `gst_no`) VALUES
(2, 'digitcure1', 123, 'bambolim', '123'),
(5, 'zuari', 1234, 'zuarinagar', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `designation`, `joining_date`, `dob`) VALUES
(5, 'Leena', 'leena@gmail.com', 987654321, 'admin', '2020-12-02', '2020-12-04'),
(6, 'abc', 'akashbanaulikar05@gm', 123, 'aA', '2020-12-11', '2020-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `category`, `images`) VALUES
(88, 'one more', 644, 'nonveg', 'starter,test', 'WhatsApp Image 2020-12-03 at 2.34.14 PM.jpeg'),
(95, 'try', 3, 'nonveg', 'drinks', 'will-swann-iHqO8e43-Rw-unsplash.jpg'),
(97, '1.9', 185, 'nonveg', 'drinks', ''),
(101, '130kb', 200, 'nonveg', 'desserts', '8320876e1aed442f9728ee25c72fda0e_rendered.jpg'),
(102, '1.9 again', 400, 'nonveg', 'desserts', 'andrew-neel-xNiJJHl0WP4-unsplash.jpg'),
(103, 'check 1.9', 300, 'nonveg', 'desserts,test', 'andrew-neel-xNiJJHl0WP4-unsplash.jpg'),
(104, 'check 2.9', 431, 'nonveg', 'starter,test,ssssssssss', 'will-swann-iHqO8e43-Rw-unsplash.jpg'),
(105, 'check 2.9 again', 644, 'nonveg', 'main,drinks,test,ssssssssss', 'will-swann-iHqO8e43-Rw-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `item` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `email`, `item`) VALUES
(2, 'Akash', 'yu', '898', 'bhatnidhi999@gmail.com', 'tandoori chicken'),
(5, 'Akash', 'deul', '89888', 'bhatnidhi999@gmail.com', 'tandoori'),
(6, 'Akash Banaulikar', 'Deulwada Marcela Goa', '1234', 'akashbanaulikar05@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tagname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `user_type`, `name`) VALUES
(5, 'aneesh.digitcure@gmail.com', 'abcd1234', 'Digital Marketing Ma', 'Aneesh Ramani'),
(6, 'leena@gmail.com', 'lee', 'admin', 'Leena');

-- --------------------------------------------------------

--
-- Table structure for table `_order`
--

CREATE TABLE `_order` (
  `id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_table`
--

CREATE TABLE `_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL,
  `state` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time_` varchar(20) CHARACTER SET utf8 NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_table`
--

INSERT INTO `_table` (`id`, `name`, `capacity`, `status`, `state`, `time_`, `day`) VALUES
(18, 'table 2', 0, 'active', 'reserved', '19:06:14', '2020-12-05'),
(19, 'table 3', 0, 'active', 'seated', '18:22:36', '2020-12-07'),
(20, 'table 4', 0, 'active', 'seated', '11:01:40', '2020-12-07'),
(21, 'Table 5', 0, 'active', 'seated', '11:42:56 AM', '2020-12-01'),
(22, 'table 6', 0, 'active', 'seated', '17:58:32', '2020-12-07'),
(24, 'table 9', 0, 'active', 'reserved', '12:26:15 PM', '2020-12-01'),
(25, 'table 2', 0, 'active', 'seated', '19:06:31', '2020-12-05'),
(26, 'test 1', 0, 'active', 'reserved', '14:25:05', '2020-12-07'),
(27, 'test 1', 0, 'active', 'seated', '16:29:36', '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `_tablehistory`
--

CREATE TABLE `_tablehistory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `time_` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_tablehistory`
--

INSERT INTO `_tablehistory` (`id`, `name`, `capacity`, `status`, `state`, `time_`, `day`) VALUES
(18, 'table 2', 0, 'active', 'seated', '12:03:49', '2020-12-01'),
(19, 'table 3', 0, 'active', 'seated', '18:22:36', '2020-12-07'),
(20, 'table 4', 0, 'active', 'seated', '11:01:40', '2020-12-07'),
(21, 'Table 5', 0, 'active', 'seated', '11:42:56', '2020-12-01'),
(22, 'table 6', 0, 'active', 'seated', '17:58:32', '2020-12-07'),
(25, 'table 2', 0, 'active', 'seated', '19:06:31', '2020-12-05'),
(27, 'test 1', 0, 'active', 'seated', '16:29:36', '2020-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orderproduct` (`order_id`),
  ADD KEY `FK_orderproducts` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producttag` (`product_id`),
  ADD KEY `FK_producttags` (`tag_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_order`
--
ALTER TABLE `_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tableorder` (`table_id`);

--
-- Indexes for table `_table`
--
ALTER TABLE `_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_tablehistory`
--
ALTER TABLE `_tablehistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `_order`
--
ALTER TABLE `_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_table`
--
ALTER TABLE `_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `_tablehistory`
--
ALTER TABLE `_tablehistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `FK_orderproduct` FOREIGN KEY (`order_id`) REFERENCES `_order` (`id`),
  ADD CONSTRAINT `FK_orderproducts` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `FK_producttag` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FK_producttags` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `_order`
--
ALTER TABLE `_order`
  ADD CONSTRAINT `FK_tableorder` FOREIGN KEY (`table_id`) REFERENCES `_table` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
