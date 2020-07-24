-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 10:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfurries`
--

-- --------------------------------------------------------

--
-- Table structure for table `askavet_comment`
--

CREATE TABLE `askavet_comment` (
  `id` bigint(20) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_fk` bigint(20) NOT NULL,
  `user_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askavet_comment`
--

INSERT INTO `askavet_comment` (`id`, `content`, `created_at`, `post_fk`, `user_fk`) VALUES
(6, 'Please answer this question Fast.', '2020-06-30 20:30:39', 13, 19),
(7, 'asdfgh', '2020-06-30 20:36:13', 13, 19),
(8, 'Can you reply atleast???', '2020-06-30 20:36:37', 13, 19),
(14, 'thanks for answering my Question', '2020-07-04 13:54:14', 13, 19),
(17, 'Why did you delete my comment?', '2020-07-04 20:06:27', 13, 3),
(18, 'Meri mrzi bhai', '2020-07-04 20:07:33', 13, 19);

-- --------------------------------------------------------

--
-- Table structure for table `askavet_post`
--

CREATE TABLE `askavet_post` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_fk` bigint(20) NOT NULL,
  `user_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askavet_post`
--

INSERT INTO `askavet_post` (`id`, `title`, `description`, `content`, `image`, `video`, `status`, `created_at`, `updated_at`, `category_fk`, `user_fk`) VALUES
(13, 'Demo 2 AskaVet', '', 'asghjbxjabxmas mn mn mnsd mns mnsd', '13.jpg', 'https://www.youtube.com/watch?v=8R0rBwpHm6I', 'closed', '2020-06-30 20:01:31', '2020-07-04 16:55:50', 1, 19),
(14, 'Demo Hiten 1', '', 'Hello this is demo', '', 'https://www.youtube.com/watch?v=8R0rBwpHm6I', 'open', '2020-07-02 12:59:23', '2020-07-03 16:07:56', 1, 18),
(15, 'Demo AskaVet  Image', '', 'jhdfvhbsjndcnsjdn', '15.jpg', 'https://www.youtube.com/watch?v=-bRtho4zfN0', 'open', '2020-07-03 19:54:34', '2020-07-03 17:12:15', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(1, 'Pet Care'),
(2, 'Pet Behaviour'),
(3, 'Pet Health'),
(4, 'Animal Help');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_fk` bigint(20) NOT NULL,
  `user_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `description`, `content`, `image`, `video`, `created_at`, `updated_at`, `category_fk`, `user_fk`) VALUES
(36, 'The Mood-Boosting Power of Pets', 'Pets come with some powerful mental health benefits. Here’s how caring for a dog or cat can help you cope with depression, anxiety, and stress.', 'Most pet owners are clear about the immediate joys that come with sharing their lives with companion animals. However, many of us remain unaware of the physical and mental health benefits that can also accompany the pleasure of snuggling up to a furry friend. It’s only recently that studies have begun to scientifically explore the benefits of the human-animal bond.\r\n\r\nPets have evolved to become acutely attuned to humans and our behavior and emotions. Dogs, for example, are able to understand many of the words we use, but they’re even better at interpreting our tone of voice, body language, and gestures. And like any good human friend, a loyal dog will look into your eyes to gauge your emotional state and try to understand what you’re thinking and feeling (and to work out when the next walk or treat might be coming, of course).\r\n\r\nPets, especially dogs and cats, can reduce stress, anxiety, and depression, ease loneliness, encourage exercise and playfulness, and even improve your cardiovascular health. Caring for an animal can help children grow up more secure and active. Pets also provide valuable companionship for older adults. Perhaps most importantly, though, a pet can add real joy and unconditional love to your life.', '', 'https://www.youtube.com/watch?v=8R0rBwpHm6I', '2020-06-22 10:17:58', NULL, 4, 21),
(37, 'qwerty', '', '', '', '', '2020-06-26 10:25:52', NULL, 1, 21),
(38, 'sdfghj', '', '', '', '', '2020-06-26 10:26:03', NULL, 2, 21),
(39, 'zxcvbn', '', '', '', '', '2020-06-26 10:26:24', NULL, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_tag`
--

