-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31-0ubuntu0.20.04.2 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table blog.tbl_article
CREATE TABLE IF NOT EXISTS `tbl_article` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- Dumping data for table blog.tbl_article: ~2 rows (approximately)
DELETE FROM `tbl_article`;
INSERT INTO `tbl_article` (`id`, `title`, `content`, `created_at`, `updated_at`, `publish`) VALUES
	(5, 'Dolores rerum repell', 'Non earum quod volup', NULL, NULL, 1),
	(6, 'This is my article', 'This is my article', NULL, NULL, 1);

-- Dumping structure for table blog.tbl_page
CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32;

-- Dumping data for table blog.tbl_page: ~7 rows (approximately)
DELETE FROM `tbl_page`;
INSERT INTO `tbl_page` (`id`, `title`, `content`, `created_date`, `updated_date`, `publish`) VALUES
	(1, 'About Meweeeeeee', 'Officia cupidatat ni', '2022-12-21 21:59:03', '2022-12-27 08:16:57', 1),
	(2, 'My Bio', 'Ex non blanditiis si', '2022-12-21 21:59:12', '2022-12-26 07:29:44', 1),
	(3, 'Checck CV', 'Id qui culpa omnis ', '2022-12-21 21:59:18', '2022-12-26 07:29:58', 1),
	(4, 'Velit voluptate iru', 'Blanditiis et ducimu', '2022-12-21 22:01:50', '2022-12-21 22:01:50', 1),
	(5, 'At sunt irure qui qu', 'Aut similique nostru', '2022-12-21 22:02:11', '2022-12-21 22:02:11', 1),
	(6, 'Adipisci a corrupti', 'Itaque enim eaque de', '2022-12-21 22:04:52', '2022-12-21 22:24:49', 1),
	(12, 'Autem quo aut volupt kuhkj', 'Mollit pariatur Ips lkhkjh', '2022-12-27 08:18:35', '2022-12-27 08:18:43', 1);

-- Dumping structure for table blog.tbl_student
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- Dumping data for table blog.tbl_student: ~1 rows (approximately)
DELETE FROM `tbl_student`;
INSERT INTO `tbl_student` (`id`, `email`, `password`) VALUES
	(1, 'bhattabhakta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
