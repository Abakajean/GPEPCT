-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 15 juin 2025 à 23:31
-- Version du serveur : 8.0.42-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mairieYopougon`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `citoyens`
--

CREATE TABLE `citoyens` (
  `id` bigint UNSIGNED NOT NULL,
  `nom_cit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnom_ct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_cit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `citoyens`
--

INSERT INTO `citoyens` (`id`, `nom_cit`, `pnom_ct`, `email`, `tel`, `Pays`, `ville_cit`, `type_a`, `created_at`, `updated_at`) VALUES
(1, 'Adyemi', 'Houzeifa', 'admin@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'naissance', '2025-06-15 22:37:14', '2025-06-15 22:37:14'),
(2, 'Adyemi', 'Houzeifa', 'admin@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'naissance', '2025-06-15 22:42:27', '2025-06-15 22:42:27'),
(3, 'Adyemi', 'Houzeifa', 'admin@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'naissance', '2025-06-15 22:43:03', '2025-06-15 22:43:03'),
(4, 'Adyemi', 'Houzeifa', 'admin@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'naissance', '2025-06-15 22:44:15', '2025-06-15 22:44:15'),
(5, 'Adyemi', 'Houzeifa', 'nom@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'mariage', '2025-06-15 23:07:44', '2025-06-15 23:07:44'),
(6, 'Adyemi', 'Houzeifa', 'nom@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'deces', '2025-06-15 23:12:16', '2025-06-15 23:12:16'),
(7, 'Adyemi', 'Houzeifa', 'nom@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'divorce', '2025-06-15 23:13:17', '2025-06-15 23:13:17'),
(8, 'Adyemi', 'Houzeifa', 'nom@gmail.com', '0566443931', 'cote d\'ivoiree', 'abidjan', 'mariage', '2025-06-15 23:14:10', '2025-06-15 23:14:10');

-- --------------------------------------------------------

--
-- Structure de la table `deces`
--

CREATE TABLE `deces` (
  `id` bigint UNSIGNED NOT NULL,
  `num_reg_dec` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_dec` date NOT NULL,
  `h_dec` time NOT NULL,
  `lieu_dec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_nais_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_def` enum('masculin','féminin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_der_conj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnom_der_conj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_p_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deces`
--

INSERT INTO `deces` (`id`, `num_reg_dec`, `nom_def`, `date_dec`, `h_dec`, `lieu_dec`, `lieu_nais_def`, `sexe_def`, `nom_der_conj`, `pnom_der_conj`, `nom_p_def`, `nom_m_def`, `dom_def`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Nom du défunt', '2025-06-03', '00:00:00', 'Lieu du décès', 'Yopougon', 'masculin', 'Nom du dernier conjoint', 'Prénom du dernier conjoint', 'Nom du père', 'Nom du mère', 'Yopougon', '2025-06-15 22:29:46', '2025-06-15 22:29:46');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `divorce`
--

CREATE TABLE `divorce` (
  `id` bigint UNSIGNED NOT NULL,
  `num_reg_div` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_exconj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_nais_exconj` date NOT NULL,
  `lieu_nais_exconj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_exconj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_exconjte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_nais_exconjte` date NOT NULL,
  `lieu_nais_exconjte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_exconjte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_jug` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `divorce`
--

INSERT INTO `divorce` (`id`, `num_reg_div`, `nom_exconj`, `date_nais_exconj`, `lieu_nais_exconj`, `dom_exconj`, `nom_exconjte`, `date_nais_exconjte`, `lieu_nais_exconjte`, `dom_exconjte`, `date_jug`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Nom complet', '2025-06-10', 'Yopougon', 'Yopougon', 'Nom complet', '2025-05-28', 'Yopougon', 'Yopougon', '2025-06-10', '2025-06-15 22:34:55', '2025-06-15 22:34:55');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mariage`
--

CREATE TABLE `mariage` (
  `id` bigint UNSIGNED NOT NULL,
  `num_reg_mar` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_ep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom_pere_ep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m_ep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_nais_ep` date NOT NULL,
  `lieu_nais_ep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_ep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_p_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_nais_eps` date NOT NULL,
  `lieu_nais_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_mar` date NOT NULL,
  `h_mar` time DEFAULT NULL,
  `type_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mariage`
--

INSERT INTO `mariage` (`id`, `num_reg_mar`, `nom_ep`, `Nom_pere_ep`, `nom_m_ep`, `date_nais_ep`, `lieu_nais_ep`, `dom_ep`, `nom_eps`, `nom_p_eps`, `nom_m_eps`, `date_nais_eps`, `lieu_nais_eps`, `dom_eps`, `date_mar`, `h_mar`, `type_reg`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Nom de l\'epoux', 'Nom et Prénom du père', 'Nom et Prénom du mère', '2020-06-10', 'YopougonYopougon', 'Yopougon', 'Nom de l\'épouse', 'Nom et Prénom du père', 'Nom et Prénom du mère', '2025-06-09', 'Yopougon', 'Yopougon', '2025-05-28', '00:00:00', 'communaute_de_bien', '2025-06-15 22:27:55', '2025-06-15 22:27:55');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_18_192714_create_demandes_table', 1),
(5, '2025_05_18_193117_create_acte_naissances_table', 1),
(6, '2025_05_18_193118_create_acte_deces_table', 1),
(7, '2025_05_18_193118_create_acte_mariages_table', 1),
(8, '2025_05_18_193119_create_acte_divorces_table', 1),
(9, '2025_05_18_193120_create_citoyens_table', 1),
(11, '2025_05_18_193121_create_paiements_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `naissance`
--

CREATE TABLE `naissance` (
  `id` bigint UNSIGNED NOT NULL,
  `num_reg_nais` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_enf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnom_enf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_enf` enum('masculin','féminin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_nais` date NOT NULL,
  `lieu_nais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_nais_enf` time NOT NULL,
  `nom_pnom_pere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_pnom_mere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `naissance`
--

INSERT INTO `naissance` (`id`, `num_reg_nais`, `nom_enf`, `pnom_enf`, `sexe_enf`, `date_nais`, `lieu_nais`, `h_nais_enf`, `nom_pnom_pere`, `nom_pnom_mere`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Adeyemi', 'Houzeifa', 'masculin', '2002-05-30', 'Yopougon', '00:00:00', 'Adeyemi', 'Adehoumi', '2025-06-15 22:25:05', '2025-06-15 22:25:05');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` bigint UNSIGNED NOT NULL,
  `mont` decimal(8,2) NOT NULL,
  `Moyen_paie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citoyen_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `mont`, `Moyen_paie`, `citoyen_id`, `created_at`, `updated_at`) VALUES
(1, 500.00, 'wave', 4, '2025-06-15 23:04:16', '2025-06-15 23:04:16'),
(2, 500.00, 'wave', 4, '2025-06-15 23:05:00', '2025-06-15 23:05:00'),
(3, 500.00, 'mtn_money', 5, '2025-06-15 23:08:02', '2025-06-15 23:08:02'),
(4, 500.00, 'mtn_money', 5, '2025-06-15 23:09:41', '2025-06-15 23:09:41'),
(5, 500.00, 'mtn_money', 5, '2025-06-15 23:10:12', '2025-06-15 23:10:12'),
(6, 500.00, 'orange_money', 6, '2025-06-15 23:12:29', '2025-06-15 23:12:29'),
(7, 500.00, 'moov_money', 7, '2025-06-15 23:13:32', '2025-06-15 23:13:32'),
(8, 500.00, 'mtn_money', 8, '2025-06-15 23:20:57', '2025-06-15 23:20:57'),
(9, 500.00, 'wave', 8, '2025-06-15 23:22:44', '2025-06-15 23:22:44'),
(10, 500.00, 'wave', 8, '2025-06-15 23:24:08', '2025-06-15 23:24:08'),
(11, 500.00, 'wave', 8, '2025-06-15 23:25:41', '2025-06-15 23:25:41');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('k1O8ClgtR6hvTiKgUoKrt8yBQ5kPCzXpDpnDMJEm', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU2xQaGdOT29tRWlCc0I2VXN6ZTNXRG1aVlM4Q2dTa2taNGhRRkhXNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjEyOiJhY3RlX2FfcGF5ZXIiO2E6NDp7czoxMDoiY2l0b3llbl9pZCI7aTo4O3M6NjoidHlwZV9hIjtzOjc6Im1hcmlhZ2UiO3M6MTU6Im51bWVyb19yZWdpc3RyZSI7czo1OiIwMDAwMCI7czo5OiJhY3RlX2RhdGEiO2E6MTk6e3M6MjoiaWQiO2k6MTtzOjExOiJudW1fcmVnX21hciI7czo1OiIwMDAwMCI7czo2OiJub21fZXAiO3M6MTQ6Ik5vbSBkZSBsJ2Vwb3V4IjtzOjExOiJOb21fcGVyZV9lcCI7czoyMzoiTm9tIGV0IFByw6lub20gZHUgcMOocmUiO3M6ODoibm9tX21fZXAiO3M6MjM6Ik5vbSBldCBQcsOpbm9tIGR1IG3DqHJlIjtzOjEyOiJkYXRlX25haXNfZXAiO3M6Mjc6IjIwMjAtMDYtMTBUMDA6MDA6MDAuMDAwMDAwWiI7czoxMjoibGlldV9uYWlzX2VwIjtzOjE2OiJZb3BvdWdvbllvcG91Z29uIjtzOjY6ImRvbV9lcCI7czo4OiJZb3BvdWdvbiI7czo3OiJub21fZXBzIjtzOjE2OiJOb20gZGUgbCfDqXBvdXNlIjtzOjk6Im5vbV9wX2VwcyI7czoyMzoiTm9tIGV0IFByw6lub20gZHUgcMOocmUiO3M6OToibm9tX21fZXBzIjtzOjIzOiJOb20gZXQgUHLDqW5vbSBkdSBtw6hyZSI7czoxMzoiZGF0ZV9uYWlzX2VwcyI7czoyNzoiMjAyNS0wNi0wOVQwMDowMDowMC4wMDAwMDBaIjtzOjEzOiJsaWV1X25haXNfZXBzIjtzOjg6IllvcG91Z29uIjtzOjc6ImRvbV9lcHMiO3M6ODoiWW9wb3Vnb24iO3M6ODoiZGF0ZV9tYXIiO3M6Mjc6IjIwMjUtMDUtMjhUMDA6MDA6MDAuMDAwMDAwWiI7czo1OiJoX21hciI7czo4OiIwMDowMDowMCI7czo4OiJ0eXBlX3JlZyI7czoxODoiY29tbXVuYXV0ZV9kZV9iaWVuIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjI3OiIyMDI1LTA2LTE1VDIyOjI3OjU1LjAwMDAwMFoiO3M6MTA6InVwZGF0ZWRfYXQiO3M6Mjc6IjIwMjUtMDYtMTVUMjI6Mjc6NTUuMDAwMDAwWiI7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1750030110);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'agent',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `telephone`, `sexe`, `adresse`, `statut`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adeyemi', 'Houzeifa', 'admin@gmail.com', '0505050505', 'Homme', 'Port Bouët', 'admin', NULL, '$2y$12$qNyuyScWBM6qxMw6MDQ2UuNNdzorsHwlqNiSFbT09t5IV/DEM4vzm', NULL, '2025-06-15 21:56:16', '2025-06-15 21:56:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `citoyens`
--
ALTER TABLE `citoyens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deces`
--
ALTER TABLE `deces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deces_num_reg_dec_unique` (`num_reg_dec`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divorce_num_reg_div_unique` (`num_reg_div`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mariage`
--
ALTER TABLE `mariage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mariage_num_reg_mar_unique` (`num_reg_mar`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `naissance`
--
ALTER TABLE `naissance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naissance_num_reg_nais_unique` (`num_reg_nais`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paiements_citoyen_id_foreign` (`citoyen_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT pour la table `citoyens`
--
ALTER TABLE `citoyens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `deces`
--
ALTER TABLE `deces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `divorce`
--
ALTER TABLE `divorce`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mariage`
--
ALTER TABLE `mariage`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `naissance`
--
ALTER TABLE `naissance`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_citoyen_id_foreign` FOREIGN KEY (`citoyen_id`) REFERENCES `citoyens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
