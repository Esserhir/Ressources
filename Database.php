<?php
define('Host','localhost');
define('DB_NAME','siteweb');
define('USER','root');
define('PASS','');
try{
	$db=new PDO("mysql:host"= , Host."; dbname=". DB_NAME,  USER,PASS);
	$db->setAttribute(ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
	echo="connect>ok!";
}catch(PDOExceptionnel $e){
	echo$e; 
}


- phpMyAdmin SQL server
-- 


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `management-ressources`
--

-- --------------------------------------------------------

--
-- Structure de la table `Taches`
--

CREATE TABLE `Taches` (
  `idTaches`int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Taches`
--

INSERT INTO `Taches` (`idTaches`, `titre`, `description`) VALUES
(8, 'Présentation de projet IOT', '<p>une r&eacute;union a &eacute;t&eacute; programmer pour discuter sur le prochaine projet de l\'entreprise</p>');

-- --------------------------------------------------------

--
-- Structure de la table `Add Employe`
--

CREATE TABLE `Add employe` (
  `idaddemploye` int(11) NOT NULL,
  `prenom` varchar(39) NOT NULL,
  `nom` varchar(39) NOT NULL,
  `dateNaissance` date NOT NULL,
  `genre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telephone` int(40) NOT NULL,
  `poste` varchar(70) NOT NULL,
  `niveau` varchar(40) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `lettre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Add employe`
--

INSERT INTO `Add employe` (`id Employe`, `prenom`, `nom`, `dateNaissance`, `genre`, `email`, `telephone`, `poste`, `niveau`, `cv`, `lettre`) VALUES
(21, 'hamza', 'dbani', '2000-03-13', 'Homme', 'hamzadbani3@gmail.com', 667268568, 'mobile developer', 'bac+5', 'lab2(DT).pdf', 'projet DNS (3).pdf'),
(22, 'hamza', 'dbani', '1999-03-13', 'Homme', 'hamzadbani1@gmail.com', 67865467, 'DEVELOPPEUR', 'bac+5', 'cvhamza.pdf', 'lettrehamza.pdf'),
(23, 'hamza', 'dbani', '1999-03-13', 'Homme', 'hamza.dbani@etu.uae.ac.ma', 657268627, 'developpeur', 'bac+5', 'cvhamza.pdf', 'lettrehamza.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `conges`
--

CREATE TABLE `conges` (
  `idconge` int(11) NOT NULL,
  `datecreation` date NOT NULL,
  `periode` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `typeconge` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `idaddemp` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`idconge`, `datecreation`, `periode`, `datedebut`, `datefin`, `typeconge`, `nom`, `idemp`) VALUES
(19, '2021-07-13', 7, '2021-07-18', '2021-07-25', 'congé de formation individuelle', 'hamza dbani', 52),
(20, '2021-07-24', 5, '2021-07-25', '2021-07-30', 'congé de formation individuelle', 'hamza dbani', 52);

-- --------------------------------------------------------

--
-- Structure de la table `conges demandes`
--

CREATE TABLE `conges demandes` (
  `idconge` int(11) UNSIGNED NOT NULL,
  `datecreation` date NOT NULL,
  `periode` int(50) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `typeconge` varchar(100) NOT NULL,
  `nom` varchar(39) NOT NULL,
  `idaddemp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conges demandes`
--

INSERT INTO `conges demandes` (`idconge`, `datecreation`, `periode`, `datedebut`, `datefin`, `typeconge`, `nom`, `idemp`) VALUES
(38, '2021-08-25', 6, '2021-09-21', '2021-09-27', 'congé de formation individuelle', 'hamza dbani', 52);

-- --------------------------------------------------------

--
-- Structure de la table `intern`
--

CREATE TABLE `intern` (
  `idintern` int(11) UNSIGNED NOT NULL,
  `email` varchar(39) NOT NULL,
  `dateNaissance` date NOT NULL,
  `nom` varchar(39) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `telephone` int(39) NOT NULL,
  `motdepasse` varchar(39) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT 0,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `intern`
--

INSERT INTO `intern` (`idintern``, `email`, `dateNaissance`, `nom`, `departement`, `poste`, `telephone`, `motdepasse`, `etat`) VALUES
(52, 'hamza.dbani@etu.uae.ac.ma', '1999-03-12', 'hamza dbani', 'informatique', 'administrateur réseaux et système', 657269628, '12345', 1),
(69, 'hamza.dbani@gmail.com', '2009-03-12', 'hamza', 'IT', 'dev', 667676795, '123', 1, 'employe.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `employesarchives`
--

CREATE TABLE `employesarchives` (
  `idaddemp` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateNaissance` date NOT NULL,
  `nom` varchar(40) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `telephone` int(40) NOT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT 0,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes archives`
--

INSERT INTO `employesarchives` (`idemp`, `email`, `dateNaissance`, `nom`, `departement`, `poste`, `telephone`, `motdepasse`, `etat`, `photo`) VALUES
(65, 'hamzadbani1@gmail.com', '2000-09-12', 'hamza dbani', 'IT', 'responsable', 654687321, '123', 0, 'Sans titre.png');

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `idreunion` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `datereunion` date NOT NULL,
  `heurereunion` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reunion`
--

INSERT INTO `reunion` (`idreunion`, `titre`, `type`, `datereunion`, `heurereunion`) VALUES
(82, 'présentation de projet IOT', 'réunion interne', '2021-07-30', '16:30:00.000000'),
(83, 'reunionRH', 'réunion interne', '2022-04-13', '14:50:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `Contacts`
--

CREATE TABLE `contacts` (
  
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` ( `prenom`, `nom`, `email`, `telephone`, `message` ) VALUES
( 'hamza', 'dbani', 'hamzadbani@gmail.com', '654687321', 'MODIFY my poste');

Structure de la table `rm`
--

CREATE TABLE `RM` (
  `idrm` int(11) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `poste` varchar(70) NOT NULL,
  `departement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `RM`
--

INSERT INTO `RM` (`idrm`, `prenom`, `nom`, `email`, `motdepasse`, `photo`, `poste`, `departement`) VALUES
(2, 'hamza', 'dbani', 'hamzadbani@gmail.com', '1234', 'hamza.jpg', 'RH', 'resources humaines');
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Taches`
--
ALTER TABLE `Taches`
  ADD PRIMARY KEY (`idtaches`);

--
-- Index pour la table `Add Employe`
--
ALTER TABLE `Add Employe`
  ADD PRIMARY KEY (`ideaddemploye`);

--
-- Index pour la table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`idconge`),
  ADD KEY `conges_ibfk_1` (`idaddemp`);

--
-- Index pour la table `conges demandes`
--
ALTER TABLE `congesdemandes`
  ADD PRIMARY KEY (`idconge`),
  ADD KEY `idemp` (`idaddemp`);

--
-- Index pour la table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id=intern`);

--
-- Index pour la table `employesarchiver`
--
ALTER TABLE `employesarchiver`
  ADD PRIMARY KEY (`idaddemp`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`idreunion`);

--
-- Index pour la table `rm`
--
ALTER TABLE `RM`
  ADD PRIMARY KEY (`idrm`);
  
  Index pour la table `contacts`
--
ALTER TABLE `contacts`

  ADD PRIMARY KEY (`Prenom,Nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Taches`
--
ALTER TABLE `Taches`
  MODIFY `idannonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Add Employe`
--
ALTER TABLE `Add Employe`
  MODIFY `idaddemploye`` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `conges`
--
ALTER TABLE `conges`
  MODIFY `idconge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `conges demandes`
--
ALTER TABLE `congesdemandes`
  MODIFY `idconge` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `intern`
--
ALTER TABLE `intern`
  MODIFY `idintern` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `employesarchiver`
--
ALTER TABLE `employesarchiver`
  MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `reunion`
--
ALTER TABLE `reunion`
  MODIFY `idreunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `rm`
--
ALTER TABLE `rm`
  MODIFY `idrm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
  AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Prenom,Nom` varchar(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `conges_ibfk_1` FOREIGN KEY (`idaddemp`) REFERENCES `Add employes` (`idaddemp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `congesdemandes`
--
ALTER TABLE `congesdemandes`
  ADD CONSTRAINT `congesdemandes_ibfk_1` FOREIGN KEY (`idaddemp`) REFERENCES `Add employes` (`idaddemp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 ?>
