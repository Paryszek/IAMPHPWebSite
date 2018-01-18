-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 19 Sty 2018, 00:53
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Login` varchar(35) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `E-mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `First` varchar(35) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Last` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `City` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Region` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Country` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `Login`, `E-mail`, `Password`, `First`, `Last`, `Age`, `City`, `Region`, `Country`) VALUES
(1, 'mariusz_44', '', 'admin', 'Mariusz', 'Kowalski', 24, 'Koluszki', 'Łódź Wschód', 'Polska'),
(2, 'mariusz', 'mariusz@o2.pl', 'admin', 'Mariusz', 'Kowalski', 28, 'Koluszki', 'Ł&oacute;dź Wsch&oacute;d', 'Polska'),
(3, 'maciek_44', 'maciek@o2.pl', 'maciek', 'Maciek', 'Nowak', 28, 'Ł&oacute;dź', 'Wojew&oacute;dztwo Ł&oacute;dzkie', 'Polska'),
(4, 'asd', 'asd', 'asd', 'asd', 'asd', 22, 'asd', 'asd', 'asd'),
(5, 'aa', 'aa', 'aa', 'aa', 'aa', 22, 'aa', 'aa', 'aa'),
(6, 'bb', 'bb', 'bb', 'bb', 'bb', 22, 'bb', 'bb', 'bb'),
(7, 'gg', 'gg', 'gg', 'gg', 'gg', 22, 'gg', 'gg', 'gg'),
(8, 'ddd', 'ddd', '123', 'ddd', 'dd', 22, 'dd', 'dd', 'dd'),
(9, '', '', '', '', '', 0, '', '', ''),
(10, '', '', '', '', '', 0, '', '', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
