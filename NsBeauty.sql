-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 06 jan. 2023 à 23:52
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `NsBeauty`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`, `description`, `image`) VALUES
(1, 'Nos Soins Du Visage :', 'Découvrez nos soins du visage et laissez-vous emporter pour un moment de détente inoubliable.', 'image/Soin1.jpg'),
(2, 'Nos Massages :', 'Découvrez nos massages et laissez-vous emporter pour un moment de détente inoubliable.', 'image/prestaMassage.jpg'),
(3, 'Nos Make\'up :', 'Découvrez nos make\'up moderne\r\net sur-mesure.', 'image/Make\'upForfait.jpg'),
(4, 'Nos Manucures :', 'Découvrez nos manucures et soyez belle jusqu\'au bout des ongles.', 'image/manuuucure.png');

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

CREATE TABLE `prestations` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  `durée` varchar(30) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestations`
--

INSERT INTO `prestations` (`id`, `titre`, `description`, `image`, `categorie_id`, `durée`, `prix`) VALUES
(1, 'Soin Nettoyant :', 'Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur\net de Matifier les peaux grasses,\navec ou sans imperfections cutanées.', 'image/Soin1.jpg', 1, '30 min', 30),
(2, 'Soin Hydratant', 'Hydratant et rééquilibrant, Ns.Beauty vous conseille de réaliser ce soin,\nqui convient à tous les types de peaux\nqu\'elle soit normale, mixte, sensible ou sèche.', 'image/soin2.jpg', 1, '45min', 50),
(3, 'Soin sur mesure', 'Ns.Beauty adapte son soin traitant sur mesure personnalisé en fonction des besoins.', 'image/Soin3.jpg', 1, '1 Heure', 80),
(4, 'Massage Modelage', 'Le modelage corporel est une technique de manipulation\nsuperficielle du corps et du visage. Pratiqué par une esthéticienne,\nil va souvent de paire avec l’application d’une huile ou d’une crème\naux différentes vertus pour la peau.', 'image/massageform1.jpg', 2, '45 min', 50),
(5, 'Massage Californien', 'Le modelage corporel est une technique de manipulation\r\nsuperficielle du corps et du visage. Pratiqué par une esthéticienne,\r\nil va souvent de paire avec l’application d’une huile ou d’une crème\r\naux différentes vertus pour la peau.', 'image/mamanform2.png', 2, '1 heure', 65),
(6, 'Pose de vernis simple', ' Ns.Beauty réalisent la pose de vernis simple sur ongles courts ou longs. \r\nNous procédons sans ponçage de l’ongle naturel afin de ne pas l’abîmer.', 'image/manucureform1.jpg', 4, '15 min', 10),
(7, 'Pose de vernis au gel', ' Ns.Beauty réalisent la pose de vernis au gel sur ongles courts ou longs.\r\nNous procédons sans ponçage de l’ongle naturel afin de ne pas l’abîmer.', 'image/manucureform2.jpg', 4, '25 min', 25),
(8, 'Make\'up simple', 'Ns.Beauty vous propose un maquillage moderne et sur-mesure qui saura révéler votre personnalité.\r\nEn tenant compte de vos envies et des dernières tendances.\r\nNotre objectif : que vous soyez belle et épanouie.', 'image/makeup1.jpg', 3, '30 min', 30),
(9, 'Make\'up soirée', 'Ns.Beauty vous propose un maquillage moderne et sur-mesure qui saura révéler votre personnalité.\r\nEn tenant compte de vos envies et des dernières tendances.\r\nNotre objectif : que vous soyez belle et épanouie lors de votre événement.', 'image/makeup2.jpg', 3, '45 min', 45),
(10, 'Make\'up mariée + essai', 'Ns.Beauty vous propose un maquillage moderne et sur-mesure qui saura révéler votre personnalité.\r\nEn tenant compte de vos envies et des dernières tendances.\r\nNotre objectif : que vous soyez belle et épanouie le jour de votre mariage.', 'image/Make\'upMariéé.jpg', 3, '1 Heure', 95);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestations`
--
ALTER TABLE `prestations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `prestations`
--
ALTER TABLE `prestations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
