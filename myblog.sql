/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : myblog

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-07-30 16:53:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zimomo_article`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_article`;
CREATE TABLE `zimomo_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '文章标题',
  `article` varchar(3000) NOT NULL DEFAULT '' COMMENT '内容',
  `create_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `author` varchar(100) NOT NULL DEFAULT '' COMMENT '作者',
  `type` varchar(100) NOT NULL DEFAULT '' COMMENT '分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_article
-- ----------------------------
INSERT INTO `zimomo_article` VALUES ('1', '沫缘', '申达股份授课计划公司的快捷方式深刻理解方式来看', '1231231211', '丶子沫沫', '情感');

-- ----------------------------
-- Table structure for `zimomo_me`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_me`;
CREATE TABLE `zimomo_me` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '姓名',
  `intro` varchar(200) NOT NULL DEFAULT '' COMMENT '简介',
  `birthday` bigint(20) NOT NULL DEFAULT '0' COMMENT '生日',
  `address` varchar(32) NOT NULL DEFAULT '' COMMENT '住址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_me
-- ----------------------------
INSERT INTO `zimomo_me` VALUES ('1', '丶子沫沫', '时光荏苒，再回首，我之所坚持，因我喜欢。', '724464000', '山东 - 烟台');

-- ----------------------------
-- Table structure for `zimomo_message`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_message`;
CREATE TABLE `zimomo_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `message` varchar(200) NOT NULL DEFAULT '' COMMENT '留言',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_message
-- ----------------------------
INSERT INTO `zimomo_message` VALUES ('1', '我确定我再也不会爱你', '123123862487');

-- ----------------------------
-- Table structure for `zimomo_notice`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_notice`;
CREATE TABLE `zimomo_notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `notice` varchar(1000) NOT NULL DEFAULT '' COMMENT '公告',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_notice
-- ----------------------------
INSERT INTO `zimomo_notice` VALUES ('1', '漠漠青烟轻轻舞');
INSERT INTO `zimomo_notice` VALUES ('2', '瀚海天涯看紫竹');

-- ----------------------------
-- Table structure for `zimomo_share`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_share`;
CREATE TABLE `zimomo_share` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '分享题目',
  `link` varchar(1000) NOT NULL DEFAULT '' COMMENT '分享；链接',
  `create_time` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_share
-- ----------------------------
INSERT INTO `zimomo_share` VALUES ('1', '丶子沫沫', 'http://www.zimomo.cn', '2131231231');

-- ----------------------------
-- Table structure for `zimomo_thing`
-- ----------------------------
DROP TABLE IF EXISTS `zimomo_thing`;
CREATE TABLE `zimomo_thing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `thing` varchar(200) NOT NULL DEFAULT '' COMMENT '大事记',
  `create_time` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zimomo_thing
-- ----------------------------
INSERT INTO `zimomo_thing` VALUES ('1', '我在也没有对你的咪咪', '123123123123');
