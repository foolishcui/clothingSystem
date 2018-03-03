# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.26)
# Database: MenWear
# Generation Time: 2018-03-03 07:24:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table casual_pants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `casual_pants`;

CREATE TABLE `casual_pants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `pant_length` text,
  `model` text,
  `fabric` text,
  `color` text,
  `pattern` text,
  `thickness` text,
  `style` text,
  `link` text,
  `waist_type` int(11) DEFAULT NULL,
  `design` int(11) DEFAULT NULL,
  `pant_bottom` int(11) DEFAULT NULL,
  `elastic_force` int(11) DEFAULT NULL,
  `craft` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `casual_pants` WRITE;
/*!40000 ALTER TABLE `casual_pants` DISABLE KEYS */;

INSERT INTO `casual_pants` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `pant_length`, `model`, `fabric`, `color`, `pattern`, `thickness`, `style`, `link`, `waist_type`, `design`, `pant_bottom`, `elastic_force`, `craft`)
VALUES
	(1,'../assets/casual_pants/1/img1.png','../assets/casual_pants/1/img2.png','../assets/casual_pants/1/img3.png','../assets/casual_pants/1/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(2,'../assets/casual_pants/2/img1.png','../assets/casual_pants/2/img2.png','../assets/casual_pants/2/img3.png','../assets/casual_pants/2/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(3,'../assets/casual_pants/3/img1.png','../assets/casual_pants/3/img2.png','../assets/casual_pants/3/img3.png','../assets/casual_pants/3/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(4,'../assets/casual_pants/4/img1.png','../assets/casual_pants/4/img2.png','../assets/casual_pants/4/img3.png','../assets/casual_pants/4/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(5,'../assets/casual_pants/5/img1.png','../assets/casual_pants/5/img2.png','../assets/casual_pants/5/img3.png','../assets/casual_pants/5/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(6,'../assets/casual_pants/6/img1.png','../assets/casual_pants/6/img2.png','../assets/casual_pants/6/img3.png','../assets/casual_pants/6/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(7,'../assets/casual_pants/7/img1.png','../assets/casual_pants/7/img2.png','../assets/casual_pants/7/img3.png','../assets/casual_pants/7/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(8,'../assets/casual_pants/8/img1.png','../assets/casual_pants/8/img2.png','../assets/casual_pants/8/img3.png','../assets/casual_pants/8/img4.png',NULL,NULL,'长裤','宽松','棉100%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `casual_pants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jacket_jinlilai
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jacket_jinlilai`;

CREATE TABLE `jacket_jinlilai` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `sleeve_length` text,
  `collar_type` text,
  `design` text,
  `sleeve_style` text,
  `model` text,
  `lower_hem` text,
  `pocket_style` text,
  `clothes_placket` text,
  `clothes_length` text,
  `craft` text,
  `pattern` text,
  `fabric` text,
  `color` text,
  `thickness` text,
  `style` text,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jacket_jinlilai` WRITE;
/*!40000 ALTER TABLE `jacket_jinlilai` DISABLE KEYS */;

