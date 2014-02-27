-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2014 at 03:26 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocrmdb`
--
CREATE DATABASE IF NOT EXISTS `ocrmdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ocrmdb`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `Account_name` text NOT NULL,
  `Account_site` text NOT NULL,
  `phone` text NOT NULL,
  `fax` text NOT NULL,
  `Website` text NOT NULL,
  `Parent_Account` text NOT NULL,
  `Billing_street` text NOT NULL,
  `Shipping_Street` text NOT NULL,
  `Billing_City` text NOT NULL,
  `Shipping_City` text NOT NULL,
  `Billing_Code` text NOT NULL,
  `Shipping_Code` text NOT NULL,
  `Billing_Country` text NOT NULL,
  `Shipping_Country` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `call_logs`
--

CREATE TABLE IF NOT EXISTS `call_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `call_type` int(11) NOT NULL,
  `call_purpose` int(11) NOT NULL,
  `call_from_to_source` varchar(50) NOT NULL,
  `call_from_to_id` int(11) NOT NULL,
  `related_to_source` varchar(50) NOT NULL,
  `related_to_id` int(11) NOT NULL,
  `call_start_time` datetime NOT NULL,
  `call_duration` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `billable` tinyint(1) NOT NULL,
  `call_result` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `Campaign_Owner` text NOT NULL,
  `Type` text NOT NULL,
  `Campaign_Name` text NOT NULL,
  `status` text NOT NULL,
  `Start_Date` text NOT NULL,
  `End_Date` text NOT NULL,
  `Expected_Revenue` text NOT NULL,
  `Budgeted_Cost` text NOT NULL,
  `Actual_Cost` text NOT NULL,
  `Expected_Response` text NOT NULL,
  `Num_Sent` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE IF NOT EXISTS `case` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `Product_Name` text NOT NULL,
  `Case_Owner` text NOT NULL,
  `Type` text NOT NULL,
  `Status` text NOT NULL,
  `Case_Origin` text NOT NULL,
  `Priority` text NOT NULL,
  `Related_To` text NOT NULL,
  `Case_Reason` text NOT NULL,
  `Account_Name` text NOT NULL,
  `Subject` text NOT NULL,
  `Potential_Name` text NOT NULL,
  `Report_by` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `Description` text NOT NULL,
  `Internal_Comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `First_name` text NOT NULL,
  `last_name` text NOT NULL,
  `Account_name` text NOT NULL,
  `Vendor_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `Department` text NOT NULL,
  `Home_Phone` text NOT NULL,
  `Report_to` text NOT NULL,
  `Date_Of_Birth` text NOT NULL,
  `mobile_phone` text NOT NULL,
  `Fax` text NOT NULL,
  `email_opt_out` text NOT NULL,
  `Skype_ID` text NOT NULL,
  `Add_to_Quick_Book` text NOT NULL,
  `Secondary_email` text NOT NULL,
  `twitter` text NOT NULL,
  `Mailing_Street` text NOT NULL,
  `Other_Street` text NOT NULL,
  `Mailing_city` text NOT NULL,
  `other_city` text NOT NULL,
  `Mailing_province` text NOT NULL,
  `Other_Province` text NOT NULL,
  `Mailing_Postal_Code` text NOT NULL,
  `Other_Postal_Code` text NOT NULL,
  `Mailing_Country` text NOT NULL,
  `Other_Country` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datatype`
--

CREATE TABLE IF NOT EXISTS `datatype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `type_data` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `datatype`
--

