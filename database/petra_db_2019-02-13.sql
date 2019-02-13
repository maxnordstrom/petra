# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Värd: 127.0.0.1 (MySQL 5.6.34)
# Databas: petra_db
# Genereringstid: 2019-02-13 00:11:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Tabelldump product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `art_no` text COLLATE utf8_unicode_ci,
  `art_name` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `cat` text COLLATE utf8_unicode_ci,
  `price_tax` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`id`, `art_no`, `art_name`, `description`, `cat`, `price_tax`)
VALUES
	(1,'39533028','Elcykel Allegro','En smart och tillförlitlig elcykel för dam från Batavus utmärkt både för långa och kortare turer.','Sport',18499),
	(2,'40266837','Lapierre Overvolt Urban 300','Praktisk och bekväm elcykel med upprätt körställning.','Sport',20990),
	(3,'p35372817','Chrome cast 2nd generationen','Visar film eller annan media från mobilen på TV:n','Hemelektronik',390),
	(4,'35552289','Apple TV 64GB 4th generation','Nu kommer App Store till din tv. Du kan förvänta dig massor av spännande spel.','Hemelektronik',1990),
	(5,'40151785','Big Foot truck 2wd','Det här är bilen som startade alltihop och skapade den idag enorma monster-truck trenden.','Leksaker',2795);

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