INSERT INTO `jacket_jinlilai` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sleeve_length`, `collar_type`, `design`, `sleeve_style`, `model`, `lower_hem`, `pocket_style`, `clothes_placket`, `clothes_length`, `craft`, `pattern`, `fabric`, `color`, `thickness`, `style`, `link`)
VALUES
	(1,'../assets/jacket_jinlilai/1/img1.png','../assets/jacket_jinlilai/1/img2.png','../assets/jacket_jinlilai/1/img3.png','../assets/jacket_jinlilai/1/img4.png','../assets/jacket_jinlilai/1/img5.png','../assets/jacket_jinlilai/1/img6.png','长袖','翻领','暗纹提花',NULL,'标准',NULL,NULL,'拉链门襟','常规','防风抗皱/挡风保暖','暗纹提花','聚酯纤维100%','卡其/宝蓝/藏青/黑色','常规','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.68.67250fb1Wn1EHb&id=556480128708&rn=cdc235074269f5e5f995487f9a42b10a&abbucket=17&sku_properties=1627207:802096749'),
	(2,'../assets/jacket_jinlilai/2/img1.png','../assets/jacket_jinlilai/2/img2.png','../assets/jacket_jinlilai/2/img3.png','../assets/jacket_jinlilai/2/img4.png','../assets/jacket_jinlilai/2/img5.png','../assets/jacket_jinlilai/2/img6.png','长袖','翻领','挺括经典','','标准','','','纽扣门襟','常规','防风抗皱/挺阔有型','','聚酯纤维100%','卡其/藏青/黑色','常规','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.72.67250fb1Wn1EHb&id=557161173574&rn=cdc235074269f5e5f995487f9a42b10a&abbucket=17&sku_properties=1627207:462144695'),
	(3,'../assets/jacket_jinlilai/3/img1.png','../assets/jacket_jinlilai/3/img2.png','../assets/jacket_jinlilai/3/img3.png','../assets/jacket_jinlilai/3/img4.png','../assets/jacket_jinlilai/3/img5.png','../assets/jacket_jinlilai/3/img6.png','长袖','翻领','抗皱简约','','标准','','','拉链门襟','常规','舒适抗皱/挺阔有型','暗纹提花','聚酯纤维51.9% 羊毛48.1%','藏青','常规','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.76.32b022ad4YGCyY&id=556974663050&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(4,'../assets/jacket_jinlilai/4/img1.png','../assets/jacket_jinlilai/4/img2.png','../assets/jacket_jinlilai/4/img3.png','../assets/jacket_jinlilai/4/img4.png','../assets/jacket_jinlilai/4/img5.png','../assets/jacket_jinlilai/4/img6.png','长袖','立领','保暖夹棉','','标准','','','拉链门襟','常规','夹棉内里/舒适保暖','暗纹提花','聚酯纤维100%','藏青','厚','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.80.32b022ad4YGCyY&id=556611230890&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17&sku_properties=1627207:485058035'),
	(5,'../assets/jacket_jinlilai/5/img1.png','../assets/jacket_jinlilai/5/img2.png','../assets/jacket_jinlilai/5/img3.png','../assets/jacket_jinlilai/5/img4.png','../assets/jacket_jinlilai/5/img5.png','../assets/jacket_jinlilai/5/img6.png','长袖','立领','保暖夹棉','','标准','','','拉链门襟','常规','保暖夹棉/防风抗皱','','聚酯纤维100%','蓝灰','厚','休闲','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.84.32b022ad4YGCyY&id=556631094082&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(6,'../assets/jacket_jinlilai/6/img1.png','../assets/jacket_jinlilai/6/img2.png','../assets/jacket_jinlilai/6/img3.png','../assets/jacket_jinlilai/6/img4.png','../assets/jacket_jinlilai/6/img5.png','../assets/jacket_jinlilai/6/img6.png','长袖','翻领','挺括简约','','标准','','','拉链门襟','常规','光泽/挺括','','聚酯纤维100%','藏青','常规','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.88.32b022ad4YGCyY&id=534330520667&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(7,'../assets/jacket_jinlilai/7/img1.png','../assets/jacket_jinlilai/7/img2.png','../assets/jacket_jinlilai/7/img3.png','../assets/jacket_jinlilai/7/img4.png','../assets/jacket_jinlilai/7/img5.png','../assets/jacket_jinlilai/7/img6.png','长袖','翻领','抗皱夹棉','','标准','','','纽扣门襟','常规','舒适保暖/防风抗皱','','聚酯纤维100%','宝蓝','厚','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.92.32b022ad4YGCyY&id=557935758402&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(8,'../assets/jacket_jinlilai/8/img1.png','../assets/jacket_jinlilai/8/img2.png','../assets/jacket_jinlilai/8/img3.png','../assets/jacket_jinlilai/8/img4.png','../assets/jacket_jinlilai/8/img5.png','../assets/jacket_jinlilai/8/img6.png','长袖','棒球领','针织棒球领夹克',NULL,'标准',NULL,NULL,'拉链门襟','常规','舒适抗皱/简约时尚',NULL,'聚酯纤维100%','宝蓝','常规','休闲','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.96.32b022ad4YGCyY&id=558038195044&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(9,'../assets/jacket_jinlilai/9/img1.png','../assets/jacket_jinlilai/9/img2.png','../assets/jacket_jinlilai/9/img3.png','../assets/jacket_jinlilai/9/img4.png','../assets/jacket_jinlilai/9/img5.png','../assets/jacket_jinlilai/9/img6.png','长袖','立领','时尚休闲立领夹克',NULL,'标准',NULL,NULL,'拉链门襟','常规','舒适保暖/防风抗皱',NULL,'聚酯纤维100%','藏青','常规','休闲','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.100.32b022ad4YGCyY&id=556688679095&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17'),
	(10,'../assets/jacket_jinlilai/10/img1.png','../assets/jacket_jinlilai/10/img2.png','../assets/jacket_jinlilai/10/img3.png','../assets/jacket_jinlilai/10/img4.png','../assets/jacket_jinlilai/10/img5.png','../assets/jacket_jinlilai/10/img6.png','长袖','立领','长款立领男装夹克外套',NULL,'标准',NULL,NULL,'拉链门襟','长款','防风抗皱/精致细腻',NULL,'聚酯纤维100%','卡其/藏蓝/黑色','常规','商务','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14921728266.104.32b022ad4YGCyY&id=556560181052&rn=4348773b21586985a519a6a3f0e3c265&abbucket=17');

/*!40000 ALTER TABLE `jacket_jinlilai` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table long_sleeved_blouse
# ------------------------------------------------------------

DROP TABLE IF EXISTS `long_sleeved_blouse`;

CREATE TABLE `long_sleeved_blouse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `sleeve_length` text,
  `model` text,
  `collar_type` text,
  `fabric` text,
  `color` text,
  `pattern` text,
  `thickness` text,
  `style` text,
  `link` text,
  `design` text,
  `sleeve_style` text,
  `lower_hem` text,
  `craft` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `long_sleeved_blouse` WRITE;
