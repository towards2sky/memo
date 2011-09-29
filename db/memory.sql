-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2011 at 05:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `memory`
--

-- --------------------------------------------------------

--
-- Table structure for table `calenderyear`
--

CREATE TABLE IF NOT EXISTS `calenderyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newtagyearid` varchar(10) NOT NULL,
  `century` int(11) NOT NULL,
  `celtype` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newtagyearid` (`newtagyearid`,`century`,`celtype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `calenderyear`
--

INSERT INTO `calenderyear` (`id`, `newtagyearid`, `century`, `celtype`) VALUES
(22, 'M1', 17, 'LOCK'),
(36, 'M1', 18, 'LAMB'),
(50, 'M1', 19, 'LAWYAR'),
(64, 'M1', 20, 'LATHI'),
(78, 'M1', 21, 'LION'),
(23, 'M2', 17, 'LATHI'),
(37, 'M2', 18, 'LAWYAR'),
(51, 'M2', 19, 'LAALU'),
(65, 'M2', 20, 'LION'),
(79, 'M2', 21, 'LAMB'),
(24, 'M3', 17, 'LION'),
(38, 'M3', 18, 'LAALU'),
(52, 'M3', 19, 'LEECHE'),
(66, 'M3', 20, 'LAMB'),
(80, 'M3', 21, 'LAWYAR'),
(25, 'M4', 17, 'LAMB'),
(39, 'M4', 18, 'LEECHE'),
(53, 'M4', 19, 'LOCK'),
(67, 'M4', 20, 'LAWYAR'),
(81, 'M4', 21, 'LAALU'),
(26, 'M5', 17, 'LAWYAR'),
(40, 'M5', 18, 'LOCK'),
(54, 'M5', 19, 'LATHI'),
(68, 'M5', 20, 'LAALU'),
(82, 'M5', 21, 'LEECHE'),
(27, 'M6', 17, 'LAALU'),
(41, 'M6', 18, 'LATHI'),
(55, 'M6', 19, 'LION'),
(69, 'M6', 20, 'LEECHE'),
(83, 'M6', 21, 'LOCK'),
(28, 'M7', 17, 'LEECHE'),
(42, 'M7', 18, 'LION'),
(56, 'M7', 19, 'LAMB'),
(70, 'M7', 20, 'LOCK'),
(84, 'M7', 21, 'LATHI'),
(15, 'P1', 17, 'RAJESH'),
(29, 'P1', 18, 'NOTCH'),
(43, 'P1', 19, 'NENO'),
(57, 'P1', 20, 'NET'),
(71, 'P1', 21, 'NERO'),
(16, 'P2', 17, 'NOTCH'),
(30, 'P2', 18, 'NECK'),
(44, 'P2', 19, 'RAJESH'),
(58, 'P2', 20, 'NENO'),
(72, 'P2', 21, 'NAIL'),
(17, 'P3', 17, 'NECK'),
(31, 'P3', 18, 'NERO'),
(45, 'P3', 19, 'NOTCH'),
(59, 'P3', 20, 'RAJESH'),
(73, 'P3', 21, 'NET'),
(18, 'P4', 17, 'NET'),
(32, 'P4', 18, 'NENO'),
(46, 'P4', 19, 'NAIL'),
(60, 'P4', 20, 'NERO'),
(74, 'P4', 21, 'NOTCH'),
(19, 'P5', 17, 'NENO'),
(33, 'P5', 18, 'RAJESH'),
(47, 'P5', 19, 'NET'),
(61, 'P5', 20, 'NAIL'),
(75, 'P5', 21, 'NECK'),
(20, 'P6', 17, 'NERO'),
(34, 'P6', 18, 'NAIL'),
(48, 'P6', 19, 'NECK'),
(62, 'P6', 20, 'NOTCH'),
(76, 'P6', 21, 'NENO'),
(21, 'P7', 17, 'NAIL'),
(35, 'P7', 18, 'NET'),
(49, 'P7', 19, 'NERO'),
(63, 'P7', 20, 'NECK'),
(77, 'P7', 21, 'RAJESH');

-- --------------------------------------------------------

--
-- Table structure for table `newtagyear`
--

CREATE TABLE IF NOT EXISTS `newtagyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagid` varchar(10) NOT NULL,
  `tagname` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `newtagyear`
--

