-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 01:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `title`, `category`, `price`, `img`, `description`) VALUES
('Lap001', 'Apple MacBook Air', 'Laptop', 1099.99, 'images\\Products\\Lap001.jpg', '13.3\" w/ Touch ID (Fall 2020) - Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En'),
('Lap002', 'Macbook Air ', 'Laptop', 1000.00, 'images\\Products\\Lap002.jpg', '1.6 GHz Intel Core i5 Dual-Core (13 inch, 8GB RAM, 256GB SSD) Silver (Renewed)\r\n'),
('Lap003', 'ASUS ROG Strix G15', 'Laptop', 1599.99, 'images\\Products\\Lap003.jpg', '15.6\" Gaming Laptop - Eclipse Grey (AMD Ryzen 9 6900HX/512GB SSD /32GB RAM/RTX 3050)'),
('Lap004', 'Acer Nitro 5\r\n', 'Laptop', 800.00, 'images\\Products\\Lap004.jpg\r\n', '15.6\" Gaming Laptop - Black (Intel Core i5-11400H/512GB SSD/8GB RAM/GTX 1650/Windows 11)\r\n'),
('Lap005', 'ASUS TUF Gaming ', 'Laptop', 1499.00, 'images\\Products\\Lap005.jpg\r\n', 'F15 15.6\" Gaming Laptop - Mecha Grey (Intel Core i7-12700H/512GB SSD/16GB RAM/GeForce RTX 4050)\r\n'),
('Lap006', 'Lenovo IdeaPad 3i\r\n', 'Laptop', 899.00, 'images\\Products\\Lap006.jpg\r\n', '15.6\" Laptop - Arctic Grey (Intel Core i7-1255U/512GB SSD/12GB RAM/Windows 11)\r\n'),
('Lap007', 'Dell Inspiron 3511\r\n', 'Laptop', 699.00, 'images\\Products\\Lap007.jpg\r\n', '15.6\" Touchscreen Laptop - Black (Intel Core i5-1135G7/256GB SSD/8GB RAM/Windows 11 S)\r\n'),
('Lap008', 'Apple Macbook Air 13.3In\r\n', 'Laptop', 869.00, 'images\\Products\\Lap008.jpg\r\n', '13.3\" with Retina Display, M1 Chip with 8-Core CPU and 7-Core GPU, 8GB Memory, 256GB SSD, Silver, Late 2020\r\n'),
('Lap009', 'ASUS M413DA-WS51 VivoBook\r\n', 'Laptop', 597.98, 'images\\Products\\Lap009.jpg\r\n', '14\" FHD Ryzen 5 3500U 2.1GHz AMD Radeon Vega 8 Graphics 8GB RAM 256GB SSD Win 10 Home Blue\r\n'),
('Lap010', 'HP 14 HD\r\n', 'Laptop', 404.99, 'images\\Products\\Lap010.jpg\r\n', 'Intel Core i5-1035G1, Intel UHD Graphics, 8GB SDRAM, 256GB SSD, Natural Silver, Windows 10, 14-dq1059wm\r\n'),
('Lap011', 'Lenovo IdeaPad 3 15\" Laptop\r\n', 'Laptop', 504.99, 'images\\Products\\Lap011.jpg\r\n', 'AMD Ryzen 5 3500U Processor, 8GB Memory, 256GB SSD, Windows 10 Home, Almond, 81W1009EUS (Google Classroom Compatible)\r\n'),
('Lap012', 'HP 15.6\" Laptop\r\n', 'Laptop', 325.00, 'images\\Products\\Lap012.jpg\r\n', 'Intel Pentium Silver N5000, 4GB RAM, 128GB SSD, Windows 10 Home with Office , Scarlet Red, 15-dw0083wm\r\n'),
('Lap013', 'ASUS CX1 15.6\" Chromebook-Silver', 'Laptop', 599.00, 'images\\Products\\Lap013.jpg', 'Intel Pentium Silver N6000/128GB eMMC/8GB RAM/Chrome OS'),
('Lap014', 'Acer 16\" Gaming Chromebook - Silver', 'Laptop', 849.99, 'images\\Products\\Lap014.jpg', 'Intel Core i5-1240P/256GB SSD/8GB RAM/Chrome OS'),
('Lap015', 'Acer 317 17” Celeron', 'Laptop', 479.99, 'images\\Products\\Lap015.jpg', 'Intel Celeron N4500/128GB eMMC/4GB RAM/Chrome OS'),
('Lap016', 'Acer Swift Fun Student Laptop', 'Laptop', 499.00, 'images\\Products\\Lap016.jpg', '14\" Fhd Intel Quad-core I5 11th Gen I5-1135g7 16gb Ram 512gb Ssd Intel Iris Xe Graphics Notebook'),
('Lap017', 'HP Envy x360', 'Laptop', 1199.00, 'images\\Products\\Lap017.jpg', 'Touchscreen 2-in-1 Laptop - Silver (Intel Core i5-1240P/1TB SSD/16GB RAM/Windows 11)'),
('Lap018', 'Microsoft Surface Laptop Studio 14.4\"', 'Laptop', 2349.00, 'images\\Products\\Lap018.jpg', 'Platinum (Intel Core i7-11370H/512GB SSD/16GB RAM/Windows 11)'),
('Lap019', 'ASUS Zenbook Pro 15 ', 'Laptop', 1799.00, 'images\\Products\\Lap019.jpg', 'OLED 15.6\" Touchscreen 2-in-1 Laptop - Black (Intel Evo i7-12700H/1TB SSD/16GB RAM'),
('Lap020', 'ASUS ROG Zephyrus G15', 'Laptop', 1999.99, 'images\\Products\\Lap020.jpg', '15.6\" Gaming Laptop (AMD Ryzen 7 6800HS/512GB SSD/16GB RAM/RTX 3060/Win 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
