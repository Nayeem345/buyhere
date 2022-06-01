-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 04:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `pro_pric` text NOT NULL,
  `adress` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `added_product` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `latest_product` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `latest_product`, `category_img`) VALUES
(1, 'vegetable', '', '2022-05-17 14:15:55', 'img/category-1.png'),
(2, 'juice', '', '2022-05-17 14:16:13', 'img/category-2.png'),
(3, 'meat', '', '2022-05-17 14:16:22', 'img/category-3.png'),
(4, 'fruits', '', '2022-05-17 14:16:33', 'img/category-4.png'),
(5, 'egg', '', '2022-05-17 14:16:40', 'img/category-5.png'),
(6, 'beef', '', '2022-05-17 14:16:46', 'img/category-6.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `current_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `office_addresss` text NOT NULL,
  `delivery_phone_no` int(11) NOT NULL,
  `pro_pic` text NOT NULL,
  `prefered_payment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `products_id` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_measure_system` varchar(20) NOT NULL,
  `prices` int(10) NOT NULL,
  `delvery_charge` int(10) NOT NULL,
  `total_price` int(15) NOT NULL,
  `grand_total` int(10) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status_1` varchar(20) NOT NULL,
  `order_status_2` varchar(20) NOT NULL,
  `order_status_3` varchar(100) NOT NULL,
  `orders_time` datetime NOT NULL,
  `delivery_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `special_price` int(10) NOT NULL,
  `product_photo` text NOT NULL,
  `inventory_ammount` int(20) NOT NULL,
  `reviews` varchar(250) NOT NULL,
  `brand_id` varchar(20) NOT NULL,
  `category_id` int(10) NOT NULL,
  `timistamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `size`, `color`, `price`, `special_price`, `product_photo`, `inventory_ammount`, `reviews`, `brand_id`, `category_id`, `timistamp`) VALUES
(1, 'organic banana', 'Organic bananas are one of the most widely consumed crops in the world. More than half of bananas are sourced from Ecuador, India, or China. Conventional bananas are grown with the help of synthetic fertilizers and pesticides, whereas organic methods rely only on natural ways to stimulate plant growth and eliminate predatory insects. ', '', 'green', 20, 18, 'img/product-1.png', 0, '', '', 1, '2022-05-16 10:15:15'),
(2, 'organic tomato', 'Organic bananas are one of the most widely consumed crops in the world. More than half of bananas are sourced from Ecuador, India, or China. Conventional bananas are grown with the help of synthetic fertilizers and pesticides, whereas organic methods rely only on natural ways to stimulate plant growth and eliminate predatory insects. ', '', 'red', 60, 55, 'img/product-2.png', 0, '', '', 1, '2022-05-16 10:15:15'),
(3, 'milk', 'Organic bananas are one of the most widely consumed crops in the world. More than half of bananas are sourced from Ecuador, India, or China. Conventional bananas are grown with the help of synthetic fertilizers and pesticides, whereas organic methods rely only on natural ways to stimulate plant growth and eliminate predatory insects. ', '', 'white', 50, 45, 'img/product-4.png', 0, '', '', 2, '2022-05-16 10:19:23'),
(4, 'meat', 'Organic bananas are one of the most widely consumed crops in the world. More than half of bananas are sourced from Ecuador, India, or China. Conventional bananas are grown with the help of synthetic fertilizers and pesticides, whereas organic methods rely only on natural ways to stimulate plant growth and eliminate predatory insects. ', '', 'gray', 650, 600, 'img/category-3.png', 0, '', '', 3, '2022-05-16 10:19:23'),
(5, 'black berry', 'Organic bananas are one of the most widely consumed crops in the world. More than half of bananas are sourced from Ecuador, India, or China. Conventional bananas are grown with the help of synthetic fertilizers and pesticides, whereas organic methods rely only on natural ways to stimulate plant growth and eliminate predatory insects. ', '', 'black', 250, 240, 'img/product-5.png', 0, '', '', 4, '2022-05-16 10:44:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
