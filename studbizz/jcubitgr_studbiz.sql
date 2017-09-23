-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 07:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcubitgr_studbiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_subcategory`
--

CREATE TABLE `ads_subcategory` (
  `adv_sub_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adv_id` int(11) NOT NULL,
  `adv_desc` varchar(255) DEFAULT NULL,
  `adv_outcomes` varchar(255) DEFAULT NULL,
  `adv_activities` varchar(255) DEFAULT NULL,
  `adv_duration` varchar(255) DEFAULT NULL,
  `adv_publish_date` date DEFAULT NULL,
  `adv_expiry_date` date DEFAULT NULL,
  `adv_start_date` date DEFAULT NULL,
  `org_id` int(11) NOT NULL,
  `rep_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `org_id` int(11) NOT NULL,
  `main_user` int(100) NOT NULL,
  `org_name` varchar(255) DEFAULT NULL,
  `org_desc` varchar(255) DEFAULT NULL,
  `org_logo` blob,
  `org_website` varchar(255) DEFAULT NULL,
  `org_location` varchar(255) DEFAULT NULL,
  `org_phn_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`org_id`, `main_user`, `org_name`, `org_desc`, `org_logo`, `org_website`, `org_location`, `org_phn_no`) VALUES
(1, 1, 'asfef', '', '', '', NULL, ''),
(2, 1, 'jamescook', 'jamescook: Organisation Desciption:', 0x6c6f676f3a, 'Organisation Website:', NULL, 'Oranisation Phone no:'),
(3, 1, 'eF', 'WEFW', 0x57454657, 'EWFEWF', 'EFWE', '2342352');

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

CREATE TABLE `representative` (
  `rep_id` int(11) NOT NULL,
  `rep_email` varchar(255) DEFAULT NULL,
  `rep_phone` varchar(255) DEFAULT NULL,
  `rep_password` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `sk_id` int(11) NOT NULL,
  `sk_name` varchar(255) NOT NULL,
  `sk_decs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `subcat_desc` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `last_name` varchar(22) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`) VALUES
(1, 'pardeep', 'kumar', '', 123456),
(15, 'slkcnlksdn', 'akjcnakjscn', 'deepainsan8@gmail.com', 0),
(16, 'slkcnlksdn', 'akjcnakjscn', 'deepainsan8@gmail.com', 0),
(17, 'ddg', 'fhgh', 'pardeeppanchal89@gmail.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_subcategory`
--
ALTER TABLE `ads_subcategory`
  ADD PRIMARY KEY (`adv_sub_id`),
  ADD KEY `adv_id` (`adv_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `fk_adv` (`org_id`),
  ADD KEY `fk_adv_cat` (`cat_id`),
  ADD KEY `fk_rep` (`rep_id`),
  ADD KEY `sk_id` (`sk_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `representative`
--
ALTER TABLE `representative`
  ADD PRIMARY KEY (`rep_id`),
  ADD KEY `fk_org` (`org_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sk_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_subcategory`
--
ALTER TABLE `ads_subcategory`
  MODIFY `adv_sub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `representative`
--
ALTER TABLE `representative`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads_subcategory`
--
ALTER TABLE `ads_subcategory`
  ADD CONSTRAINT `fk_adv_sb` FOREIGN KEY (`adv_id`) REFERENCES `advertisement` (`adv_id`),
  ADD CONSTRAINT `fk_adv_sbcat` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`);

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `fk_skills` FOREIGN KEY (`sk_id`) REFERENCES `skills` (`sk_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_sbcat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
