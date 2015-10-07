-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2015 at 06:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `141`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted`
--

CREATE TABLE IF NOT EXISTS `accepted` (
`id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `fname`, `mname`, `lname`) VALUES
(1, 'admin', 'TEAM', 'a', 'BUNAL');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_info`
--

CREATE TABLE IF NOT EXISTS `alumni_info` (
`alumni_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `height` float NOT NULL,
  `religion` varchar(32) NOT NULL,
  `civil_status` varchar(32) NOT NULL,
  `birthplace` varchar(32) NOT NULL,
  `weight` int(11) NOT NULL,
  `nationality` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `thumb_name` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `alumni_info`
--

INSERT INTO `alumni_info` (`alumni_id`, `username`, `fname`, `mname`, `lname`, `contact`, `bday`, `status`, `gender`, `language_id`, `skill_id`, `course`, `height`, `religion`, `civil_status`, `birthplace`, `weight`, `nationality`, `address`, `email`, `img_name`, `thumb_name`, `ext`) VALUES
(14, '10301201', 'Kenneth Francis', 'Miaga', 'Giangan', '09088673605', '1993-05-28', 'Active', 'Male', 0, 0, 'BS-ICT', 5, 'Roman Catholic', 'Single', 'Cebu City', 60, 'Filipino', 'Talamban, Cebu City', 'francisgiangan@gmail.com', '', '', ''),
(15, '10303759', 'Chris Evert Lloyd', 'Oro', 'Mañacap', '2622232', '1993-11-28', 'Active', 'Male', 0, 0, 'BS-ICT', 5.7, 'Roman Catholic', 'Single', 'Cebu City', 90, 'Filipino', 'Bario Luz, Cebu City', 'manacapchrisevertlloyd@gmail.com', '', '', ''),
(16, '10304308', 'Zedrick Jade', 'Difuntorum', 'Juntilla', '0000', '1994-06-01', 'Inactive', 'Male', 0, 0, 'BS-ICT', 5.6, 'Roman Catholic', 'Single', 'Cebu City', 0, 'Filipino', 'Casia, Bankal, Lapu-Lapu City', 'zedrickjuntilla@gmail.com', '', '', ''),
(17, '11104523', 'Stanley', 'Macoy', 'Cabahug', '0000', '1994-09-22', 'Active', 'Male', 0, 0, 'BS-ICT', 5.8, 'Roman Catholic', 'Single', 'Cebu City', 54, 'Filipino', 'Casuntingan, Mandaue City', 'stan_youme@yahoo.com.ph', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_skill`
--

CREATE TABLE IF NOT EXISTS `alumni_skill` (
`id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
`id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
`award_id` int(11) NOT NULL,
  `award_title` varchar(32) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `award_issuer` varchar(50) NOT NULL,
  `award_date` date NOT NULL,
  `award_desc` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`award_id`, `award_title`, `alumni_id`, `award_issuer`, `award_date`, `award_desc`) VALUES
(1, 'Best Librerer', 14, 'Team Bunal', '2015-10-06', 'Best Libre');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
`cert_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `cert_name` varchar(50) NOT NULL,
  `cert_authority` varchar(50) NOT NULL,
  `cert_license` varchar(50) NOT NULL,
  `cert_url` varchar(100) NOT NULL,
  `cert_month` varchar(15) NOT NULL,
  `cert_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
`company_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `company_desc` varchar(500) NOT NULL,
  `website` varchar(32) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `thumb_name` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`company_id`, `username`, `company_name`, `email`, `contact`, `status`, `address`, `company_desc`, `website`, `img_name`, `thumb_name`, `ext`) VALUES
