-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hi|Hey|Hello|Hy|hi|How are you?', 'Hi how can I help?'),
(2, 'I am sick| I am not feeling well|sick|not well|need first aid|am sick', 'What is the problem?'),
(3, 'High fever|Shaking chills that can range from| moderate to severe|Profuse sweating|Headache|Abdominal pain|Muscle pain|Impaired consciousness|Bloody stools|Convulsions|Coma|\r\nNausea', 'Okay I will provide you with a link where you can check your symptoms with drugs prescription.'),
(4, 'Okay|nice|okay send|please send|send|okay please send', 'mayoclinic.org/symptom-checker/select-symptom/itt-20009075'),
(5, ' let me check|Ok| I have not yet received help| am not yet satisfied|I appreciate it.', 'For more help and Doctor\'s appointment email us at erishealthcare@gmail.com'),
(6, 'Thankyou|thank you| I appreciate', 'You\'re Welcome. If you didn\'t get any help yet, please visit the nearest hospital.'),
(7, 'alright|bye|goodbye| Okei|I\'m thankful|thanks', 'Quick recovery and have a nice time. good bye');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `full_name` varchar(20) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`full_name`, `email_id`, `mobile_no`, `password`) VALUES
('Jayram Nandagiri', 'jayram.nandagiri@spit.ac.in', 7738916989, 'jayram'),
('Om Rajpurkar', 'om.sam1999@gmail.com', 9619695656, 'Gta19@99'),
('Siddesh Kamble', 'siddeshkamble45@gmail.com', 8108433881, 'siddesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
