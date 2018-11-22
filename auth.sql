/*
 Navicat Premium Data Transfer

 Source Server         : auth。8023
 Source Server Type    : MySQL
 Source Server Version : 50554
 Source Host           : auth.8023xl.top:3306
 Source Schema         : auth

 Target Server Type    : MySQL
 Target Server Version : 50554
 File Encoding         : 65001

 Date: 22/11/2018 15:30:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auth_news
-- ----------------------------
DROP TABLE IF EXISTS `auth_news`;
CREATE TABLE `auth_news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键自增长',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '名称',
  `auther` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '作者',
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图片',
  `pv` int(11) NOT NULL DEFAULT 0 COMMENT '点击量',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `create_time` datetime NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of auth_news
-- ----------------------------
INSERT INTO `auth_news` VALUES (1, 'ceshi ', 'zxl', '', 1, 'dddd', '2018-11-22 13:50:54', '2018-11-22 13:50:58');
INSERT INTO `auth_news` VALUES (2, 'll', 'zx', '', 1, 'dddfffffff', '2018-11-22 13:51:37', '2018-11-22 13:51:39');

-- ----------------------------
-- Table structure for auth_shorturl
-- ----------------------------
DROP TABLE IF EXISTS `auth_shorturl`;
CREATE TABLE `auth_shorturl`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shorturl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '短地址',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '原地址',
  `create_time` datetime NULL DEFAULT NULL,
  `update_time` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of auth_shorturl
-- ----------------------------
INSERT INTO `auth_shorturl` VALUES (1, 'Y6rzF2', 'http://auth.8023xl.top/admin/news/index/id/1', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
