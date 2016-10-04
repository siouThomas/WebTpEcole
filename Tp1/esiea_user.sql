SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE IF NOT EXISTS `esiea_user` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `old` int(11) NOT NULL DEFAULT '0',
  `section` int(11) NOT NULL DEFAULT '0',
  `other` text NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `jeux_video`
--

INSERT INTO `esiea_user` (`ID`, `name`, `firstname`, `city`, `old`, `section`, `other`) VALUES
(1, 'Gorand', 'Thomas', 'Paris', 23, 5, 'des info en plus blabla '),
(2, 'Gilles', 'Rivière', 'Paris', 29, 5, 'des info en plus blabla '),
(3, 'Antoine', 'Liebert', 'Paris', 43, 5, 'CentOS-7.2'),
(4, 'Duong', 'Elhy', 'Paris', 230, 5, 'des info en plus blabla '),
(5, 'George', 'Alain', 'Paris', 2, 5, 'autre')
;
