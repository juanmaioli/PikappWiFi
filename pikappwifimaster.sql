/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : pikappwifimaster

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 26/02/2019 14:20:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pawf_data
-- ----------------------------
DROP TABLE IF EXISTS `pawf_data`;
CREATE TABLE `pawf_data`  (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_serial` int(11) NOT NULL DEFAULT 0,
  `data_date` datetime(0) NOT NULL,
  `data_sensor1` float NOT NULL DEFAULT 0,
  `data_sensor2` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`data_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_group
-- ----------------------------
DROP TABLE IF EXISTS `pawf_group`;
CREATE TABLE `pawf_group`  (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `group_owner` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`group_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_sensor
-- ----------------------------
DROP TABLE IF EXISTS `pawf_sensor`;
CREATE TABLE `pawf_sensor`  (
  `sensor_id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_usr` int(11) NOT NULL,
  `sensor_serial` varchar(18) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sensor_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `sensor_type` int(11) NULL DEFAULT NULL,
  `sensor_group` int(11) NULL DEFAULT NULL,
  `sensor_cant` int(11) NULL DEFAULT NULL,
  `sensor_unity_1` int(11) NULL DEFAULT NULL,
  `sensor_unity_2` int(11) NULL DEFAULT NULL,
  `sensor_u1_min` float NOT NULL DEFAULT 0,
  `sensor_ip` varchar(17) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT '0',
  PRIMARY KEY (`sensor_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_subsensor
-- ----------------------------
DROP TABLE IF EXISTS `pawf_subsensor`;
CREATE TABLE `pawf_subsensor`  (
  `subsensor_id` int(11) NOT NULL AUTO_INCREMENT,
  `subsensor_father` int(11) NULL DEFAULT NULL,
  `subsensor_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `subsensor_unity` int(11) NULL DEFAULT NULL,
  `subsensor_order` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`subsensor_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_type
-- ----------------------------
DROP TABLE IF EXISTS `pawf_type`;
CREATE TABLE `pawf_type`  (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `type_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_unity
-- ----------------------------
DROP TABLE IF EXISTS `pawf_unity`;
CREATE TABLE `pawf_unity`  (
  `unity_id` int(11) NOT NULL AUTO_INCREMENT,
  `unity_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `unity_symbol` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `unity_rango` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'min: -50,max: 50',
  PRIMARY KEY (`unity_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_usr
-- ----------------------------
DROP TABLE IF EXISTS `pawf_usr`;
CREATE TABLE `pawf_usr`  (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `usr_lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `usr_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `usr_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `usr_pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `usr_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`usr_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_weather_1
-- ----------------------------
DROP TABLE IF EXISTS `pawf_weather_1`;
CREATE TABLE `pawf_weather_1`  (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_report` datetime(0) NULL DEFAULT NULL,
  `w_date` datetime(0) NULL DEFAULT NULL,
  `w_temp` float(6, 2) NULL DEFAULT 0.00,
  `w_temp_st` float(6, 2) NULL DEFAULT 0.00,
  `w_humedad` float(6, 2) NULL DEFAULT 0.00,
  `w_wind` float(6, 2) NULL DEFAULT 0.00,
  `w_dir` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_rafagas` float(6, 2) NULL DEFAULT 0.00,
  `w_pressure` float(10, 2) NULL DEFAULT NULL,
  `w_desc` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_icon` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_visibility` int(255) NULL DEFAULT NULL,
  `w_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_cloud` int(255) NULL DEFAULT 0,
  `w_prpInt` float(6, 2) NULL DEFAULT 0.00,
  `w_prpprop` double(6, 2) NULL DEFAULT 0.00,
  `w_puntorocio` float(6, 2) NULL DEFAULT 0.00,
  `w_uvindex` int(11) NULL DEFAULT 0,
  `w_ozono` float(6, 2) NULL DEFAULT 0.00,
  PRIMARY KEY (`w_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_weather_2
-- ----------------------------
DROP TABLE IF EXISTS `pawf_weather_2`;
CREATE TABLE `pawf_weather_2`  (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_report` datetime(0) NULL DEFAULT NULL,
  `w_date` datetime(0) NULL DEFAULT NULL,
  `w_temp` float(6, 2) NULL DEFAULT 0.00,
  `w_temp_st` float(6, 2) NULL DEFAULT 0.00,
  `w_humedad` float(6, 2) NULL DEFAULT 0.00,
  `w_wind` float(6, 2) NULL DEFAULT 0.00,
  `w_dir` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_rafagas` float(6, 2) NULL DEFAULT 0.00,
  `w_pressure` float(10, 2) NULL DEFAULT NULL,
  `w_desc` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_icon` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_visibility` int(255) NULL DEFAULT NULL,
  `w_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_cloud` int(255) NULL DEFAULT 0,
  `w_prpInt` float(6, 2) NULL DEFAULT 0.00,
  `w_prpprop` double(6, 2) NULL DEFAULT 0.00,
  `w_puntorocio` float(6, 2) NULL DEFAULT 0.00,
  `w_uvindex` int(11) NULL DEFAULT 0,
  `w_ozono` float(6, 2) NULL DEFAULT 0.00,
  PRIMARY KEY (`w_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pawf_weather_3
-- ----------------------------
DROP TABLE IF EXISTS `pawf_weather_3`;
CREATE TABLE `pawf_weather_3`  (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_report` datetime(0) NULL DEFAULT NULL,
  `w_date` datetime(0) NULL DEFAULT NULL,
  `w_temp` float(6, 2) NULL DEFAULT 0.00,
  `w_temp_st` float(6, 2) NULL DEFAULT 0.00,
  `w_humedad` float(6, 2) NULL DEFAULT 0.00,
  `w_wind` float(6, 2) NULL DEFAULT 0.00,
  `w_dir` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_rafagas` float(6, 2) NULL DEFAULT 0.00,
  `w_pressure` float(10, 2) NULL DEFAULT NULL,
  `w_desc` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_icon` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_visibility` int(255) NULL DEFAULT NULL,
  `w_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `w_cloud` int(255) NULL DEFAULT 0,
  `w_prpInt` float(6, 2) NULL DEFAULT 0.00,
  `w_prpprop` double(6, 2) NULL DEFAULT 0.00,
  `w_puntorocio` float(6, 2) NULL DEFAULT 0.00,
  `w_uvindex` int(11) NULL DEFAULT 0,
  `w_ozono` float(6, 2) NULL DEFAULT 0.00,
  PRIMARY KEY (`w_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
