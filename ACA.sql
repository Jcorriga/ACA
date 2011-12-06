-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2011 at 03:17 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ACA`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `waterTrail` int(11) NOT NULL,
  `title` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`index`),
  KEY `index` (`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `links`
--


-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `waterTrail` int(11) NOT NULL,
  `imgUrl` text NOT NULL,
  PRIMARY KEY (`index`),
  KEY `index` (`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pictures`
--


-- --------------------------------------------------------

--
-- Table structure for table `waterTrail`
--

CREATE TABLE IF NOT EXISTS `waterTrail` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `state` varchar(2) NOT NULL,
  `length` decimal(10,0) NOT NULL,
  `class` int(11) NOT NULL,
  `scenery` text NOT NULL,
  `camping` text NOT NULL,
  `tripTime` text NOT NULL,
  `description` text NOT NULL,
  `trailImage` text NOT NULL,
  `river` text NOT NULL,
  `startLocation` text NOT NULL,
  `endLocation` text NOT NULL,
  `usgsLink` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `waterTrail`
--

INSERT INTO `waterTrail` (`index`, `name`, `location`, `state`, `length`, `class`, `scenery`, `camping`, `tripTime`, `description`, `trailImage`, `river`, `startLocation`, `endLocation`, `usgsLink`) VALUES
(1, 'Mott''s Landing to City Docks', 'Fredericksburg, VA', 'VA', 5, 2, 'Good', 'Yes', '3 hours', '<p> Bullshit description... Tracing a 40-mile route on two tributary waterways of the Chesapeake Bay, paddling adventures await as you explore a vast and changing landscape, spanning 13,000 years of human history, past 10,000 acres of public lands dedicated to resource conservation in northern Virginia. Interpretive exhibits located at eight access points present a tapestry of time and place past, present and future each reveals a different facet of an extraordinary resource.</p>\r\n\r\n<p>The 20 mile stretch of the Upper Segment begins on free-flowing, tree-lined Bull Run, which widens as it joins the Occoquan River, opening to an expansive, freshwater lake formed by the Occoquan Reservoir dam. The Lower Segmentâ€™s brackish, open waters pass marinas and protected marshlands along the Mason Neck Peninsula, on the wide expanse of the tidal </p>', 'mottslanding.jpg', 'Rappahannock River', '38.313478,-77.540874', 'Old Mill Park, 22401', 'http://waterdata.usgs.gov/va/nwis/nwisman/?site_no=01668000');
