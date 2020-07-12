-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 09:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `idade` mediumint(9) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`, `idade`, `sexo`) VALUES
(1, 'Myra', 'Gibson', 28, 'Masculino'),
(2, 'Amena', 'Rose', 77, 'Feminino'),
(3, 'Stella', 'Copeland', 32, 'Masculino'),
(4, 'Macon', 'Pitts', 76, 'Feminino'),
(5, 'Natalie', 'Maynard', 73, 'Feminino'),
(6, 'Thor', 'Merrill', 95, 'Feminino'),
(7, 'Ira', 'Salinas', 30, 'Feminino'),
(8, 'Micah', 'Ford', 72, 'Feminino'),
(9, 'Darryl', 'Perkins', 30, 'Feminino'),
(10, 'Yuri', 'Jacobs', 44, 'Masculino'),
(11, 'Jordan', 'Boyle', 27, 'Feminino'),
(12, 'Mallory', 'Wolf', 50, 'Masculino'),
(13, 'Rinah', 'Page', 24, 'Feminino'),
(14, 'Akeem', 'English', 70, 'Masculino'),
(15, 'Erica', 'Oconnor', 78, 'Feminino'),
(16, 'Galena', 'Pratt', 46, 'Masculino'),
(17, 'Barbara', 'Adams', 96, 'Feminino'),
(18, 'Mari', 'Harrison', 60, 'Feminino'),
(19, 'Deacon', 'Benjamin', 79, 'Masculino'),
(20, 'Stephanie', 'Mckee', 32, 'Feminino'),
(21, 'Wyoming', 'Shaw', 32, 'Feminino'),
(22, 'Samantha', 'Duke', 100, 'Masculino'),
(23, 'Moses', 'Mejia', 67, 'Feminino'),
(24, 'Victor', 'Caldwell', 39, 'Masculino'),
(25, 'Jorden', 'Fuller', 46, 'Feminino'),
(26, 'Larissa', 'Yang', 46, 'Feminino'),
(27, 'Chantale', 'Zimmerman', 23, 'Feminino'),
(28, 'Macey', 'Schneider', 58, 'Feminino'),
(29, 'Malik', 'Hurley', 88, 'Feminino'),
(30, 'Angelica', 'Ayers', 25, 'Masculino'),
(31, 'Teresinha', 'de Jesus', 65, 'Feminino'),
(32, 'Teresinha', 'de Jesus', 65, 'Feminino'),
(33, 'Debora', 'Miyake', 20, 'Feminino'),
(34, 'Daniela', 'Miranda', 18, 'Feminino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
