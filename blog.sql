-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 17:08
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wakkalny`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `idblog` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `sujet` varchar(1500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`idblog`, `nom`, `titre`, `sujet`, `image`, `user`) VALUES
(44, 'khalil', 'Cheesy Baked Spaghetti Recipe', 'Something magical happens when you bake spaghetti - it turns into a whole other dish with flavors that are completely different. If you have leftover bolognese or meat sauce on hand, try this. You really can\'t go wrong with cheese, noodles, and sauce baked to perfection', 'img15.jpg', 110),
(45, 'khalil', 'makis sushi', 'You often think about preparing delicious makis for dinner but the lack of know-how often imposes a big brake on their realization. The idea then takes a back seat and we fall back on the right dish of dough and then too bad for originality!\r\n\r\nSo to help you master the art of making sushi maki, I will try to explain step by step here the easiest technique to make beautiful sushi rolls!\r\n', 'img3.jpg', 110),
(46, 'khalil', 'VEGAN BLUEBERRY PIE', 'A sweet, summery vegan blueberry pie with a rich and flaky vegan butter crust and bright blueberry lemon filling. Great with fresh or frozen blueberries!\r\n\r\n', 'img8.jpg', 110),
(47, 'khalil', 'cheesecacke', 'A thorny case like that of cheesecake. Indeed, for several months, I have been tempted to taste this typically American cake. But what is the problem then ?? I’m coming, I’m coming! The problem is, a few years ago, we tried to make it (my mom, my sister and I) and I was not thrilled by this cake.\r\n', 'img17.jpg', 110);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idblog`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
