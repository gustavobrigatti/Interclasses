-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2019 at 10:56 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interclasses`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `administrador` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `administrador`, `senha`) VALUES
(1, 'adm1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id_jogo` int(11) NOT NULL AUTO_INCREMENT,
  `id_modalidade` int(11) NOT NULL,
  `time_a` varchar(100) COLLATE utf8_bin NOT NULL,
  `time_b` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_jogo`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jogos`
--

INSERT INTO `jogos` (`id_jogo`, `id_modalidade`, `time_a`, `time_b`, `data`) VALUES
(1, 1, 'Corinthians', 'Palmeiras', '2019-11-17'),
(2, 2, 'SESI', 'Cruzeiro', '2019-12-05'),
(3, 1, 'Médio 3B', 'Informática 3B', '2019-11-25'),
(4, 1, 'Administração 3B', 'Médio 3A', '2019-11-18'),
(5, 2, 'Médio 3B', 'Informática 3B', '2019-12-03'),
(6, 3, 'Golden State Warriors', 'Los Angeles Lakers', '2019-12-06'),
(7, 4, 'Brasil', 'Argentina', '2019-11-27'),
(8, 3, 'Flamengo', 'Corinthians', '2019-12-09'),
(9, 4, 'Administração 3B', 'Palmeiras', '2019-12-15'),
(10, 3, 'Golden State Warriors', 'Médio 3A', '2019-12-15'),
(11, 3, 'Informática 3B', 'Los Angeles Lakers', '2019-12-11'),
(12, 4, 'Informática 3B', 'Brasil', '2019-11-29'),
(13, 4, 'Argentina', 'Informática 3B', '2019-12-08'),
(14, 1, 'Palmeiras', 'Administração 3B', '2019-12-06'),
(15, 2, 'Informática 3B', 'SESI', '2019-12-06'),
(16, 2, 'Cruzeiro', 'Médio 3B', '2019-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `mensagem` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `mensagem`) VALUES
(1, 'Gustavo Rosolen Brigatti', 'gustavo.brigatti13@gmail.com', 'oi teste 123, olá'),
(2, 'Gustavo Rosolen Brigatti', 'gustavo.brigatti13@gmail.com', 'oi teste 123, olá, teste 2'),
(3, 'Gustavo Rosolen Brigatti', 'gustavo.brigatti13@gmail.com', 'oi teste 123, olá, teste 2\r\nteste 3'),
(4, 'Gustavo Rosolen Brigatti', 'gustavo.brigatti13@gmail.com', 'oi teste 123, olá, teste 2\r\nteste 3\r\nJOÃO');

-- --------------------------------------------------------

--
-- Table structure for table `modalidade`
--

DROP TABLE IF EXISTS `modalidade`;
CREATE TABLE IF NOT EXISTS `modalidade` (
  `id_modalidade` int(255) NOT NULL AUTO_INCREMENT,
  `modalidade` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_modalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `modalidade`) VALUES
(1, 'Futsal'),
(2, 'Vôlei'),
(3, 'Basquete'),
(4, 'Handebol');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
