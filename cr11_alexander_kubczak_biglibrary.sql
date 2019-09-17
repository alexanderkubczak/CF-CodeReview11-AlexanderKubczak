-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Sep 2019 um 14:23
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_alexander_kubczak_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `AuthorID` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Media` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `author`
--

INSERT INTO `author` (`AuthorID`, `FirstName`, `LastName`, `Media`) VALUES
(1, 'John', 'Tolkien', 'Book'),
(2, 'Joanne', 'Rowling', 'Book'),
(3, 'Kai', 'Hermann', 'Book'),
(4, 'Otfried', 'Preussler', 'Book'),
(5, 'Gudrun', 'Pausewang', 'Book');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(6) UNSIGNED NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `ISBN` int(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Releasedate` date DEFAULT NULL,
  `Publisher` varchar(255) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `Title`, `Image`, `Author`, `ISBN`, `Description`, `Releasedate`, `Publisher`, `Type`) VALUES
(1, 'Die Wolke', 'https://cutt.ly/5wGsl6K', 'GudrunPausewang', 2147483647, 'Die Wolke ist ein 1987 erschienener Jugendroman von Gudrun Pausewang, in dem das fiktive Schicksal der 14-jï¿½hrigen Janna-Berta erzï¿½hlt wird, die durch einen Reaktorunfall zu einem Strahlenopfer wird. Der Roman erschien ein Jahr nach der Nuklearkatastr', '2006-03-16', 'ich ', 'Book'),
(11, 'LOTR', 'https://cutt.ly/5wGskSl', 'John Tolkien', 2147483647, 'A hobbit throws a ring into a vulcano', '2001-12-19', 'George Allen', 'Book'),
(12, 'HarryPotter', 'https://cutt.ly/VwGsxzg', 'Joanne Rowling', 2147483647, 'Harry is a wizard', '1998-09-02', 'Pottermore', 'Book'),
(13, 'Krabat', 'https://cutt.ly/zwGsnNV', 'Otfried PreuÃŸler', 2147483647, 'Boy gets trapped, then discovers he has magic powers', '0000-00-00', 'Thienemann', 'DVD');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `PublisherID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Adress` varchar(30) NOT NULL,
  `Size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`PublisherID`, `Name`, `Adress`, `Size`) VALUES
(1, 'Ravensburger Verlag', 'Robert-Bosch-Str. 1 88214 Rave', 'Medium'),
(2, 'George Allen & Unwin', '83 Alexander St, Crows Nest', 'Big'),
(3, 'Bloomsbury Publishing', '31 Bedford Avenue London', 'Big'),
(4, 'Stern Verlag', 'Friedrichstraße 24, 40217 Düss', 'Medium'),
(5, 'Thienemann Esslinger', 'Blumenstraße 36 D 70182 Stuttg', 'Small');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PublisherID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PublisherID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
