DROP TABLE IF EXISTS `advertisements`;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'Lawson Moyer'),(2,'Regan Velasquez'),(3,'Zaniyah Wall'),(4,'Chaz Phelps'),(5,'Spencer Warren'),(6,'Cloe Leach'),(7,'Malakai Santiago'),(8,'Leon Brewer'),(9,'Essence Sampson'),(10,'Lorenzo Thornton');
UNLOCK TABLES;

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  CONSTRAINT `advertisements_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

LOCK TABLES `advertisements` WRITE;
INSERT INTO `advertisements` VALUES (1,'11 Methods Of Dog Domination',1),(2,'Seven Features Of Dog That Make Everyone Love It',2),(3,'20 Wonderful Dog. Number 16 is Absolutely Stunning',1),(4,'Why I Hate Dog',3),(5,'Seven Explanation On Why React.js Is Important',2),(6,'10 Things You Did Not Know About Cat',4),(7,'Reasons Why React.js Is Getting More Popular In The Past Decade',5),(8,'Ten Cat That Had Gone Way Too Far',6),(9,'You Will Never Believe These Bizarre Truth Of Cat',7),(10,'Does Cat Sometimes Make You Feel Stupid?',8),(11,'Now You Can Buy An App That is Really Made For Cat',9),(12,'Here Is What You Should Do For Your Dog',10),(13,'How To Buy Dog',9);
UNLOCK TABLES;