/*!40000 ALTER TABLE `long_sleeved_blouse` DISABLE KEYS */;

INSERT INTO `long_sleeved_blouse` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sleeve_length`, `model`, `collar_type`, `fabric`, `color`, `pattern`, `thickness`, `style`, `link`, `design`, `sleeve_style`, `lower_hem`, `craft`)
VALUES
	(1,'../assets/long_sleeved_blouse/1/img1.png','../assets/long_sleeved_blouse/1/img2.png','../assets/long_sleeved_blouse/1/img3.png','../assets/long_sleeved_blouse/1/img4.png',NULL,NULL,'长袖','修身','方领','棉100%','紫色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.95.710f2f5dzwBGop&id=544991956170&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(2,'../assets/long_sleeved_blouse/2/img1.png','../assets/long_sleeved_blouse/2/img2.png','../assets/long_sleeved_blouse/2/img3.png','../assets/long_sleeved_blouse/2/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.7% 棉47.3%','藏青','纯色','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.99.710f2f5dzwBGop&id=527142388882&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(3,'../assets/long_sleeved_blouse/3/img1.png','../assets/long_sleeved_blouse/3/img2.png','../assets/long_sleeved_blouse/3/img3.png','../assets/long_sleeved_blouse/3/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.6% 棉47.4%','深蓝','经典格纹','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.103.710f2f5dzwBGop&id=546705491055&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(4,'../assets/long_sleeved_blouse/4/img1.png','../assets/long_sleeved_blouse/4/img2.png','../assets/long_sleeved_blouse/4/img3.png','../assets/long_sleeved_blouse/4/img4.png',NULL,NULL,'长袖','标准','立领','棉57.1% 聚酯纤维24.1% 莱赛尔纤维(莱赛尔)18.8%','粉色',NULL,'常规','青春流行','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.107.710f2f5dzwBGop&id=535645100395&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(5,'../assets/long_sleeved_blouse/5/img1.png','../assets/long_sleeved_blouse/5/img2.png','../assets/long_sleeved_blouse/5/img3.png','../assets/long_sleeved_blouse/5/img4.png',NULL,NULL,'长袖','标准','方领','棉100%','浅蓝',NULL,'加绒加厚','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.111.710f2f5dzwBGop&id=523032812800&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(6,'../assets/long_sleeved_blouse/6/img1.png','../assets/long_sleeved_blouse/6/img2.png','../assets/long_sleeved_blouse/6/img3.png','../assets/long_sleeved_blouse/6/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.7% 棉47.3%','藏青',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.115.710f2f5dzwBGop&id=552854964989&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL),
	(7,'../assets/long_sleeved_blouse/7/img1.png','../assets/long_sleeved_blouse/7/img2.png','../assets/long_sleeved_blouse/7/img3.png','../assets/long_sleeved_blouse/7/img4.png',NULL,NULL,'长袖','标准','方领','棉100%','蓝色',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL),
	(8,'../assets/long_sleeved_blouse/8/img1.png','../assets/long_sleeved_blouse/8/img2.png','../assets/long_sleeved_blouse/8/img3.png','../assets/long_sleeved_blouse/8/img4.png',NULL,NULL,'长袖','标准','方领','再生纤维素纤维52.7% 聚酯纤维47.3%','蓝色',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL),
	(9,'../assets/long_sleeved_blouse/9/img1.png','../assets/long_sleeved_blouse/9/img2.png','../assets/long_sleeved_blouse/9/img3.png','../assets/long_sleeved_blouse/9/img4.png',NULL,NULL,'长袖','标准','方领',' 棉100%','灰蓝条','其他','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.131.5589b642TaMoDG&id=556108334366&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `long_sleeved_blouse` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table short_sleeved_blouse
# ------------------------------------------------------------

DROP TABLE IF EXISTS `short_sleeved_blouse`;

CREATE TABLE `short_sleeved_blouse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `sleeve_length` text,
  `model` text,
  `collar_type` text,
  `fabric` text,
  `color` text,
  `pattern` text,
  `thickness` text,
  `style` text,
  `link` text,
  `design` text,
  `sleeve_style` text,
  `lower_hem` text,
  `craft` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `short_sleeved_blouse` WRITE;
