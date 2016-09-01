-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 12:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exterior`
--

CREATE TABLE `exterior` (
  `id` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `img3` varchar(500) DEFAULT NULL,
  `img4` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `titlecontent` varchar(10000) DEFAULT NULL,
  `services` varchar(200) DEFAULT NULL,
  `servicescontent` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exterior`
--

INSERT INTO `exterior` (`id`, `img1`, `img2`, `img3`, `img4`, `title`, `titlecontent`, `services`, `servicescontent`) VALUES
(4, 'http://localhost/cms/admin/uploads/e4ba5f06ff2bcbf64c86d1f40c7896f0.jpg', 'http://localhost/cms/admin/uploads/e4ba5f06ff2bcbf64c86d1f40c7896f0.jpg59c1e764b4845ad48b536bca3abd7a3c.jpg', 'http://localhost/cms/admin/uploads/e4ba5f06ff2bcbf64c86d1f40c7896f0.jpg59c1e764b4845ad48b536bca3abd7a3c.jpg5498478f4d1f9221d13ef8544bf89827.jpg', 'http://localhost/cms/admin/uploads/e4ba5f06ff2bcbf64c86d1f40c7896f0.jpg59c1e764b4845ad48b536bca3abd7a3c.jpg5498478f4d1f9221d13ef8544bf89827.jpg52033286d1ce1bd449a7eb4ba21b7101.jpg', 'siva', 'Sivabharathy', 'sample', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `interior`
--

CREATE TABLE `interior` (
  `id` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `img3` varchar(500) DEFAULT NULL,
  `img4` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `titlecontent` varchar(10000) DEFAULT NULL,
  `services` varchar(200) DEFAULT NULL,
  `servicescontent` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior`
--

INSERT INTO `interior` (`id`, `img1`, `img2`, `img3`, `img4`, `title`, `titlecontent`, `services`, `servicescontent`) VALUES
(13, 'http://localhost/cms/admin/uploads/0979681cac130a383d587fc0e31e17a3.jpg', 'http://localhost/cms/admin/uploads/0979681cac130a383d587fc0e31e17a3.jpgef6b7be2f5b7be3fa63d4974b94e28bc.jpg', 'http://localhost/cms/admin/uploads/0979681cac130a383d587fc0e31e17a3.jpgef6b7be2f5b7be3fa63d4974b94e28bc.jpg1f7766cf083bc2f2ce768748f6470eee.jpg', 'http://localhost/cms/admin/uploads/0979681cac130a383d587fc0e31e17a3.jpgef6b7be2f5b7be3fa63d4974b94e28bc.jpg1f7766cf083bc2f2ce768748f6470eee.jpgc559219ba1eda6f8aded5e15d03d5b3f.jpg', 'siva', 'Sivabharathy', 'gfjghj', 'sample'),
(14, 'http://localhost/cms/admin/uploads/7558cd4c1d94f9314f857e1f5db7fba2.jpg', 'http://localhost/cms/admin/uploads/7558cd4c1d94f9314f857e1f5db7fba2.jpg0ac247b44c4d809e6c424bd762b7d2cc.jpg', 'http://localhost/cms/admin/uploads/7558cd4c1d94f9314f857e1f5db7fba2.jpg0ac247b44c4d809e6c424bd762b7d2cc.jpgf2d3cf08642751dd63c9371c6fd8fc59.jpg', 'http://localhost/cms/admin/uploads/7558cd4c1d94f9314f857e1f5db7fba2.jpg0ac247b44c4d809e6c424bd762b7d2cc.jpgf2d3cf08642751dd63c9371c6fd8fc59.jpg886243d7860cb3751f7aa5fa05814a84.jpg', 'aDSDSdfss', 'ASDFSDdsfhfd', 'cbvcn', 'hjgjhgj');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date1` varchar(20) DEFAULT NULL,
  `cellno` varchar(20) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `date1`, `cellno`, `message`) VALUES
(1, 'siva', 'siva@pepiras.com', '25/05/1995', '', 'Hello it for testing');

-- --------------------------------------------------------

--
-- Table structure for table `remodeling`
--

CREATE TABLE `remodeling` (
  `id` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `img3` varchar(500) DEFAULT NULL,
  `img4` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `titlecontent` varchar(10000) DEFAULT NULL,
  `services` varchar(200) DEFAULT NULL,
  `servicescontent` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remodeling`
--

INSERT INTO `remodeling` (`id`, `img1`, `img2`, `img3`, `img4`, `title`, `titlecontent`, `services`, `servicescontent`) VALUES
(2, 'http://localhost/cms/admin/uploads/d8d90d0608ac714e9f9901bcd131a454.jpg', 'http://localhost/cms/admin/uploads/d8d90d0608ac714e9f9901bcd131a454.jpg596a2efdc07bcc0d53dd39b45e8f249b.jpg', 'http://localhost/cms/admin/uploads/d8d90d0608ac714e9f9901bcd131a454.jpg596a2efdc07bcc0d53dd39b45e8f249b.jpg2104f178d96590d0861bfb5112309450.jpg', 'http://localhost/cms/admin/uploads/d8d90d0608ac714e9f9901bcd131a454.jpg596a2efdc07bcc0d53dd39b45e8f249b.jpg2104f178d96590d0861bfb5112309450.jpg36d193680e7393bce139f30aed591043.jpg', 'siva', 'Sivabharathy', 'sample', 'sample'),
(4, 'http://localhost/cms/admin/uploads/c07278bac736bcbf720f35d3600f56e9.jpg', 'http://localhost/cms/admin/uploads/c07278bac736bcbf720f35d3600f56e9.jpg5c5853df4ee830a9e1eb67d91d630076.jpg', 'http://localhost/cms/admin/uploads/c07278bac736bcbf720f35d3600f56e9.jpg5c5853df4ee830a9e1eb67d91d630076.jpga6c4bbe82bd05cc37017ed1dc41b23e1.jpg', 'http://localhost/cms/admin/uploads/c07278bac736bcbf720f35d3600f56e9.jpg5c5853df4ee830a9e1eb67d91d630076.jpga6c4bbe82bd05cc37017ed1dc41b23e1.jpge489f8af907644c3b2ba7715e0d357f2.jpg', 'Hello the Project', 'Sivabharathy', 'sample', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `author`, `content`) VALUES
(4, 'Keith Hopkins', 'Best customer support and response time I have ever seen... not to mention  a kick ass theme! Great feeling from this purchase.Thank you Pixel Industry!'),
(5, 'jonpedlow on Elvyre Professional Corporate', 'Excellent template, first time I have ever bought one and am loving using it. Finding it very easy to customize with the organized layers and cant wait to put it into a Wordpress Theme...'),
(6, 'Sam Jhonson', 'Excellent template, first time I have ever bought one and am loving using it. Finding it very easy to customize with the organized layers and cant wait to put it into a Wordpress Theme... '),
(7, 'Sivabharathy', 'Best customer support and response time I have ever seen... not to mention a kick ass theme! Great feeling from this purchase.Thank you Pixel Industry!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior`
--
ALTER TABLE `exterior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remodeling`
--
ALTER TABLE `remodeling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exterior`
--
ALTER TABLE `exterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `remodeling`
--
ALTER TABLE `remodeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
