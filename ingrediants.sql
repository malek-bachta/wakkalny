-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 18:10
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
-- Structure de la table `ingrediants`
--

CREATE TABLE `ingrediants` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `quantite` varchar(20) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ingrediants`
--

INSERT INTO `ingrediants` (`id`, `nom`, `quantite`, `user`) VALUES
(1, 'dc', '2', 2),
(2, 'sou', '11', 2),
(3, 'dc', '2', 2),
(11, 'dc', '2', 2),
(12, 'malek', '1232', 4),
(13, 'Riz vinaigré (voir la recette sur ce site)', '300g', 9),
(14, 'Poisson au choix (saumon bar sole maquereau ici du', '200g', 9),
(15, 'Algues séchées (nori)', '3 feuilles', 9),
(16, 'Vinaigre de riz diluées dans 20 cl d\'eau froide', '2 càs', 9),
(17, ' wasabi', 'un peu', 9),
(18, 'bambou', 'une natte', 9),
(19, 'spaghetti', '1 kg', 10),
(20, 'huile d\'olive', '2 c. à soupe ', 10),
(21, 'gousse d\'ail', '1', 10),
(22, 'persil', '1 pincée', 10),
(23, ' thym', '1 pincée ', 10),
(24, ' basilic', '2 feuilles', 10),
(25, 'sel, poivre', 'un peu', 10),
(27, ' concentré de tomate', '100g', 10),
(28, 'petites oignons', '4', 10),
(29, 'parmesan', '70g', 10),
(30, 'piment doux', '1 pincée', 10),
(31, 'd\'origan', '1 pincé', 10),
(32, 'laurier', '2 feuilles', 10),
(33, ' fresh (or frozen) blueberries, rinsed and stems r', '6 cups ', 11),
(34, ' lemon zest', '1 teaspoon', 11),
(35, 'lemon juice', '1 Tbsp', 11),
(36, ' cornstarch, all-purpose flour, or quick cooking \"', '1/4 cup (about 30g) ', 11),
(37, 'white granulated sugar', '1/2 cup', 11),
(38, 'cinnamon', '1/2 teaspoon', 11),
(39, ' egg', '1', 11),
(40, ' milk', '1 tablespoon', 11),
(41, 'graham cracker crumbs (9 to 10 whole graham cracke', '1 1/2 cups (128g) ', 12),
(42, 'confectioners\' sugar', '1/4 cup (28g)', 11),
(44, 'butter, melted', '5 1/3 tablespoons (7', 12),
(45, 'salt', '1/8 teaspoon', 12),
(46, 'cream cheese, at room temperature', 'two 8-ounce packages', 12),
(47, 'large eggs,', '2 ', 12),
(48, 'granulated sugar', '2/3 cup (152g) ', 12),
(49, ' vanilla extract', '1 teaspoon', 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ingrediants`
--
ALTER TABLE `ingrediants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ingrediants`
--
ALTER TABLE `ingrediants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
