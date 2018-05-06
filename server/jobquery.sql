-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2018 at 09:31 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `baxter_jobquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `employerId` int(11) NOT NULL,
  `employerName` varchar(255) NOT NULL,
  `employerDescription` varchar(255) NOT NULL,
  `employerLocation` varchar(255) NOT NULL,
  `employerType` varchar(255) NOT NULL,
  `employerSponsor` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`employerId`, `employerName`, `employerDescription`, `employerLocation`, `employerType`, `employerSponsor`, `Picture`, `test`) VALUES
(1, 'McDonald\'s', 'We got frozen beef.', '332 St John St Portland ME 04102', 'Business', 'Yes', 'mcdonalds.png', 0),
(2, 'Walmart', 'Sponsored by Lil Pump, Gucci for only the best clothing.', '500 Gallery Blvd Scarborough ME 04074', 'Business', '', 'walmart.png', 0),
(3, 'Subway', 'I like their sandwiches.', '498 Congress St Portland ME 04101', 'Business', 'Yes', 'subway.png', 0),
(4, 'Wendy\'s', 'Funny prank we don\'t even have any frozen beef.', '50 Market St South Portland ME 04106', 'Business', 'Yes', 'wendys.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `employerId` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobDescription` text NOT NULL,
  `jobLocation` varchar(255) NOT NULL,
  `jobSponsor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `employerId`, `jobTitle`, `jobDescription`, `jobLocation`, `jobSponsor`) VALUES
(1, 1, 'Fry Cook', 'Making French fries and chicken nuggets.', 'Forest Ave, ME', 'Yes'),
(2, 1, 'Cashier', 'Ringing up Happy Meals.', 'John St', 'Yes'),
(3, 2, 'Inventory', 'Loading cargo into the warehouse.', 'Falmouth, ME', 'Yes'),
(4, 2, 'Greeter', 'Welcoming people to Wal-Mart.', 'Scarborough, ME', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userToken` text NOT NULL,
  `userFirst` varchar(255) NOT NULL,
  `userLast` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userEmail`, `userToken`, `userFirst`, `userLast`, `userPassword`) VALUES
(1, 'mustafa.ah@baxter-academy.org', '', 'Mustafa', 'Abu Hamad', '08d6b784d8e959bd202f80af8f587445'),
(2, 'Brendanwalton09@gmail.com', '', 'bob', 'bob', '69ce821ce9e7e9ef9be5a5407811b538'),
(25, '43mjkj@f5.si', '', 'Riley', 'Adela', ''),
(26, 'randomemail@gmail.com', '', 'random', 'person', ''),
(27, 'burnmytoes9@gmail.com', '', 'Alexander', 'Carter', '9c56df6c8060490abd2c6859348c9746'),
(28, 'nikowoodhouse@gmail.com', '', 'Niko', 'Woodhouse', 'ee26e7bd21ad86835eb597731e6cc963'),
(29, 'urmom@gmail.com', '', 'Conner', 'Slaughter Heynen', '4fe2dae188944860765d4879c508ec63'),
(30, 'rob.korobkin@gmail.com', 'm%QBs86OWe', 'Rob', 'Korobkin', '56bcb005f0e5c4a9da332593c2af0689'),
(31, 'rob.korobk.in@gmail.com', '', 'Rob', 'Korobkin', '1a912ca20fb31005b507b92247b881f6'),
(32, 'rob.kor.ob.kin@gmail.com', '', 'Rob', 'Korobkin', '1a912ca20fb31005b507b92247b881f6'),
(33, 'rob.kokin@gmail.com', '', 'Rob', 'Korobkin', '1a912ca20fb31005b507b92247b881f6'),
(34, 'rob.kkin@gmail.com', '', 'R', 'K', '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`employerId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `employerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
