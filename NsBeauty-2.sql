-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 16 jan. 2023 à 00:19
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
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2023_01_14_164113_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Soin Nettoyant :', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\n                    et de Matifier les peaux grasses, <br>\n                    avec ou sans imperfections cutanées.\n', 'image/Soin1.jpg', 1, '30 min', 30, 'Faite vous plaisir avec un soin du visage naturelle à votre image.', 'image/para1soinVisage.jpg'),
(2, 'Soin Hydratant', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/soin2.jpg', 1, '45min', 50, 'Osez vous détendre, le temps d\'un instant.', 'image/Para2soinVisage.jpg'),
(3, 'Soin sur mesure', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/Soin3.jpg', 1, '1 Heure', 80, '', ''),
(4, 'Massage Modelage', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/massageform1.jpg', 2, '45 min', 50, 'Besoin de décompresser après une dure journée ? <br>                             Réservez votre massage bien-être à domicile ! ', 'image/para.jpg'),
(5, 'Massage Californien', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/mamanform2.png', 2, '1 heure', 65, '', ''),
(6, 'Pose de vernis simple', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/manucureform1.jpg', 4, '15 min', 10, 'Soyez belle jusqu\'au bout des ongles ! <br>', 'image/paraManucure.jpg'),
(7, 'Pose de vernis au gel', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/manucureform2.jpg', 4, '25 min', 25, '', ''),
(8, 'Make\'up simple', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/makeup1.jpg', 3, '30 min', 30, 'Faite vous plaisir avec une mise en beauté à votre image, naturelle ou sophistiquée.', 'image/ParaMakeup.jpg'),
(9, 'Make\'up soirée', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/makeup2.jpg', 3, '45 min', 45, 'Osez le maquillage de star le temps d\'une soirée.', 'image/Para2makeup.jpg'),
(10, 'Make\'up mariée + essai', ' Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>\r\n                    et de Matifier les peaux grasses, <br>\r\n                    avec ou sans imperfections cutanées.\r\n', 'image/Make\'upMariéé.jpg', 3, '1 Heure', 95, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `prestation_id` int(11) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenoms` varchar(30) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `heure_rdv` time DEFAULT NULL,
  `date_reesrvation` datetime DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:en cours;1:valider;-1:annuler'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `prestation_id`, `nom`, `prenoms`, `numero`, `adresse`, `date_rdv`, `heure_rdv`, `date_reesrvation`, `prix`, `status`) VALUES
(1, 5, 'kre', 'kadjo', NULL, 'abidjan', '2023-01-14', '13:10:00', '2023-01-14 13:30:55', 65, 0),
(2, 5, 'kre', NULL, NULL, 'abidjan', '2023-01-14', '13:31:00', '2023-01-14 13:32:33', 65, 0),
(3, 5, 'kre', 'kadjo', '0564106687', 'abidjan', '2023-01-14', '13:32:00', '2023-01-14 13:34:14', 65, 0),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-14 16:12:43', 50, 0),
(5, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-14 16:13:26', 50, 0),
(6, 4, 'kouadio', 'Bi Serge', '0564106687', 'paris', '2023-01-14', '16:11:00', '2023-01-14 16:14:55', 50, 0),
(7, 4, 'Darko', 'afoué grace', '0564106687', 'Dabou', '2023-01-14', '15:13:00', '2023-01-14 16:17:06', 50, 0),
(8, 4, 'Darko', 'afoué grace', '0564106687', 'Dabou', '2023-01-14', '13:09:00', '2023-01-14 16:17:47', 50, 1),
(9, 4, 'kre', 'kadjo', '0564106687', 'abidjan', '2023-01-14', '13:18:00', '2023-01-14 16:18:56', 50, 0),
(10, 4, 'Aatar', 'Samira', '0564106687', 'parisa', '2023-01-14', '09:20:00', '2023-01-14 16:20:53', 50, -1),
(11, 4, 'Darko', 'kadjo', '0564106687', 'Dabou', '2023-01-14', '14:21:00', '2023-01-14 16:22:04', 50, 0),
(12, 4, 'kouadio', 'Bi Serge', '0564106687', 'Dabou', '2023-01-14', '12:32:00', '2023-01-14 16:32:32', 50, 0),
(13, 6, 'kassi', 'georgina', '0564106687', 'abidjan', '2023-01-14', '10:21:00', '2023-01-14 17:19:22', 10, 1),
(14, 4, 'AATAR', 'Samira', '0769936884', '1 Rue Fontaine', '2023-01-18', '14:13:00', '2023-01-15 23:10:42', 50, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zdtwDbxtG5HQ6IDp1uYa5qPbs5N3UjENsXXC5Ywy', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZlJiUzFYbmJhZklZM0ozWkY2U1VHaXB1SnQzR2gyc09rbDlTcHJ2eSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHMxeFJEc2RaSHlQbWQ4OHd3UjhFU09ocTBjYUFZTHE2bS5Ha1QxM3lvLzFIdi56djhzQWlhIjt9', 1673774258),
('m939FIiWm9v3aSzEeXY84LtodxpoGRm7tma1YiIs', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUUtZaE85RXdYQlNTN3ZxSW5WTzhNc01CZUc5bDdCSEl0N09YNnJBUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kZXRhaWxzLXJlc2VydmF0aW9uLzEyIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkczF4UkRzZFpIeVBtZDg4d3dSOEVTT2hxMGNhQVlMcTZtLkdrVDEzeW8vMUh2Lnp2OHNBaWEiO30=', 1673757067);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'passenger.log', 'mkre1999@gmail.com', NULL, '$2y$10$fiw1hdiKbnZrwqW.6C3GAOztMlVQgnAgUARYgZ9MvOMRlqxhPIH4a', NULL, NULL, NULL, NULL, '2023-01-15 02:49:06', '2023-01-15 02:49:06'),
(2, 'samira aatar', 'samira@gmail.com', NULL, '$2y$10$s1xRDsdZHyPmd88wwR8ESOhq0caAYLq6m.GkT13yo/1Hv.zv8sAia', NULL, NULL, NULL, NULL, '2023-01-15 03:04:26', '2023-01-15 03:04:26'),
(3, 'Samira AATAR', 'samira.aatar@yahoo.fr', NULL, '$2y$10$pDt4aLwWaLBv0/Lp1zsDXOgh/KE9t0bQnRZDVQtU/jzYl1UB0O02q', NULL, NULL, NULL, NULL, '2023-01-15 22:12:44', '2023-01-15 22:12:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `prestations`
--
ALTER TABLE `prestations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prestations`
--
ALTER TABLE `prestations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