INSERT INTO `newtagyear` (`id`, `tagid`, `tagname`) VALUES
(1, 'P1', 'POOTIE'),
(2, 'P2', 'PAAN'),
(3, 'P3', 'PALM'),
(4, 'P4', 'POOR'),
(5, 'P5', 'POLL'),
(6, 'P6', 'PEACH'),
(7, 'P7', 'PIC'),
(8, 'M1', 'MOTA'),
(9, 'M2', 'HE-MAN'),
(10, 'M3', 'MUMMY'),
(11, 'M4', 'MERRY'),
(12, 'M5', 'MALI'),
(13, 'M6', 'MOOCH'),
(14, 'M7', 'MAGGI');

-- --------------------------------------------------------

--
-- Table structure for table `tagyear`
--

CREATE TABLE IF NOT EXISTS `tagyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearTag` varchar(10) NOT NULL,
  `sorttag` varchar(5) NOT NULL,
  `note` text NOT NULL,
  `flag` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tagyear`
--

INSERT INTO `tagyear` (`id`, `yearTag`, `sorttag`, `note`, `flag`) VALUES
(1, 'NET', 'N-1', '', '1'),
(2, 'NENO', 'N-2', '', '1'),
(3, 'NAME', 'N-3', '', '0'),
(4, 'NERO', 'N-4', '', '0'),
(5, 'NAIL', 'N-5', '', '0'),
(6, 'NOTCH', 'N-6', '', '0'),
(7, 'NECK', 'N-7', '', '0'),
(8, 'LATHI', 'L-1', '', '1'),
(9, 'LION', 'L-2', '', '0'),
(10, 'LAMB', 'L-3', '', '0'),
(11, 'LAWYAR', 'L-4', '', '0'),
(12, 'LAALU', 'L-5', '', '0'),
(13, 'LEECHE', 'L-6', '', '0'),
(14, 'LOCK', 'L-7', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `yeartype`
--

CREATE TABLE IF NOT EXISTS `yeartype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagyearid` varchar(5) NOT NULL,
  `yearext` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `yeartype`
--

INSERT INTO `yeartype` (`id`, `tagyearid`, `yearext`) VALUES
(1, 'P1', '02'),
(2, 'P1', '13'),
(3, 'P1', '19'),
(4, 'P1', '30'),
(5, 'P1', '41'),
(6, 'P1', '47'),
(7, 'P1', '58'),
(8, 'P1', '69'),
(9, 'P1', '75'),
(10, 'P1', '97'),
(11, 'P2', '03'),
(12, 'P2', '14'),
(13, 'P2', '25'),
(14, 'P2', '31'),
(15, 'P2', '42'),
(16, 'P2', '53'),
(17, 'P2', '59'),
(18, 'P2', '70'),
(19, 'P2', '81'),
(20, 'P2', '87'),
(21, 'P2', '98'),
(22, 'P3', '09'),
(23, 'P3', '15'),
(24, 'P3', '26'),
(25, 'P3', '37'),
(26, 'P3', '43'),
(27, 'P3', '54'),
(28, 'P3', '65'),
(29, 'P3', '71'),
(30, 'P3', '82'),
(31, 'P3', '93'),
(32, 'P3', '99'),
(33, 'P4', '06'),
(34, 'P4', '17'),
(35, 'P4', '23'),
(36, 'P4', '34'),
(37, 'P4', '45'),
(38, 'P4', '51'),
(39, 'P4', '62'),
(40, 'P4', '73'),
(41, 'P4', '79'),
(42, 'P4', '90'),
(43, 'P5', '01'),
(44, 'P5', '07'),
(45, 'P5', '18'),
(46, 'P5', '29'),
(47, 'P5', '35'),
(48, 'P5', '46'),
(49, 'P5', '57'),
(50, 'P5', '63'),
(51, 'P5', '74'),
(52, 'P5', '85'),
(53, 'P5', '91'),
(54, 'P6', '10'),
(55, 'P6', '21'),
(56, 'P6', '27'),
(57, 'P6', '38'),
(58, 'P6', '49'),
(59, 'P6', '55'),
(60, 'P6', '66'),
(61, 'P6', '77'),
(62, 'P6', '83'),
(63, 'P6', '94'),
(64, 'P7', '05'),
(65, 'P7', '11'),
(66, 'P7', '22'),
(67, 'P7', '33'),
(68, 'P7', '39'),
(69, 'P7', '50'),
(70, 'P7', '61'),
(71, 'P7', '67'),
(72, 'P7', '78'),
(73, 'P7', '89'),
(74, 'P7', '95'),
(75, 'M1', '08'),
(76, 'M1', '36'),
(77, 'M1', '64'),
(78, 'M1', '92'),
(79, 'M2', '12'),
(80, 'M2', '40'),
(81, 'M2', '68'),
(82, 'M2', '96'),
(83, 'M3', '16'),
(84, 'M3', '44'),
(85, 'M3', '72'),
(86, 'M4', '20'),
(87, 'M4', '48'),
(88, 'M4', '76'),
(89, 'M5', '24'),
(90, 'M5', '52'),
(91, 'M5', '80'),
(92, 'M6', '28'),
(93, 'M6', '56'),
(94, 'M6', '84'),
(95, 'M7', '04'),
(96, 'M7', '32'),
(97, 'M7', '60'),
(98, 'M7', '88');

-- --------------------------------------------------------

--
-- Table structure for table `yearvalue`
--

CREATE TABLE IF NOT EXISTS `yearvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagyearId` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `note` text NOT NULL,
  `flag` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `year` (`year`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=291 ;

--
-- Dumping data for table `yearvalue`
--

INSERT INTO `yearvalue` (`id`, `tagyearId`, `year`, `note`, `flag`) VALUES
(1, 1, 1889, '', '1'),
(2, 1, 1895, '', '1'),
(3, 1, 1901, '', '1'),
(4, 1, 1907, '', '1'),
(5, 1, 1929, '', '1'),
(6, 1, 1918, '', '1'),
(7, 1, 1935, '', '1'),
(8, 1, 1946, '', '1'),
(9, 1, 1957, '', '1'),
(10, 1, 1963, '', '1'),
(11, 1, 1974, '', '1'),
(12, 1, 1985, '', '1'),
(13, 1, 1991, '', '1'),
(14, 1, 2002, '', '1'),
(15, 1, 2013, '', '1'),
(16, 1, 2019, '', '1'),
(17, 1, 2030, '', '1'),
(18, 1, 2041, '', '1'),
(19, 1, 2047, '', '1'),
(20, 1, 2058, '', '1'),
(21, 1, 2069, '', '1'),
(22, 1, 2075, '', '1'),
(23, 1, 2086, '', '1'),
(24, 2, 1890, '', '1'),
(25, 2, 1902, '', '1'),
(26, 2, 1913, '', '1'),
(27, 2, 1919, '', '1'),
(28, 2, 1930, '', '1'),
(29, 2, 1941, '', '1'),
(30, 2, 1947, '', '1'),
(31, 2, 1958, '', '1'),
(32, 2, 1969, '', '1'),
(33, 2, 1975, '', '1'),
(34, 2, 1986, '', '1'),
(35, 2, 1997, '', '1'),
(36, 2, 2003, '', '1'),
(37, 2, 2014, '', '1'),
(38, 2, 2025, '', '1'),
(39, 2, 2031, '', '1'),
(40, 2, 2042, '', '1'),
(41, 2, 2053, '', '1'),
(42, 2, 2059, '', '1'),
(43, 2, 2070, '', '1'),
(44, 2, 2081, '', '1'),
(45, 2, 2087, '', '1'),
(46, 3, 1885, '', '1'),
(47, 3, 1891, '', '1'),
(48, 3, 1903, '', '1'),
(49, 3, 1914, '', '1'),
(50, 3, 1925, '', '1'),
(51, 3, 1931, '', '1'),
(52, 3, 1942, '', '1'),
(53, 3, 1953, '', '1'),
(54, 3, 1959, '', '1'),
(55, 3, 1970, '', '1'),
(56, 3, 1981, '', '1'),
(57, 3, 1987, '', '1'),
(58, 3, 1998, '', '1'),
(59, 3, 2009, '', '1'),
(60, 3, 2015, '', '1'),
(61, 3, 2026, '', '1'),
(62, 3, 2037, '', '1'),
(63, 3, 2043, '', '1'),
(64, 3, 2054, '', '1'),
(65, 3, 2065, '', '1'),
(66, 3, 2071, '', '1'),
(67, 3, 2082, '', '1'),
(68, 4, 1882, '', '1'),
(69, 4, 1893, '', '1'),
(70, 4, 1899, '', '1'),
(71, 4, 1905, '', '1'),
(72, 4, 1911, '', '1'),
(73, 4, 1922, '', '1'),
(74, 4, 1933, '', '1'),
(75, 4, 1939, '', '1'),
(76, 4, 1950, '', '1'),
(77, 4, 1961, '', '1'),
(78, 4, 1967, '', '1'),
(79, 4, 1978, '', '1'),
(80, 4, 1989, '', '1'),
(81, 4, 1995, '', '1'),
(82, 4, 2006, '', '1'),
(83, 4, 2017, '', '1'),
(84, 4, 2023, '', '1'),
(85, 4, 2034, '', '1'),
(86, 4, 2045, '', '1'),
(87, 4, 2051, '', '1'),
(88, 4, 2062, '', '1'),
(89, 4, 2073, '', '1'),
(90, 4, 2079, '', '1'),
(91, 4, 2090, '', '1'),
(92, 5, 1883, '', '1'),
(93, 5, 1894, '', '1'),
(94, 5, 1900, '', '1'),
(95, 5, 1917, '', '1'),
(96, 5, 1906, '', '1'),
(97, 5, 1923, '', '1'),
(98, 5, 1934, '', '1'),
(99, 5, 1945, '', '1'),
(100, 5, 1951, '', '1'),
(101, 5, 1962, '', '1'),
(102, 5, 1973, '', '1'),
(103, 5, 1979, '', '1'),
(104, 5, 1990, '', '1'),
(105, 5, 2001, '', '1'),
(106, 5, 2007, '', '1'),
(107, 5, 2018, '', '1'),
(108, 5, 2029, '', '1'),
(109, 5, 2035, '', '1'),
(110, 5, 2046, '', '1'),
(111, 5, 2057, '', '1'),
(112, 5, 2063, '', '1'),
(113, 5, 2074, '', '1'),
(114, 5, 2085, '', '1'),
(115, 6, 1886, '', '1'),
(116, 6, 1897, '', '1'),
(117, 6, 1909, '', '1'),
(118, 6, 1915, '', '1'),
(119, 6, 1926, '', '1'),
(120, 6, 1937, '', '1'),
(121, 6, 1943, '', '1'),
(122, 6, 1954, '', '1'),
(123, 6, 1965, '', '1'),
(124, 6, 1971, '', '1'),
(125, 6, 1982, '', '1'),
(126, 6, 1993, '', '1'),
(127, 6, 1999, '', '1'),
(128, 6, 2010, '', '1'),
(129, 6, 2021, '', '1'),
(130, 6, 2027, '', '1'),
(131, 6, 2038, '', '1'),
(132, 6, 2049, '', '1'),
(133, 6, 2055, '', '1'),
(134, 6, 2066, '', '1'),
(135, 6, 2077, '', '1'),
(136, 6, 2083, '', '1'),
(137, 7, 1881, '', '1'),
(138, 7, 1887, '', '1'),
(139, 7, 1898, '', '1'),
(140, 7, 1910, '', '1'),
(141, 7, 1921, '', '1'),
(142, 7, 1927, '', '1'),
(143, 7, 1938, '', '1'),
(144, 7, 1949, '', '1'),
(145, 7, 1955, '', '1'),
(146, 7, 1966, '', '1'),
(147, 7, 1977, '', '1'),
(148, 7, 1983, '', '1'),
(149, 7, 1994, '', '1'),
(150, 7, 2005, '', '1'),
(151, 7, 2011, '', '1'),
(152, 7, 2022, '', '1'),
(153, 7, 2033, '', '1'),
(154, 7, 2039, '', '1'),
(155, 7, 2050, '', '1'),
(156, 7, 2061, '', '1'),
(157, 7, 2067, '', '1'),
(158, 7, 2078, '', '1'),
(159, 7, 2089, '', '1'),
(160, 8, 1884, '', '1'),
(161, 8, 1924, '', '1'),
(162, 8, 1952, '', '1'),
(163, 8, 1980, '', '1'),
(164, 8, 2008, '', '1'),
(165, 8, 2036, '', '1'),
(166, 8, 2064, '', '1'),
(167, 9, 1888, '', '1'),
(168, 9, 1928, '', '1'),
(169, 9, 1956, '', '1'),
(170, 9, 1984, '', '1'),
(171, 9, 2012, '', '1'),
(172, 9, 2040, '', '1'),
(173, 9, 2068, '', '1'),
(174, 10, 1892, '', '1'),
(175, 10, 1904, '', '1'),
(176, 10, 1932, '', '1'),
(177, 10, 1960, '', '1'),
(178, 10, 1988, '', '1'),
(179, 10, 2016, '', '1'),
(180, 10, 2044, '', '1'),
(181, 10, 2072, '', '1'),
(182, 11, 1896, '', '1'),
(183, 11, 1908, '', '1'),
(184, 11, 1936, '', '1'),
(185, 11, 1964, '', '1'),
(186, 11, 1992, '', '1'),
(187, 11, 2020, '', '1'),
(188, 11, 2048, '', '1'),
(189, 11, 2076, '', '1'),
(190, 12, 1912, '', '1'),
(191, 12, 1940, '', '1'),
(192, 12, 1968, '', '1'),
(193, 12, 1996, '', '1'),
(194, 12, 2024, '', '1'),
(195, 12, 2052, '', '1'),
(196, 12, 2080, '', '1'),
(197, 13, 1916, '', '1'),
(198, 13, 1944, '', '1'),
(199, 13, 1972, '', '1'),
(200, 13, 2000, '', '1'),
(201, 13, 2028, '', '1'),
(202, 13, 2056, '', '1'),
(203, 13, 2084, '', '1'),
(204, 14, 1880, '', '1'),
(205, 14, 1920, '', '1'),
(206, 14, 1948, '', '1'),
(207, 14, 1976, '', '1'),
(208, 14, 2004, '', '1'),
(209, 14, 2032, '', '1'),
(210, 14, 2060, '', '1'),
(211, 14, 2088, '', '1'),
(212, 1, 1805, '', '1'),
(213, 1, 1811, '', '1'),
(214, 1, 1822, '', '1'),
(215, 1, 1833, '', '1'),
(216, 1, 1839, '', '1'),
(217, 1, 1850, '', '1'),
(218, 1, 1861, '', '1'),
(219, 1, 1867, '', '1'),
(220, 1, 1878, '', '1'),
(221, 2, 1800, '', '1'),
(222, 2, 1806, '', '1'),
(223, 2, 1812, '', '1'),
(224, 2, 1823, '', '1'),
(225, 2, 1834, '', '1'),
(226, 2, 1845, '', '1'),
(227, 2, 1851, '', '1'),
(228, 2, 1862, '', '1'),
(229, 2, 1873, '', '1'),
(230, 2, 1879, '', '1'),
(231, 3, 1801, '', '1'),
(232, 3, 1807, '', '1'),
(233, 3, 1818, '', '1'),
(234, 3, 1829, '', '1'),
(235, 3, 1835, '', '1'),
(236, 3, 1846, '', '1'),
(237, 3, 1857, '', '1'),
(238, 3, 1863, '', '1'),
(239, 3, 1874, '', '1'),
(240, 4, 1804, '', '1'),
(241, 4, 1809, '', '1'),
(242, 4, 1815, '', '1'),
(243, 4, 1826, '', '1'),
(244, 4, 1837, '', '1'),
(245, 4, 1843, '', '1'),
(246, 4, 1854, '', '1'),
(247, 4, 1865, '', '1'),
(248, 4, 1871, '', '1'),
(249, 5, 1810, '', '1'),
(250, 5, 1821, '', '1'),
(251, 5, 1827, '', '1'),
(252, 5, 1838, '', '1'),
(253, 5, 1849, '', '1'),
(254, 5, 1855, '', '1'),
(255, 5, 1866, '', '1'),
(256, 5, 1877, '', '1'),
(257, 6, 1802, '', '1'),
(258, 6, 1813, '', '1'),
(259, 6, 1819, '', '1'),
(260, 6, 1830, '', '1'),
(261, 6, 1841, '', '1'),
(262, 6, 1847, '', '1'),
(263, 6, 1858, '', '1'),
(264, 6, 1869, '', '1'),
(265, 6, 1875, '', '1'),
(266, 7, 1803, '', '1'),
(267, 7, 1814, '', '1'),
(268, 7, 1825, '', '1'),
(269, 7, 1831, '', '1'),
(270, 7, 1842, '', '1'),
(271, 7, 1853, '', '1'),
(272, 7, 1859, '', '1'),
(273, 7, 1870, '', '1'),
(274, 8, 1828, '', '1'),
(275, 8, 1856, '', '1'),
(276, 9, 1832, '', '1'),
(277, 9, 1860, '', '1'),
(278, 10, 1808, '', '1'),
(279, 10, 1836, '', '1'),
(280, 10, 1864, '', '1'),
(281, 11, 1840, '', '1'),
(282, 11, 1868, '', '1'),
(283, 12, 1816, '', '1'),
(284, 12, 1844, '', '1'),
(285, 12, 1872, '', '1'),
(286, 13, 1820, '', '1'),
(287, 13, 1848, '', '1'),
(288, 13, 1876, '', '1'),
(289, 14, 1824, '', '1'),
(290, 14, 1852, '', '1');