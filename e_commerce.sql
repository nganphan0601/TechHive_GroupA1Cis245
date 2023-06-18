-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 07:56 PM
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
('Desk001', 'Dell XPS 8940', 'Desktop', 649.99, 'images\\Products\\Desk001.jpg', 'Black (Intel i9-10900K/1TB SSD/64GB RAM/GeForce RTX 3070)'),
('Desk002', 'HP Omen Obelisk', 'Desktop', 3999.99, 'images\\Products\\Desk002.jpg', 'Shadow Black (AMD Ryzen 9 5900X/2TB HDD/512GB SSD/32GB RAM/Radeon RX 6800 XT)'),
('Desk003', 'Lenovo ThinkCentre M920x', 'Desktop', 749.99, 'images\\Products\\Desk003.jpg', 'Black (Intel i7-9700/256GB SSD/16GB RAM/Intel UHD Graphics 630)'),
('Desk004', 'ASUS ROG Strix GL10DH', 'Desktop', 1099.99, 'images\\Products\\Desk004.jpg', 'Iron Grey (AMD Ryzen 7 3700X/1TB HDD/256GB SSD/16GB RAM/GeForce GTX 1660 Ti)'),
('Desk005', 'Acer Predator Orion 9000', 'Desktop', 3990.00, 'images\\Products\\Desk005.jpg', 'Black (Intel i9-10980XE/2TB HDD/1TB SSD/64GB RAM/GeForce RTX 3080)'),
('Desk006', 'Apple iMac 27\"', 'Desktop', 2449.99, 'images\\Products\\Desk006.jpg', 'Silver (Intel i7-10700K/1TB SSD/32GB RAM/Radeon Pro 5700 XT)'),
('Desk007', 'CyberPowerPC Gamer Xtreme VR', 'Desktop', 1879.99, 'images\\Products\\Desk007.jpg', 'Black (Intel i5-10400F/1TB HDD/240GB SSD/16GB RAM/GeForce RTX 2060)'),
('Desk008', 'Alienware Aurora R10', 'Desktop', 1064.00, 'images\\Products\\Desk008.jpg', 'Lunar Light (AMD Ryzen 9 3900/1TB SSD/32GB RAM/GeForce RTX 3070)'),
('Lap001', 'Apple MacBook Air', 'Laptop', 1099.99, 'images\\Products\\Lap001.jpg', '13.3\" w/ Touch ID (Fall 2020) - Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En'),
('Lap002', 'Macbook Air ', 'Laptop', 1000.00, 'images\\Products\\Lap002.jpg', '1.6 GHz Intel Core i5 Dual-Core (13 inch, 8GB RAM, 256GB SSD) Silver (Renewed)\r\n'),
('Lap003', 'ASUS ROG Strix G15', 'Laptop', 1599.99, 'images\\Products\\Lap003.jpg', '15.6\" Gaming Laptop - Eclipse Grey (AMD Ryzen 9 6900HX/512GB SSD /32GB RAM/RTX 3050)'),
('Lap004', 'Acer Nitro 5\r\n', 'Laptop', 800.00, 'images\\Products\\Lap004.jpg\r\n', '15.6\" Gaming Laptop - Black (Intel Core i5-11400H/512GB SSD/8GB RAM/GTX 1650/Windows 11)\r\n'),
('Lap005', 'ASUS TUF Gaming', 'Laptop', 1499.00, 'images\\Products\\Lap005.jpg\r\n', 'F15 15.6\" Gaming Laptop - Mecha Grey (Intel Core i7-12700H/512GB SSD/16GB RAM/GeForce RTX 4050)\r\n'),
('Lap006', 'Lenovo IdeaPad 3i\r\n', 'Laptop', 899.00, 'images\\Products\\Lap006.jpg\r\n', '15.6\" Laptop - Arctic Grey (Intel Core i7-1255U/512GB SSD/12GB RAM/Windows 11)\r\n'),
('Lap007', 'Dell Inspiron 3511\r\n', 'Laptop', 699.00, 'images\\Products\\Lap007.jpg\r\n', '15.6\" Touchscreen Laptop - Black (Intel Core i5-1135G7/256GB SSD/8GB RAM/Windows 11 S)\r\n'),
('Lap008', 'Apple Macbook Air 13.3In\r\n', 'Laptop', 869.00, 'images\\Products\\Lap008.jpg\r\n', '13.3\" with Retina Display, M1 Chip with 8-Core CPU and 7-Core GPU, 8GB Memory, 256GB SSD, Silver, Late 2020\r\n'),
('Lap009', 'ASUS M413DA-WS51 VivoBook\r\n', 'Laptop', 597.98, 'images\\Products\\Lap009.jpg\r\n', '14\" FHD Ryzen 5 3500U 2.1GHz AMD Radeon Vega 8 Graphics 8GB RAM 256GB SSD Win 10 Home Blue\r\n'),
('Lap010', 'HP 14 HD\r\n', 'Laptop', 404.99, 'images\\Products\\Lap010.jpg\r\n', 'Intel Core i5-1035G1, Intel UHD Graphics, 8GB SDRAM, 256GB SSD, Natural Silver, Windows 10, 14-dq1059wm\r\n'),
('Lap011', 'Lenovo IdeaPad 3 15\" Laptop\r\n', 'Laptop', 504.99, 'images\\Products\\Lap011.jpg\r\n', 'AMD Ryzen 5 3500U Processor, 8GB Memory, 256GB SSD, Windows 10 Home, Almond, 81W1009EUS (Google Classroom Compatible)\r\n'),
('Lap012', 'HP 15.6\" Laptop\r\n', 'Laptop', 325.00, 'images\\Products\\Lap012.jpg\r\n', 'Intel Pentium Silver N5000, 4GB RAM, 128GB SSD, Windows 10 Home with Office , Scarlet Red, 15-dw0083wm\r\n'),
('Lap013', 'ASUS CX1 15.6\" Chromebook-Silver', 'Laptop', 599.00, 'images\\Products\\Lap013.jpg', 'Intel Pentium Silver N6000/128GB eMMC/8GB RAM/Chrome OS'),
('Lap014', 'Acer 16\" Gaming Chromebook - Silver', 'Laptop', 849.99, 'images\\Products\\Lap014.jpg', 'Intel Core i5-1240P/256GB SSD/8GB RAM/Chrome OS'),
('Lap015', 'Acer 317 17 Celeron', 'Laptop', 479.99, 'images\\Products\\Lap015.jpg', 'Intel Celeron N4500/128GB eMMC/4GB RAM/Chrome OS'),
('Lap016', 'Acer Swift Fun Student Laptop', 'Laptop', 499.00, 'images\\Products\\Lap016.jpg', '14\" Fhd Intel Quad-core I5 11th Gen I5-1135g7 16gb Ram 512gb Ssd Intel Iris Xe Graphics Notebook'),
('Lap017', 'HP Envy x360', 'Laptop', 1199.00, 'images\\Products\\Lap017.jpg', 'Touchscreen 2-in-1 Laptop - Silver (Intel Core i5-1240P/1TB SSD/16GB RAM/Windows 11)'),
('Lap018', 'Microsoft Surface Laptop Studio 14.4\"', 'Laptop', 2349.00, 'images\\Products\\Lap018.jpg', 'Platinum (Intel Core i7-11370H/512GB SSD/16GB RAM/Windows 11)'),
('Lap019', 'ASUS Zenbook Pro 15 ', 'Laptop', 1799.00, 'images\\Products\\Lap019.jpg', 'OLED 15.6\" Touchscreen 2-in-1 Laptop - Black (Intel Evo i7-12700H/1TB SSD/16GB RAM'),
('Lap020', 'ASUS ROG Zephyrus G15', 'Laptop', 1999.99, 'images\\Products\\Lap020.jpg', '15.6\" Gaming Laptop (AMD Ryzen 7 6800HS/512GB SSD/16GB RAM/RTX 3060/Win 11'),
('P001', 'Apple Iphone', 'Phone', 1299.00, 'images\\Products\\p001.jpg', 'Apple\'s iPhone series is renowned for its premium build quality, smooth performance, and integration with the iOS ecosystem. iPhones offer a wide range of features, including advanced camera systems, Face ID, and access to the App Store.'),
('P002', 'Samsung', 'Phone', 1199.00, 'images\\Products\\p002.jpg', 'Samsung\'s Galaxy series is known for its cutting-edge features, vibrant displays, and powerful performance. They offer a wide range of models to suit various budgets, from flagship devices with top-of-the-line specifications to more affordable options.'),
('P003', 'Google pixel', 'Phone', 999.00, 'images\\Products\\p003.jpg', 'Google\'s Pixel series is renowned for its exceptional camera quality, clean Android experience, and seamless integration with Google services. Pixel phones often receive early software updates and come with features like the Google Assistant.'),
('P004', 'OnePlus', 'Phone', 399.00, 'images\\Products\\p004.jpg', 'OnePlus devices are known for offering flagship-level specifications at relatively affordable prices. They are praised for their smooth performance, near-stock Android experience, and OxygenOS software, which includes useful customizations and optimizations.'),
('P005', 'Nothing Phone', 'Phone', 649.00, 'images\\Products\\p005.jpg', 'It has flat sides, similar to the iPhone 12. It has an IP53 splash, water and dust resistance rating. The design features 900 small LEDs on the back which uses the Glyph Interface to make rear LEDs light up in sync with the phone sounds.'),
('P006', 'Huawei', 'Phone', 1000.00, 'images\\Products\\p006.jpg', 'Huawei phones are known for their advanced technology, including impressive camera capabilities and long-lasting battery life. They often feature premium designs, vibrant displays, and Huawei\'s custom EMUI software.'),
('P007', 'Sony', 'Phone', 999.00, 'images\\Products\\p007.jpg', 'Sony\'s Xperia series combines sleek design with advanced audiovisual capabilities. They often feature high-resolution displays, water and dust resistance, and Sony\'s expertise in camera and audio technology.'),
('P008', 'Motorola', 'Phone', 700.00, 'images\\Products\\p008.jpg', 'Motorola offers a range of smartphones known for their near-stock Android experience, long battery life, and attractive price points. They often provide reliable performance and features such as water resistance and Moto Actions.'),
('Tab001', 'Apple iPad Pro 12.9\" (5th Generation)', 'Tablet', 1560.00, 'images\\Products\\Tab001.jpg', 'Space Gray (M1/2TB SSD/16GB RAM)'),
('Tab002', 'Samsung Galaxy Tab S8 Ultra', 'Tablet', 1479.99, 'images\\Products\\Tab002.jpg', 'Silver (Snapdragon 8cx Gen 3/1TB SSD/16GB RAM)'),
('Tab003', 'Microsoft Surface Pro 8', 'Tablet', 1319.99, 'images\\Products\\Tab003.jpg', 'Matte Black (Intel i7-1185G7/1TB SSD/32GB RAM)'),
('Tab004', 'Amazon Fire HD 10 Plus', 'Tablet', 255.00, 'images\\Products\\Tab004.jpg', 'Slate (Mediatek MT8183/64GB eMMC/4GB RAM)'),
('Tab005', 'Lenovo Tab P12 Pro', 'Tablet', 655.00, 'images\\Products\\Tab005.jpg', 'Storm Grey (Snapdragon 870/256GB SSD/8GB RAM)'),
('Tab006', 'Google Pixel Slate', 'Tablet', 699.98, 'images\\Products\\Tab006.jpg', 'Midnight Blue (Intel i7-8500Y/256GB SSD/16GB RAM)'),
('Tab007', 'Huawei MatePad Pro', 'Tablet', 1258.00, 'images\\Products\\Tab007.jpg', 'Forest Green (Kirin 9000E/512GB SSD/8GB RAM)'),
('Tab008', 'ASUS ZenPad 3S 10', 'Tablet', 493.00, 'images\\Products\\Tab008.jpg', 'Glacier Silver (Mediatek MT8176/64GB eMMC/4GB RAM)');

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
