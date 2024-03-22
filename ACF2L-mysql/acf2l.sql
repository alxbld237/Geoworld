--
-- Base de données :  `acf2l`
--
CREATE DATABASE IF NOT EXISTS `acf2l` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `acf2l`;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int(4) NOT NULL AUTO_INCREMENT,
  `nomPersonne` varchar(20) NOT NULL,
  `melPersonne` varchar(70) NOT NULL,
  `dateNaissance` date NOT NULL,
  `objet` varchar(20) NOT NULL,
   PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (nomPersonne,melPersonne,dateNaissance,objet) VALUES
('Delcourt', 'cdeltour@hotmail.com', '2020-09-11', 'prix'),
('Fime', 'ffime@orange.fr', '2020-05-22', 'securite'),
('Ertau', 'frank.ertau@laposte.net', '2023-05-23', 'horaires'),
('Maneur', 'manu@gmail.com', '2023-06-02', 'horaires'),
('Berezovski', 'zber@gmail.com', '1986-09-08', 'prix'),
('Finley', 'pascfinley@yahoo.fr', '1995-06-11', 'assurances'),
('Vofur', 'hvofur@free.fr', '2001-06-26', 'assurances'),
('Derzou', 'ouzala@aol.com', '2002-10-24', 'autres'),
('Serty', 'serty@htotmail.com', '2003-10-27', 'prix'),
('Vofur', 'victor.vofur@laposte.net', '1970-10-27', 'securite'),
('Calende', 'calende@orange.fr', '1975-06-21', 'autres'),
('Jemba', 'jaimeba@yahoo.fr', '1999-10-30', 'horaires'),
('Morin', 'morinsev@hotmail.com', '1987-10-22', 'horaires'),
('Benrech', 'recb@gmail.com', '1988-06-26', 'securite'),
('Nguyen', 'nguyen774@wanadoo.fr', '1967-11-06', 'prix'),
('Louali', 'kloua@caramail.fr', '2000-11-28', 'prix'),
('Paolo', 'jp.paolo@caramail.fr', '1976-06-02', 'prix'),
('Map', 'leplusbeaudu77@gmail.com', '2001-06-02', 'autres'),
('Kounde', 'koundell@orange.fr', '2003-11-16', 'prix'),
('Derissam', 'jjdd@gmail.com', '2000-12-01', 'securite');
--
-- Index pour les tables déchargées
--

--