INSERT INTO `datatype` (`id`, `type_name`, `handle`, `type_data`, `last_modified`) VALUES
(1, 'text', 'text', 'varchar', '2013-09-11 11:24:03'),
(2, 'checkbox', 'checkbox', 'boolean', '2013-09-11 11:26:00'),
(3, 'integer', 'integer', 'int', '2013-09-11 12:24:00'),
(4, 'percent', 'percent', 'int', '2013-09-11 13:27:00'),
(5, 'decimal', 'decimal', 'float', '2013-09-11 15:31:00'),
(6, 'currency', 'currency', 'float', '2013-09-11 13:31:22'),
(7, 'date', 'date', 'date', '0000-00-00 00:00:00'),
(8, 'datetime', 'datetime', 'datetime', '0000-00-00 00:00:00'),
(9, 'email', 'email', 'varchar', '0000-00-00 00:00:00'),
(10, 'phone', 'phone', 'int', '0000-00-00 00:00:00'),
(11, 'picklist', 'picklist', 'varchar', '0000-00-00 00:00:00'),
(12, 'url', 'url', 'varchar', '0000-00-00 00:00:00'),
(13, 'textarea', 'textarea', 'text', '0000-00-00 00:00:00'),
(14, 'multiselect pick list', 'multiselect pick list', 'text', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_checkbox`
--

CREATE TABLE IF NOT EXISTS `datatype_checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(50) NOT NULL,
  `is_selected` tinyint(1) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `datatype_checkbox`
--

INSERT INTO `datatype_checkbox` (`id`, `label_name`, `is_selected`, `last_modified`) VALUES
(1, 'email opt out', 0, '2014-01-05 04:59:46'),
(2, 'Add to Quick Book', 0, '2014-01-05 05:02:27'),
(3, 'Send Notification email', 0, '2014-01-05 17:33:34'),
(4, 'Recurring Activity', 0, '2014-01-05 17:34:15'),
(5, 'Send Notification Email', 0, '2014-01-05 18:10:17'),
(6, 'Recurring Activity', 0, '2014-01-05 18:10:40'),
(7, 'Product Active', 1, '2014-01-05 18:51:32'),
(8, 'Taxable', 1, '2014-01-06 10:14:16'),
(9, 'Active', 0, '2014-01-06 16:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_currency`
--

CREATE TABLE IF NOT EXISTS `datatype_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `length` int(11) NOT NULL,
  `rounding_option` varchar(100) NOT NULL,
  `decimal_place` int(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datatype_date`
--

CREATE TABLE IF NOT EXISTS `datatype_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `datatype_date`
--

INSERT INTO `datatype_date` (`id`, `label_name`, `last_modified`) VALUES
(1, 'Closing Dat', '2014-01-05 07:16:12'),
(2, 'Start Date', '2014-01-05 07:51:07'),
(3, 'End Date', '2014-01-05 07:51:35'),
(4, 'Due  Date', '2014-01-05 17:11:43'),
(5, 'Sales Start', '2014-01-06 04:43:37'),
(6, 'Sales End D', '2014-01-06 10:07:09'),
(7, 'Support Sta', '2014-01-06 10:07:58'),
(8, 'Support Exp', '2014-01-06 10:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_datetime`
--

CREATE TABLE IF NOT EXISTS `datatype_datetime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `datatype_datetime`
--

INSERT INTO `datatype_datetime` (`id`, `label_name`, `last_modified`) VALUES
(1, 'Date Of Bir', '2014-01-05 04:54:55'),
(2, 'Start Date ', '2014-01-05 18:06:41'),
(3, 'End Date Ti', '2014-01-05 18:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_decimal`
--

CREATE TABLE IF NOT EXISTS `datatype_decimal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `length` int(11) NOT NULL,
  `decimal_place` int(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `datatype_decimal`
--

INSERT INTO `datatype_decimal` (`id`, `label_name`, `length`, `decimal_place`, `last_modified`) VALUES
(1, 'Amount', 5, 2, '2014-01-05 07:10:26'),
(2, 'Expected re', 10, 2, '2014-01-05 07:30:21'),
(3, 'Expected Re', 10, 2, '2014-01-05 09:35:06'),
(4, 'Budgeted Co', 10, 2, '2014-01-05 09:35:40'),
(5, 'Actual Cost', 10, 2, '2014-01-05 09:40:55'),
(6, 'Unit Price', 15, 3, '2014-01-06 10:11:14'),
(7, 'Commission ', 15, 3, '2014-01-06 10:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_email`
--

CREATE TABLE IF NOT EXISTS `datatype_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `datatype_email`
--

INSERT INTO `datatype_email` (`id`, `label_name`, `last_modified`) VALUES
(1, 'email', '2014-01-04 10:56:01'),
(2, 'email', '2014-01-04 12:45:55'),
(3, 'Secondary e', '2014-01-05 05:03:05'),
(4, 'Email', '2014-01-06 11:41:26'),
(5, 'Email', '2014-01-06 12:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_integer`
--

CREATE TABLE IF NOT EXISTS `datatype_integer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integer_name` varchar(11) NOT NULL,
  `section_name` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `datatype_integer`
--

INSERT INTO `datatype_integer` (`id`, `integer_name`, `section_name`, `length`, `last_modified`) VALUES
(1, 'age', 0, 3, '2014-01-04 10:42:00'),
(2, 'Num Sent', 0, 10, '2014-01-05 09:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_multiselect_picklist`
--

CREATE TABLE IF NOT EXISTS `datatype_multiselect_picklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(50) NOT NULL,
  `list_value` text NOT NULL,
  `use_first_asdefault` tinyint(1) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datatype_percent`
--

CREATE TABLE IF NOT EXISTS `datatype_percent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datatype_phone`
--

CREATE TABLE IF NOT EXISTS `datatype_phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(20) NOT NULL,
  `length` int(11) NOT NULL,
  `last_modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `datatype_phone`
--

INSERT INTO `datatype_phone` (`id`, `label_name`, `length`, `last_modified`) VALUES
(1, 'phone', 12, 2014),
(2, 'fax', 12, 2014),
(3, 'mobile', 12, 2014),
(4, 'phone', 12, 2014),
(5, 'fax', 12, 2014),
(6, 'phone', 12, 2014),
(7, 'Home Phone', 12, 2014),
(8, 'mobile phone', 14, 2014),
(9, 'Fax', 14, 2014),
(10, 'Phone', 12, 2014),
(11, 'Phone', 12, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `datatype_picklist`
--

CREATE TABLE IF NOT EXISTS `datatype_picklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(20) NOT NULL,
  `list_value` text NOT NULL,
  `use_first_asdefault` tinyint(1) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `datatype_picklist`
--

INSERT INTO `datatype_picklist` (`id`, `label_name`, `list_value`, `use_first_asdefault`, `last_modified`) VALUES
(1, 'Stage', '-None-,some1,some2', 0, '2014-01-05 07:18:47'),
(2, 'Type', '-none-,some1,some2', 0, '2014-01-05 07:20:41'),
(3, 'Lead Source', '-none-,pick1,pick2', 0, '2014-01-05 07:31:38'),
(4, 'Type', '-none-,type1,type2', 0, '2014-01-05 07:45:42'),
(5, 'status', '-none-, status1,status2', 0, '2014-01-05 07:47:09'),
(6, 'Status', 'Not Started, Finished, Going on', 0, '2014-01-05 17:31:22'),
(7, 'Priority', 'high, medium, low', 0, '2014-01-05 17:32:34'),
(8, 'Status', 'Draft, Solved, Pending', 0, '2014-01-05 18:37:37'),
(9, 'Manufacturer', '-none-,manufact1, mnufact2', 0, '2014-01-06 04:39:39'),
(10, 'Product Category', '-none-,category1, category2', 0, '2014-01-06 04:41:02'),
(11, 'Usage Unit', 'Box1, Box2', 0, '2014-01-06 10:19:44'),
(12, 'Type', '-none-, type1, type2', 0, '2014-01-06 10:39:53'),
(13, 'Status', 'New, status1, status2', 0, '2014-01-06 10:43:22'),
(14, 'Case Origin', '-none-, case1, case2,case3', 0, '2014-01-06 10:51:33'),
(15, 'Priority', '-none-,high, medium, low', 0, '2014-01-06 10:52:31'),
(16, 'Case Reason', '-none-, reason1, reason2', 0, '2014-01-06 11:02:38'),
(17, 'GL Account', '-none-,Sales-Software, Sales-Hardware', 0, '2014-01-06 13:00:18'),
(18, 'Pricing Model', '-none-,model1, model2', 0, '2014-01-06 16:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_text`
--

CREATE TABLE IF NOT EXISTS `datatype_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(50) NOT NULL,
  `textsize` int(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `datatype_text`
--

INSERT INTO `datatype_text` (`id`, `label_name`, `textsize`, `last_modified`) VALUES
(1, 'name', 100, '2014-01-04 10:42:45'),
(2, 'Compnay name', 200, '2014-01-04 10:55:11'),
(3, 'title', 100, '2014-01-04 10:55:38'),
(4, 'street', 200, '2014-01-04 11:43:11'),
(5, 'city', 100, '2014-01-04 11:43:41'),
(6, 'province', 200, '2014-01-04 11:44:05'),
(7, 'Account name', 100, '2014-01-04 12:11:12'),
(8, 'Account site', 200, '2014-01-04 12:12:57'),
(9, 'Billing street', 100, '2014-01-04 12:32:33'),
(10, 'Shipping Street', 200, '2014-01-04 12:32:48'),
(11, 'Billing City', 100, '2014-01-04 12:33:15'),
(12, 'Shipping City', 100, '2014-01-04 12:33:38'),
(13, 'Billing Code', 100, '2014-01-04 12:34:05'),
(14, 'Shipping Code', 100, '2014-01-04 12:34:23'),
(15, 'Billing Country', 100, '2014-01-04 12:34:49'),
(16, 'Shipping Country', 100, '2014-01-04 12:35:07'),
(17, 'First name', 100, '2014-01-04 12:44:32'),
(18, 'last name', 100, '2014-01-04 12:44:59'),
(19, 'Account name', 100, '2014-01-04 12:45:17'),
(20, 'Vendor name', 100, '2014-01-04 12:45:33'),
(21, 'Department', 100, '2014-01-04 12:52:10'),
(22, 'Report to', 100, '2014-01-04 12:55:30'),
(23, 'Skype ID', 50, '2014-01-05 05:01:12'),
(24, 'twitter', 100, '2014-01-05 05:03:31'),
(25, 'Mailing Street', 100, '2014-01-05 05:04:59'),
(26, 'Other Street', 100, '2014-01-05 05:05:30'),
(27, 'Mailing city', 100, '2014-01-05 05:14:44'),
(28, 'other city', 100, '2014-01-05 05:15:06'),
(29, 'Mailing province', 100, '2014-01-05 05:15:54'),
(30, 'Other Province', 100, '2014-01-05 05:16:27'),
(31, 'Mailing Postal Code', 20, '2014-01-05 06:46:29'),
(32, 'Other Postal Code', 20, '2014-01-05 06:48:21'),
(33, 'Mailing Country', 100, '2014-01-05 06:51:10'),
(34, 'Other Country', 100, '2014-01-05 06:51:35'),
(35, 'Potential Owner', 100, '2014-01-05 07:08:58'),
(36, 'Potential Name', 20, '2014-01-05 07:11:09'),
(37, 'Account Name', 20, '2014-01-05 07:17:32'),
(38, 'Probabilty', 100, '2014-01-05 07:22:58'),
(39, 'Next Step', 200, '2014-01-05 07:23:28'),
(40, 'Campaign Source', 200, '2014-01-05 07:32:23'),
(41, 'Contact Name', 100, '2014-01-05 07:32:57'),
(42, 'Campaign Owner', 100, '2014-01-05 07:44:23'),
(43, 'Campaign Name', 20, '2014-01-05 07:46:21'),
(44, 'Task Owner', 100, '2014-01-05 17:10:01'),
(45, 'Subject', 200, '2014-01-05 17:10:40'),
(46, 'Subject', 200, '2014-01-05 17:10:59'),
(47, 'Event Owner', 100, '2014-01-05 17:48:45'),
(48, 'Subject', 200, '2014-01-05 17:51:06'),
(49, 'Solution Title', 500, '2014-01-05 18:23:55'),
(50, 'Solution Owner', 100, '2014-01-05 18:32:13'),
(51, 'Product Name', 100, '2014-01-05 18:38:24'),
(52, 'Product Owner', 100, '2014-01-05 18:48:42'),
(53, 'Product Name', 100, '2014-01-05 18:49:00'),
(54, 'Product Code', 100, '2014-01-05 18:49:41'),
(55, 'Vendor Name', 100, '2014-01-05 18:50:32'),
(56, 'Qty Ordered', 10, '2014-01-06 10:20:55'),
(57, 'Qty in Stock', 10, '2014-01-06 10:22:53'),
(58, 'Reorder Level', 10, '2014-01-06 10:25:03'),
(59, 'Handler', 100, '2014-01-06 10:25:31'),
(60, 'Qty Demand', 100, '2014-01-06 10:26:21'),
(61, 'Product Name', 100, '2014-01-06 10:37:57'),
(62, 'Case Owner', 100, '2014-01-06 10:38:58'),
(63, 'Related To', 100, '2014-01-06 10:55:27'),
(64, 'Account Name', 100, '2014-01-06 11:16:12'),
(65, 'Subject', 500, '2014-01-06 11:39:41'),
(66, 'Potential Name', 100, '2014-01-06 11:40:10'),
(67, 'Report by', 100, '2014-01-06 11:40:40'),
(68, 'Vendor Owner', 100, '2014-01-06 12:48:34'),
(69, 'Vendor Name', 100, '2014-01-06 12:48:56'),
(70, 'Category', 100, '2014-01-06 13:00:53'),
(71, 'Street', 200, '2014-01-06 13:14:26'),
(72, 'City', 200, '2014-01-06 13:14:52'),
(73, 'Province', 100, '2014-01-06 13:26:22'),
(74, 'Postal Code', 20, '2014-01-06 13:26:47'),
(75, 'Country', 50, '2014-01-06 13:27:09'),
(76, 'Price Book Owner', 100, '2014-01-06 16:33:52'),
(77, 'Price Book Name', 100, '2014-01-06 16:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_textarea`
--

CREATE TABLE IF NOT EXISTS `datatype_textarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `datatype_textarea`
--

INSERT INTO `datatype_textarea` (`id`, `label_name`, `last_modified`) VALUES
(1, 'Description', '2014-01-04 12:05:36'),
(2, 'Description', '2014-01-04 12:39:10'),
(3, 'Description', '2014-01-05 06:54:20'),
(4, 'Description', '2014-01-05 07:34:01'),
(5, 'Expected Response', '2014-01-05 09:42:20'),
(6, 'Description', '2014-01-05 09:43:39'),
(7, 'Description', '2014-01-05 17:35:13'),
(8, 'Venue', '2014-01-05 18:08:05'),
(9, 'Description', '2014-01-05 18:11:11'),
(10, 'Question', '2014-01-05 18:39:33'),
(11, 'Answer', '2014-01-05 18:39:51'),
(12, 'Tax', '2014-01-06 10:13:19'),
(13, 'Description', '2014-01-06 10:27:45'),
(14, 'Description', '2014-01-06 12:21:08'),
(15, 'Internal Comments', '2014-01-06 12:21:28'),
(16, 'Description', '2014-01-06 13:27:57'),
(17, 'Description', '2014-01-06 16:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `datatype_url`
--

CREATE TABLE IF NOT EXISTS `datatype_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(11) NOT NULL,
  `length` int(11) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `datatype_url`
--

INSERT INTO `datatype_url` (`id`, `label_name`, `length`, `last_modified`) VALUES
(1, 'Website', 1000, '2014-01-04 10:57:24'),
(2, 'Website', 200, '2014-01-04 12:14:53'),
(3, 'Parent Acco', 100, '2014-01-04 12:16:11'),
(4, 'Website', 1000, '2014-01-06 12:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `venue` varchar(500) NOT NULL,
  `Event_Owner` text NOT NULL,
  `Send_Notification_Email` text NOT NULL,
  `Recurring_Activity` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `field_data`
--

CREATE TABLE IF NOT EXISTS `field_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Module_field_id` int(11) NOT NULL,
  `module_field_data` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `field_deny_permission`
--

CREATE TABLE IF NOT EXISTS `field_deny_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module_field_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `lat_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gvh`
--

CREATE TABLE IF NOT EXISTS `gvh` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `look_up`
--

CREATE TABLE IF NOT EXISTS `look_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentModId` int(11) NOT NULL,
  `parentFieldId` varchar(200) NOT NULL,
  `parentLookupFieldId` varchar(500) NOT NULL,
  `lookUpModId` int(11) NOT NULL,
  `lookUpFieldIds` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `look_up`
--

INSERT INTO `look_up` (`id`, `parentModId`, `parentFieldId`, `parentLookupFieldId`, `lookUpModId`, `lookUpFieldIds`) VALUES
(1, 1, 'name_1', '', 3, '29,');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `saas_id`, `name`, `description`, `last_modified`) VALUES
(1, 0, 'nijuleads', 'leads created for niju.', '2014-01-04 09:43:13'),
(2, 0, 'Accounts', 'Account Description', '2014-01-04 12:08:20'),
(3, 0, 'Contact', 'Description of contact.', '2014-01-04 12:40:52'),
(4, 0, 'Potential', 'description of Potential', '2014-01-05 07:03:17'),
(5, 0, 'Campaign', 'description of campaign', '2014-01-05 07:42:16'),
(6, 0, 'Task', 'Description of task', '2014-01-05 17:08:45'),
(7, 0, 'Event', 'Description of Event', '2014-01-05 17:47:21'),
(8, 0, 'Solution', 'Description of Solution', '2014-01-05 18:21:48'),
(9, 0, 'Product', 'Description of Product', '2014-01-05 18:47:49'),
(10, 0, 'Case', 'Description of case', '2014-01-06 10:34:15'),
(11, 0, 'Vendor', 'Description of Vendor', '2014-01-06 12:39:02'),
(12, 0, 'Price Book', 'Description of Price Book', '2014-01-06 13:29:06'),
(13, 0, 'test', 'description of test..', '2014-01-06 18:04:58'),
(14, 0, 'solution', 'sads', '2014-01-08 10:25:51'),
(15, 0, 'solution', '', '2014-01-08 10:27:05'),
(16, 0, 'gvh', 'jhgjh', '2014-02-26 14:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `module_metadata_field`
--

CREATE TABLE IF NOT EXISTS `module_metadata_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `field_name` varchar(50) NOT NULL,
  `field_id` varchar(100) NOT NULL,
  `field_html` text NOT NULL,
  `parent_datatype_id` int(11) NOT NULL,
  `datatype_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `is_required` tinyint(1) NOT NULL,
  `is_deletable` tinyint(1) NOT NULL,
  `place_holder` varchar(50) NOT NULL,
  `default_value` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `module_metadata_field`
--

INSERT INTO `module_metadata_field` (`id`, `saas_id`, `module_id`, `field_name`, `field_id`, `field_html`, `parent_datatype_id`, `datatype_id`, `sort_order`, `section_id`, `is_required`, `is_deletable`, `place_holder`, `default_value`, `last_modified`) VALUES
(1, 100, 1, 'age', 'age_1', '<input type="number" id="age_1" name="age_1" maxlength="3" />', 3, 1, 0, 2, 0, 0, '', '', '2014-01-04 10:42:00'),
(2, 100, 1, 'name', 'name_1', '<input type="text" id="name_1" name="name_1" maxlength="100" />', 1, 1, 1, 2, 0, 0, '', '', '2014-01-04 10:42:46'),
(3, 100, 1, 'Compnay name', 'compnay_name_2', '<input type="text" id="compnay_name_2" name="compnay_name_2" maxlength="200" />', 1, 2, 2, 2, 0, 0, '', '', '2014-01-04 10:55:11'),
(4, 100, 1, 'title', 'title_3', '<input type="text" id="title_3" name="title_3" maxlength="100" />', 1, 3, 3, 2, 0, 0, '', '', '2014-01-04 10:55:38'),
(5, 100, 1, 'email', 'email_1', '<input type="text" id="email_1" name="email_1" />', 9, 1, 4, 2, 0, 0, '', '', '2014-01-04 10:56:01'),
(6, 100, 1, 'phone', 'phone_1', '<input type="text" id="phone_1" name="phone_1" />', 10, 1, 5, 2, 0, 0, '', '', '2014-01-04 10:56:23'),
(7, 100, 1, 'fax', 'fax_2', '<input type="text" id="fax_2" name="fax_2" />', 10, 2, 6, 2, 0, 0, '', '', '2014-01-04 10:56:41'),
(8, 100, 1, 'mobile', 'mobile_3', '<input type="text" id="mobile_3" name="mobile_3" />', 10, 3, 7, 2, 0, 0, '', '', '2014-01-04 10:57:01'),
(9, 100, 1, 'Website', 'website_1', '<input type="text" id="website_1" name="website_1"maxlength="1000" />', 12, 1, 8, 2, 0, 0, '', '', '2014-01-04 10:57:24'),
(10, 100, 1, 'street', 'street_4', '<input type="text" id="street_4" name="street_4" maxlength="200" />', 1, 4, 0, 3, 0, 0, '', '', '2014-01-04 11:43:11'),
(11, 100, 1, 'city', 'city_5', '<input type="text" id="city_5" name="city_5" maxlength="100" />', 1, 5, 1, 3, 0, 0, '', '', '2014-01-04 11:43:41'),
(12, 100, 1, 'province', 'province_6', '<input type="text" id="province_6" name="province_6" maxlength="200" />', 1, 6, 2, 3, 0, 0, '', '', '2014-01-04 11:44:06'),
(13, 100, 1, 'Description', 'description_1', '<input type="text" id="description_1" name="description_1" />', 13, 1, 0, 4, 0, 0, '', '', '2014-01-04 12:05:36'),
(14, 100, 2, 'Account name', 'account_name_7', '<input type="text" id="account_name_7" name="account_name_7" maxlength="100" />', 1, 7, 0, 5, 0, 0, '', '', '2014-01-04 12:11:12'),
(15, 100, 2, 'Account site', 'account_site_8', '<input type="text" id="account_site_8" name="account_site_8" maxlength="200" />', 1, 8, 1, 5, 0, 0, '', '', '2014-01-04 12:12:57'),
(16, 100, 2, 'phone', 'phone_4', '<input type="text" id="phone_4" name="phone_4" />', 10, 4, 2, 5, 0, 0, '', '', '2014-01-04 12:13:45'),
(17, 100, 2, 'fax', 'fax_5', '<input type="text" id="fax_5" name="fax_5" />', 10, 5, 3, 5, 0, 0, '', '', '2014-01-04 12:14:03'),
(18, 100, 2, 'Website', 'website_2', '<input type="text" id="website_2" name="website_2"maxlength="200" />', 12, 2, 4, 5, 0, 0, '', '', '2014-01-04 12:14:53'),
(19, 100, 2, 'Parent Account', 'parent_account_3', '<input type="text" id="parent_account_3" name="parent_account_3"maxlength="100" />', 12, 3, 5, 5, 0, 0, '', '', '2014-01-04 12:16:11'),
(20, 100, 2, 'Billing street', 'billing_street_9', '<input type="text" id="billing_street_9" name="billing_street_9" maxlength="100" />', 1, 9, 0, 6, 0, 0, '', '', '2014-01-04 12:32:33'),
(21, 100, 2, 'Shipping Street', 'shipping_street_10', '<input type="text" id="shipping_street_10" name="shipping_street_10" maxlength="200" />', 1, 10, 1, 6, 0, 0, '', '', '2014-01-04 12:32:48'),
(22, 100, 2, 'Billing City', 'billing_city_11', '<input type="text" id="billing_city_11" name="billing_city_11" maxlength="100" />', 1, 11, 2, 6, 0, 0, '', '', '2014-01-04 12:33:15'),
(23, 100, 2, 'Shipping City', 'shipping_city_12', '<input type="text" id="shipping_city_12" name="shipping_city_12" maxlength="100" />', 1, 12, 3, 6, 0, 0, '', '', '2014-01-04 12:33:39'),
(24, 100, 2, 'Billing Code', 'billing_code_13', '<input type="text" id="billing_code_13" name="billing_code_13" maxlength="100" />', 1, 13, 4, 6, 0, 0, '', '', '2014-01-04 12:34:05'),
(25, 100, 2, 'Shipping Code', 'shipping_code_14', '<input type="text" id="shipping_code_14" name="shipping_code_14" maxlength="100" />', 1, 14, 5, 6, 0, 0, '', '', '2014-01-04 12:34:23'),
(26, 100, 2, 'Billing Country', 'billing_country_15', '<input type="text" id="billing_country_15" name="billing_country_15" maxlength="100" />', 1, 15, 6, 6, 0, 0, '', '', '2014-01-04 12:34:49'),
(27, 100, 2, 'Shipping Country', 'shipping_country_16', '<input type="text" id="shipping_country_16" name="shipping_country_16" maxlength="100" />', 1, 16, 7, 6, 0, 0, '', '', '2014-01-04 12:35:08'),
(28, 100, 2, 'Description', 'description_2', '<input type="text" id="description_2" name="description_2" />', 13, 2, 0, 7, 0, 0, '', '', '2014-01-04 12:39:10'),
(29, 100, 3, 'First name', 'first_name_17', '<input type="text" id="first_name_17" name="first_name_17" maxlength="100" />', 1, 17, 0, 8, 0, 0, '', '', '2014-01-04 12:44:32'),
(30, 100, 3, 'last name', 'last_name_18', '<input type="text" id="last_name_18" name="last_name_18" maxlength="100" />', 1, 18, 1, 8, 0, 0, '', '', '2014-01-04 12:45:00'),
(31, 100, 3, 'Account name', 'account_name_19', '<input type="text" id="account_name_19" name="account_name_19" maxlength="100" />', 1, 19, 2, 8, 0, 0, '', '', '2014-01-04 12:45:17'),
(32, 100, 3, 'Vendor name', 'vendor_name_20', '<input type="text" id="vendor_name_20" name="vendor_name_20" maxlength="100" />', 1, 20, 3, 8, 0, 0, '', '', '2014-01-04 12:45:33'),
(33, 100, 3, 'email', 'email_2', '<input type="text" id="email_2" name="email_2" />', 9, 2, 4, 8, 0, 0, '', '', '2014-01-04 12:45:55'),
(34, 100, 3, 'phone', 'phone_6', '<input type="text" id="phone_6" name="phone_6" />', 10, 6, 5, 8, 0, 0, '', '', '2014-01-04 12:51:09'),
(35, 100, 3, 'Department', 'department_21', '<input type="text" id="department_21" name="department_21" maxlength="100" />', 1, 21, 6, 8, 0, 0, '', '', '2014-01-04 12:52:10'),
(36, 100, 3, 'Home Phone', 'home_phone_7', '<input type="text" id="home_phone_7" name="home_phone_7" />', 10, 7, 7, 8, 0, 0, '', '', '2014-01-04 12:52:44'),
(37, 100, 3, 'Report to', 'report_to_22', '<input type="text" id="report_to_22" name="report_to_22" maxlength="100" />', 1, 22, 8, 8, 0, 0, '', '', '2014-01-04 12:55:30'),
(38, 100, 3, 'Date Of Birth', 'date_of_birth_1', '<input type="text" id="date_of_birth_1" name="date_of_birth_1" />', 8, 1, 9, 8, 0, 0, '', '', '2014-01-05 04:54:55'),
(39, 100, 3, 'mobile phone', 'mobile_phone_8', '<input type="text" id="mobile_phone_8" name="mobile_phone_8" />', 10, 8, 10, 8, 0, 0, '', '', '2014-01-05 04:56:21'),
(40, 100, 3, 'Fax', 'fax_9', '<input type="text" id="fax_9" name="fax_9" />', 10, 9, 11, 8, 0, 0, '', '', '2014-01-05 04:56:52'),
(41, 100, 3, 'email opt out', 'email_opt_out_1', '<input type="checkbox" id="email_opt_out_1" name="email_opt_out_1"  value="1" checked=false />', 2, 1, 12, 8, 0, 0, '', '', '2014-01-05 04:59:46'),
(42, 100, 3, 'Skype ID', 'skype_id_23', '<input type="text" id="skype_id_23" name="skype_id_23" maxlength="50" />', 1, 23, 13, 8, 0, 0, '', '', '2014-01-05 05:01:12'),
(43, 100, 3, 'Add to Quick Book', 'add_to_quick_book_2', '<input type="checkbox" id="add_to_quick_book_2" name="add_to_quick_book_2"  value="1" checked=false />', 2, 2, 14, 8, 0, 0, '', '', '2014-01-05 05:02:27'),
(44, 100, 3, 'Secondary email', 'secondary_email_3', '<input type="text" id="secondary_email_3" name="secondary_email_3" />', 9, 3, 15, 8, 0, 0, '', '', '2014-01-05 05:03:06'),
(45, 100, 3, 'twitter', 'twitter_24', '<input type="text" id="twitter_24" name="twitter_24" maxlength="100" />', 1, 24, 16, 8, 0, 0, '', '', '2014-01-05 05:03:32'),
(46, 100, 3, 'Mailing Street', 'mailing_street_25', '<input type="text" id="mailing_street_25" name="mailing_street_25" maxlength="100" />', 1, 25, 0, 9, 0, 0, '', '', '2014-01-05 05:04:59'),
(47, 100, 3, 'Other Street', 'other_street_26', '<input type="text" id="other_street_26" name="other_street_26" maxlength="100" />', 1, 26, 1, 9, 0, 0, '', '', '2014-01-05 05:05:30'),
(48, 100, 3, 'Mailing city', 'mailing_city_27', '<input type="text" id="mailing_city_27" name="mailing_city_27" maxlength="100" />', 1, 27, 2, 9, 0, 0, '', '', '2014-01-05 05:14:45'),
(49, 100, 3, 'other city', 'other_city_28', '<input type="text" id="other_city_28" name="other_city_28" maxlength="100" />', 1, 28, 3, 9, 0, 0, '', '', '2014-01-05 05:15:06'),
(50, 100, 3, 'Mailing province', 'mailing_province_29', '<input type="text" id="mailing_province_29" name="mailing_province_29" maxlength="100" />', 1, 29, 4, 9, 0, 0, '', '', '2014-01-05 05:15:54'),
(51, 100, 3, 'Other Province', 'other_province_30', '<input type="text" id="other_province_30" name="other_province_30" maxlength="100" />', 1, 30, 5, 9, 0, 0, '', '', '2014-01-05 05:16:27'),
(52, 100, 3, 'Mailing Postal Code', 'mailing_postal_code_31', '<input type="text" id="mailing_postal_code_31" name="mailing_postal_code_31" maxlength="20" />', 1, 31, 6, 9, 0, 0, '', '', '2014-01-05 06:46:29'),
(53, 100, 3, 'Other Postal Code', 'other_postal_code_32', '<input type="text" id="other_postal_code_32" name="other_postal_code_32" maxlength="20" />', 1, 32, 7, 9, 0, 0, '', '', '2014-01-05 06:48:21'),
(54, 100, 3, 'Mailing Country', 'mailing_country_33', '<input type="text" id="mailing_country_33" name="mailing_country_33" maxlength="100" />', 1, 33, 8, 9, 0, 0, '', '', '2014-01-05 06:51:10'),
(55, 100, 3, 'Other Country', 'other_country_34', '<input type="text" id="other_country_34" name="other_country_34" maxlength="100" />', 1, 34, 9, 9, 0, 0, '', '', '2014-01-05 06:51:35'),
(56, 100, 3, 'Description', 'description_3', '<input type="text" id="description_3" name="description_3" />', 13, 3, 0, 10, 0, 0, '', '', '2014-01-05 06:54:20'),
(57, 100, 4, 'Potential Owner', 'potential_owner_35', '<input type="text" id="potential_owner_35" name="potential_owner_35" maxlength="100" />', 1, 35, 0, 11, 0, 0, '', '', '2014-01-05 07:08:58'),
(58, 100, 4, 'Amount', 'amount_1', '<input type="text" id="amount_1" name="amount_1" maxlength="5" />', 5, 1, 1, 11, 0, 0, '', '', '2014-01-05 07:10:26'),
(59, 100, 4, 'Potential Name', 'potential_name_36', '<input type="text" id="potential_name_36" name="potential_name_36" maxlength="20" />', 1, 36, 2, 11, 0, 0, '', '', '2014-01-05 07:11:09'),
(60, 100, 4, 'Closing Date', 'closing_date_1', '<input type="text" id="closing_date_1" name="closing_date_1" />', 7, 1, 3, 11, 0, 0, '', '', '2014-01-05 07:16:12'),
(61, 100, 4, 'Account Name', 'account_name_37', '<input type="text" id="account_name_37" name="account_name_37" maxlength="20" />', 1, 37, 4, 11, 0, 0, '', '', '2014-01-05 07:17:32'),
(62, 100, 4, 'Stage', 'stage_1', '<select id="stage_1" name="stage_1"><option>-None-</option><option>some1</option><option>some2</option></select>', 11, 1, 5, 11, 0, 0, '', '', '2014-01-05 07:18:47'),
(63, 100, 4, 'Type', 'type_2', '<select id="type_2" name="type_2"><option>-none-</option><option>some1</option><option>some2</option></select>', 11, 2, 6, 11, 0, 0, '', '', '2014-01-05 07:20:41'),
(64, 100, 4, 'Probabilty', 'probabilty_38', '<input type="text" id="probabilty_38" name="probabilty_38" maxlength="100" />', 1, 38, 7, 11, 0, 0, '', '', '2014-01-05 07:22:58'),
(65, 100, 4, 'Next Step', 'next_step_39', '<input type="text" id="next_step_39" name="next_step_39" maxlength="200" />', 1, 39, 8, 11, 0, 0, '', '', '2014-01-05 07:23:28'),
(66, 100, 4, 'Expected revenue', 'expected_revenue_2', '<input type="text" id="expected_revenue_2" name="expected_revenue_2" maxlength="10" />', 5, 2, 9, 11, 0, 0, '', '', '2014-01-05 07:30:21'),
(67, 100, 4, 'Lead Source', 'lead_source_3', '<select id="lead_source_3" name="lead_source_3"><option>-none-</option><option>pick1</option><option>pick2</option></select>', 11, 3, 10, 11, 0, 0, '', '', '2014-01-05 07:31:38'),
(68, 100, 4, 'Campaign Source', 'campaign_source_40', '<input type="text" id="campaign_source_40" name="campaign_source_40" maxlength="200" />', 1, 40, 11, 11, 0, 0, '', '', '2014-01-05 07:32:23'),
(69, 100, 4, 'Contact Name', 'contact_name_41', '<input type="text" id="contact_name_41" name="contact_name_41" maxlength="100" />', 1, 41, 12, 11, 0, 0, '', '', '2014-01-05 07:32:57'),
(70, 100, 4, 'Description', 'description_4', '<input type="text" id="description_4" name="description_4" />', 13, 4, 0, 12, 0, 0, '', '', '2014-01-05 07:34:01'),
(71, 100, 5, 'Campaign Owner', 'campaign_owner_42', '<input type="text" id="campaign_owner_42" name="campaign_owner_42" maxlength="100" />', 1, 42, 0, 13, 0, 0, '', '', '2014-01-05 07:44:23'),
(72, 100, 5, 'Type', 'type_4', '<select id="type_4" name="type_4"><option>-none-</option><option>type1</option><option>type2</option></select>', 11, 4, 1, 13, 0, 0, '', '', '2014-01-05 07:45:42'),
(73, 100, 5, 'Campaign Name', 'campaign_name_43', '<input type="text" id="campaign_name_43" name="campaign_name_43" maxlength="20" />', 1, 43, 2, 13, 0, 0, '', '', '2014-01-05 07:46:21'),
(74, 100, 5, 'status', 'status_5', '<select id="status_5" name="status_5"><option>-none-</option><option> status1</option><option>status2</option></select>', 11, 5, 3, 13, 0, 0, '', '', '2014-01-05 07:47:09'),
(75, 100, 5, 'Start Date', 'start_date_2', '<input type="text" id="start_date_2" name="start_date_2" />', 7, 2, 4, 13, 0, 0, '', '', '2014-01-05 07:51:07'),
(76, 100, 5, 'End Date', 'end_date_3', '<input type="text" id="end_date_3" name="end_date_3" />', 7, 3, 5, 13, 0, 0, '', '', '2014-01-05 07:51:35'),
(77, 100, 5, 'Expected Revenue', 'expected_revenue_3', '<input type="text" id="expected_revenue_3" name="expected_revenue_3" maxlength="10" />', 5, 3, 6, 13, 0, 0, '', '', '2014-01-05 09:35:06'),
(78, 100, 5, 'Budgeted Cost', 'budgeted_cost_4', '<input type="text" id="budgeted_cost_4" name="budgeted_cost_4" maxlength="10" />', 5, 4, 7, 13, 0, 0, '', '', '2014-01-05 09:35:40'),
(79, 100, 5, 'Actual Cost', 'actual_cost_5', '<input type="text" id="actual_cost_5" name="actual_cost_5" maxlength="10" />', 5, 5, 8, 13, 0, 0, '', '', '2014-01-05 09:40:55'),
(80, 100, 5, 'Expected Response', 'expected_response_5', '<input type="text" id="expected_response_5" name="expected_response_5" />', 13, 5, 9, 13, 0, 0, '', '', '2014-01-05 09:42:20'),
(81, 100, 5, 'Num Sent', 'num_sent_2', '<input type="number" id="num_sent_2" name="num_sent_2" maxlength="10" />', 3, 2, 10, 13, 0, 0, '', '', '2014-01-05 09:42:46'),
(82, 100, 5, 'Description', 'description_6', '<input type="text" id="description_6" name="description_6" />', 13, 6, 0, 14, 0, 0, '', '', '2014-01-05 09:43:39'),
(83, 100, 6, 'Task Owner', 'task_owner_44', '<input type="text" id="task_owner_44" name="task_owner_44" maxlength="100" />', 1, 44, 0, 15, 0, 0, '', '', '2014-01-05 17:10:02'),
(84, 100, 6, 'Subject', 'subject_45', '<input type="text" id="subject_45" name="subject_45" maxlength="200" />', 1, 45, 1, 15, 0, 0, '', '', '2014-01-05 17:10:40'),
(85, 100, 6, 'Subject', 'subject_46', '<input type="text" id="subject_46" name="subject_46" maxlength="200" />', 1, 46, 2, 15, 0, 0, '', '', '2014-01-05 17:10:59'),
(86, 100, 6, 'Due  Date', 'due__date_4', '<input type="text" id="due__date_4" name="due__date_4" />', 7, 4, 3, 15, 0, 0, '', '', '2014-01-05 17:11:43'),
(87, 100, 6, 'Status', 'status_6', '<select id="status_6" name="status_6"><option>Not Started</option><option> Finished</option><option> Going on</option></select>', 11, 6, 4, 15, 0, 0, '', '', '2014-01-05 17:31:22'),
(88, 100, 6, 'Priority', 'priority_7', '<select id="priority_7" name="priority_7"><option>high</option><option> medium</option><option> low</option></select>', 11, 7, 5, 15, 0, 0, '', '', '2014-01-05 17:32:34'),
(89, 100, 6, 'Send Notification email', 'send_notification_email_3', '<input type="checkbox" id="send_notification_email_3" name="send_notification_email_3"  value="1" checked=false />', 2, 3, 6, 15, 0, 0, '', '', '2014-01-05 17:33:35'),
(90, 100, 6, 'Recurring Activity', 'recurring_activity_4', '<input type="checkbox" id="recurring_activity_4" name="recurring_activity_4"  value="1" checked=false />', 2, 4, 7, 15, 0, 0, '', '', '2014-01-05 17:34:15'),
(91, 100, 6, 'Description', 'description_7', '<input type="text" id="description_7" name="description_7" />', 13, 7, 0, 16, 0, 0, '', '', '2014-01-05 17:35:13'),
(92, 100, 7, 'Event Owner', 'event_owner_47', '<input type="text" id="event_owner_47" name="event_owner_47" maxlength="100" />', 1, 47, 0, 17, 0, 0, '', '', '2014-01-05 17:48:45'),
(93, 100, 7, 'Subject', 'subject_48', '<input type="text" id="subject_48" name="subject_48" maxlength="200" />', 1, 48, 1, 17, 0, 0, '', '', '2014-01-05 17:51:06'),
(94, 100, 7, 'Start Date Time', 'start_date_time_2', '<input type="text" id="start_date_time_2" name="start_date_time_2" />', 8, 2, 2, 17, 0, 0, '', '', '2014-01-05 18:06:41'),
(95, 100, 7, 'End Date Time', 'end_date_time_3', '<input type="text" id="end_date_time_3" name="end_date_time_3" />', 8, 3, 3, 17, 0, 0, '', '', '2014-01-05 18:07:26'),
(96, 100, 7, 'Venue', 'venue_8', '<input type="text" id="venue_8" name="venue_8" />', 13, 8, 4, 17, 0, 0, '', '', '2014-01-05 18:08:05'),
(97, 100, 7, 'Send Notification Email', 'send_notification_email_5', '<input type="checkbox" id="send_notification_email_5" name="send_notification_email_5"  value="1" checked=false />', 2, 5, 5, 17, 0, 0, '', '', '2014-01-05 18:10:17'),
(98, 100, 7, 'Recurring Activity', 'recurring_activity_6', '<input type="checkbox" id="recurring_activity_6" name="recurring_activity_6"  value="1" checked=false />', 2, 6, 6, 17, 0, 0, '', '', '2014-01-05 18:10:40'),
(99, 100, 7, 'Description', 'description_9', '<input type="text" id="description_9" name="description_9" />', 13, 9, 0, 18, 0, 0, '', '', '2014-01-05 18:11:11'),
(100, 100, 8, 'Solution Title', 'solution_title_49', '<input type="text" id="solution_title_49" name="solution_title_49" maxlength="500" />', 1, 49, 0, 20, 0, 0, '', '', '2014-01-05 18:23:55'),
(101, 100, 8, 'Solution Owner', 'solution_owner_50', '<input type="text" id="solution_owner_50" name="solution_owner_50" maxlength="100" />', 1, 50, 1, 20, 0, 0, '', '', '2014-01-05 18:32:13'),
(102, 100, 8, 'Status', 'status_8', '<select id="status_8" name="status_8"><option>Draft</option><option> Solved</option><option> Pending</option></select>', 11, 8, 2, 20, 0, 0, '', '', '2014-01-05 18:37:37'),
(103, 100, 8, 'Product Name', 'product_name_51', '<input type="text" id="product_name_51" name="product_name_51" maxlength="100" />', 1, 51, 3, 20, 0, 0, '', '', '2014-01-05 18:38:24'),
(104, 100, 8, 'Question', 'question_10', '<input type="text" id="question_10" name="question_10" />', 13, 10, 0, 21, 0, 0, '', '', '2014-01-05 18:39:33'),
(105, 100, 8, 'Answer', 'answer_11', '<input type="text" id="answer_11" name="answer_11" />', 13, 11, 1, 21, 0, 0, '', '', '2014-01-05 18:39:51'),
(106, 100, 9, 'Product Owner', 'product_owner_52', '<input type="text" id="product_owner_52" name="product_owner_52" maxlength="100" />', 1, 52, 0, 22, 0, 0, '', '', '2014-01-05 18:48:42'),
(107, 100, 9, 'Product Name', 'product_name_53', '<input type="text" id="product_name_53" name="product_name_53" maxlength="100" />', 1, 53, 1, 22, 0, 0, '', '', '2014-01-05 18:49:00'),
(108, 100, 9, 'Product Code', 'product_code_54', '<input type="text" id="product_code_54" name="product_code_54" maxlength="100" />', 1, 54, 2, 22, 0, 0, '', '', '2014-01-05 18:49:41'),
(109, 100, 9, 'Vendor Name', 'vendor_name_55', '<input type="text" id="vendor_name_55" name="vendor_name_55" maxlength="100" />', 1, 55, 3, 22, 0, 0, '', '', '2014-01-05 18:50:32'),
(110, 100, 9, 'Product Active', 'product_active_7', '<input type="checkbox" id="product_active_7" name="product_active_7"  value="1" checked=true />', 2, 7, 4, 22, 0, 0, '', '', '2014-01-05 18:51:32'),
(111, 100, 9, 'Manufacturer', 'manufacturer_9', '<select id="manufacturer_9" name="manufacturer_9"><option>-none-</option><option>manufact1</option><option> mnufact2</option></select>', 11, 9, 5, 22, 0, 0, '', '', '2014-01-06 04:39:39'),
(112, 100, 9, 'Product Category', 'product_category_10', '<select id="product_category_10" name="product_category_10"><option>-none-</option><option>category1</option><option> category2</option></select>', 11, 10, 6, 22, 0, 0, '', '', '2014-01-06 04:41:02'),
(113, 100, 9, 'Sales Start Date', 'sales_start_date_5', '<input type="text" id="sales_start_date_5" name="sales_start_date_5" />', 7, 5, 7, 22, 0, 0, '', '', '2014-01-06 04:43:37'),
(114, 100, 9, 'Sales End Date', 'sales_end_date_6', '<input type="text" id="sales_end_date_6" name="sales_end_date_6" />', 7, 6, 8, 22, 0, 0, '', '', '2014-01-06 10:07:09'),
(115, 100, 9, 'Support Start Date', 'support_start_date_7', '<input type="text" id="support_start_date_7" name="support_start_date_7" />', 7, 7, 9, 22, 0, 0, '', '', '2014-01-06 10:07:58'),
(116, 100, 9, 'Support Expiry Date', 'support_expiry_date_8', '<input type="text" id="support_expiry_date_8" name="support_expiry_date_8" />', 7, 8, 10, 22, 0, 0, '', '', '2014-01-06 10:09:15'),
(117, 100, 9, 'Unit Price', 'unit_price_6', '<input type="text" id="unit_price_6" name="unit_price_6" maxlength="15" />', 5, 6, 0, 23, 0, 0, '', '', '2014-01-06 10:11:14'),
(118, 100, 9, 'Commission Rate', 'commission_rate_7', '<input type="text" id="commission_rate_7" name="commission_rate_7" maxlength="15" />', 5, 7, 1, 23, 0, 0, '', '', '2014-01-06 10:12:24'),
(119, 100, 9, 'Tax', 'tax_12', '<input type="text" id="tax_12" name="tax_12" />', 13, 12, 2, 23, 0, 0, '', '', '2014-01-06 10:13:19'),
(120, 100, 9, 'Taxable', 'taxable_8', '<input type="checkbox" id="taxable_8" name="taxable_8"  value="1" checked=true />', 2, 8, 3, 23, 0, 0, '', '', '2014-01-06 10:14:16'),
(121, 100, 9, 'Usage Unit', 'usage_unit_11', '<select id="usage_unit_11" name="usage_unit_11"><option>Box1</option><option> Box2</option></select>', 11, 11, 0, 24, 0, 0, '', '', '2014-01-06 10:19:44'),
(122, 100, 9, 'Qty Ordered', 'qty_ordered_56', '<input type="text" id="qty_ordered_56" name="qty_ordered_56" maxlength="10" />', 1, 56, 1, 24, 0, 0, '', '', '2014-01-06 10:20:55'),
(123, 100, 9, 'Qty in Stock', 'qty_in_stock_57', '<input type="text" id="qty_in_stock_57" name="qty_in_stock_57" maxlength="10" />', 1, 57, 2, 24, 0, 0, '', '', '2014-01-06 10:22:53'),
(124, 100, 9, 'Reorder Level', 'reorder_level_58', '<input type="text" id="reorder_level_58" name="reorder_level_58" maxlength="10" />', 1, 58, 3, 24, 0, 0, '', '', '2014-01-06 10:25:03'),
(125, 100, 9, 'Handler', 'handler_59', '<input type="text" id="handler_59" name="handler_59" maxlength="100" />', 1, 59, 4, 24, 0, 0, '', '', '2014-01-06 10:25:31'),
(126, 100, 9, 'Qty Demand', 'qty_demand_60', '<input type="text" id="qty_demand_60" name="qty_demand_60" maxlength="100" />', 1, 60, 5, 24, 0, 0, '', '', '2014-01-06 10:26:21'),
(127, 100, 9, 'Description', 'description_13', '<input type="text" id="description_13" name="description_13" />', 13, 13, 0, 25, 0, 0, '', '', '2014-01-06 10:27:45'),
(128, 100, 10, 'Product Name', 'product_name_61', '<input type="text" id="product_name_61" name="product_name_61" maxlength="100" />', 1, 61, 0, 26, 0, 0, '', '', '2014-01-06 10:37:57'),
(129, 100, 10, 'Case Owner', 'case_owner_62', '<input type="text" id="case_owner_62" name="case_owner_62" maxlength="100" />', 1, 62, 1, 26, 0, 0, '', '', '2014-01-06 10:38:58'),
(130, 100, 10, 'Type', 'type_12', '<select id="type_12" name="type_12"><option>-none-</option><option> type1</option><option> type2</option></select>', 11, 12, 2, 26, 0, 0, '', '', '2014-01-06 10:39:53'),
(131, 100, 10, 'Status', 'status_13', '<select id="status_13" name="status_13"><option>New</option><option> status1</option><option> status2</option></select>', 11, 13, 3, 26, 0, 0, '', '', '2014-01-06 10:43:22'),
(132, 100, 10, 'Case Origin', 'case_origin_14', '<select id="case_origin_14" name="case_origin_14"><option>-none-</option><option> case1</option><option> case2</option><option>case3</option></select>', 11, 14, 4, 26, 0, 0, '', '', '2014-01-06 10:51:33'),
(133, 100, 10, 'Priority', 'priority_15', '<select id="priority_15" name="priority_15"><option>-none-</option><option>high</option><option> medium</option><option> low</option></select>', 11, 15, 5, 26, 0, 0, '', '', '2014-01-06 10:52:31'),
(134, 100, 10, 'Related To', 'related_to_63', '<input type="text" id="related_to_63" name="related_to_63" maxlength="100" />', 1, 63, 6, 26, 0, 0, '', '', '2014-01-06 10:55:27'),
(135, 100, 10, 'Case Reason', 'case_reason_16', '<select id="case_reason_16" name="case_reason_16"><option>-none-</option><option> reason1</option><option> reason2</option></select>', 11, 16, 7, 26, 0, 0, '', '', '2014-01-06 11:02:38'),
(136, 100, 10, 'Account Name', 'account_name_64', '<input type="text" id="account_name_64" name="account_name_64" maxlength="100" />', 1, 64, 8, 26, 0, 0, '', '', '2014-01-06 11:16:12'),
(137, 100, 10, 'Subject', 'subject_65', '<input type="text" id="subject_65" name="subject_65" maxlength="500" />', 1, 65, 9, 26, 0, 0, '', '', '2014-01-06 11:39:41'),
(138, 100, 10, 'Potential Name', 'potential_name_66', '<input type="text" id="potential_name_66" name="potential_name_66" maxlength="100" />', 1, 66, 10, 26, 0, 0, '', '', '2014-01-06 11:40:10'),
(139, 100, 10, 'Report by', 'report_by_67', '<input type="text" id="report_by_67" name="report_by_67" maxlength="100" />', 1, 67, 11, 26, 0, 0, '', '', '2014-01-06 11:40:40'),
(140, 100, 10, 'Phone', 'phone_10', '<input type="text" id="phone_10" name="phone_10" />', 10, 10, 12, 26, 0, 0, '', '', '2014-01-06 11:40:59'),
(141, 100, 10, 'Email', 'email_4', '<input type="text" id="email_4" name="email_4" />', 9, 4, 13, 26, 0, 0, '', '', '2014-01-06 11:41:26'),
(142, 100, 10, 'Description', 'description_14', '<input type="text" id="description_14" name="description_14" />', 13, 14, 0, 27, 0, 0, '', '', '2014-01-06 12:21:08'),
(143, 100, 10, 'Internal Comments', 'internal_comments_15', '<input type="text" id="internal_comments_15" name="internal_comments_15" />', 13, 15, 1, 27, 0, 0, '', '', '2014-01-06 12:21:28'),
(144, 100, 11, 'Vendor Owner', 'vendor_owner_68', '<input type="text" id="vendor_owner_68" name="vendor_owner_68" maxlength="100" />', 1, 68, 0, 28, 0, 0, '', '', '2014-01-06 12:48:34'),
(145, 100, 11, 'Vendor Name', 'vendor_name_69', '<input type="text" id="vendor_name_69" name="vendor_name_69" maxlength="100" />', 1, 69, 1, 28, 0, 0, '', '', '2014-01-06 12:48:56'),
(146, 100, 11, 'Phone', 'phone_11', '<input type="text" id="phone_11" name="phone_11" />', 10, 11, 2, 28, 0, 0, '', '', '2014-01-06 12:50:49'),
(147, 100, 11, 'Email', 'email_5', '<input type="text" id="email_5" name="email_5" />', 9, 5, 3, 28, 0, 0, '', '', '2014-01-06 12:53:01'),
(148, 100, 11, 'Website', 'website_4', '<input type="text" id="website_4" name="website_4"maxlength="1000" />', 12, 4, 4, 28, 0, 0, '', '', '2014-01-06 12:54:14'),
(149, 100, 11, 'GL Account', 'gl_account_17', '<select id="gl_account_17" name="gl_account_17"><option>-none-</option><option>Sales-Software</option><option> Sales-Hardware</option></select>', 11, 17, 5, 28, 0, 0, '', '', '2014-01-06 13:00:18'),
(150, 100, 11, 'Category', 'category_70', '<input type="text" id="category_70" name="category_70" maxlength="100" />', 1, 70, 6, 28, 0, 0, '', '', '2014-01-06 13:00:53'),
(151, 100, 11, 'Street', 'street_71', '<input type="text" id="street_71" name="street_71" maxlength="200" />', 1, 71, 0, 29, 0, 0, '', '', '2014-01-06 13:14:26'),
(152, 100, 11, 'City', 'city_72', '<input type="text" id="city_72" name="city_72" maxlength="200" />', 1, 72, 1, 29, 0, 0, '', '', '2014-01-06 13:14:52'),
(153, 100, 11, 'Province', 'province_73', '<input type="text" id="province_73" name="province_73" maxlength="100" />', 1, 73, 2, 29, 0, 0, '', '', '2014-01-06 13:26:22'),
(154, 100, 11, 'Postal Code', 'postal_code_74', '<input type="text" id="postal_code_74" name="postal_code_74" maxlength="20" />', 1, 74, 3, 29, 0, 0, '', '', '2014-01-06 13:26:47'),
(155, 100, 11, 'Country', 'country_75', '<input type="text" id="country_75" name="country_75" maxlength="50" />', 1, 75, 4, 29, 0, 0, '', '', '2014-01-06 13:27:09'),
(156, 100, 11, 'Description', 'description_16', '<input type="text" id="description_16" name="description_16" />', 13, 16, 0, 30, 0, 0, '', '', '2014-01-06 13:27:57'),
(157, 100, 12, 'Price Book Owner', 'price_book_owner_76', '<input type="text" id="price_book_owner_76" name="price_book_owner_76" maxlength="100" />', 1, 76, 0, 31, 0, 0, '', '', '2014-01-06 16:33:52'),
(158, 100, 12, 'Price Book Name', 'price_book_name_77', '<input type="text" id="price_book_name_77" name="price_book_name_77" maxlength="100" />', 1, 77, 1, 31, 0, 0, '', '', '2014-01-06 16:39:11'),
(159, 100, 12, 'Active', 'active_9', '<input type="checkbox" id="active_9" name="active_9"  value="1" checked=false />', 2, 9, 2, 31, 0, 0, '', '', '2014-01-06 16:39:29'),
(160, 100, 12, 'Pricing Model', 'pricing_model_18', '<select id="pricing_model_18" name="pricing_model_18"><option>-none-</option><option>model1</option><option> model2</option></select>', 11, 18, 3, 31, 0, 0, '', '', '2014-01-06 16:40:15'),
(161, 100, 12, 'Description', 'description_17', '<input type="text" id="description_17" name="description_17" />', 13, 17, 0, 32, 0, 0, '', '', '2014-01-06 16:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `module_metadata_section`
--

CREATE TABLE IF NOT EXISTS `module_metadata_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `moduleid` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `module_metadata_section`
--

INSERT INTO `module_metadata_section` (`id`, `saas_id`, `moduleid`, `sort_order`, `section_name`, `last_modified`) VALUES
(2, 100, 1, 2, 'Lead Information', '2014-01-04 10:11:25'),
(3, 100, 1, 2, 'Address Information', '2014-01-04 11:38:34'),
(4, 100, 1, 3, 'description information', '2014-01-04 11:58:18'),
(5, 100, 2, 1, 'account information', '2014-01-04 12:10:05'),
(6, 100, 2, 2, 'Address Information', '2014-01-04 12:31:40'),
(7, 100, 2, 3, 'description information', '2014-01-04 12:36:09'),
(8, 100, 3, 1, 'Contact Information', '2014-01-04 12:43:12'),
(9, 100, 3, 2, 'Address Information', '2014-01-05 05:04:10'),
(10, 100, 3, 3, 'Description information', '2014-01-05 06:53:51'),
(11, 100, 4, 1, 'Potenial Information', '2014-01-05 07:04:16'),
(12, 100, 4, 2, 'Description information', '2014-01-05 07:33:25'),
(13, 100, 5, 1, 'Campaign Information', '2014-01-05 07:42:50'),
(14, 100, 5, 2, 'Description information', '2014-01-05 09:43:21'),
(15, 100, 6, 1, 'Task Information', '2014-01-05 17:09:26'),
(16, 100, 6, 2, 'Description information', '2014-01-05 17:34:57'),
(17, 100, 7, 1, 'Event Information', '2014-01-05 17:47:48'),
(18, 100, 7, 2, 'Description information', '2014-01-05 18:10:56'),
(19, 100, 8, 1, '', '2014-01-05 18:22:23'),
(20, 100, 8, 1, 'Solution Information', '2014-01-05 18:22:41'),
(21, 100, 8, 3, 'Description information', '2014-01-05 18:38:59'),
(22, 100, 9, 1, 'Product Information', '2014-01-05 18:48:15'),
(23, 100, 9, 2, 'Price Information', '2014-01-06 10:10:12'),
(24, 100, 9, 3, 'Stock Information', '2014-01-06 10:18:02'),
(25, 100, 9, 4, 'Description information', '2014-01-06 10:27:17'),
(26, 100, 10, 1, 'Case Information', '2014-01-06 10:36:10'),
(27, 100, 10, 2, 'Description information', '2014-01-06 12:20:33'),
(28, 100, 11, 1, 'Vendor Information', '2014-01-06 12:39:58'),
(29, 100, 11, 2, 'Address Information', '2014-01-06 13:13:26'),
(30, 100, 11, 3, 'Description information', '2014-01-06 13:27:32'),
(31, 100, 12, 1, 'Price Book Information', '2014-01-06 13:43:48'),
(32, 100, 12, 2, 'Description information', '2014-01-06 16:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `module_permission`
--

CREATE TABLE IF NOT EXISTS `module_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `permission_status` varchar(2) NOT NULL COMMENT '(f= full permission, p=partial permission)',
  `lat_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `module_potential`
--

CREATE TABLE IF NOT EXISTS `module_potential` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nijuleads`
--

CREATE TABLE IF NOT EXISTS `nijuleads` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `age` text NOT NULL,
  `Compnay_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `fax` text NOT NULL,
  `mobile` text NOT NULL,
  `Website` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `potential`
--

CREATE TABLE IF NOT EXISTS `potential` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `Potential_Owner` text NOT NULL,
  `Amount` text NOT NULL,
  `Potential_Name` text NOT NULL,
  `Closing_Date` text NOT NULL,
  `Account_Name` text NOT NULL,
  `Stage` text NOT NULL,
  `Type` text NOT NULL,
  `Probabilty` text NOT NULL,
  `Next_Step` text NOT NULL,
  `Expected_revenue` text NOT NULL,
  `Lead_Source` text NOT NULL,
  `Campaign_Source` text NOT NULL,
  `Contact_Name` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `price_book`
--

CREATE TABLE IF NOT EXISTS `price_book` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `product_active` tinyint(1) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `sales_start_date` datetime NOT NULL,
  `sales_end_date` datetime NOT NULL,
  `support_start_date` datetime NOT NULL,
  `support_expiry_date` datetime NOT NULL,
  `unit_price` float NOT NULL,
  `commision_price` float NOT NULL,
  `tax_type` varchar(200) NOT NULL,
  `taxable` tinyint(1) NOT NULL,
  `descriptiion` varchar(500) NOT NULL,
  `Product_Owner` text NOT NULL,
  `Vendor_Name` text NOT NULL,
  `Manufacturer` text NOT NULL,
  `Commission_Rate` text NOT NULL,
  `Tax` text NOT NULL,
  `Usage_Unit` text NOT NULL,
  `Qty_Ordered` text NOT NULL,
  `Qty_in_Stock` text NOT NULL,
  `Reorder_Level` text NOT NULL,
  `Handler` text NOT NULL,
  `Qty_Demand` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `potential_name` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `expiry_date` date NOT NULL,
  `contact_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `billing_street` varchar(100) NOT NULL,
  `billing_city` varchar(100) NOT NULL,
  `billing_state` varchar(100) NOT NULL,
  `billing_po` varchar(100) NOT NULL,
  `billing_country` varchar(100) NOT NULL,
  `shipping_street` varchar(100) NOT NULL,
  `shipping_city` varchar(100) NOT NULL,
  `shipping_state` varchar(100) NOT NULL,
  `shipping_po` varchar(100) NOT NULL,
  `shipping_country` varchar(100) NOT NULL,
  `terms_condition` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quote_product_detail`
--

CREATE TABLE IF NOT EXISTS `quote_product_detail` (
  `id` int(11) NOT NULL,
  `quoteid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `list_price` int(11) NOT NULL,
  `total` float NOT NULL,
  `discount` float NOT NULL,
  `total_after_discount` float NOT NULL,
  `tax` float NOT NULL,
  `net_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saas_user`
--

CREATE TABLE IF NOT EXISTS `saas_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `subscribe` tinyint(1) NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `solution_title` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `solution_question` varchar(1000) NOT NULL,
  `solution_answer` varchar(2000) NOT NULL,
  `Solution_Owner` text NOT NULL,
  `Status` text NOT NULL,
  `Product_Name` text NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `due_date` datetime NOT NULL,
  `taskon_source` varchar(50) NOT NULL,
  `taskon_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `priority` varchar(30) NOT NULL,
  `send_notification_mail` tinyint(1) NOT NULL,
  `description` varchar(500) NOT NULL,
  `Task_Owner` text NOT NULL,
  `Due__Date` text NOT NULL,
  `Send_Notification_email` text NOT NULL,
  `Recurring_Activity` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saas_id` int(11) NOT NULL,
  `organization` varchar(500) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `profile` enum('admin','standard') NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `saas_id`, `organization`, `first_name`, `last_name`, `email`, `role`, `profile`, `last_modified`) VALUES
(1, 0, 'dsf', 'fds', 'gre', 'we@g.b', 0, '', '0000-00-00 00:00:00'),
(2, 0, 'fd', 'fsd', 'te', 'mg', 0, '', '0000-00-00 00:00:00'),
(3, 0, 'fd', '', '', '', 0, '', '0000-00-00 00:00:00'),
(4, 0, 'ff', '', '', '', 0, '', '0000-00-00 00:00:00'),
(5, 0, 'ff', '', '', '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saasid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `primary_phone` varchar(30) NOT NULL,
  `secondary_phone` varchar(30) NOT NULL,
  `primary_email` varchar(100) NOT NULL,
  `secondary_email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `gl_account_type` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(30) NOT NULL,
  `country` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `Vendor_Owner` text NOT NULL,
  `Vendor_Name` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `GL_Account` text NOT NULL,
  `Category` text NOT NULL,
  `Province` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