(3, 'elumba', 'Elumba Technologies', 'elumba@gmail.com', '2302930', 'Active', 'UP Cebu', 'OH YEAH!', 'elumba.com', 'accenture1', 'accenture1_thumb', '.png'),
(4, 'accenture', 'Accenture', 'accenture@gmail.com', '2652256', 'Active', 'IT Park', 'Accenture is one of the world’s leading professional services companies, with capabilities in strategy, consulting, digital, technology and operations.', 'www.accenture.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
`connection_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `alumni_id_con` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
`educ_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `field_of_study` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`educ_id`, `alumni_id`, `degree`, `school`, `start_date`, `end_date`, `field_of_study`) VALUES
(1, 14, 'Tertiary Level', 'University of San Carlos', '2013-06-01', '2016-04-01', 'Bachelor of Science in Information and Communication Technology'),
(2, 14, 'Secondary Level', 'San Roque Child Development School', '2006-06-01', '2010-03-31', 'N/A'),
(3, 14, '', 'zz', '1111-11-11', '0000-00-00', 'zzzz');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
`exp_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`exp_id`, `alumni_id`, `job_title`, `company_name`, `company_address`, `start_date`, `end_date`) VALUES
(1, 14, 'Design Associate', 'Ripe Concepts', 'The Insular Life Cebu Business Centre, Cebu Business Park, Cebu City 6000', '2015-09-01', '2015-09-14'),
(2, 15, 'Web Developer', 'Elumba Technologies', 'UP Cebu', '2015-03-31', '2015-06-10'),
(3, 14, 'Web Developer', 'Elumba Technologies', 'UP CEBU', '2015-03-31', '2015-06-11'),
(4, 14, 'Wordpress Developer', 'IBM', 'IT PARK CEBU CITY 6000', '2015-03-31', '2015-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE IF NOT EXISTS `job_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Information Technology', ''),
(2, 'Design', ''),
(3, 'Technology', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
`id` int(11) NOT NULL,
  `job_category` varchar(100) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `validity` date NOT NULL,
  `gender` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `experience` varchar(32) NOT NULL,
  `skills` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `job_category`, `jobtitle`, `job_desc`, `company_id`, `status`, `salary`, `validity`, `gender`, `age`, `experience`, `skills`) VALUES
(1, 'Information Technology', 'Wordpress', 'job description', 3, 'Pending', 99, '2015-09-09', 'Female', 18, 'Less than 1 year', 'Pole Dancing'),
(2, 'Information Technology', 'Codeigniter Programmer', 'super cool programmer with cool codeigniter programming grammar', 3, 'Pending', 1000, '2015-09-09', 'Male', 69, '1 - 3 years', 'Lap Dancing');

-- --------------------------------------------------------

--
-- Table structure for table `job_skillset`
--

CREATE TABLE IF NOT EXISTS `job_skillset` (
`id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
`org_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `org_position` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `org_desc` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`org_id`, `alumni_id`, `org_name`, `org_position`, `start_date`, `end_date`, `org_desc`) VALUES
(1, 14, 'Dynacom', 'President', '2015-10-01', '2015-10-21', 'Dynacom is a shit'),
(2, 14, 'Albertos Libre', 'zedrick', '2011-11-11', '2012-12-12', 'Libre Zed Albertos');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `position` varchar(32) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `proj_desc` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `alumni_id`, `project_name`, `position`, `start_date`, `end_date`, `proj_desc`) VALUES
(1, 14, 'Career Seeker', 'Project Leader', '2015-09-01', '2015-10-31', 'Team Bunal for the win.'),
(2, 14, 'Test', 'Web Dev', '2015-10-13', '2015-10-23', 'test test'),
(3, 14, 'Albertos', 'Libre', '2011-11-11', '2012-12-12', 'Libre Albertos');

-- --------------------------------------------------------

--
-- Table structure for table `project_mem_list`
--

