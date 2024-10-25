-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 02:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom_sigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_24_075312_create_movies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `imdb_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_long` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `year` year(4) NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `runtime` int(11) DEFAULT NULL,
  `genres` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `date_uploaded` date DEFAULT NULL,
  `mpa_rating` decimal(8,2) DEFAULT NULL,
  `is_edited` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `url`, `imdb_code`, `title`, `title_long`, `slug`, `year`, `rating`, `runtime`, `genres`, `summary`, `description`, `synopsis`, `language`, `background_image`, `date_uploaded`, `mpa_rating`, `is_edited`, `created_at`, `updated_at`) VALUES
(64578, 'https://yts.mx/movies/union-2024', 'tt30319916', 'Union', 'Union (2024)', 'union-2024', 2024, '7.3', 100, 'Documentary', NULL, NULL, NULL, 'en', 'https://yts.mx/assets/images/movies/union_2024/background.jpg', '2024-10-23', '1.00', 1, '2024-10-24 20:15:01', '2024-10-24 20:17:06'),
(64579, 'https://yts.mx/movies/fatal-honeymoon-2012', 'tt2276860', 'Fatal Honeymoon', 'Fatal Honeymoon (2012)', 'fatal-honeymoon-2012', 2012, '5.5', 99, 'Action,Biography,Crime,Drama', '', '', '', 'en', 'https://yts.mx/assets/images/movies/fatal_honeymoon_2012/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-24 20:45:01'),
(64580, 'https://yts.mx/movies/to-fall-in-love-2023', 'tt28741950', 'To Fall in Love', 'To Fall in Love (2023)', 'to-fall-in-love-2023', 2023, '6.0', 87, 'Drama', '', '', '', 'en', 'https://yts.mx/assets/images/movies/to_fall_in_love_2023/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-24 20:45:01'),
(64581, 'https://yts.mx/movies/a-house-on-fire-2024', 'tt29793197', 'A House on Fire', 'A House on Fire (2024)', 'a-house-on-fire-2024', 2024, '7.8', 105, 'Comedy,Drama', '', '', '', 'ca', 'https://yts.mx/assets/images/movies/a_house_on_fire_2024/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-24 20:45:01'),
(64582, 'https://yts.mx/movies/lubuk-2024', 'tt32352287', 'Lubuk', 'Lubuk (2024)', 'lubuk-2024', 2024, '7.5', 86, 'Thriller', '', '', '', 'ms', 'https://yts.mx/assets/images/movies/lubuk_2024/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-24 20:45:01'),
(64583, 'https://yts.mx/movies/free-to-run-2016', 'tt3530882', 'Free to Run', 'Free to Run (2016)', 'free-to-run-2016', 2016, '7.3', 90, 'Documentary,History,Sport', '', '', '', 'en', 'https://yts.mx/assets/images/movies/free_to_run_2016/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64584, 'https://yts.mx/movies/kasap-havasi-2015', 'tt5588506', 'Kasap Havasi', 'Kasap Havasi (2015)', 'kasap-havasi-2015', 2015, '6.2', 103, 'Drama', '', '', '', 'tr', 'https://yts.mx/assets/images/movies/kasap_havasi_2015/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64585, 'https://yts.mx/movies/misunderstood-1966', 'tt0060538', 'Misunderstood', 'Misunderstood (1966)', 'misunderstood-1966', 1966, '7.7', 104, 'Drama', '', '', '', 'it', 'https://yts.mx/assets/images/movies/misunderstood_1966/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64586, 'https://yts.mx/movies/dario-argento-master-of-horror-1993', 'tt0245857', 'Dario Argento: Master of Horror', 'Dario Argento: Master of Horror (1993)', 'dario-argento-master-of-horror-1993', 1993, '6.3', 60, 'Documentary,Horror', '', '', '', 'it', 'https://yts.mx/assets/images/movies/dario_argento_master_of_horror_1993/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64587, 'https://yts.mx/movies/bathing-beauty-1944', 'tt0036628', 'Bathing Beauty', 'Bathing Beauty (1944)', 'bathing-beauty-1944', 1944, '6.4', 101, 'Comedy,Musical', '', '', '', 'en', 'https://yts.mx/assets/images/movies/bathing_beauty_1944/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64588, 'https://yts.mx/movies/stylebender-2023', 'tt14445202', 'Stylebender', 'Stylebender (2023)', 'stylebender-2023', 2023, '6.9', 102, 'Documentary,Sport', '', '', '', 'en', 'https://yts.mx/assets/images/movies/stylebender_2023/background.jpg', '2024-10-23', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64589, 'https://yts.mx/movies/a-cowgirls-story-2017', 'tt5704912', 'A Cowgirl\'s Story', 'A Cowgirl\'s Story (2017)', 'a-cowgirls-story-2017', 2017, '5.6', 98, 'Drama,Family', '', '', '', 'en', 'https://yts.mx/assets/images/movies/a_cowgirls_story_2017/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64590, 'https://yts.mx/movies/canary-black-2024', 'tt20048582', 'Canary Black', 'Canary Black (2024)', 'canary-black-2024', 2024, '5.5', 101, 'Action,Drama', '', '', '', 'en', 'https://yts.mx/assets/images/movies/canary_black_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64591, 'https://yts.mx/movies/myka-fox-my-joke-my-choice-2024', 'tt32006296', 'Myka Fox: My Joke, My Choice', 'Myka Fox: My Joke, My Choice (2024)', 'myka-fox-my-joke-my-choice-2024', 2024, '0.0', 0, 'Comedy', '', '', '', 'en', 'https://yts.mx/assets/images/movies/myka_fox_my_joke_my_choice_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64592, 'https://yts.mx/movies/catnado-2022', 'tt16305734', 'Catnado', 'Catnado (2022)', 'catnado-2022', 2022, '4.2', 70, 'Comedy,Horror,Thriller', '', '', '', 'en', 'https://yts.mx/assets/images/movies/catnado_2022/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64593, 'https://yts.mx/movies/inkabi-2024', 'tt32365822', 'Inkabi', 'Inkabi (2024)', 'inkabi-2024', 2024, '5.3', 101, 'Action', '', '', '', 'en', 'https://yts.mx/assets/images/movies/inkabi_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64594, 'https://yts.mx/movies/terrifier-3-2024', 'tt27911000', 'Terrifier 3', 'Terrifier 3 (2024)', 'terrifier-3-2024', 2024, '7.0', 125, 'Horror', '', '', '', 'en', 'https://yts.mx/assets/images/movies/terrifier_3_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64595, 'https://yts.mx/movies/swag-2024', 'tt28351127', 'Swag', 'Swag (2024)', 'swag-2024', 2024, '8.9', 150, 'Comedy', '', '', '', 'te', 'https://yts.mx/assets/images/movies/swag_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64596, 'https://yts.mx/movies/under-parallel-skies-2024', 'tt28443413', 'Under Parallel Skies', 'Under Parallel Skies (2024)', 'under-parallel-skies-2024', 2024, '5.7', 110, 'Drama,Romance', '', '', '', 'en', 'https://yts.mx/assets/images/movies/under_parallel_skies_2024/background.jpg', '2024-10-25', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64597, 'https://yts.mx/movies/pendekar-awang-darah-indera-gajah-2024', 'tt30253785', 'Pendekar Awang: Darah Indera Gajah', 'Pendekar Awang: Darah Indera Gajah (2024)', 'pendekar-awang-darah-indera-gajah-2024', 2024, '4.7', 118, 'Action,Adventure,Drama,History,Thriller', '', '', '', 'ms', 'https://yts.mx/assets/images/movies/pendekar_awang_darah_indera_gajah_2024/background.jpg', '2024-10-24', '0.00', 0, '2024-10-24 20:15:01', '2024-10-25 03:30:02'),
(64598, 'https://yts.mx/movies/caught-by-the-tides-2024', 'tt27958252', 'Caught by the Tides', 'Caught by the Tides (2024)', 'caught-by-the-tides-2024', 2024, '6.3', 111, 'Drama', '', '', '', 'zh', 'https://yts.mx/assets/images/movies/caught_by_the_tides_2024/background.jpg', '2024-10-25', '0.00', 0, '2024-10-25 01:30:02', '2024-10-25 03:30:02'),
(64599, 'https://yts.mx/movies/woman-of-desire-1994', 'tt0108588', 'Woman of Desire', 'Woman of Desire (1994)', 'woman-of-desire-1994', 1994, '4.1', 97, 'Drama,Mystery,Thriller', '', '', '', 'en', 'https://yts.mx/assets/images/movies/woman_of_desire_1994/background.jpg', '2024-10-25', '0.00', 0, '2024-10-25 01:30:02', '2024-10-25 03:30:02'),
(64600, 'https://yts.mx/movies/youtopia-2018', 'tt5914642', 'Youtopia', 'Youtopia (2018)', 'youtopia-2018', 2018, '5.2', 95, 'Drama', '', '', '', 'it', 'https://yts.mx/assets/images/movies/youtopia_2018/background.jpg', '2024-10-25', '0.00', 0, '2024-10-25 01:30:02', '2024-10-25 03:30:02'),
(64601, 'https://yts.mx/movies/family-pack-2024', 'tt29195603', 'Family Pack', 'Family Pack (2024)', 'family-pack-2024', 2024, '5.3', 94, 'Adventure,Comedy,Fantasy', '', '', '', 'fr', 'https://yts.mx/assets/images/movies/family_pack_2024/background.jpg', '2024-10-25', '0.00', 0, '2024-10-25 01:30:02', '2024-10-25 03:30:02'),
(64604, 'https://yts.mx/movies/alien-country-2024', 'tt13015408', 'Alien Country', 'Alien Country (2024)', 'alien-country-2024', 2024, '7.6', 0, 'Action,Comedy,Horror,Sci-Fi', '', '', '', 'en', 'https://yts.mx/assets/images/movies/alien_country_2024/background.jpg', '2024-10-25', '0.00', 0, '2024-10-25 01:30:02', '2024-10-25 03:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rangga', 'ranggaperkasa822@gmail.com', NULL, '$2y$10$NCob2Wo4nWy5EXCQ7JT0j.y6.0TC1mYIT1a3qmHgJl30LyLgKYoe2', NULL, '2024-10-24 19:47:05', '2024-10-24 19:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_imdb_code_unique` (`imdb_code`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64605;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
