
DROP DATABASE IF EXISTS sqlll;
CREATE database sqlll;
USE sqlll;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for is_this_flag
-- ----------------------------
DROP TABLE IF EXISTS `is_this_flag`;
CREATE TABLE `is_this_flag` (
  `flag` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of is_this_flag
-- ----------------------------
INSERT INTO `is_this_flag` VALUES ('flag{e4cf1b90-75d1-11ed-9b3b-44af28a75237}');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Tom', 'Tom@123');
INSERT INTO `users` VALUES ('2', 'Jerry', 'Jerry@123');
