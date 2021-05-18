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
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `idrecette` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `prept` int(20) NOT NULL,
  `cookingt` int(20) NOT NULL,
  `difficulty` varchar(20) NOT NULL,
  `nb_ppl` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`idrecette`, `titre`, `prept`, `cookingt`, `difficulty`, `nb_ppl`, `category`, `description`, `photo`, `user`) VALUES
(9, 'sushi', 90, 30, 'easy', 2, 'salty', '1** Découpez des lamelles de poisson d\'environ un demi cm d\'épaisseur, puis coupez-les en deux dans le sens de la longueur.\r\n2** Humectez vos doigts dans le mélange eau/vinaigre et étalez environ 75 g de riz sur une demi-feuille de nori, en laissant une bande de 2 cm sur le bord le plus éloigné.\r\n3** Déposez une tracée de wasabi au centre et sur toute la largeur du riz. Déposez vos lamelles de poisson le long de la wasabi.\r\n4** Tout en maintenant la garniture, roulez délicatement la natte en la tenant entre les index et les pouces. Roulez la natte jusqu\'à ce que les bords de l\'algue se touchent et imprimez une légère pression uniformément sur l\'ensemble du rouleau.\r\n5** Déroulez la natte. Humidifiez la lame d\'un couteau large et coupez le rouleau en deux, puis chaque moitié de rouleau en trois.', 'img3.jpg', 110),
(10, 'spaghetti', 15, 10, 'easy', 4, 'salty', '1.\r\nFaites bouillir les oignons dans de l\'eau un peu salée dans laquelle vous mettrez 1 c. à soupe d\'huile d\'olive, 2 feuilles de laurier, puis après ébullition, les pâtes.\r\n2.\r\nFaites revenir dans 1 c. à soupe d\'huile d\'olive, la gousse d\'ail écrasée. Assaisonnez de sel, poivre, piment doux, persil, un peu de thym et d\'origan. Ajoutez le jus du coulis de tomates, et un peu d\'eau, remuez bien et laissez mijoter 5 min à feu doux.\r\n\r\n3.\r\nLorsque les pâtes sont cuites, égouttez-les soigneusement, versez-les dans un plat et nappez-les de la sauce tomate italienne. Saupoudrez d\'un peu de parmesan, décorez de feuilles de basilic et servez chaud.', 'img15.jpg', 110),
(11, 'blueberry pie', 150, 30, 'average', 8, 'dessert', '1\r\nIn medium bowl, mix 2 cups flour and the salt. Cut in shortening, using pastry blender (or pulling 2 table knives through ingredients in opposite directions), until particles are size of small peas. Sprinkle with cold water, 1 tablespoon at a time, tossing with fork until all flour is moistened and pastry almost cleans side of bowl (1 to 2 teaspoons more water can be added if necessary).\r\n2\r\nGather pastry into a ball. Divide in half; shape into 2 flattened rounds on lightly floured surface. Wrap in plastic wrap; refrigerate about 45 minutes or until dough is firm and cold, yet pliable. This allows the shortening to become slightly firm, which helps make the baked pastry more flaky. If refrigerated longer, let pastry soften slightly before rolling.\r\n3\r\nHeat oven to 425°F. With floured rolling pin, roll one round into round 2 inches larger than upside-down 9-inch glass pie plate. Fold pastry into fourths; place in pie plate. Unfold and ease into plate, pressing firmly against bottom and side.\r\n4\r\nIn large bowl, mix sugar, 1/2 cup flour and the cinnamon. Stir in blueberries. Spoon into pastry-lined pie plate. Sprinkle any remaining sugar mixture over blueberry mixture. Sprinkle with lemon juice. Cut butter into small pieces; sprinkle over blueberries. Cover with top pastry that has slits cut in it; seal and flute. Cover edge with 2- to 3-inch strip of foil to prevent excessive browning.\r\n5\r\nBake 35 to 45 minutes or until crust is golden brown and juice begins to bubble through slits in crust, removing foil for last 15 minutes of baking. Cool on cooling rack at least 2 hours.', 'img8.jpg', 110),
(12, 'cheesecake', 12, 30, 'easy', 8, 'dessert', 'Select a pie pan whose inside top dimension is at least 9\", and whose height is at least 1 1/4\". Preheat the oven to 350°F.\r\n\r\nMake the crust by stirring together all of the crust ingredients, mixing until thoroughly combined.\r\n\r\nPress the crumbs into the bottom and up the sides of the pie pan, making a thicker layer on the bottom than on the sides.\r\n\r\nMake the filling by mixing together the room-temperature cream cheese and sugar until smooth. Mix in the eggs and vanilla, again mixing until smooth. To avoid beating too much air into the batter, use a mixer set at low-medium speed. To avoid lumps, make sure the cream cheese is softened, and/or at room temperature.\r\n\r\n', 'img17.jpg', 110);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`idrecette`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `idrecette` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
