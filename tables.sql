-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--Paste this code to your php my admin DB
-- Počítač: sql.endora.cz:3310
-- Vytvořeno: Ned 25. bře 2018, 16:38
-- Verze serveru: 5.6.28-76.1
-- Verze PHP: 5.4.45

--
-- created by daniel Bulant
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databáze: `danblog`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `author` varchar(25) NOT NULL DEFAULT 'Daniel B.',
  `title` varchar(40) NOT NULL,
  `description` varchar(80) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(15) NOT NULL DEFAULT 'web',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `blog`
--

INSERT INTO `blog` (`id`, `author`, `title`, `description`, `text`, `category`, `date`) VALUES
(10, 'Daniel B.', 'Hello', 'This is first blog post ', 'If you see this inside your web, you have succesfully configured your database ', 'web'),
-- --------------------------------------------------------

--
-- Struktura tabulky `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `text` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`, `post_id`) VALUES
(1, 'Daniel Bulant', 'Nice! You created your first blog! Don't forget to customize.', 1);

--
-- keys for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- keys for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pro tabulku `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pro tabulku `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