/*!40000 ALTER TABLE `short_sleeved_blouse` DISABLE KEYS */;

INSERT INTO `short_sleeved_blouse` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sleeve_length`, `model`, `collar_type`, `fabric`, `color`, `pattern`, `thickness`, `style`, `link`, `design`, `sleeve_style`, `lower_hem`, `craft`)
VALUES
	(1,'../assets/short_sleeved_blouse/1/img1.png','../assets/short_sleeved_blouse/1/img2.png','../assets/short_sleeved_blouse/1/img3.png','../assets/short_sleeved_blouse/1/img4.png',NULL,NULL,'短袖','修身','尖领','色织布（   聚酯纤维45.2% 再生纤维素纤维28.4% 棉26.4%）','白色','条纹','常规','商务休闲','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL),
	(2,'../assets/short_sleeved_blouse/2/img1.png','../assets/short_sleeved_blouse/2/img2.png','../assets/short_sleeved_blouse/2/img3.png','../assets/short_sleeved_blouse/2/img4.png',NULL,NULL,'短袖','修身','扣领尖领','纯棉','浅蓝','几何图案','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL),
	(3,'../assets/short_sleeved_blouse/1/img1.png','../assets/short_sleeved_blouse/1/img2.png','../assets/short_sleeved_blouse/1/img3.png','../assets/short_sleeved_blouse/1/img4.png',NULL,NULL,'短袖','修身','尖领','色织布（   聚酯纤维45.2% 再生纤维素纤维28.4% 棉26.4%）','白色','条纹','常规','商务休闲','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL),
	(4,'../assets/short_sleeved_blouse/2/img1.png','../assets/short_sleeved_blouse/2/img2.png','../assets/short_sleeved_blouse/2/img3.png','../assets/short_sleeved_blouse/2/img4.png',NULL,NULL,'短袖','修身','扣领尖领','纯棉','浅蓝','几何图案','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL),
	(5,'../assets/short_sleeved_blouse/1/img1.png','../assets/short_sleeved_blouse/1/img2.png','../assets/short_sleeved_blouse/1/img3.png','../assets/short_sleeved_blouse/1/img4.png',NULL,NULL,'短袖','修身','尖领','纯棉','白色','条纹','常规','商务休闲','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL),
	(6,'../assets/short_sleeved_blouse/2/img1.png','../assets/short_sleeved_blouse/2/img2.png','../assets/short_sleeved_blouse/2/img3.png','../assets/short_sleeved_blouse/2/img4.png',NULL,NULL,'短袖','修身','扣领尖领','纯棉','浅蓝','条纹','常规','时尚都市','https://detail.tmall.hk/hk/item.htm?spm=a230r.1.14.9.25e5f806ahEN0t&id=551849594680&cm_id=140105335569ed55e27b&abbucket=3',NULL,NULL,NULL,NULL),
	(7,'../assets/short_sleeved_blouse/1/img1.png','../assets/short_sleeved_blouse/1/img2.png','../assets/short_sleeved_blouse/1/img3.png','../assets/short_sleeved_blouse/1/img4.png',NULL,NULL,'短袖','修身','尖领','色织布（   聚酯纤维45.2% 再生纤维素纤维28.4% 棉26.4%）','白色','几何图案','常规','商务休闲','https://detail.tmall.com/item.htm?spm=a1z10.15-b-s.w4011-15255502550.60.5115e5deJkRgOK&id=545640769302&rn=d299ae6456bcbcc57130a469214a2d8e&abbucket=11&sku_properties=1627207:28324',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `short_sleeved_blouse` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `password`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3'),
	(2,'崔志彤','21232f297a57a5a743894a0e4a801fc3'),
	(3,'张宇飞','21232f297a57a5a743894a0e4a801fc3');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table western_style_clothes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `western_style_clothes`;

CREATE TABLE `western_style_clothes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `sleeve_length` text,
  `model` text,
  `collar_type` text,
  `fabric` text,
  `color` text,
  `pattern` text,
  `thickness` text,
  `style` text,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `western_style_clothes` WRITE;