CREATE TABLE `blog_post_tag` (
  `id` bigint(20) NOT NULL,
  `post_fk` bigint(20) NOT NULL,
  `tag_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `boarding`
--

CREATE TABLE `boarding` (
  `id` bigint(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `kernel` int(20) NOT NULL,
  `rooms` int(10) NOT NULL,
  `trainer` int(10) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `vet_availability` varchar(255) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `pet_fk` bigint(20) NOT NULL,
  `organization_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `timings` varchar(255) NOT NULL,
  `homevisit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_fk` bigint(20) NOT NULL,
  `user_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`id`, `title`, `description`, `content`, `image`, `video`, `status`, `created_at`, `updated_at`, `category_fk`, `user_fk`) VALUES
(4, 'Demo Community Forum', '', 'asdfghj', '4.png', 'https://www.youtube.com/watch?v=8R0rBwpHm6I', 'open', '2020-07-04 13:46:29', NULL, 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` bigint(20) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `person_phone` varchar(12) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `coordinates` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `timings` varchar(255) NOT NULL,
  `holidays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet_master`
--

CREATE TABLE `pet_master` (
  `id` bigint(20) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `user_fk` bigint(20) NOT NULL,
  `records_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) NOT NULL,
  `vac_name` varchar(255) NOT NULL,
  `vac_date` date NOT NULL,
  `doc_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `id` bigint(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `organization_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownapet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adoptapet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `username`, `name`, `email`, `password`, `phone`, `ownapet`, `adoptapet`, `state`, `city`, `address`, `role`, `about`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'Arpit Kushwaha', 'arpitkushwah01@gmail.com', '$2y$10$gfEGz6ewx6G.4ez.ert37OnCdw2tbQ82RXtyo0M5NVykDooMTvjze', '9460908951', '', '', '', '', 'Near NoblePublic School', '', '', '', '2020-04-29 06:08:47', '2020-04-29 06:08:47'),
(2, '', 'Arpit Kushwaha', 'arpitkushwaha@protonmail.com', '$2y$10$UYKdWzx5g1ZmIqLEbjB/iu.GVCHD5Wi/.1Hg1QBZiyiLskyHPKMeO', '09460908951', '', '', '', '', 'Near NoblePublic School', '', '', '', '2020-05-01 00:55:48', '2020-05-01 00:55:48'),
(3, 'vet', 'vet', 'vet@gmail.com', 'vet', '', '', '', '', '', '', 'Vet', '', '', '2020-06-26 11:10:00', NULL),
(18, 'Arpit', 'Arpit Kushwaha', 'ashu@gmail.com', 'ashu', '9460908951', 'Yes', 'Yes', 'Karnataka', ' Bantwal ', 'Kotri Road, Sir', 'Pet Parent', '', '18.jpg', NULL, '2020-06-12 09:12:20'),
(19, 'hiten', 'Hiten Soni', 'hiten@gmail.com', 'hiten', '9876543219', 'No', 'Yes', 'Pondicherry', ' Karaikal ', 'SP-42, RIICO Industrial Area, Kukas, Delhi Road Near Hotel Le-Meridian, Jaipur, Rajasthan 302028', 'Pet Parent', '', '19.jpg', NULL, '2020-05-23 10:03:50'),
(20, 'Arpit', '', 'ashu1@gmail.com', 'ashu1', '', '', '', '', '', '', 'Pet Parent', '', '', NULL, NULL),
(21, 'blogger', 'blogger', 'blogger@gmail.com', 'blogger', '', '', '', '', '', '', 'Blogger', 'asdfghjk', '', '2020-05-30 11:41:43', NULL),
(22, 'Arpit', '', 'ashu2@gmail.com', 'ashu', '', '', '', '', '', '', 'Pet Parent', '', '', NULL, NULL),
(23, 'Arpit', 'Muskaan', 'arpit@gmail.com', 'arpit', '956784345621', 'No', 'No', 'Himachal Pradesh', ' Lahaul ', 'RCEW', 'Pet Parent', '', '', NULL, '2020-06-12 16:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `id` bigint(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `doc_fk` bigint(20) NOT NULL,
  `organization_fk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `askavet_comment`
--
ALTER TABLE `askavet_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_fk` (`post_fk`),
  ADD KEY `user_fk` (`user_fk`) USING BTREE;

--
-- Indexes for table `askavet_post`
--
ALTER TABLE `askavet_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk` (`category_fk`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk` (`category_fk`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `blog_post_tag`
--
ALTER TABLE `blog_post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_fk` (`post_fk`),
  ADD KEY `tag_fk` (`tag_fk`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boarding`
--
ALTER TABLE `boarding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_fk` (`pet_fk`),
  ADD KEY `organization_fk` (`organization_fk`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk` (`category_fk`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_master`
--
ALTER TABLE `pet_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `records_fk` (`records_fk`),
  ADD KEY `user_fk` (`user_fk`) USING BTREE;

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_fk` (`doc_fk`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_fk` (`organization_fk`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_fk` (`organization_fk`),
  ADD KEY `doc_fk` (`doc_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `askavet_comment`
--
ALTER TABLE `askavet_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `askavet_post`
--
ALTER TABLE `askavet_post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `blog_post_tag`
--
ALTER TABLE `blog_post_tag`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boarding`
--
ALTER TABLE `boarding`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_master`
--
ALTER TABLE `pet_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vet`
--
ALTER TABLE `vet`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `askavet_comment`
--
ALTER TABLE `askavet_comment`
  ADD CONSTRAINT `askavet_comment_ibfk_1` FOREIGN KEY (`post_fk`) REFERENCES `askavet_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `askavet_comment_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user_master` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `askavet_post`
--
ALTER TABLE `askavet_post`
  ADD CONSTRAINT `askavet_post_ibfk_1` FOREIGN KEY (`category_fk`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `askavet_post_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user_master` (`id`);

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `blog_post_ibfk_1` FOREIGN KEY (`category_fk`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `blog_post_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user_master` (`id`);

--
-- Constraints for table `blog_post_tag`
--
ALTER TABLE `blog_post_tag`
  ADD CONSTRAINT `blog_post_tag_ibfk_1` FOREIGN KEY (`post_fk`) REFERENCES `blog_post` (`id`),
  ADD CONSTRAINT `blog_post_tag_ibfk_2` FOREIGN KEY (`tag_fk`) REFERENCES `blog_tag` (`id`);

--
-- Constraints for table `boarding`
--
ALTER TABLE `boarding`
  ADD CONSTRAINT `boarding_ibfk_1` FOREIGN KEY (`pet_fk`) REFERENCES `pet_master` (`id`),
  ADD CONSTRAINT `boarding_ibfk_2` FOREIGN KEY (`organization_fk`) REFERENCES `organization` (`id`);

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post_ibfk_1` FOREIGN KEY (`category_fk`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `forum_post_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user_master` (`id`);

--
-- Constraints for table `pet_master`
--
ALTER TABLE `pet_master`
  ADD CONSTRAINT `pet_master_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `user_master` (`id`),
  ADD CONSTRAINT `pet_master_ibfk_2` FOREIGN KEY (`records_fk`) REFERENCES `records` (`id`);

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`doc_fk`) REFERENCES `doc` (`id`);

--
-- Constraints for table `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`organization_fk`) REFERENCES `organization` (`id`);

--
-- Constraints for table `vet`
--
ALTER TABLE `vet`
  ADD CONSTRAINT `vet_ibfk_1` FOREIGN KEY (`doc_fk`) REFERENCES `doc` (`id`),
  ADD CONSTRAINT `vet_ibfk_2` FOREIGN KEY (`organization_fk`) REFERENCES `organization` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
