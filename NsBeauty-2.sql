-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 13 jan. 2023 à 13:25
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
  `dure` varchar(30) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `slogan` varchar(255) NOT NULL,
  `image_slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestations`
--

INSERT INTO `prestations` (`id`, `titre`, `description`, `image`, `categorie_id`, `dure`, `prix`, `slogan`, `image_slogan`) VALUES
(1, 'Soin Nettoyant :', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\n                    et de Matifier les peaux grasses, <br>\n                    avec ou sans imperfections cutanées.\n', 'image/Soin1.jpg', 1, '30 min', 30, '', ''),
(2, 'Soin Hydratant', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/soin2.jpg', 1, '45min', 50, '', ''),
(3, 'Soin sur mesure', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/Soin3.jpg', 1, '1 Heure', 80, '', ''),
(4, 'Massage Modelage', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/massageform1.jpg', 2, '45 min', 50, 'Besoin de décompresser après une dure journée ? <br>                             Réservez votre massage bien-être à domicile ! ', 'image/para.jpg'),
(5, 'Massage Californien', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/mamanform2.png', 2, '1 heure', 65, 'Besoin de décompresser après une dure journée ? <br>                             Réservez votre massage bien-être à domicile ! ', 'image/para.jpg'),
(6, 'Pose de vernis simple', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/manucureform1.jpg', 4, '15 min', 10, '', ''),
(7, 'Pose de vernis au gel', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/manucureform2.jpg', 4, '25 min', 25, '', ''),
(8, 'Make\'up simple', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/makeup1.jpg', 3, '30 min', 30, '', ''),
(9, 'Make\'up soirée', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/makeup2.jpg', 3, '45 min', 45, '', ''),
(10, 'Make\'up mariée + essai', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/Make\'upMariéé.jpg', 3, '1 Heure', 95, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `prestations`
--
ALTER TABLE `prestations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
