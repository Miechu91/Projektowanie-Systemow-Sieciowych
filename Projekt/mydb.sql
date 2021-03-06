-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Maj 2022, 19:05
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `moc` varchar(5) COLLATE utf8_polish_ci NOT NULL,
  `wyposazenie` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `spalanie` varchar(5) COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `cars`
--

INSERT INTO `cars` (`id`, `marka`, `model`, `moc`, `wyposazenie`, `spalanie`, `cena`) VALUES
(1, 'Mercedes', 'AMG', '500', 'Komfort', '10', 200),
(2, 'Ford', 'Mustang', '800', 'Sport', '18', 180),
(3, 'Porsche', 'Panamera', '420', 'Komfort', '8', 150),
(4, 'Mercedes', 'SKL', '715', 'Sport', '11', 200),
(5, 'Ferrari', 'T700', '666', 'Sport', '9', 220),
(6, 'Lamborgini', 'Elipse', '350', 'Komfort+', '7', 140),
(7, 'Porshe', 'Magnuma', '500', 'Universal', '5', 100),
(8, 'BMW', 'i8', '550', 'Sport', '11', 160),
(9, 'Maserati', 'Pionier', '390', 'Komfort', '6', 110);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_cars` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `reservations`
--

INSERT INTO `reservations` (`id`, `id_users`, `id_cars`, `state`) VALUES
(55, 2, 4, 1),
(56, 2, 2, 1),
(57, 2, 9, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Moderator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `mail`, `login`, `pass`, `id_role`) VALUES
(1, 'Imi?? admin', 'Nazwisko admin', 'admin@as.pl', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'imi?? moder', 'nazwisko moder', 'moder@as.pl', 'moder', 'b36c04f4f2496b9525646ec01ff51e2007e79a2c', 2),
(3, 'imi?? user', 'nazwisko user', 'user@as.pl', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3),
(7, 'Talldil', 'rtyrty', 'miechowskip@outlook.com', 'wefwf', '86c16a459ecf39fd76a8e750f9d5074c4722f22b', 3);

--
-- Indeksy dla zrzut??w tabel
--

--
-- Indeksy dla tabeli `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cars` (`id_cars`),
  ADD KEY `reservations_ibfk_1` (`id_users`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzut??w tabel
--

--
-- Ograniczenia dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
