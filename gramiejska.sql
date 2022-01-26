-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sty 2022, 21:38
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gramiejska`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `name_of_game`
--

CREATE TABLE `name_of_game` (
  `id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `team_games`
--

CREATE TABLE `team_games` (
  `id` int(11) NOT NULL,
  `gra` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `team_name`
--

CREATE TABLE `team_name` (
  `id` int(11) NOT NULL,
  `team_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `team_register`
--

CREATE TABLE `team_register` (
  `id` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$6EV3nbYzGYTUxP.BQT6keudjRYBpcxtQizfjT3uKFFQd4KTie0hQO');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `name_of_game`
--
ALTER TABLE `name_of_game`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `team_games`
--
ALTER TABLE `team_games`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `team_name`
--
ALTER TABLE `team_name`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indeksy dla tabeli `team_register`
--
ALTER TABLE `team_register`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `name_of_game`
--
ALTER TABLE `name_of_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `team_games`
--
ALTER TABLE `team_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `team_name`
--
ALTER TABLE `team_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `team_register`
--
ALTER TABLE `team_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=498;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
