-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 30 jan 2023 om 13:04
-- Serverversie: 5.7.36
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lv1_week4`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `band_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  `times_sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `albums`
--

INSERT INTO `albums` (`id`, `created_at`, `updated_at`, `band_id`, `name`, `year`, `times_sold`) VALUES
(1, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 1, 'Gold', 1992, 8500000),
(2, '2022-12-21 07:14:43', '2022-12-21 07:30:40', 2, 'A kind of magic', 1986, 5500000),
(3, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 3, 'Ring of Fire, the legend of Johnny Cash', 2003, 10500000),
(4, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 4, 'Toxicity', 2001, 10500000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `album_song`
--

CREATE TABLE `album_song` (
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `song_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `album_song`
--

INSERT INTO `album_song` (`album_id`, `song_id`) VALUES
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(4, 10),
(4, 11),
(3, 15),
(3, 16);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bands`
--

CREATE TABLE `bands` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `founded` year(4) NOT NULL,
  `active_till` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Heden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bands`
--

INSERT INTO `bands` (`id`, `created_at`, `updated_at`, `name`, `genre`, `founded`, `active_till`) VALUES
(1, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'ABBA', 'Pop', 1972, '1982'),
(2, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Queen', 'Rock', 1970, 'Heden'),
(3, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Johnny Cash', 'Country', 1954, '2003'),
(4, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'System of a down', 'Progressive metal', 1995, 'Heden'),
(5, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Bee Gees', 'Softrock', 1958, '2012'),
(6, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Billy Joel', 'Pop', 1972, '1993'),
(7, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Katrina and the Waves', 'Poprock', 1981, '1999'),
(8, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Danny Vera', 'Pop', 2018, 'Heden');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_05_110839_create_songs_table', 1),
(6, '2022_12_05_110855_create_bands_table', 1),
(7, '2022_12_05_110906_create_albums_table', 1),
(8, '2022_12_05_110930_create_album_song_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `singer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`id`, `created_at`, `updated_at`, `title`, `singer`) VALUES
(1, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Dancing Queen', 'ABBA'),
(2, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Mamma Mia', 'ABBA'),
(3, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Gimme gimme gimme', 'ABBA'),
(4, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Bohemian Rhapsody', 'Queen'),
(5, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Radio Ga Ga', 'Queen'),
(6, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'We will rock you', 'Queen'),
(7, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'We are the champions', 'Queen'),
(8, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Dont stop me now', 'Queen'),
(9, '2022-12-21 07:14:43', '2022-12-21 07:25:57', 'I want to break free', 'Queen'),
(10, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Chop suey!', 'System of a down'),
(11, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Toxicity', 'System of a down'),
(12, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Stayin alive', 'Bee Gees'),
(13, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Roller coaster', 'Danny Vera'),
(14, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Make it a memory', 'Danny Vera'),
(15, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'One', 'Johnny Cash'),
(16, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Hurt', 'Johnny Cash'),
(17, '2022-12-21 07:14:43', '2022-12-21 07:14:43', 'Walking on sunshine', 'Katrina and the Waves');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joris Wulms', 'joriswulms@gmail.com', NULL, '$2y$10$R89HjMsJUfsf9zG2Hz0jbOaVTNjrlLpOCA979OOg/7foVAZRChmg6', NULL, '2022-12-21 07:15:14', '2022-12-21 07:15:14');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_band_id_foreign` (`band_id`);

--
-- Indexen voor tabel `album_song`
--
ALTER TABLE `album_song`
  ADD PRIMARY KEY (`album_id`,`song_id`),
  ADD KEY `album_song_song_id_foreign` (`song_id`);

--
-- Indexen voor tabel `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `bands`
--
ALTER TABLE `bands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_band_id_foreign` FOREIGN KEY (`band_id`) REFERENCES `bands` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `album_song`
--
ALTER TABLE `album_song`
  ADD CONSTRAINT `album_song_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `album_song_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
