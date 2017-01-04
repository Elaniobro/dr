-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 04:47 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `address_1` varchar(150) NOT NULL,
  `address_2` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(14) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `primary_insurance` varchar(50) NOT NULL,
  `primary_insurance_id` varchar(150) NOT NULL,
  `secondary_insurance` varchar(150) NOT NULL,
  `secondary_insurance_id` varchar(150) NOT NULL,
  `primary_care_name` varchar(150) NOT NULL,
  `primary_care_number` varchar(150) NOT NULL,
  `treatment` varchar(150) NOT NULL,
  `current_medications` varchar(255) NOT NULL,
  `blood_meds` varchar(3) NOT NULL,
  `cancer` varchar(3) NOT NULL,
  `hiv` varchar(3) NOT NULL,
  `heart_condition` varchar(3) NOT NULL,
  `high_blood_pressure` varchar(3) NOT NULL,
  `kidney_disorder` varchar(3) NOT NULL,
  `diabetes` varchar(3) NOT NULL,
  `poor_circulation` varchar(3) NOT NULL,
  `email` text NOT NULL,
  `gout` varchar(3) NOT NULL,
  `referred` text NOT NULL,
  `pharmacy_name` varchar(50) NOT NULL,
  `pharmacy_loc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