/*!40000 ALTER TABLE `western_style_clothes` DISABLE KEYS */;

INSERT INTO `western_style_clothes` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sleeve_length`, `model`, `collar_type`, `fabric`, `color`, `pattern`, `thickness`, `style`, `link`)
VALUES
	(1,'../assets/long_sleeved_blouse/1/img1.png','../assets/long_sleeved_blouse/1/img2.png','../assets/long_sleeved_blouse/1/img3.png','../assets/long_sleeved_blouse/1/img4.png',NULL,NULL,'长袖','修身','方领','棉100%','紫色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.95.710f2f5dzwBGop&id=544991956170&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(2,'../assets/long_sleeved_blouse/2/img1.png','../assets/long_sleeved_blouse/2/img2.png','../assets/long_sleeved_blouse/2/img3.png','../assets/long_sleeved_blouse/2/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.7% 棉47.3%','藏青','纯色','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.99.710f2f5dzwBGop&id=527142388882&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(3,'../assets/long_sleeved_blouse/3/img1.png','../assets/long_sleeved_blouse/3/img2.png','../assets/long_sleeved_blouse/3/img3.png','../assets/long_sleeved_blouse/3/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.6% 棉47.4%','深蓝','经典格纹','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.103.710f2f5dzwBGop&id=546705491055&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(4,'../assets/long_sleeved_blouse/4/img1.png','../assets/long_sleeved_blouse/4/img2.png','../assets/long_sleeved_blouse/4/img3.png','../assets/long_sleeved_blouse/4/img4.png',NULL,NULL,'长袖','标准','立领','棉57.1% 聚酯纤维24.1% 莱赛尔纤维(莱赛尔)18.8%','粉色',NULL,'常规','青春流行','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.107.710f2f5dzwBGop&id=535645100395&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(5,'../assets/long_sleeved_blouse/5/img1.png','../assets/long_sleeved_blouse/5/img2.png','../assets/long_sleeved_blouse/5/img3.png','../assets/long_sleeved_blouse/5/img4.png',NULL,NULL,'长袖','标准','方领','棉100%','浅蓝',NULL,'加绒加厚','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.111.710f2f5dzwBGop&id=523032812800&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(6,'../assets/long_sleeved_blouse/6/img1.png','../assets/long_sleeved_blouse/6/img2.png','../assets/long_sleeved_blouse/6/img3.png','../assets/long_sleeved_blouse/6/img4.png',NULL,NULL,'长袖','标准','方领',' 再生纤维素纤维52.7% 棉47.3%','藏青',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.115.710f2f5dzwBGop&id=552854964989&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7'),
	(7,'../assets/long_sleeved_blouse/7/img1.png','../assets/long_sleeved_blouse/7/img2.png','../assets/long_sleeved_blouse/7/img3.png','../assets/long_sleeved_blouse/7/img4.png',NULL,NULL,'长袖','标准','方领','棉100%','蓝色',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7'),
	(8,'../assets/long_sleeved_blouse/8/img1.png','../assets/long_sleeved_blouse/8/img2.png','../assets/long_sleeved_blouse/8/img3.png','../assets/long_sleeved_blouse/8/img4.png',NULL,NULL,'长袖','标准','方领','再生纤维素纤维52.7% 聚酯纤维47.3%','蓝色',NULL,'常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7'),
	(9,'../assets/long_sleeved_blouse/9/img1.png','../assets/long_sleeved_blouse/9/img2.png','../assets/long_sleeved_blouse/9/img3.png','../assets/long_sleeved_blouse/9/img4.png',NULL,NULL,'长袖','标准','方领',' 棉100%','灰蓝条','其他','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.131.5589b642TaMoDG&id=556108334366&rn=2bc375bf25df754f4688659353fe7940&abbucket=7');

/*!40000 ALTER TABLE `western_style_clothes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table western_style_pants
# ------------------------------------------------------------

