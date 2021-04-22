-- Adminer 4.8.0 MySQL 5.5.5-10.3.27-MariaDB-0+deb10u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `candidatures`;
CREATE TABLE `candidatures` (
  `id_candid` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `discord` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `presentation` longtext NOT NULL,
  `connaissance` longtext NOT NULL,
  `cestkoiRS` longtext NOT NULL,
  `experience` longtext NOT NULL,
  `pourquoiNous` longtext NOT NULL,
  PRIMARY KEY (`id_candid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2021-04-22 14:14:24
