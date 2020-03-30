-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 30. Mrz 2020 um 13:58
-- Server-Version: 10.3.18-MariaDB-0+deb10u1
-- PHP-Version: 7.3.14-1+0~20200123.51+debian10~1.gbpcf42df

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sportradar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `countries`
--

INSERT INTO `countries` (`id`, `created_at`, `updated_at`, `title`) VALUES
(1, '2020-03-16 15:46:29', '2020-03-30 13:53:11', 'Austria');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `event_start` datetime DEFAULT NULL,
  `event_end` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_canceled` tinyint(4) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `_sport_id` int(11) DEFAULT NULL,
  `_team_one_id` int(11) DEFAULT NULL,
  `_team_two_id` int(11) DEFAULT NULL,
  `_country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `title`, `description`, `event_start`, `event_end`, `is_active`, `is_canceled`, `result`, `_sport_id`, `_team_one_id`, `_team_two_id`, `_country_id`) VALUES
(2, '2020-03-16 15:51:19', '2020-03-30 13:52:06', NULL, '', '2020-04-02 20:30:00', NULL, 1, 0, NULL, 1, 1, 2, 1),
(3, '2020-03-16 15:54:46', '2020-03-30 13:52:06', NULL, '', '2020-04-09 17:30:00', NULL, 1, 0, '', 2, 3, 4, 1),
(4, '2020-03-27 12:44:39', '2020-03-30 13:52:06', NULL, NULL, '2020-04-03 20:30:00', NULL, 1, NULL, NULL, 1, 5, 6, 1),
(5, '2020-03-27 12:44:39', '2020-03-30 13:52:06', NULL, NULL, '2020-04-10 17:30:00', NULL, 1, NULL, NULL, 2, 7, 8, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `leagues`
--

DROP TABLE IF EXISTS `leagues`;
CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `_sport_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `league_countries`
--

DROP TABLE IF EXISTS `league_countries`;
CREATE TABLE `league_countries` (
  `id` int(11) NOT NULL,
  `_league_id` int(11) DEFAULT NULL,
  `_country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `_league_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sports`
--

INSERT INTO `sports` (`id`, `created_at`, `updated_at`, `title`, `description`, `_league_id`) VALUES
(1, '2020-03-16 15:39:49', '2020-03-30 13:55:40', 'Football', '', NULL),
(2, '2020-03-16 15:40:57', '2020-03-30 13:55:40', 'Ice Hockey', '', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `_sport_id` int(11) DEFAULT NULL,
  `_country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `teams`
--

INSERT INTO `teams` (`id`, `created_at`, `updated_at`, `title`, `description`, `_sport_id`, `_country_id`) VALUES
(1, '2020-03-16 15:43:40', '2020-03-30 13:56:41', 'Salzburg', NULL, 1, 1),
(2, '2020-03-16 15:44:15', '2020-03-30 13:56:41', 'Sturm', NULL, 1, 1),
(3, '2020-03-16 15:44:58', '2020-03-30 13:56:41', 'KAC', NULL, 2, 1),
(4, '2020-03-16 15:45:41', '2020-03-30 13:56:41', 'Capitals', NULL, 2, 1),
(5, '2020-03-27 12:40:07', '2020-03-30 13:56:41', 'Rapid', NULL, 1, 1),
(6, '2020-03-27 12:40:07', '2020-03-30 13:56:41', 'Austria', NULL, 1, 1),
(7, '2020-03-27 12:40:07', '2020-03-30 13:56:41', 'Bulldogs', NULL, 2, 1),
(8, '2020-03-27 12:40:07', '2020-03-30 13:56:41', 'VSV', NULL, 2, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_sport_id` (`_sport_id`),
  ADD KEY `_team_one_id` (`_team_one_id`),
  ADD KEY `_team_two_id` (`_team_two_id`),
  ADD KEY `_country_id` (`_country_id`);

--
-- Indizes für die Tabelle `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_sport_id` (`_sport_id`);

--
-- Indizes für die Tabelle `league_countries`
--
ALTER TABLE `league_countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_league_id` (`_league_id`),
  ADD KEY `_country_id` (`_country_id`);

--
-- Indizes für die Tabelle `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_league_id` (`_league_id`);

--
-- Indizes für die Tabelle `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_sport_id` (`_sport_id`),
  ADD KEY `_country_id` (`_country_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `league_countries`
--
ALTER TABLE `league_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`_sport_id`) REFERENCES `sports` (`id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`_team_one_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`_team_two_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `events_ibfk_4` FOREIGN KEY (`_country_id`) REFERENCES `countries` (`id`);

--
-- Constraints der Tabelle `leagues`
--
ALTER TABLE `leagues`
  ADD CONSTRAINT `leagues_ibfk_1` FOREIGN KEY (`_sport_id`) REFERENCES `sports` (`id`);

--
-- Constraints der Tabelle `league_countries`
--
ALTER TABLE `league_countries`
  ADD CONSTRAINT `league_countries_ibfk_1` FOREIGN KEY (`_league_id`) REFERENCES `leagues` (`id`),
  ADD CONSTRAINT `league_countries_ibfk_2` FOREIGN KEY (`_country_id`) REFERENCES `countries` (`id`);

--
-- Constraints der Tabelle `sports`
--
ALTER TABLE `sports`
  ADD CONSTRAINT `sports_ibfk_1` FOREIGN KEY (`_league_id`) REFERENCES `leagues` (`id`);

--
-- Constraints der Tabelle `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`_sport_id`) REFERENCES `sports` (`id`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`_country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