CREATE TABLE `western_style_pants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image1` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `image3` char(255) DEFAULT NULL,
  `image4` char(255) DEFAULT NULL,
  `image5` char(255) DEFAULT NULL,
  `image6` char(255) DEFAULT NULL,
  `pant_length` text,
  `model` text,
  `fabric` text,
  `color` text,
  `pattern` text,
  `thickness` text,
  `style` text,
  `link` text,
  `waist_type` int(11) DEFAULT NULL,
  `design` int(11) DEFAULT NULL,
  `pant_bottom` int(11) DEFAULT NULL,
  `elastic_force` int(11) DEFAULT NULL,
  `craft` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `western_style_pants` WRITE;
/*!40000 ALTER TABLE `western_style_pants` DISABLE KEYS */;

INSERT INTO `western_style_pants` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `pant_length`, `model`, `fabric`, `color`, `pattern`, `thickness`, `style`, `link`, `waist_type`, `design`, `pant_bottom`, `elastic_force`, `craft`)
VALUES
	(1,'../assets/western_style_pants/1/img1.png','../assets/western_style_pants/1/img2.png','../assets/western_style_pants/1/img3.png','../assets/western_style_pants/1/img4.png',NULL,NULL,'长裤','直筒','羊毛60% 聚酯纤维38.5% 聚氨酯弹性纤维(氨纶)1.5%','黑色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14902430362.139.71e8ae193LbPMs&id=558873328018&rn=d3132b4f1de18f14d4b85961839f6e12&abbucket=10',NULL,NULL,NULL,NULL,NULL),
	(2,'../assets/western_style_pants/2/img1.png','../assets/western_style_pants/2/img2.png','../assets/western_style_pants/2/img3.png','../assets/western_style_pants/2/img4.png',NULL,NULL,'长裤','直筒','羊毛100%','蓝色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.99.710f2f5dzwBGop&id=527142388882&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(3,'../assets/western_style_pants/3/img1.png','../assets/western_style_pants/3/img2.png','../assets/western_style_pants/3/img3.png','../assets/western_style_pants/3/img4.png',NULL,NULL,'长裤','直筒','聚酯纤维78.4% 粘胶纤维(粘纤)21.6%','蓝色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.103.710f2f5dzwBGop&id=546705491055&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(4,'../assets/western_style_pants/4/img1.png','../assets/western_style_pants/4/img2.png','../assets/western_style_pants/4/img3.png','../assets/western_style_pants/4/img4.png',NULL,NULL,'长裤','直筒','羊毛59.5% 聚酯纤维40.5%','藏青','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.107.710f2f5dzwBGop&id=535645100395&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(5,'../assets/western_style_pants/5/img1.png','../assets/western_style_pants/5/img2.png','../assets/western_style_pants/5/img3.png','../assets/western_style_pants/5/img4.png',NULL,NULL,'长裤','直筒','聚酯纤维89% 粘胶纤维(粘纤)11%','深灰','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.111.710f2f5dzwBGop&id=523032812800&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(6,'../assets/western_style_pants/6/img1.png','../assets/western_style_pants/6/img2.png','../assets/western_style_pants/6/img3.png','../assets/western_style_pants/6/img4.png',NULL,NULL,'长裤','宽松','羊毛63.5% 聚酯纤维36.5%','深蓝','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.115.710f2f5dzwBGop&id=552854964989&rn=fe97033ae56fae3d09e87cfafc0a7c2e&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(7,'../assets/western_style_pants/7/img1.png','../assets/western_style_pants/7/img2.png','../assets/western_style_pants/7/img3.png','../assets/western_style_pants/7/img4.png',NULL,NULL,'长裤','宽松','羊毛52% 聚酯纤维46.8% 聚氨酯弹性纤维(氨纶)1.2%','深蓝','纯色','常规','时尚都市','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(8,'../assets/western_style_pants/8/img1.png','../assets/western_style_pants/8/img2.png','../assets/western_style_pants/8/img3.png','../assets/western_style_pants/8/img4.png',NULL,NULL,'长裤','修身','聚酯纤维85% 粘胶纤维(粘纤)15%','灰色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.123.5589b642TaMoDG&id=555899129906&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL,NULL),
	(9,'../assets/western_style_pants/9/img1.png','../assets/western_style_pants/9/img2.png','../assets/western_style_pants/9/img3.png','../assets/western_style_pants/9/img4.png',NULL,NULL,'长裤','宽松','羊毛84% 粘胶纤维(粘纤)16%','黑色','纯色','常规','商务绅士','https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-14969572385.131.5589b642TaMoDG&id=556108334366&rn=2bc375bf25df754f4688659353fe7940&abbucket=7',NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `western_style_pants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
