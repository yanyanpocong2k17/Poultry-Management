-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 09:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `firstname` varchar(220) NOT NULL,
  `middlename` varchar(220) NOT NULL,
  `contactno` int(20) NOT NULL,
  `address` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `userid`, `lastname`, `firstname`, `middlename`, `contactno`, `address`) VALUES
(1, 25, 'pocong', 'adqwd', 'fef', 34, 'mobod'),
(4, 27, 'Amboang', 'John Kevin', 'Emperio', 2147483647, 'P-2 Buenavista Oroquieta');

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE `eggs` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flocksid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `smalleggs` int(11) NOT NULL,
  `mediumeggs` int(11) NOT NULL,
  `largeeggs` int(11) NOT NULL,
  `spoiledeggs` int(11) NOT NULL,
  `brokeneggs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`id`, `userid`, `flocksid`, `timestamp`, `smalleggs`, `mediumeggs`, `largeeggs`, `spoiledeggs`, `brokeneggs`) VALUES
(11, 25, 2, '2019-01-01 01:00:00', 2, 32, 3, 32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flocksid` int(11) NOT NULL,
  `types` varchar(250) NOT NULL,
  `quality` int(20) NOT NULL,
  `unit` int(20) NOT NULL,
  `timestamp` datetime NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `userid`, `flocksid`, `types`, `quality`, `unit`, `timestamp`, `price`) VALUES
(19, 25, 2, 'Cracked Corn', 23, 32, '2019-01-01 01:00:00', 32);

-- --------------------------------------------------------

--
-- Table structure for table `flocks`
--

CREATE TABLE `flocks` (
  `flocksid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `breed` varchar(250) NOT NULL,
  `rooster` int(20) NOT NULL,
  `hen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flocks`
--

INSERT INTO `flocks` (`flocksid`, `userid`, `breed`, `rooster`, `hen`) VALUES
(1, 25, 'bisaya', 3, 23),
(2, 25, 'texas', 34, 24),
(3, 25, 'bisaya', 2, 23);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `unit` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `userid`, `description`, `unit`, `price`) VALUES
(1, 25, 'texas', 23, 23),
(2, 25, 'bisaya', 5, 87),
(3, 25, 'bisaya', 23, 23);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flocksid` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `timestamp` datetime NOT NULL,
  `amout` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `userid`, `flocksid`, `type`, `timestamp`, `amout`) VALUES
(8, 25, 2, 'parisitamol', '2019-01-01 01:00:00', 23),
(9, 25, 1, 'Live vaccine ', '2019-01-01 01:00:00', 1),
(10, 25, 3, 'Killed vaccine ', '2019-01-01 01:00:00', 299);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `userid`, `customer_id`, `timestamp`) VALUES
(2, 25, 1, '2019-01-01 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `salesitem`
--

CREATE TABLE `salesitem` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesitem`
--

INSERT INTO `salesitem` (`id`, `userid`, `sale_id`, `item_id`, `customer_id`, `date`, `quantity`, `price`) VALUES
(2, 25, 2, 1, 1, '2019-01-01', 23, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(25, '2', '2', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(26, 'wew', '3', '182be0c5cdcd5072bb1864cdee4d3d6e'),
(27, 'jdcarpo', 'jdcarpo@gmail.com', '4bbbc5dd3b464b9c4fd226dfc4b9eda7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `flocksid` (`flocksid`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `feeds_ibfk_2` (`flocksid`);

--
-- Indexes for table `flocks`
--
ALTER TABLE `flocks`
  ADD PRIMARY KEY (`flocksid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `flocksid` (`flocksid`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `salesitem`
--
ALTER TABLE `salesitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `salesitem_ibfk_2` (`sale_id`),
  ADD KEY `salesitem_ibfk_3` (`item_id`),
  ADD KEY `salesitem_ibfk_4` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eggs`
--
ALTER TABLE `eggs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `flocks`
--
ALTER TABLE `flocks`
  MODIFY `flocksid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salesitem`
--
ALTER TABLE `salesitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `eggs`
--
ALTER TABLE `eggs`
  ADD CONSTRAINT `eggs_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `eggs_ibfk_2` FOREIGN KEY (`flocksid`) REFERENCES `flocks` (`flocksid`);

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feeds_ibfk_2` FOREIGN KEY (`flocksid`) REFERENCES `flocks` (`flocksid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flocks`
--
ALTER TABLE `flocks`
  ADD CONSTRAINT `flocks_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `medication_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `medication_ibfk_2` FOREIGN KEY (`flocksid`) REFERENCES `flocks` (`flocksid`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `salesitem`
--
ALTER TABLE `salesitem`
  ADD CONSTRAINT `salesitem_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `salesitem_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `sale` (`sale_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salesitem_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salesitem_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
