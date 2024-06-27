-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 juin 2022 à 11:28
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
-- Base de données : `cineclap`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `idFilm` int(11) NOT NULL,
  `titreVO` varchar(50) NOT NULL,
  `titreVF` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `realisateur` varchar(100) NOT NULL,
  `duree` int(11) NOT NULL,
  `affiche` varchar(50) NOT NULL,
  `lienVideoAlloCine` varchar(150) NOT NULL,
  `lienIMDB` varchar(150) DEFAULT NULL,
  `synopsisVO` text NOT NULL,
  `synopsisVF` text NOT NULL,
  `idGenre` int(11) NOT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idFilm`, `titreVO`, `titreVF`, `annee`, `realisateur`, `duree`, `affiche`, `lienVideoAlloCine`, `lienIMDB`, `synopsisVO`, `synopsisVF`, `idGenre`, `idPays`) VALUES
(1, 'Die Welle ', 'La Vague', 2008, 'Dennis Gansel', 108, 'la_vague.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=134390.html', NULL, '', '', 13, 1),
(2, 'Les 400 coups', 'Les 400 coups', 1959, 'François Truffaut', 99, 'Les_400_coups.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=62178.html', NULL, '', '', 34, 11),
(3, 'Volver', 'Volver', 2006, 'Pedro Almodóvar', 121, 'volver.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=59605.html', NULL, '', '', 13, 8),
(4, 'Goodbye Lenin!', 'Goodbye Lenin!', 2003, 'Wolfgang Becker', 121, 'Goodbye_Lenin.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=52715.html', NULL, '', '', 34, 1),
(5, 'Das Leben der Anderen ', 'La Vie des Autres', 2005, 'Florian Henckel', 137, 'La_vie_des_autres.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=111643.html', NULL, '', '', 35, 1),
(6, 'Ida ', 'Ida', 2013, 'Pawel Pawlikowski', 82, 'ida.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=223850.html', NULL, '', '', 35, 1),
(7, 'Josep', 'Josep', 2020, 'Aurel', 74, 'Josep.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=268348.html', NULL, '', '', 40, 11),
(8, 'Belfast', 'Belfast', 2021, 'Kenneth Branagh', 97, 'Belfast.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=290640.html', NULL, '', '', 35, 14),
(9, 'Per qualche dollaro in più ', 'Et pour quelques dollars de plus', 1965, 'Sergio Leone', 126, 'Et_pour_quelques_dollars_de_plus.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=929.html', NULL, '', '', 36, 15),
(10, 'The Guard', 'L\'Irlandais', 2011, 'John Michael McDonagh', 96, 'LIrlandais.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=174675.html', NULL, '', '', 37, 14),
(11, 'The Square', 'The Square', 2017, 'Ruben Östlund', 144, 'The_Square.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=248683.html', NULL, '', '', 34, 27),
(12, 'Nosferatu, eine Symphonie des Grauens', 'Nosferatu le vampire', 1922, 'Friedrich Wilhem Murnau', 94, 'Nosferatu.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=2342.html', NULL, '', '', 38, 1),
(13, 'Die Glasbläserin', 'La Souffleuse de Verre', 2016, 'Christiane Balthasar', 89, 'la_souffleuse_de_verre.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=251235.html', NULL, '', '', 13, 1),
(14, 'La Panthère des neiges', 'La Panthère des neiges', 2003, 'Marie Amiguet/Vincent Munier', 92, 'La_panthere_des_neiges.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=292598.html', NULL, '', '', 12, 11),
(15, 'Demain', 'Demain', 2015, 'Cyril Dion/Mélanie Laurent', 118, 'Demain.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=229903.html', NULL, '', '', 12, 1),
(16, 'Festen', 'Festen', 1998, 'Thomas Vnitenberg', 105, 'Festen.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=18644.html', NULL, '', '', 13, 7),
(17, 'Campeones ', 'Champions', 2018, 'Javier Fesser', 125, 'Champions.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=256186.html', NULL, '', '', 34, 8),
(18, 'Les Triplettes de Belleville ', 'Les Triplettes de Belleville', 2003, 'Sylvain Chomet', 78, 'Les_Triplettes_de_Belleville.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html', NULL, '', '', 2, 11),
(170, 'snk', 'snk', 1990, 'cde', 120, '', '', '', '', '', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`),
  ADD KEY `Film_Genre_FK` (`idGenre`),
  ADD KEY `Film_Pays0_FK` (`idPays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `idFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `Film_Genre_FK` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`),
  ADD CONSTRAINT `Film_Pays0_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
