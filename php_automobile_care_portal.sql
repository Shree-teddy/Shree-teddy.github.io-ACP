-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2022 at 08:30 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_automobile_care_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `brand`, `amount`, `fname`, `status`, `quantity`) VALUES
(1, 'p', 'b', '30000', 'download.jpg', '0', '50');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `vehicle_name`, `service_name`, `charge`, `status`, `report`) VALUES
(1, 'maruti', 'waterwash', '500', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `contact`, `email`, `address`, `username`, `password`, `status`, `report`) VALUES
(1, 'arun', '1231231231', 'arun@gmail.com', 'trichy', 'arun', '123', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_machineries_booking`
--

CREATE TABLE `user_machineries_booking` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_machineries_booking`
--

INSERT INTO `user_machineries_booking` (`id`, `email`, `product_name`, `brand`, `amount`, `fname`, `holder_name`, `contact`, `quantity`, `email1`, `status`, `report`) VALUES
(1, 'arun@gmail.com', 'p', 'b', '30000', 'download.jpg', 'arun', '733393333', '3', 'arun@gmail.com', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_service_booking`
--

CREATE TABLE `user_service_booking` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_service_booking`
--

INSERT INTO `user_service_booking` (`id`, `email`, `service_name`, `vehicle_name`, `charge`, `date`, `description`, `holder_name`, `time`, `contact`, `email1`, `status`, `report`) VALUES
(1, 'arun@gmail.com', 'waterwash', 'maruti', '500', '2022-04-21', 'ddd', 'arun', '10:30', '7339333333', 'arun@gmail.com', '0', '0'),
(2, 'arun@gmail.com', 'waterwash', 'maruti', '500', '2022-04-21', 'd', 'd', 'd', '9876543320', 'arun@gmail.com', '0', '0');
