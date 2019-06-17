-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 juin 2019 à 13:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_ufweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `centres_interets`
--

DROP TABLE IF EXISTS `centres_interets`;
CREATE TABLE IF NOT EXISTS `centres_interets` (
  `id_activite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_activite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_activite`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `centres_interets`
--

INSERT INTO `centres_interets` (`id_activite`, `nom_activite`) VALUES
(1, 'Aller a des evenements de musique'),
(2, 'Ecouter de la musique'),
(3, 'Sortir avec des amis'),
(4, 'Jouer aux jeux-video'),
(5, 'L\'informatique'),
(6, 'Voyager');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id_competences` int(11) NOT NULL AUTO_INCREMENT,
  `nom_competence` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `niveau_competence` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_competences`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id_competences`, `nom_competence`, `niveau_competence`) VALUES
(1, 'HTML', '60'),
(2, 'CSS', '50'),
(3, 'Javascript', '20'),
(4, 'Python3', '40'),
(5, 'C', '40'),
(6, 'PHP', '10'),
(7, 'SQL', '25');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `id_ecole` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ecole` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville_ecole` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diplome_delivre_ecole` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duree_etude_ecole` int(11) NOT NULL,
  `annee_debut_form_ecole` date NOT NULL,
  `annee_fin_form_ecole` date NOT NULL,
  PRIMARY KEY (`id_ecole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id_ecole`, `nom_ecole`, `ville_ecole`, `diplome_delivre_ecole`, `duree_etude_ecole`, `annee_debut_form_ecole`, `annee_fin_form_ecole`) VALUES
(1, 'Lycee Sainte Famille Saintonge', 'Bordeaux', 'BAC STI2D SIN', 2, '2015-09-01', '2017-06-30'),
(2, 'EPITECH', 'Bordeaux', 'Titre d\'Expert Informatique', 5, '2017-09-25', '2018-05-01'),
(3, 'YNOV Informatique', 'Bordeaux', 'Titre d\'Expert Informatique', 5, '2018-09-25', '2023-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

DROP TABLE IF EXISTS `experience_pro`;
CREATE TABLE IF NOT EXISTS `experience_pro` (
  `id_exp_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise_exp_pro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville_exp_pro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_exp_pro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut_exp_pro` date NOT NULL,
  `date_fin_exp_pro` date NOT NULL,
  `tache_exp_pro` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_exp_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `experience_pro`
--

INSERT INTO `experience_pro` (`id_exp_pro`, `nom_entreprise_exp_pro`, `ville_exp_pro`, `type_exp_pro`, `date_debut_exp_pro`, `date_fin_exp_pro`, `tache_exp_pro`) VALUES
(1, 'Le Chai des Chartrons', 'Bordeaux', 'JOB', '2016-07-01', '2016-07-30', 'Merchandising, mise en place des strategies marketing pour mettre en avant les produits, reorganisation de la boutique, mise en rayon et inventaire, administration des ventes et logistique, emballage et etablissement de packing lists de produits envoyes a l\'International\r\n'),
(2, 'Proformats', 'Bordeaux', 'STAGE', '2013-11-26', '2013-12-10', 'Stage d\'apprentissage, prise en main du logiciel Adobe Photoshop, initiation a la conception de flyers, rapprochement factures et devis\r\n'),
(3, 'Uber Eats', 'Bordeaux', 'JOB', '2017-02-01', '2019-06-17', 'Livreur a velo');

-- --------------------------------------------------------

--
-- Structure de la table `identifiants`
--

DROP TABLE IF EXISTS `identifiants`;
CREATE TABLE IF NOT EXISTS `identifiants` (
  `id_identifiants` int(11) NOT NULL AUTO_INCREMENT,
  `username_identifiants` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_identifiants` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_identifiants`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `individu`
--

DROP TABLE IF EXISTS `individu`;
CREATE TABLE IF NOT EXISTS `individu` (
  `id_individu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ecole` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_individu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `individu`
--

INSERT INTO `individu` (`id_individu`, `nom`, `prenom`, `age`, `date_naissance`, `photo`, `ecole`) VALUES
(1, 'Dumont', 'Thomas', 21, '1998-06-15', 'images/thomas.png', 'Ynov en filiere informatique');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_messages` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_messages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `techno_utilise_projet` text COLLATE utf8_unicode_ci NOT NULL,
  `depot_git_projet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Objectif_projet` text COLLATE utf8_unicode_ci NOT NULL,
  `photo_projet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `techno_utilise_projet`, `depot_git_projet`, `Objectif_projet`, `photo_projet`) VALUES
(1, 'Connected Flowers', 'Langage : Python3, HTML, CSS, PHP, SQL, Javascript; Materiel : Raspberry Pi Zero W, convertisseur analogique vers numerique PCF8591T', 'https://github.com/maximelarrieu/b1a_connected_plant', 'Creer un objet connecte qui permet de capter des donnees grace a des capteurs installe sur une plante et de les afficher sur un site pour entretenir la plante dans les meilleurs conditions possible.', 'images\\planteco_screenshoot.png'),
(2, 'Markdown to HTML', 'Langage : Python3', 'https://github.com/akhadimer/Project_MDtoHTML', 'Creer un programme dans le langage de programmation \"Python\" qui puisse transformer des fichiers dans le type de format \".md\" en des fichiers dans le format HTML. ', 'images\\mdtohtml_screenshot.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
