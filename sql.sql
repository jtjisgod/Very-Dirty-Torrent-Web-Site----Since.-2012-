SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE IF NOT EXISTS `account` (
  `no` int(255) NOT NULL auto_increment,
  `id` varchar(255) NOT NULL,
  `pw` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` int(10) NOT NULL,
  `phone` int(14) NOT NULL,
  `email` text NOT NULL,
  `nateon` varchar(255) NOT NULL,
  `partnerid` varchar(255) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `jumin` varchar(16) NOT NULL,
  `level` int(255) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=euckr AUTO_INCREMENT=0 ;
CREATE TABLE IF NOT EXISTS `tocu_list` (
  `no` int(255) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `download` int(255) NOT NULL,
  `categori` int(30) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `date` int(8) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=euckr AUTO_INCREMENT=0 ;
CREATE TABLE IF NOT EXISTS `tocu_today` (
  `no` int(255) NOT NULL auto_increment,
  `time` int(12) NOT NULL,
  `date` int(12) NOT NULL,
  `ip` varchar(32) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=euckr AUTO_INCREMENT=0 ;


