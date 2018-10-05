-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 09:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googlemap`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charityId` varchar(100) NOT NULL,
  `name` text,
  `fon` varchar(15) DEFAULT NULL,
  `category` text,
  `desc` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charityId`, `name`, `fon`, `category`, `desc`, `address`) VALUES
('', 'Muner', '0199876555', 'Health', 'Health consultation at Kampus Jasin', 'Kelantan'),
('animal/1', 'Riz', '0179016308', 'Animal', 'Donor pets', 'Melaka'),
('animal/2', 'Alif', '0179016306', 'Animal', 'give', 'kampung'),
('animal/3', 'Alif', '0179016306', 'Animal', 'bg pets', 'kampung'),
('Arts,Culture and Humanities/1', 'Amin', '0145037993', 'Arts,Culture and Human', 'Doing some charity to helps people in need they do contact me at this available number phone 0176876621(Ws Only)', 'Merlimau'),
('Community Development/1', 'Amin', '0145037993', 'Community Development', 'Motivation team work ', 'Merlimau'),
('education/1', 'Amin', '0145037993', 'Human Services', 'Motivation and camping for school holiday ', 'Merlimau'),
('Human Services/1', 'Riz', '0179016308', 'Human Services', 'Motivation school ', 'Melaka');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(100) DEFAULT NULL,
  `lat` decimal(16,7) DEFAULT NULL,
  `long` decimal(16,7) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `ReturnedAddress` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `long`, `name`, `ReturnedAddress`, `type`) VALUES
(1, '2.3113000', '102.4309000', 'Jasin', 'Jasin', 'Volunteer'),
(2, '2.1452000', '102.4224000', 'Merlimau', 'Pekan', 'Kebajikan'),
(3, '2.2280000', '102.2977000', 'Bukit Katil', 'taman', 'Animal'),
(4, '2.2212000', '102.4523000', 'UiTM Jasin', 'Library', 'Universiti'),
(5, '2.1679000', '102.4304000', 'Politeknik', 'PMM', 'Universiti'),
(6, '2.2677000', '102.3770000', 'NGO Bemban ', 'Bemban,Melaka', 'Education'),
(7, '2.1964000', '102.2702000', 'Melaka Deaf Association', ' Medan Selera Semabuk Km 4, No.5, Jalan Semabuk, Melaka, 75050, Malaysia', 'Human and Civil Rights'),
(8, '2.2037000', '102.2737000', 'Persatuan Kebajikan Insan Istimewa Melaka', ' No. 55, Jalan SP4, Taman Semabok Perdana, Melaka, 75050, Malaysia', 'Human and Civil Rigths'),
(9, '2.2719000', '102.1687000', 'Montfort Youth Center', 'Kampung Baru Ayer Salak,, Ayer Salak, 75250 Melaka, Malaysia', 'Human Services'),
(10, '2.2966000', '2.4222000', 'MBA Jasin Amitabha Village', 'JA 7917, Jalan Seroja 2, Taman Maju, Melaka, 77000 Jasin, Malaysia', 'Human Services'),
(11, '2.2001000', '102.2525000', 'Meng Seng Charitable Association', 'No. 99, Jalan Bendahara, Melaka, 75100 Malacca, Malaysia', 'Community Development'),
(12, '2.2771000', '102.3950000', 'Pejabat Kebajikan Masyarakat Daerah Jasin', 'Jalan Bunga Raya, 77200 Bemban, Malacca, Malaysia', 'Human and Civil Rights'),
(13, '2.2702000', '102.2959000', 'World Youth foundation', ' Lebuh Ayer Keroh, 75450 Melaka, Malaysia', 'Education'),
(14, '2.3523000', '102.1089000', 'ilham', 'masjid tanah', ''),
(15, '2.2485000', '102.1374000', 'pantai', 'melaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngoEmail` varchar(100) NOT NULL,
  `ngoPassword` varchar(50) DEFAULT NULL,
  `ngoName` text,
  `ngoIc` varchar(50) DEFAULT NULL,
  `ngoGender` text,
  `ngoFon` varchar(15) DEFAULT NULL,
  `ngoAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngoEmail`, `ngoPassword`, `ngoName`, `ngoIc`, `ngoGender`, `ngoFon`, `ngoAddress`) VALUES
('ngo2@yahoo.com', 'ngo', 'Qayyum', '940512035561', 'Male', '0178911123', 'Melaka'),
('ngo3@yahoo.com', 'ngo', 'Ahmad', '940512035561', 'Male', '0178911123', 'Kota Bharu, Kelantan'),
('ngo4@yahoo.com', 'ngo', 'Marwan', '980712035593', 'Male', '0156765541', 'Pedas Linggi, Negeri Sembilan'),
('ngo6@gmail.com', 'user', 'Aiman', '9700212145561', 'Male', '0134565531', 'Merlimau');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(100) NOT NULL,
  `password` varchar(12) DEFAULT NULL,
  `name` text,
  `position` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email`, `password`, `name`, `position`) VALUES
('admin@yahoo.com', 'admin1', 'admin1', 'admin'),
('cs2306d@gmail.com', 'user', 'Aiman ', 'user'),
('ngo2@yahoo.com', 'ngo', 'Qayyum', 'ngo'),
('ngo3@yahoo.com', 'ngo', 'Ahmad', 'ngo'),
('ngo4@yahoo.com', 'ngo', 'Marwan', 'ngo'),
('ngo6@gmail.com', 'user', 'Aiman', 'ngo'),
('ngo@yahoo.com', 'ngo', 'Faiqal', 'ngo'),
('user2@yahoo.com', 'user', 'Amin', 'user'),
('user3@yahoo.com', 'user', 'Alif', 'user'),
('user4@yahoo.com', 'user', 'Muner', 'user'),
('user6@yahoo.com', 'user', 'Riz', 'user'),
('user@yahoo.com', 'user', 'Ridhwan', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pictureId` int(10) NOT NULL,
  `pictureEmail` varchar(100) DEFAULT NULL,
  `pictureAddress` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` text,
  `ic` varchar(14) DEFAULT NULL,
  `gender` text,
  `fon` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `ic`, `gender`, `fon`, `address`) VALUES
('cs2306d@gmail.com', 'user', 'Haikal', '2147483647', 'Male', '10', 'Perak'),
('ff22@yahoo.com', 'user', 'Aiman', '941011', 'Male', '12', 'Melaka'),
('ff2@yahoo.com', 'user', 'ridhwan', '930310', 'Male', '17', 'Melaka'),
('user2@yahoo.com', 'user', 'Amin', '930310035921', 'Male', '0145037993', 'Merlimau'),
('user3@yahoo.com', 'user', 'Alif', '930312145841', 'Male', '0179016306', 'kampung'),
('user4@yahoo.com', 'user', 'Muner', '950210035567', 'Male', '0199876555', 'Kelantan'),
('user6@yahoo.com', 'user', 'Riz', '930310035926', 'Male', '0179016308', 'Melaka'),
('user@yahoo.com', 'user', 'Ridhwan', '2147483647', 'Male', '179016306', 'Melaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charityId`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngoEmail`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pictureId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
