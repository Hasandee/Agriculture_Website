-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2023 at 05:09 AM
-- Server version: 8.0.33
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `productname` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `userid`, `productname`, `category`, `quantity`, `price`, `image_path`, `add_date`) VALUES
(5, 4, 'Carrot', 'Vegetables', 20, '80.00', '../uploads/img14.jpg', '2023-10-03 16:43:09'),
(7, 4, 'Avacado', 'Fruits', 15, '300.00', '../uploads/img22.jpg', '2023-10-03 16:46:33'),
(8, 4, 'ABC', 'Vegetables', 10, '100.00', '../uploads/img7.jpg', '2023-10-03 16:58:14'),
(9, 4, 'AAA', 'Legumes', 12, '200.00', '../uploads/img31.jpg', '2023-10-03 22:11:25'),
(10, 7, 'AAA', 'Fruits', 15, '100.00', '../uploads/img21.jpg', '2023-10-04 04:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `inquiry` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `solution` text,
  `query_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `userid`, `inquiry`, `solution`, `query_date`) VALUES
(2, 4, 'Is it okay, use yuria for onion ?', 'No', '2023-10-03 19:31:34'),
(3, 4, 'What are the solutions for white fungus?', 'Use rice water', '2023-10-03 20:39:50'),
(4, 4, 'Upcoming markets?', 'will update', '2023-10-03 22:12:06'),
(5, 7, 'How are you', 'Fine', '2023-10-04 04:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `username`, `password`, `type`) VALUES
(1, 'Super Admin', 'super@ad.com', 'admin', '1234', 'Admin'),
(3, '', '', 'FO Kasun', '1234', 'FieldOfficer'),
(4, 'Amila Perera', 'amila@gmail.com', 'amila', '1234', 'Farmer'),
(6, 'John', 'john@gmail.com', 'john', '1234', 'Field Officer'),
(7, 'Hirusha', 'abc@gmail.com', 'abcd', '1234', 'Farmer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
