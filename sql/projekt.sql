-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2018, 01:14
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `text` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`comment_id`, `text`, `rate`, `date`, `author`, `user_id`, `post_id`) VALUES
(1, 'qweqweqweqw', 0, '2018-01-22 23:24:04', 'Mariusz Kowalski', 1, 6),
(2, 'werweqrwerwer', 0, '2018-01-22 23:41:46', 'Mariusz Kowalski', 1, 6),
(3, 'eqweqw', 0, '2018-01-22 23:52:37', 'Mariusz Kowalski', 1, 6),
(4, 'qweqweqwe', 0, '2018-01-22 23:53:00', 'Maciek Nowak', 3, 7),
(5, 'qweqweqweq', 0, '2018-01-22 23:53:07', 'Maciek Nowak', 3, 6),
(6, 'rqweqweqwe', 0, '2018-01-23 00:47:46', 'Maciek Nowak', 3, 9),
(7, 'qweqweqw', 0, '2018-01-23 00:47:57', 'Maciek Nowak', 3, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `text` varchar(2000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `region_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `region_type` int(11) NOT NULL,
  `rate` int(5) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `text`, `author`, `region_name`, `region_type`, `rate`, `date`, `user_id`) VALUES
(1, 'asdasdas', 'asdasdwqeqweqweqweqw', 'Maciek Nowak', 'Wojew&oacute;dztwo Ł&oacute;dzkie', 2, 0, '2018-01-22 01:50:02', 3),
(2, 'qewewqe', 'qweqweqweqwe', 'Maciek Nowak', 'Polska', 1, 0, '2018-01-22 01:50:02', 3),
(3, 'qweqwe', 'qweqwe', 'Mariusz Kowalski', 'Polska', 1, 0, '2018-01-22 01:59:45', 1),
(4, 'wqeqweqweqwe', 'qweqweqweqweqw', 'Maciek Nowak', 'Polska', 1, 0, '2018-01-22 15:20:32', 3),
(5, 'qweqweqwe', 'qweqwe', 'Mariusz Kowalski', 'Polska', 1, 0, '2018-01-22 22:28:51', 1),
(6, 'dasdasd', 'sadasdsa', 'Mariusz Kowalski', 'Łódź Wschód', 2, 0, '2018-01-22 22:40:48', 1),
(7, 'sdasdasd', 'asdasdasd', 'Mariusz Kowalski', 'Polska', 1, 0, '2018-01-22 23:52:52', 1),
(8, 'weqweqwe', 'qweqweqwe', 'Maciek Nowak', 'Polska', 1, 0, '2018-01-23 00:36:19', 3),
(9, 'wqeqweqwe', 'sadqeqwewqeqwe', 'Maciek Nowak', 'Łódź', 3, 0, '2018-01-23 00:37:38', 3);

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
(1, 'mariusz_44', 'mariusz_44@gmail.com', 'admin', 'Mariusz', 'Kowalski', 24, 'Koluszki', 'Łódź Wschód', 'Polska'),
(3, 'maciek_44', 'maciek@o2.pl', 'maciek', 'Maciek', 'Nowak', 28, 'Łódź', 'Łódź Wschód', 'Polska');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
