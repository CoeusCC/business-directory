CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `biz_name` varchar(256) DEFAULT NULL,
  `addr1` varchar(256) DEFAULT NULL,
  `addr2` varchar(256) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(2) NOT NULL DEFAULT 'TX',
  `zip` varchar(12) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `phone1` varchar(24) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `premium` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;