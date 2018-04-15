-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 01:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planning`
--
CREATE DATABASE planning;
USE planning;

-- --------------------------------------------------------

--
-- Table structure for table `apprecier`
--

CREATE TABLE `apprecier` (
  `id_s` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `appreciationglobal` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apprecier`
--

INSERT INTO `apprecier` (`id_s`, `id_u`, `appreciationglobal`) VALUES
(1, 2, 'Élève très perturbateur : dérange ses camarades pendant la classe, nous espérons tous qu\'il va se reprendre très vite.'),
(2, 3, 'Élève parfaite, excèle dans toutes les matières.');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(255) DEFAULT 'Erreur nom'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id_c`, `nom_c`) VALUES
(1, 'SLAM 1'),
(2, 'SLAM 2');

-- --------------------------------------------------------

--
-- Table structure for table `commenter`
--

CREATE TABLE `commenter` (
  `id_mat` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `id_u` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `correspondre`
--

CREATE TABLE `correspondre` (
  `id_m` int(11) NOT NULL,
  `id_d` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devoirs`
--

CREATE TABLE `devoirs` (
  `id_d` int(11) NOT NULL,
  `nom_d` varchar(255) DEFAULT NULL,
  `date_d` date DEFAULT NULL,
  `coef_d` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matieres`
--

CREATE TABLE `matieres` (
  `id_m` int(11) NOT NULL,
  `nom_m` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`id_m`, `nom_m`) VALUES
(1, 'mathematiques'),
(2, 'svt'),
(3, 'cultureg'),
(4, 'eps'),
(5, 'artplat');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_m` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noter`
--

CREATE TABLE `noter` (
  `id_u` int(11) NOT NULL,
  `id_d` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semestres`
--

CREATE TABLE `semestres` (
  `id_s` int(11) NOT NULL,
  `num_s` int(11) DEFAULT NULL,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `etat` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semestres`
--

INSERT INTO `semestres` (`id_s`, `num_s`, `date_deb`, `date_fin`, `etat`) VALUES
(1, 1, '2017-09-01', '2018-01-10', NULL),
(2, 2, '2018-01-02', '2018-05-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suivre`
--

CREATE TABLE `suivre` (
  `id_c` int(11) NOT NULL,
  `id_m` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `bantime` timestamp NULL DEFAULT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `email`, `mdp`, `nom`, `prenom`, `lvl`, `bantime`, `ip`, `id_c`) VALUES
(1, 'admin@admin.admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Huchard', 'Théo', 3, NULL, NULL, 0),
(2, 'dfgh@hey.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Dupont', 'Georges', 1, NULL, NULL, 1),
(3, 'juiy@boum.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'DuCouteau', 'Katarina', 1, NULL, NULL, 1),
(4, 'test@test.test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Delprat', 'Xavier', 2, NULL, NULL, 0),
(5, 'test@test.test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Assouline', 'Jordan', 2, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprecier`
--
ALTER TABLE `apprecier`
  ADD PRIMARY KEY (`id_s`,`id_u`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `commenter`
--
ALTER TABLE `commenter`
  ADD PRIMARY KEY (`id_mat`,`id_s`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_s` (`id_s`);

--
-- Indexes for table `correspondre`
--
ALTER TABLE `correspondre`
  ADD PRIMARY KEY (`id_m`,`id_d`),
  ADD KEY `id_d` (`id_d`);

--
-- Indexes for table `devoirs`
--
ALTER TABLE `devoirs`
  ADD PRIMARY KEY (`id_d`);

--
-- Indexes for table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `noter`
--
ALTER TABLE `noter`
  ADD PRIMARY KEY (`id_u`,`id_d`,`id_s`),
  ADD KEY `id_d` (`id_d`),
  ADD KEY `id_s` (`id_s`);

--
-- Indexes for table `semestres`
--
ALTER TABLE `semestres`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `suivre`
--
ALTER TABLE `suivre`
  ADD PRIMARY KEY (`id_c`,`id_m`),
  ADD KEY `id_m` (`id_m`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`),
  ADD KEY `id_c` (`id_c`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apprecier`
--
ALTER TABLE `apprecier`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `devoirs`
--
ALTER TABLE `devoirs`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semestres`
--
ALTER TABLE `semestres`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
