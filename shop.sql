-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 17:07
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
-- Structure de la table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `nb_stock` int(11) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `image` blob DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id`, `nom`, `description`, `nb_stock`, `prix`, `image`, `idCategorie`) VALUES
(34, 'Black Silicone turner with Acacia Handle', '', 100, '5 DT', 0x626c61636b2d73696c69636f6e652d73706174756c612d776974682d6163616369612d68616e646c652e6a7067, 7),
(35, 'Le Creuset ® Toughened Non-Stick Pro 10-Piece Set', '', 50, '120dt', 0x6161342e6a7067, 7),
(36, 'USA Pan Bakeware Toaster Oven Cupcake and Muffin P', '', 30, '125dt', 0x39317669466d687467514c2e5f41435f534c313530305f2e6a7067, 8),
(37, 'Tovla Jr. Knives for Kids', '', 15, '150 DT', 0x373148683545643439644c2e5f41435f534c313530305f2e6a7067, 8),
(38, 'Silicone Basting Pastry', '', 50, '50 DT', 0x3631552d4c6c732d6e474c2e5f41435f534c313530305f2e6a7067, 8),
(39, 'Ello Duraglass Baking Dish', '', 60, '20 DT', 0x37316a6b4c7a7363496c4c2e5f41435f534c313530305f2e6a7067, 9),
(40, 'RUVINCE Tortilla Bowl Maker', '', 30, '10 DT', 0x34317131396f4e6c46494c2e5f41435f2e6a7067, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_shop_categorie` (`idCategorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
