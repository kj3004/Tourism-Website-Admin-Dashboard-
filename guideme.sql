-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guideme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `name`, `password`) VALUES
('admin@gmail.com', 'kavindu', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `enq_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_num` char(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp(),
  `reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`enq_id`, `name`, `email`, `mobile_num`, `subject`, `description`, `posting_date`, `reply`) VALUES
(11, 'jhbjk', NULL, NULL, NULL, NULL, '2023-11-21 13:37:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destination_id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `description_full` mediumtext NOT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destination_id`, `name`, `category`, `description`, `image`, `city`, `description_full`, `creationdate`, `updationdate`) VALUES
(2, 'Sigiriya11', 'ART & CULTURE', 'Ancient rock fortress and palace.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Sigiriya.jpg?alt=media&token=c183ac61-2314-4b33-8bf8-203cab0aaa76', 'Dambulla', 'Sigiriya, often referred to as the \"Lion Rock,\" is a UNESCO World Heritage Site located in the heart of Sri Lanka. This ancient marvel is \r\nfamous for its breathtaking rock fortress that rises dramatically from the lush green landscape. Built in the 5th c', '2023-11-08 05:02:58', '2023-11-08 06:22:58'),
(3, 'Mirissa', 'FAMILY', 'Beautiful sandy beaches and whale watching.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Mirissa.jpg?alt=media&token=a5239844-e8d6-4ef2-bcac-efb600996553', 'Matara', 'Mirissa is a picturesque coastal town nestled along the southern shores of Sri Lanka, renowned for its serene beauty and relaxed atmosphere. \r\nThis charming destination is a haven for travelers seeking sun, sea, and tranquility. Mirissa\'s main draw is its pristine sandy beaches that \r\nstretch along the Indian Ocean, providing the perfect setting for sunbathing, swimming, and enjoying breathtaking sunsets.\r\n\r\nBeyond its idyllic shores, Mirissa is also famous for being a hub for whale watching and dolphin watching excursions. Visitors have the \r\nopportunity to witness these magnificent marine creatures in their natural habitat, creating unforgettable and awe-inspiring experiences.\r\n\r\nThe town itself offers a laid-back vibe with a variety of beachside cafes, seafood restaurants, and bars, where you can savor delicious \r\nlocal cuisine and refreshing tropical drinks. Mirissa encapsulates the essence of tropical paradise, making it a must-visit destination for\r\nthose seeking a peaceful escape by the sea. Whether you\'re looking to unwind on the beach, connect with marine life, or simply enjoy the \r\ncoastal ambiance, Mirissa has something to offer every traveler.', '2023-11-08 05:02:58', NULL),
(4, 'Ella', 'ROAD TRIP', 'Scenic hill station with stunning views.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Ella.jpg?alt=media&token=a04ed342-a3bf-44e7-9eea-01cf6a9b8c0f', 'Badulla', '', '2023-11-08 05:02:58', NULL),
(5, 'Adam\'s Peak', 'ADVENTURE', 'Pilgrimage site with a sacred footprint.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Adam\'s%20Peak.jpg?alt=media&token=97f068b9-48c9-4a1e-8570-3ff911c3501b', 'Nuwara Eliya', '', '2023-11-08 05:02:58', NULL),
(6, 'Galle', 'ART & CULTURE', 'Colonial-era fort and charming streets.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Galle.webp?alt=media&token=483df466-4e7f-402f-8083-ead4b07ba013', 'Galle', '', '2023-11-08 05:02:58', NULL),
(7, 'Hikkaduwa', 'FAMILY', 'Popular beach for surfing and nightlife.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Hikkaduwa.webp?alt=media&token=c0ef593d-4d68-476c-aa1a-196411c7739a', 'Galle', '', '2023-11-08 05:02:58', NULL),
(8, 'Polonnaruwa', 'ROAD TRIP', 'Ancient ruins and temples.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Polonnaruwa.webp?alt=media&token=b4ef210c-9adb-4112-af93-bb2f0745874c', 'Polonnaruwa', '', '2023-11-08 05:02:58', NULL),
(9, 'Bentota', 'ADVENTURE', 'Relaxing beach and water sports.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Bentota.jpg?alt=media&token=73498fb0-f4fb-44ed-8425-831b72d9299f', 'Galle', '', '2023-11-08 05:02:58', NULL),
(17, 'Jaffna', 'ADVENTURE', 'Northern cultural hub.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Jaffna.webp?alt=media&token=436681b8-1b9b-49f8-b138-dc38a11cee33', 'Jaffna', '', '2023-11-08 05:02:58', NULL),
(18, 'Batticaloa', 'ART & CULTURE', 'Historical and cultural significance.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Batticaloa.jpg?alt=media&token=0517a8b3-3353-4eb9-9035-eaaf5ac0198c', 'Batticaloa', '', '2023-11-08 05:02:58', NULL),
(19, 'Kalpitiya', 'FAMILY', 'Dolphin and whale watching.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Kalpitiya.jpg?alt=media&token=fc55ed4b-b268-4228-8f0f-ff2b973cbf4f', 'Puttalam', '', '2023-11-08 05:02:58', NULL),
(20, 'Wilpattu National Park', 'ROAD TRIP', 'Wildlife and natural beauty.', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Willpattu%20National%20Park.jpeg?alt=media&token=e89a341b-7b99-4d31-97cb-640ed5f738af', 'Puttalam', '', '2023-11-08 05:02:58', NULL),
(21, 'polonnaruwa', 'ART & CULTURE', 'polonnaruwa is ancient city', NULL, 'polonnaruwa', 'Hello polonnaruwa', '2023-11-08 05:02:58', NULL),
(22, 'hellooooooo', 'ART & CULTURE', 'fdfef', NULL, 'dfdfdf', 'efaefasgas', '2023-11-08 05:02:58', '2023-11-08 05:37:22'),
(23, 'dbvxdbvxdv', 'ROAD TRIP', 'xdvxdv', NULL, 'xdvxdv', 'xdvxdcv', '2023-11-08 05:04:43', NULL),
(24, 'kjcncjcnkdjc', 'FAMILY', 'cddcs', NULL, 'cdcdc', 'srgdfgd', '2023-11-22 06:35:24', NULL),
(25, 'dkjsnvckjsnvk', 'ART & CULTURE', 'lkbmngkjdnlkfjgvn', NULL, 'dkvjsndjvnksdnkvsj', 'skdjcfnklsjdnvc', '2023-11-22 15:53:22', NULL),
(26, 'kdsjnvkjnkdjvnk;jdn;vkjsn;djvc,dskmnvkjsn', 'ART & CULTURE', 'rlkgbmodjgn', NULL, 'lisdjnvsjndvkjn', 'skljdnsjdnc', '2023-11-22 16:10:51', NULL),
(27, 'kjnjhbnknkj', 'ART & CULTURE', 'jkjhbjhb', NULL, 'jhjbhjbv', 'jubhhbljhbj', '2023-11-22 16:13:24', NULL),
(28, 'lkxdmvnlksdxv', 'ART & CULTURE', 'ldkvmnlskdcvmnl', NULL, 'dlvjkns', 'ldkvmn', '2023-11-23 04:13:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `des_feedback`
--

CREATE TABLE `des_feedback` (
  `feedback_id` varchar(10) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `tourist_id` int(10) DEFAULT NULL,
  `destination_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` varchar(100) NOT NULL,
  `driver_name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_pic` blob DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `tourist_id` int(10) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_feedback`
--

CREATE TABLE `driver_feedback` (
  `fb_id` varchar(10) NOT NULL,
  `fb_description` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `tourist_id` int(10) DEFAULT NULL,
  `driver_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guide_id` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_pic` blob DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_feedback`
--

CREATE TABLE `guide_feedback` (
  `fb_id` varchar(10) NOT NULL,
  `fb_description` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `tourist_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` varchar(10) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `tourist_id` int(10) NOT NULL,
  `driver_id` varchar(10) DEFAULT NULL,
  `tour_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(10) NOT NULL,
  `tour_name` varchar(50) NOT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `no_of_passengers` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `tour_status` varchar(50) DEFAULT NULL,
  `tourist_id` int(10) DEFAULT NULL,
  `driver_id` varchar(10) DEFAULT NULL,
  `published_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `displayImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `locations`, `no_of_passengers`, `start_date`, `end_date`, `tour_status`, `tourist_id`, `driver_id`, `published_time`, `email`, `displayImage`) VALUES
(1, 'test1', 'a:5:{i:0;s:10:\"Batticaloa\";i:1;s:7:\"Gampaha\";i:2;s:8:\"Kalutara\";i:3;s:7:\"Kegalle\";i:4;s:6:\"Mannar\";}', 5, '2023-09-11', '2023-09-15', 'Available', NULL, NULL, '2023-09-11 12:57:44', 'sasithmjayaweera@gmail.com', ''),
(3, 'mytour1', 'a:3:{i:0;s:7:\"Mirissa\";i:1;s:5:\"Galle\";i:2;s:11:\"Polonnaruwa\";}', 3, '2023-10-16', '2023-10-12', 'Available', NULL, NULL, '2023-10-16 14:03:35', 'sasith@gmail.com', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Sigiriya.jpg?alt=media&token=c183ac61-2314-4b33-8bf8-203cab0aaa76'),
(4, 'new', 'a:3:{i:0;s:7:\"Mirissa\";i:1;s:5:\"Galle\";i:2;s:11:\"Polonnaruwa\";}', 2, '2023-10-17', '2023-10-18', 'Available', NULL, NULL, '2023-10-17 03:47:46', 'sasith@gmail.com', 'https://firebasestorage.googleapis.com/v0/b/guideme-378af.appspot.com/o/Mirissa.jpg?alt=media&token=a5239844-e8d6-4ef2-bcac-efb600996553');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tourist_id` int(10) NOT NULL,
  `tourist_name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_pic` blob DEFAULT NULL,
  `tourist_gender` varchar(10) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tourist_id`, `tourist_name`, `password`, `profile_pic`, `tourist_gender`, `contact_number`, `email`, `country`, `languages`, `RegDate`) VALUES
(8, 'kamal', 'kamal123', NULL, NULL, '25424587', 'kamal@gmail.com', NULL, NULL, '2023-11-09 06:16:40'),
(15, 'sasithmjx', '$2y$10$24PWJDQzwOOxAf5jBkqAyuWUNq61Gfb9.Jqe2nXtr8FB6ITApoc5m', NULL, NULL, '45454', 'sasith1234@gmail.com', NULL, NULL, '2023-11-09 06:16:40'),
(14, 'sasithmj', '$2y$10$2xWuzmI5rQC.o8iXTnSE5O3IugyXyVfAxPqg0RgZ8gjVxbYsNGnwK', NULL, NULL, '0251251054', 'sasith123@gmail.com', NULL, NULL, '2023-11-09 06:16:40'),
(0, 'sasithmjxy', '$2y$10$PMVsHy.kLkOv0a0cIRsktemAgwk/EJA9Og1hyVYEyQyXqjbTwUfEe', NULL, NULL, '45454', 'sasith5465@gmail.com', NULL, NULL, '2023-11-09 06:16:40'),
(0, 'sasithmjxy', '$2y$10$3QYkLMjwDvtpqZHApsdZD.BdKp74VrPIZF2rFyrYGXH9.OaeSL6Ty', NULL, NULL, '45454', 'sasith@gmail.com', NULL, NULL, '2023-11-09 06:16:40'),
(1, 'sasith methmal', 'sasithmj', NULL, NULL, '0712294930', 'sasithmj@gmail.com', 'Sri Lanka', NULL, '2023-11-09 06:16:40'),
(0, 'sasith methmal', '$2y$10$LAUf1sSLXBTCM6OyPilSROSI2nrcGHQTSHUvW6iEeiv06kXD8g/Ga', NULL, NULL, '0712294930', 'sasithmjayaweera@gmail.com', NULL, NULL, '2023-11-09 06:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_destination`
--

CREATE TABLE `tourist_destination` (
  `destination_id` int(10) NOT NULL,
  `tour_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourist_destination`
--

INSERT INTO `tourist_destination` (`destination_id`, `tour_id`, `email`) VALUES
(2, 2, ''),
(4, 5, ''),
(5, 6, ''),
(7, 6, ''),
(9, 2, ''),
(18, 6, ''),
(19, 2, 'sasith@gmail.com'),
(4, 1, 'sasithmjayaweera@gmail.com'),
(5, 69, 'sasithmjayaweera@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(10) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `sender` varchar(100) DEFAULT NULL,
  `payment_to` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `tour_id` int(10) DEFAULT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `reciever_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `payment_method`, `sender`, `payment_to`, `price`, `tour_id`, `transaction_date`, `reciever_type`) VALUES
('11', 'card', 'sasith@gmail.com', 'kavindu@gmail.com', 555.00, NULL, '2023-11-13 16:00:19', 'driver'),
('45', 'card', 'mama', 'eya', 1000.00, 11, '2023-11-16 12:38:50', ''),
('55', 'card', 'jyj', 'hgcvhg', 5555.00, NULL, '2023-10-18 17:40:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehi_id` varchar(10) DEFAULT NULL,
  `vehi_registration_number` varchar(20) NOT NULL,
  `ac/nonac` tinyint(1) DEFAULT NULL,
  `no_of_seats` int(11) DEFAULT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `driver_id` varchar(10) DEFAULT NULL,
  `vehical_mark` varchar(255) NOT NULL,
  `vehical_model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehi_id`, `vehi_registration_number`, `ac/nonac`, `no_of_seats`, `vehicle_type`, `driver_id`, `vehical_mark`, `vehical_model`) VALUES
(NULL, 'HS-0441', NULL, NULL, '', 'drivertest', 'nissan', 'fb15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `des_feedback`
--
ALTER TABLE `des_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `driver_feedback`
--
ALTER TABLE `driver_feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `guide_feedback`
--
ALTER TABLE `guide_feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `FK` (`tourist_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tourist_destination`
--
ALTER TABLE `tourist_destination`
  ADD PRIMARY KEY (`email`,`destination_id`) USING BTREE,
  ADD KEY `tourist_destination_ibfk_2` (`destination_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehi_registration_number`),
  ADD UNIQUE KEY `vehi_id` (`vehi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `enq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destination_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tourist` (`email`);

--
-- Constraints for table `tourist_destination`
--
ALTER TABLE `tourist_destination`
  ADD CONSTRAINT `tourist_destination_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`destination_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
