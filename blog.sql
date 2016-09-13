/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-09-13 15:04:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`),
  CONSTRAINT `categorie` FOREIGN KEY (`categorie`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'test2', 'lorem ipsum dolor sit amet.', null, '2016-09-12 11:33:55', null);
INSERT INTO `articles` VALUES ('2', 'test', 'lorem ipsum dolor si amet', null, '2016-09-12 10:42:04', null);
INSERT INTO `articles` VALUES ('3', 'test', 'test', 'null', '2016-09-12 12:17:00', null);
INSERT INTO `articles` VALUES ('4', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:32:00', '3');
INSERT INTO `articles` VALUES ('5', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:15:00', '3');
INSERT INTO `articles` VALUES ('6', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:30:00', '3');
INSERT INTO `articles` VALUES ('7', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:32:00', '3');
INSERT INTO `articles` VALUES ('8', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:33:00', '3');
INSERT INTO `articles` VALUES ('9', 'test', 'blabla bla bla \r\nbla bla', 'null', '2016-09-12 05:38:00', '3');
INSERT INTO `articles` VALUES ('10', '', '', 'null', '2016-09-12 05:31:00', '3');
INSERT INTO `articles` VALUES ('11', '', '', 'null', '2016-09-12 05:18:00', '6');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('3', 'cat3');
INSERT INTO `categories` VALUES ('6', 'test');

-- ----------------------------
-- Table structure for `commentaires`
-- ----------------------------
DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE `commentaires` (
  `idArticle` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idArticle`,`idUtilisateur`),
  KEY `idUtilisateur` (`idUtilisateur`),
  CONSTRAINT `idArticle` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`id`),
  CONSTRAINT `idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of commentaires
-- ----------------------------

-- ----------------------------
-- Table structure for `utilisateurs`
-- ----------------------------
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of utilisateurs
-- ----------------------------
