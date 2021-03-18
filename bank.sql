-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 08:48 PM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `accno` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `acc_type` varchar(20) NOT NULL,
  `status` char(15) NOT NULL,
  `balance` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`accno`, `name`, `address`, `phone`, `email`, `aadhar_no`, `acc_type`, `status`, `balance`) VALUES
(10101, 'Ravi Chaudhary', 'Rajaji nagar,Blr', '9081234567', 'chacha@gmail.com', '9034 2313 4545', 'saving', 'inactive', -104.00),
(706641, 'Sourya Singh', 'GB Road ,Ahmedabad', '90765434577', 'singh@gmail.com', '6042 4531 2678', 'debit', 'active', 9846.00),
(807989, 'Helly shah', 'Magadi Road,blr', '6895347890', 'hell@gmail.com', '4040 2929 1919', 'debit', 'active', 21600.00),
(5687980, 'priya', 'JP nagar, Blr', '90767885778', 'priya@gmail.com', '9044 3216 7123', 'saving', 'debit', 8100.00),
(5789999, 'Lakshya', 'kirani road', '7885690006', 'luv@gmail.com', '6042 4531 2222', 'debit', 'active', 10200.00),
(6589032, 'jojo', 'Electronics city,blr', '567890900', 'ghj@gmail.com', '9087 788 6622', 'saving', 'active', 3800.00),
(6589077, 'RAJ', 'Balajinagar,kerala', '90767885000', 'raj@gmail.com', '8909 7060 1212', 'Fixed', 'active', 23600.00),
(7689089, 'Jaya', 'station Road ,Blr', '6790-08765', 'jojo@gmail.com', '7978 5551 4466', 'saving', 'active', 16000.00),
(8999970, 'riya', 'jayanagar', '9086532345', 'riya12@gmail.com', '9087 788 666', 'saving', 'debit', 3154.00),
(67897087, 'GD sher', 'ramanagaer', '65891900026', 'gd2gmail.com', '4568 6788 2134', 'debit', 'inactive', 400.00);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `amount`, `date_time`) VALUES
('RAJ', 'Helly shah', 800, '2021-03-18 00:00:00'),
('Lakshya', 'riya', 800, '2021-03-18 00:00:00'),
('Lakshya', 'Helly shah', 800, '2021-03-18 22:28:51'),
('Helly shah', 'Ravi Chaudhary', 4000, '2021-03-18 23:58:11'),
('Ravi Chaudhary', 'jojo', 500, '2021-03-19 00:47:02'),
('priya', 'Jaya', 1000, '2021-03-19 01:04:42');

--
-- Triggers `transaction`
--
DELIMITER $$
CREATE TRIGGER `get_time` BEFORE INSERT ON `transaction` FOR EACH ROW set new.date_time=now()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`accno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `accno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67897088;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
