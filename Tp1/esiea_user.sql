

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


INSERT INTO `esiea_user` (`ID`, `name`, `firstname`, `city`, `old`, `section`, `other`) VALUES
(1, 'GORAND', 'Thomas', 'Paris', 23, 5, 'des info'),
(2, 'LIEBERT', 'Gilles', 'Paris', 24, 6, 'des info encore'),
;
