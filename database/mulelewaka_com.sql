-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulelewaka.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `activism`
--

CREATE TABLE `activism` (
  `slug` varchar(600) NOT NULL,
  `title` varchar(600) NOT NULL,
  `picture_url` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activism`
--

INSERT INTO `activism` (`slug`, `title`, `picture_url`, `content`, `date`, `status`) VALUES
('police-Officer-rapes-a-young-girl-in-custody-at-limbe-police', 'Police Officer Rapes a Young Girl in Custody at Limbe Police', '2.jpg', 'Mulelewaka Foundation team posing with State Lawyer Eunice Ndingo at Blantyre Magistrate court. We had to offer support to a 16-year-old girl child who was raped twice by a police officer while in police custody at Limbe police station. The case is yet to be concluded and we are following closely all developments surrounding the case. We will soldier on untill justice is served for the young girl. 3433', '2022-04-09 21:12:20', 1),
('the-foundation-continues-to-seek-justice-for-the-rape-victim', 'The Foundation continues to seek justice for the rape victim', '1.jpg', 'Upon seeing delays in concluding the young girl\'s rape case, Mulelewaka had to write the Judiciary and Malawi Human Rights Commission to make follow ups on the reasons for such delays. This has prompted the Judiciary to set May 21, 2021 as the next date of hearing the case. We will make sure young girls are protected.', '2022-04-09 17:59:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chidren_corner`
--

CREATE TABLE `chidren_corner` (
  `slug` varchar(500) NOT NULL,
  `picture_url` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chidren_corner`
--

INSERT INTO `chidren_corner` (`slug`, `picture_url`, `title`, `content`, `date`, `status`) VALUES
('a-trainer-trained-by-mulelewaka-drills-participants', '2.jpg', ' A trainer trained by Mulelewaka drills participants', '<br />\r\nA trainer trained by Mulelewaka drills participants on how to make composite manure. This is one of the activities that are regarded as paramount in sustaining the children corners. ', '2022-04-10 13:51:02', 1),
('children-corners-facilitators', '3.jpg', 'Children corners facilitators', '<br />\r\nChildren corners facilitators being trained on how to make composite manure by Mulelewaka Foundation team.', '2022-04-10 13:51:44', 1),
('mulelewaka-executive-secretary-natalie-choo', '5.jpg', 'Mulelewaka Executive Secretary Natalie Choo', 'Mulelewaka Executive Secretary Natalie Choo interacting with children at Fosa Children corner. The kids were very exicited to play around with Ms Natalie.', '2022-04-10 13:56:41', 1),
('mulelewaka-foundatiin-team-at-fosa-children-corner-in-dedza', '4.jpg', 'Mulelewaka Foundatiin team at Fosa Children corner in Dedza', 'Mulelewaka Foundatiin team at Fosa Children corner in Dedza interacting with children. In the truck are learning materials and some assorted sporting items which were later donated at the facility by Mulelewaka Foundation', '2022-04-10 13:54:37', 1),
('with-support-from-british-social-workers-association-basw', '1.jpg', 'With support from British Social Workers Association (BASW)', '<br />\r\nWith support from British Social Workers Association (BASW), UNICEF-Malawi and SSWIM UK, Mulelewaka trained children corners\' facilitators and donated various items at Fosa, Chitsime, Chilungamo and Tiyanjane children corners in Dedza district. This was made possible in partnership with the Malawi Ministry of Gender, Children and Social Welfare.', '2022-04-10 13:50:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `shortname` varchar(500) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `postal_address` varchar(500) NOT NULL,
  `facebook_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `logo_link` text NOT NULL,
  `physical_location` text NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `logo` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `motto` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`shortname`, `about`, `email`, `phone`, `postal_address`, `facebook_link`, `twitter_link`, `logo_link`, `physical_location`, `mission`, `vision`, `logo`, `name`, `motto`, `date`, `status`) VALUES
('Mulelewaka ', '', 'info@mulelewaka.com', '+265 888 464 339', '', '#', '#', '', 'Nkhatabay Off Nkhatabay Road MALAWI', 'A child and youth motivated foundation working towards social and economic empowerment through advocacy, sensitization, networking and provision of educational and psychosocial support to marginalized children and youth', 'To be a foundation that efficiently looks at the general welfare of children and youth by providing a safe home outside', 'logo3.png', 'Mulelewaka Foundation', 'A Partner in Juvenile Reformation and Provision of Social Services to Marginalised Children.', '2022-04-12 05:33:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `slug` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `picture_url` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`slug`, `name`, `content`, `picture_url`, `date`, `status`) VALUES
('donation-at-maria-girls', 'Donation at Maria Goratte Girls Primary School', 'Donation of buckets, bags of cement and hand wash soap at St. Maria Goratte Girls Primary School by the Commander-in-Chief of Citizens for Transformation (CFT) who is also Minister of Civic Education and National Unity, Hon. Timothy Pagonachi Mtambo, after educating children on COVID-19.', '3.jpg', '2022-04-11 06:18:43', 1),
('help-to-margimalised-children', 'Help to Margimalised Chidren', 'As one way of helping margimalized children, Mulelewaka donated a wheel chair to Emmanuel Dzimbiri a 13 year old disabled boy at Chintheche. The support was necessitated by the need for Emmanuel to attend school. He has not been in school because he can hardly walk.', '4.jpg', '2022-04-11 06:18:43', 1),
('sanitory-materials-donation', 'Sanitary Materials Donation', 'Minister of Civic Education and National Unity presenting sanitary materials at Mgodi Primary School as one way of encouraging hygeine during COVID-19. Items donated by Mulelewaka Foundation.', '1.jpg', '2022-04-11 06:14:45', 1),
('school-visit', 'School Visit', 'Mulelewaka Executive Director Mr Dunstan Chunda and Hon. Minister of Civic Education interact with learners at Mgodi Primary School. This is a school where learners run away from classes upon seeing a vehicle which they suspected of carrying COVID-19 vaccines.', '2.jpg', '2022-04-11 06:14:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `slug` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `place` text NOT NULL,
  `time` time NOT NULL,
  `occation_date` date NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`slug`, `name`, `place`, `time`, `occation_date`, `content`, `date`, `status`) VALUES
('presening-sanitory-materials-at-mgodi', 'Presening Sanitory Materials at Mgodi', 'Mgodi Primary School ', '16:27:00', '2022-05-19', 'Minister of Civic Education and National Unity presenting sanitary materials at Mgodi Primary School as one way of encouraging hygeine during COVID-19. Items donated by Mulelewaka Foundation.', '2022-04-11 05:36:42', 1),
('wheel-chairs-donations-at-chitheche', 'Wheel Chairs Donations at Chitheche', 'Chitheche', '08:25:00', '2022-04-12', 'As one way of helping margimalized children, Mulelewaka donated a wheel chair to Emmanuel Dzimbiri a 13 year old disabled boy at Chintheche. The support was necessitated by the need for Emmanuel to attend school. He has not been in school because he can hardly walk', '2022-04-11 05:55:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slug` varchar(500) NOT NULL,
  `title` varchar(400) NOT NULL,
  `picture_url` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slug`, `title`, `picture_url`, `author`, `content`, `date`, `status`) VALUES
('hello-there', 'hello there', 'slider-with-effect.jpg', 'Hello Malawi', '<p>hello There<br></p>', '2022-09-25 21:44:53', 1),
('mulelewaka-malawi', 'Social Work At Mzugoss', 'snipped5.PNG', 'Thomson Mulelewaka', '<p>With support from British Social Workers Association (BASW), UNICEF-Malawi and SSWIM UK Mulelewaka trained children corners\' facilitators and donated various items at Fosa, Chitsime, Chilungamo and Tiyanjane children corners in Dedza district.</p><p>Chidren are children<br></p>', '2022-09-25 21:32:05', 1),
('news-3', 'news-3', 'picture---4.jpg', 'Kamavinga', '<p>Kamavinga<br></p>', '2022-09-25 21:44:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `slug` varchar(500) NOT NULL,
  `name` varchar(400) NOT NULL,
  `fullname` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parteners`
--

INSERT INTO `parteners` (`slug`, `name`, `fullname`, `date`, `status`) VALUES
('basw', 'BASW', 'British Assossiation of Social Workers (BASW)', '2022-04-09 17:44:33', 1),
('cfif', 'CFIF', 'Children and Families International Foundation', '2022-04-09 17:44:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `slug` varchar(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(200) NOT NULL,
  `facebook_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `picture_link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`slug`, `name`, `position`, `facebook_link`, `twitter_link`, `picture_link`, `date`, `status`) VALUES
('dustan', 'Dunstan Chunda', 'Executive Director', '#', '#', 'dunsan.jpg', '2022-04-09 17:46:39', 1),
('natalia', 'Natalie Choo', 'Executive Secretary', '#', '#', 'natalia.jpg', '2022-04-09 17:46:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `role` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `fname`, `role`, `status`) VALUES
('thom.phiri@mulelewaka.com', '06c579e5ee708ee168c5c27d1c606460145d4b0d', 'Thom Phiri', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activism`
--
ALTER TABLE `activism`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `chidren_corner`
--
ALTER TABLE `chidren_corner`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`shortname`);

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