CREATE TABLE IF NOT EXISTS `project_mem_list` (
  `project_id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `position` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_mem_list`
--

INSERT INTO `project_mem_list` (`project_id`, `fname`, `lname`, `position`) VALUES
(1, 'Chris Evert Lloyd', 'Mañacap', 'Back-end Developer'),
(1, 'Zedrick Jade', 'Juntilla', 'Front-end Developer'),
(1, 'Stanley', 'Cabahug', 'Back-end Developer');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
`skill_id` int(11) NOT NULL,
  `skill_name` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skill_rate`
--

CREATE TABLE IF NOT EXISTS `skill_rate` (
`id` int(11) NOT NULL,
  `rate_name` varchar(20) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `date_reg`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2015-09-16 16:15:05'),
(21, 'elumba', '5d0e8f7623b77334f18e10e45935f0b7', 'company', '2015-10-01 17:04:37'),
(25, '10301201', 'dd6492c5a01af9a353deedb186fa2640', 'alumni', '2015-09-29 18:37:51'),
(26, '10303759', '0007562b5dca2dd23f8b335d95ae7376', 'alumni', '2015-09-29 18:40:28'),
(27, '10304308', '5d893df41012f7d42652bbd672ab70a2', 'alumni', '2015-09-29 18:41:40'),
(28, '11104523', '39490c20764a489259684a15319763ad', 'alumni', '2015-09-29 18:43:00'),
(29, 'accenture', 'e96a479c49f59f0f9e66875d0d856ab6', 'company', '2015-10-01 19:05:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted`
--
ALTER TABLE `accepted`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`alumni_id`), ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `alumni_info`
--
ALTER TABLE `alumni_info`
 ADD PRIMARY KEY (`alumni_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `alumni_skill`
--
ALTER TABLE `alumni_skill`
 ADD PRIMARY KEY (`id`), ADD KEY `skill_id` (`skill_id`), ADD KEY `rate` (`rate`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
 ADD PRIMARY KEY (`id`), ADD KEY `job_id` (`job_id`), ADD KEY `user_id` (`alumni_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
 ADD PRIMARY KEY (`award_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
 ADD PRIMARY KEY (`cert_id`), ADD KEY `alumni_info` (`alumni_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
 ADD PRIMARY KEY (`company_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
 ADD PRIMARY KEY (`connection_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`educ_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
 ADD PRIMARY KEY (`exp_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
 ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
 ADD PRIMARY KEY (`id`), ADD KEY `category` (`job_category`), ADD KEY `alumni_id` (`company_id`);

--
-- Indexes for table `job_skillset`
--
ALTER TABLE `job_skillset`
 ADD PRIMARY KEY (`id`), ADD KEY `skill_id` (`skill_id`), ADD KEY `job_post_id` (`job_post_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
 ADD PRIMARY KEY (`org_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project_id`), ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `project_mem_list`
--
ALTER TABLE `project_mem_list`
 ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
 ADD PRIMARY KEY (`skill_id`), ADD UNIQUE KEY `skill_name` (`skill_name`);

--
-- Indexes for table `skill_rate`
--
ALTER TABLE `skill_rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted`
--
ALTER TABLE `accepted`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alumni_info`
--
ALTER TABLE `alumni_info`
MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `alumni_skill`
--
ALTER TABLE `alumni_skill`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
MODIFY `cert_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `educ_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job_skillset`
--
ALTER TABLE `job_skillset`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skill_rate`
--
ALTER TABLE `skill_rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accepted`
--
ALTER TABLE `accepted`
ADD CONSTRAINT `accepted_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_post` (`id`);

--
-- Constraints for table `admin_info`
--
ALTER TABLE `admin_info`
ADD CONSTRAINT `admin_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `alumni_info`
--
ALTER TABLE `alumni_info`
ADD CONSTRAINT `alumni_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `alumni_skill`
--
ALTER TABLE `alumni_skill`
ADD CONSTRAINT `alumni_skill_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
ADD CONSTRAINT `alumni_skill_ibfk_2` FOREIGN KEY (`rate`) REFERENCES `skill_rate` (`id`),
ADD CONSTRAINT `alumni_skill_ibfk_3` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_post` (`id`);

--
-- Constraints for table `awards`
--
ALTER TABLE `awards`
ADD CONSTRAINT `awards_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `company_info`
--
ALTER TABLE `company_info`
ADD CONSTRAINT `company_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
ADD CONSTRAINT `connections_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
ADD CONSTRAINT `job_post_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `company_info` (`company_id`),
ADD CONSTRAINT `job_post_ibfk_4` FOREIGN KEY (`job_category`) REFERENCES `job_category` (`category_name`);

--
-- Constraints for table `job_skillset`
--
ALTER TABLE `job_skillset`
ADD CONSTRAINT `job_skillset_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
ADD CONSTRAINT `job_skillset_ibfk_2` FOREIGN KEY (`job_post_id`) REFERENCES `job_post` (`id`);

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
ADD CONSTRAINT `organizations_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`);

--
-- Constraints for table `project_mem_list`
--
ALTER TABLE `project_mem_list`
ADD CONSTRAINT `project_mem_list_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
