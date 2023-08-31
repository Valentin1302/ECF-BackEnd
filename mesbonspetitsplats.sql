-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 21 août 2023 à 14:20
-- Version du serveur : 8.0.33
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mesbonspetitsplats`
--

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Burger Gourmet', 'Servi avec ses frites maison & une boisson 33cl (au choix).', 14.95, 'https://img.grouponcdn.com/iam/qn3MDvijFyd8GaJoKYE9/is-2048x1229/v1/c870x524.jpg'),
(2, 'El Classico', 'Une cuisse de poulet généreusement grillée servie avec ses frites maison & une boisson 33cl (au choix)', 8.95, 'https://www.fourchette-et-bikini.fr/sites/default/files/styles/1200x675/public/2022-06/shutterstock_1893973672.jpg'),
(6, 'Crevettes sur sont lit de laitue.', 'Servi avec une mayonnaise maison & des crudités (carottes râpées, concombre et tomates fraichement cueillies)', 13.95, 'https://assets.afcdn.com/recipe/20160922/34837_w1024h1024c1cx1424cy2136.jpg'),
(8, 'Boeuf Bourguignon', 'Tendres morceaux de boeuf mijotés au vin rouge. Servi avec ses légumes, herbes & fines herbes.', 18.95, 'https://www.cofooders.fr/public/img/recette/buf-bourguignon-traditionnel-1675433504.jpg'),
(9, 'Assortiment de sushis', 'Préparés avec du poisson frais, riz vinaigré & des légumes.', 19.95, 'https://easy-sushi.com/wp-content/uploads/2023/04/easy-sushi-14-choses-que-vous-ne-savez-pas-sur-les-sushis.jpg'),
(10, 'Poulet Tikka Masala', 'Morceaux de poulets marinés.\r\nServis avec du savoureux riz basmati d\origine indienne.', 16.95, 'https://www.cookomix.com/wp-content/uploads/2016/07/poulet-tikka-masala-thermomix-800x600.jpg'),
(11, 'Pizza Margherita', 'Garnie de sauce tomate, de mozarella fondante & de feuilles de basilic fraichement cueillies.', 12.95, 'https://www.cuisine-et-mets.com/wp-content/uploads/2017/07/Fotolia_60369254_Subscription_Monthly_XXL.jpg'),
(12, 'Salade César au poulet grillé', 'Composée de laitue romaine, de croutons, de parmesan & de vinaigre César.', 15.25, 'https://producteurslaitiersducanada.ca/sites/default/files/styles/recipe_image/public/image_file_browser/conso_recipe/chicken-caesar-salad.jpg.jpeg?itok=Y2XaXmxv');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
