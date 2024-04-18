-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2023 at 09:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `customer_name` varchar(255) DEFAULT NULL,
  `id` int NOT NULL,
  `bike_name` varchar(255) DEFAULT NULL,
  `bike_brand` varchar(255) DEFAULT NULL,
  `purchase_date` varchar(255) DEFAULT NULL,
  `price` int NOT NULL,
  `quantity` int DEFAULT NULL,
  `total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`customer_name`, `id`, `bike_name`, `bike_brand`, `purchase_date`, `price`, `quantity`, `total`) VALUES
('Gilbert Cabilic', 1, 'Pinarello Dogma F6', 'Pinarello', '2023-11-21', 1000000, 1, NULL),
('Saint Ashley Gatil', 3, 'Legend Road Bike', 'Legend', '2023-11-18', 15000, 5, NULL),
('Gilbert Cabilic', 4, 'Trek Madone ', 'Trek', '2023-11-21', 3000000, 1, NULL),
('Joshua Alboleras', 6, 'Colnago V4Rs', 'Colnago', '2023-11-25', 4000000, 1, NULL),
('Mark Raymond loquzas', 7, 'Wellier Cento10 SL', 'Wellier ', '2023-12-01', 5000000, 2, NULL),
('Jezrel Palero', 9, 'S-Works', 'Specialize', '2023-12-02', 6000000, 1, NULL),
('Joshua Bagaipo', 10, 'Bianchi Nirone 7 Road Bike', 'Bianchi', '2023-12-04', 7000000, 2, NULL),
('John Jasper P. Gatila', 13, 'Sunspeed Mars', 'Sunspeed', '2023-11-30', 10000, 1, NULL),
('Joshua Bagaipo', 17, 'Pinarello Dogma F6', 'Pinarello', '2023-12-28', 1220000000, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
