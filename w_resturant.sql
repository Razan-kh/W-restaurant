-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 07:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w_resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `meal_name` varchar(100) NOT NULL,
  `meal_qunatity` int(100) NOT NULL,
  `meal_price` int(100) NOT NULL,
  `cart_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `email`, `phone`, `message`) VALUES
('asd', 'zsd@gmail.com', 'asd', 'asd\r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `coustmer`
--

CREATE TABLE `coustmer` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `user_flag` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coustmer`
--

INSERT INTO `coustmer` (`username`, `password`, `email`, `phone`, `id`, `user_flag`) VALUES
('serrin123', '123', 'serriong.aqqad@hotmail.com', '0097213124', 1, 0),
('serrin123', '123', '', '', 2, 0),
('serrin123', '123asdas', '', '', 3, 0),
('asdasd', '123asdas', '', '', 4, 0),
('asdasdA', '123asdas', '', '', 5, 0),
('asdasdA', '123asdasADS', '', '', 6, 0),
('dasdas', 'asdaa', '', '', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `id` int(100) NOT NULL,
  `img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`name`, `price`, `rating`, `id`, `img_name`) VALUES
('Shawrma', 30, 4, 1, 'shawrma.png'),
('Burger', 24, 4, 2, 'burger.png'),
('Sizer Salad', 24, 4, 3, 'salad.png'),
('Americano', 24, 4, 4, 'americano.png'),
('Pizza', 24, 4, 5, 'pizza.png'),
('Pancake', 18, 4, 6, 'pancake.jpg'),
('waffale', 22, 4, 7, 'waffale.jpg'),
('Chicken Nuggets', 26, 4, 8, 'nuggets.png'),
('latte', 5, 0, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `number` int(10) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`number`, `date`, `price`, `address`, `message`, `user`) VALUES
(5, '2024-04-03', 0, 'SAD', 'ASD', 'serrin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coustmer`
--
ALTER TABLE `coustmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coustmer`
--
ALTER TABLE `coustmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
--booking in halls meeting
CREATE TABLE `join_to_hall` (
  `number` int(10) NOT NULL,
  `number_of_hours` int(100) NOT NULL,
  `date` date NOT NULL,
  `user` varchar(100) NOT NULL
)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
