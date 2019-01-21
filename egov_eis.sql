-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2019 at 04:45 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egov_eis`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `desig_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Designation ID',
  `desig_code` varchar(10) NOT NULL COMMENT 'Designation Code',
  `desig_name` varchar(100) NOT NULL COMMENT 'Designation',
  PRIMARY KEY (`desig_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desig_id`, `desig_code`, `desig_name`) VALUES
(1, 'CEG', 'Commissioner of eGovernance'),
(2, 'JCEO', 'Joint CEO'),
(3, 'JDTECH', 'Joint Director (Technical)'),
(4, 'PD', 'Project Director (GIS)'),
(5, 'FA&CAO', 'Financial Adviser & Chief Accounts Officer'),
(6, 'HEAD-SEMT', 'Head SeMT'),
(7, 'SCONS', 'Senior Consultant'),
(8, 'CONS', 'Consultant'),
(9, 'SSA', 'Senior System Analyst'),
(10, 'SA/DA', 'System Analyst / Deputy Collector'),
(11, 'SA', 'System Analyst'),
(12, 'ASE', 'Assistant System Engineer'),
(13, 'AM', 'Assistant Manager '),
(14, 'SPDT', 'Superindentant'),
(15, 'AO', 'Accounts Officer'),
(16, 'AAO', 'Assistant accounts Officer'),
(17, 'FC', 'Financial Consultant'),
(18, 'ACC', 'Accountant'),
(19, 'ASST', 'Assistant'),
(20, 'JRASST', 'Junior Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ugdegree` varchar(100) NOT NULL,
  `ugcollege` varchar(200) NOT NULL,
  `pgdegree` varchar(100) NOT NULL,
  `pgcollege` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `employer_name` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `emp_from` date NOT NULL,
  `emp_to` date NOT NULL,
  `emp_exp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

DROP TABLE IF EXISTS `learn`;
CREATE TABLE IF NOT EXISTS `learn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `skills_learn` varchar(100) NOT NULL,
  `mode_of_learn` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `salutation` varchar(4) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(3) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `per_address_1` varchar(100) NOT NULL,
  `mobile` bigint(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `martial_status` varchar(10) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `designation` int(3) NOT NULL,
  `date_of_join` date DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profpic`
--

DROP TABLE IF EXISTS `profpic`;
CREATE TABLE IF NOT EXISTS `profpic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `profpic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_level` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `username` varchar(30) NOT NULL COMMENT 'Login User Name',
  `password` varchar(255) NOT NULL COMMENT 'Password',
  `user_role` int(5) NOT NULL COMMENT 'User Role',
  `user_group` char(2) NOT NULL,
  `default_pass` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_role`, `user_group`, `default_pass`) VALUES
(1, 'ceo.tnega', '25.11.1975', 1, 'AL', 0),
(2, 'jceo.tnega', '08.01.1977', 2, 'AL', 0),
(3, 'jdtec.tnega', '12.08.1963', 3, 'AL', 0),
(4, 'facao.tnega', '30.05.1983', 4, 'AC', 0),
(5, 'semt.head', '25.11.1975', 5, 'SE', 0),
(6, 'conslt1.tnega', '25.03.1974', 6, 'SE', 0),
(7, 'conslt2.tnega', '27.08.1974', 6, 'SE', 0),
(8, 'srsyanlt1.tnega', '17.06.1979', 7, 'TC', 0),
(9, 'srsyanlt2.tnega', '20.05.1983', 7, 'TC', 0),
(10, 'syanlt1.tnega', '26.07.1972', 8, 'TC', 0),
(11, 'syanlt2.tnega', '23.05.1970', 8, 'TC', 0),
(12, 'syanlt3.tnega', '4.05.1979', 8, 'TC', 0),
(13, 'syanlt4.tnega', '21.08.1984', 8, 'TC', 0),
(14, 'syanlt5.tnega', '11.04.1984', 8, 'TC', 0),
(15, 'syanlt6.tnega', '12.06.1989', 9, 'TC', 0),
(16, 'syanlt7.tnega', '15.09.1984', 9, 'TC', 0),
(17, 'syanlt8.tnega', '25.08.1987', 9, 'TC', 0),
(18, 'syanlt9.tnega', '26.4.1983', 9, 'TC', 0),
(19, 'asye1.tnega', '19.07.1980', 10, 'TC', 0),
(20, 'asye2.tnega', '04.01.1990', 10, 'TC', 0),
(21, 'asye3.tnega', '09.04.1991', 10, 'TC', 0),
(22, 'asye4.tnega', '15.10.1992', 10, 'TC', 0),
(23, 'asye5.tnega', '25.11.1991', 10, 'TC', 0),
(24, 'asye6.tnega', '24.01.1985', 10, 'TC', 0),
(25, 'asye7.tnega', '09.09.1988', 10, 'TC', 0),
(26, 'asye8.tnega', '08.01.1983', 10, 'TC', 0),
(27, 'asye9.tnega', '26.06.1989', 10, 'TC', 0),
(28, 'asye10.tnega', '25.11.1991', 10, 'TC', 0),
(29, 'asye11.tnega', '30.05.1989', 10, 'TC', 0),
(30, 'asye12.tnega', '03.07.1991', 10, 'TC', 0),
(31, 'asye13.tnega', '06.06.1991', 10, 'TC', 0),
(32, 'asye14.tnega', '16.07.1990', 10, 'TC', 0),
(33, 'asye15.tnega', '02.03.1993', 10, 'TC', 0),
(34, 'asye16.tnega', '16.02.1993', 10, 'TC', 0),
(35, 'asye17.tnega', '04.05.1987', 10, 'TC', 0),
(36, 'asye18.tnega', '13.06.1993', 10, 'TC', 0),
(37, 'asye19.tnega', '28.10.1992', 10, 'TC', 0),
(38, 'asye20.tnega', '14.03.1993', 10, 'TC', 0),
(39, 'asye21.tnega', '05.04.1990', 10, 'TC', 0),
(40, 'asye22.tnega', '02.05.1980', 10, 'TC', 0),
(41, 'asye23.tnega', '16.06.1975', 10, 'TC', 0),
(42, 'asye24.tnega', '30.05.1984', 10, 'TC', 0),
(43, 'asye25.tnega', '29.09.1992', 10, 'TC', 0),
(44, 'asye26.tnega', '21.06.1991', 10, 'TC', 0),
(45, 'asye27.tnega', '28.01.1991', 10, 'TC', 0),
(46, 'asye28.tnega', '31.01.1990', 10, 'TC', 0),
(47, 'asye29.tnega', '04.08.1983', 10, 'TC', 0),
(48, 'asye30.tnega', '16.05.1993', 10, 'TC', 0),
(49, 'asye31.tnega', '15.05.1984', 10, 'TC', 0),
(50, 'asye32.tnega', '16.08.1994', 10, 'TC', 0),
(51, 'asye33.tnega', '20.06.1991', 10, 'TC', 0),
(52, 'asye34.tnega', '02.11.1989', 10, 'TC', 0),
(53, 'amt.tnega', '06.09.1978', 11, 'AD', 0),
(54, 'spnd1.tnega', '06.02.1973', 12, 'AD', 0),
(55, 'ast1.tnega', '18.04.1988', 13, 'AD', 0),
(56, 'ast2.tnega', '19.08.1990', 13, 'AD', 0),
(57, 'ast3.tnega', '10.06.1980', 13, 'AD', 0),
(58, 'jrast1.tnega', '26.07.1964', 14, 'AD', 0),
(59, 'jrast2.tnega', '08.02.1981', 14, 'AD', 0),
(60, 'jrast3.tnega', '30.12.1988', 14, 'AD', 0),
(61, 'jrast4.tnega', '25.06.1994', 14, 'AD', 0),
(62, 'jrast5.tnega', '30.07.1994', 14, 'AD', 0),
(63, 'ao.tnega', '05.06.1966', 15, 'AC', 0),
(64, 'aao.tnega', '25.08.1968', 16, 'AC', 0),
(65, 'fc.tnega', '01.03.1987', 17, 'AC', 0),
(66, 'acct1.tnega', '30.12.1980', 18, 'AC', 0),
(67, 'acct2.tnega', '16.01.1995', 18, 'AC', 0),
(68, 'acct3.tnega', '22.02.1979', 18, 'AC', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
