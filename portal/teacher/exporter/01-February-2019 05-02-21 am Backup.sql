-- Generation time: Fri, 01 Feb 2019 05:25:21 +0100
-- Host: localhost
-- DB name: gndec
/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `about_widget`;
CREATE TABLE `about_widget` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `about_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `achievements`;
CREATE TABLE `achievements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achievement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `achievement_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `achievements` VALUES ('1','National Award','achievement','2012','abc','abcd','123','05/08/20018'),
('2','','award','2018','xyz','xyz','45','05/08/2018'),
('4','Sports day','Award','2011','2','2','123',''),
('5','1','Honoured','1990','1','1','admin',''),
('6','National Award','recognition','2018','abc','abcd','123','05/08/20018'),
('7','3','Something','3','3','3','admin',''),
('8','1','1','1999','1','1','admin',''),
('9','youth fest','award','2017','abc','abc','123','dff'); 


DROP TABLE IF EXISTS `activities_organized`;
CREATE TABLE `activities_organized` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `activities_organized` VALUES ('2','xyz','july','august','xyz','state','xyz','xyz','123','05/08/2018'),
('5','Some Activity','','January 2018','Somebody','','','','ithod',''),
('9','Sports Day 2018','2018-02-10','2018-02-13','GNDEC','Institional','','','admin',''); 


DROP TABLE IF EXISTS `additional_duties`;
CREATE TABLE `additional_duties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duty_details` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `additional_duties` VALUES ('3','Warden Girls Hostel ( Hostel #. 4)','GNDEC','2008-01-01','2008-09-16','','','','123\r\n',''),
('4','Academic Incharge  3rd Year IT Batch(2006-2010)','GNDEC','2008-08-01','2008-09-01','','','','123\r\n',''),
('5','Faculty Advisor','Computer Club/Computer Society of India','2006-01-01','2014-01-01','','','','ithod',''); 


DROP TABLE IF EXISTS `aggregate`;
CREATE TABLE `aggregate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `univ_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtained_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_backlog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passive_backlog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aggregate_univ_roll_no_unique` (`univ_roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `btech_project`;
CREATE TABLE `btech_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `univ_roll_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `btech_project` VALUES ('1','abc','148','abc','abc','abc','august','','completed','05/08/2018','abc','abc','14','05/08/2018'),
('2','xyz','123','xyz','xyz','xyz','dec','','Ongoing','','xyza','xyz','123','05/08/2018'),
('3','gcfhgvjhb','56','xdcfvgbhn','xcvbn','fgh bjn','tfygbhunji','','completed','2018-08-18','hello !!','tcrfvygbuh','123',''),
('5','Name','34567','Kiran Jyoti','','thesis','','trf','','','','','ithod',''),
('6','5','5','5','5','5','','5','5','5','5','5','ithod',''),
('7','22','2','2','2','2','','2','Ongoing','0002-02-02','2','2','admin',''); 


DROP TABLE IF EXISTS `consultancy`;
CREATE TABLE `consultancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commencement_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `consultancy` VALUES ('1','abc','20','first','abc','2018-08-18','2018-08-18','2020-10-18','completed','abc','abcfgh','123','05/08/2018'),
('2','xyz','23','second','xyz','05/08/2018','july','september','completed','xyz','xyz','34','05/08/2018'),
('3','fvhgbj','0','fcgvhbj','fcgvhbj','2018-01-01','2018-05-17','fcgvh','ongoing','cfgvhbj','vhbj','123',''),
('4','1','1','1','1','1','1','1','1','1','1','admin',''),
('5','Title','120000','Top','','','','','','','','ithod',''); 


DROP TABLE IF EXISTS `downloads`;
CREATE TABLE `downloads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `experience` VALUES ('1','professor','gndec','2018-08-19','2018-08-19','abcf','abc','123','2018-08-19'),
('2','assistant professor','ptu','2018-08-19','2018-08-19','abc','abc','123','2018-08-19'),
('3','7','7','2018-08-08','2018-08-25','7','7','123','0000-00-00'),
('4','HOD','GNDEC','2018-01-01','2018-09-06','','','ithod','0000-00-00'),
('5','1','1','0001-01-01','0001-01-01','1','1','admin','0000-00-00'); 


DROP TABLE IF EXISTS `expert_talks`;
CREATE TABLE `expert_talks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talk_title` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `organised_by` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(255) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` int(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `expert_talks` VALUES ('1','Image Segmentation Techniques','Faculty and Student Development Activity','Lala Lajpat Rai Institute of Engineering & Technology, Moga','2013-03-09','national','2012-2013','abc','2','123','2018-08-25'),
('2','Role of Multiresolution Techniques in\r\nImage Processing','Faculty and Student Development Activity ','Lala Lajpat Rai Institute of Engineering & Technology, Moga','2013-02-10','national','2012-2013','abc','2','123','2018-08-25'),
('3','1','1','1','0001-01-01','National','','1','1','admin','0000-00-00'),
('4','Some talk','Some Event','Someone','2018-09-06','','','','0','ithod','0000-00-00'),
('5','2','2','2','0002-02-02','International','','2','2','admin','0000-00-00'),
('6','5','5','5','0005-12-05','Institutional','','2004-2005','2','admin','0000-00-00'); 


DROP TABLE IF EXISTS `extra_work`;
CREATE TABLE `extra_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assignment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `extra_work` VALUES ('1','','','2018-12-01','2019-12-01','','','123','05/08/2018'),
('2','xyz','second','2018-08-18','2018-10-18','xyz','xyz','123','05/08/2018'),
('4','hvghyu','hgvhybu','2017-12-18','2018-10-18','hgvhjb','hgvjhb','123',''),
('6','ABC Team','ABC Position','July 2018','','','','ithod',''),
('7','','','','','','','admin',''),
('8','55555','5','2019-02-07','2019-02-06','5','5','123',''); 


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `grants`;
CREATE TABLE `grants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grant_name` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `grant_type` varchar(255) NOT NULL,
  `grant_details` varchar(500) NOT NULL,
  `funding_agency` varchar(500) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `grants` VALUES ('1','','','','','Travel grant to present paper titled ','Technical Education Quality Improvement Programme, Phase-II','76995','abc','abcd','123','27-08-2018'),
('4','','','','','5','5','5','5','5','admin',''),
('5','','','','','5','5','5','5','5','123',''); 


DROP TABLE IF EXISTS `home_page`;
CREATE TABLE `home_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `office_type` enum('STUDENT','OFFICE','FACULTY') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_widget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `images` VALUES ('1','123','chakdephatte 2019-02-01 05-16-32.jpg'),
('2','admin','chakdephatte 2018-10-02 09-01-07.png'),
('3','hod','chakdephatte 2018-08-17 08-46-25.png'),
('4','ithod','chakdephatte 2018-09-06 07-16-57.png'); 


DROP TABLE IF EXISTS `instructional_work`;
CREATE TABLE `instructional_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hrs_engaged_pw_l` int(255) NOT NULL,
  `hrs_engaged_pw_t` int(255) NOT NULL,
  `hrs_engaged_pw_p` int(255) NOT NULL,
  `class_strength` int(255) NOT NULL,
  `result_pass_percent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `instructional_work` VALUES ('6','7','7','7','7','7','7','77','7','7','7','7','7','7','7'),
('7','8','vhbnj','bhnj','vbn','bnm','89','98','98','98','vbn','bn','bn','14','vbnjh'),
('8','6','fcvyguyhi','vguhbyij','fgvhb','gvhbj','0','0','0','56','fgvhb','','fgvhb','vghn',''),
('9','5','cfgvhbj','cvghb','vghbjn','fgvhbj','0','0','0','4','fgvhbj','','cfgvhb','fgvhb',''),
('10','5','14001','','2018-01','2018-08','0','0','0','65','','','cfgvhb','123',''),
('12','4','dcfgvbh','tcrvybuhn','ctfvygbhuy','rtygu','0','0','0','98','fcgvhbjn','','fcgvhbj','123',''),
('13','2','aman','12345','2018','2020','0','0','0','32','90%','','90','123',''),
('15','2','2','2','2','2','0','0','0','2','2','','2','123',''),
('17','4','IT-14404','Web Technologies','Jan 2018','June 2018','3','1','3','60','65%','','Good','ithod',''),
('18','4','IT-14404','Web Technologies','Jan 2018','June 2018','3','1','3','60','65%','','Good','ithod',''),
('19','4','IT-14404','Web Technologies','Jan 2018','June 2018','3','1','3','60','65%','','Good','ithod',''),
('20','1','14001','','2019-11','2019-12','2','2','2','2','2','','2','123',''),
('21','1','14001','Hello','0002-02','0002-02','2','2','2','2','2','','5','123',''),
('22','1','14002','56','0007-07','0007-07','7','7','7','7','7','','7','123',''); 


DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `login_details`;
CREATE TABLE `login_details` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `login_details` VALUES ('1','admin','admin','admin',''),
('2','teacher','teacher','teacher',''),
('3','hod','hod','hod',''); 


DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soceity_name` varchar(255) NOT NULL,
  `membership_type` varchar(255) NOT NULL,
  `membership_no` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `m_from` varchar(255) NOT NULL,
  `m_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `membership` VALUES ('1','	Indian Society for Technical Education (ISTE)','','','abcfg','abc','123','','2018-01-25','2018-06-15'),
('2','Indian Society of Information Theory and Applications (ISITA)','Life Member','','xyz','xyz','123','27-08-2018','',''),
('7','IEEE','Lifetime','','','','123','','2018-05-12',''); 


DROP TABLE IF EXISTS `metrics_education`;
CREATE TABLE `metrics_education` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `univ_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtained_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks_type` enum('CGPA','PERCENTAGE') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `metrics_education_univ_roll_no_unique` (`univ_roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `metrics_education` VALUES ('1','1607148',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-23 16:22:44','2019-01-23 16:22:44'); 


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` VALUES ('1','2018_05_30_203703_create_table_users','1'),
('2','2018_06_04_175800_create_posts_table','1'),
('3','2018_06_10_085007_create_jobs_table','1'),
('4','2018_06_10_110327_create_failed_jobs_table','1'),
('5','2018_06_25_145915_create_students_table','1'),
('6','2018_07_17_062726_create_previous_marks_table','1'),
('7','2018_07_17_171528_create_student_semester_marks_table','1'),
('8','2018_07_21_134737_create_home_table','1'),
('9','2018_10_03_101815_create_about_table','1'),
('10','2018_10_05_094420_create_todos_table','1'),
('11','2018_10_06_083537_create_downloads_table','1'),
('12','2018_10_11_223517_create_about_widget_table','1'),
('13','2018_10_12_101733_create_metrics_marks_table','1'),
('14','2018_11_07_000133_create_aggregate_table','1'); 


DROP TABLE IF EXISTS `mtech_thesis`;
CREATE TABLE `mtech_thesis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registeration_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollment_no` int(255) NOT NULL,
  `thesis_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `research_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliation_to_university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mtech_thesis` VALUES ('1','abc','05/08/2018','abc','abc','completed','05/08/2018','56','abc','abc','abc','abc','abcd','123','05/08/2018'),
('2','xyz','05/08/2018','xyz','xyz','completed','05/08/2018','34','xyz','xyz','xyz','xyz','xyz','67','05/08/2018'),
('4','Student Singh','14 August 2013','Kiran Jyoti','Amit Kamra','Completed','September 2014','2147483647','Some Title','Some Area','GNDEC, Ludhiana','','Good','ithod',''),
('5','2','0002-02-02','2','2','ongoing','','2','2','2','2','','2','123',''); 


DROP TABLE IF EXISTS `participation_organized`;
CREATE TABLE `participation_organized` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `participation_organized` VALUES ('2','xyz','organized','july','aug','xyz','xyz','xyz','123','05/08/2018'),
('6','1','1','0001-11-01','0001-01-01','1','1','1','123',''); 


DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `highest_qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` date NOT NULL,
  `present_post_held_from` date NOT NULL,
  `experience_within_inst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interest_areas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `personal_details` VALUES ('1','Teacher Kaur','1992-01-01','Assistant Professor','M.Tech Information Technology','Department of Information Technology','2015-01-01','2016-01-01','2','4','digital image processing','abc','abc','123','05/08/2018','7896541320','abc@gmail.com'),
('3','HOD Kaur','1980-01-01','Head of Department','P.H.D. in Information Technology','Department of Information Technology','2010-01-01','2018-01-01','2','4','','abc','abc','hod','05/08/2018','',''),
('4','Admin Singh','1976-01-15','Principal','PHD','Department of Information Technology','2012-01-02','2015-01-01','2','10','Some Area','abc','abc','admin','05/08/2018','9083483873','hello@hello.com'),
('5','Admin Singh','1974-01-14','Principal','P.H.D. in Mechanical Engineering','Department of Mechanical Engineering','2012-01-01','2015-01-01','2','4','','abc','abc','doosra','05/08/2018','',''),
('6','Kiran Jyoti','1977-08-14','Head of Department','P.H.D. in Information Technology','Department of Information Technology','2000-11-01','2004-01-01','2','4','','abc','abc','ithod','05/08/2018','',''); 


DROP TABLE IF EXISTS `phd_thesis`;
CREATE TABLE `phd_thesis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registeration_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollment_no` int(255) NOT NULL,
  `thesis_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `research_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliation_to_university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `phd_thesis` VALUES ('1','fyg','2018-08-18','ongoing','xfcygtuy','78','gfchvjbu','dfcgvhyb','dgfchvyh','dfcgyuh','dfcgv','abc','cd','123','05/08/2018'),
('2','xyz','05/08/2018','ongoing','05/08/2018','34','xyz','xyz','xyz','xyz','xyz','xyz','xyz','67','05/08/2018'),
('3','fyg','2018-08-12','completed','2018-12-12','78','gfchvjbu','dfcgvhyb','dgfchvyh','dfcgyuh','dfcgv','','cde','123',''),
('4','fyg','xdfcgvyh','cyvtugyh','xfcygtuy','78','gfchvjbu','dfcgvhyb','dgfchvyh','dfcgyuh','dfcgv','','cd','123',''),
('5','a','a','a','a','78','a','a','a','a','a','','a','123',''),
('6','a','a','a','a','78','a','a','a','a','a','','a','123',''),
('8','Shikha Verma','Feb 2012','Completed','March 2013','2147483647','A Novel Approach to perform statistical Data Clustering  using PSO','Data Mining','','','GNDEC, Ludhiana','','','ithod',''),
('9','Tanya Sharma','Feb 2012','Completed','March 2013','2147483647','Some Funky Title','Programming','','','GNDEC, Ludhiana','','','ithod',''),
('11','1','0001-01-01','Completed','0001-01-01','1','1','1','1','1','1','','1','admin',''),
('12','55555','2019-02-15','Ongoing','2019-02-13','5','5','5','5','5','5','','6','123',''); 


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_pinned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `previous_education`;
CREATE TABLE `previous_education` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `univ_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtained_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_gap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jee_rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` enum('XII','DIPLOMA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `previous_education_univ_roll_no_unique` (`univ_roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `previous_education` VALUES ('1','1607148',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-23 16:22:45','2019-01-23 16:22:45'); 


DROP TABLE IF EXISTS `publication_conference`;
CREATE TABLE `publication_conference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weblinks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conference_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conference_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `publication_conference` VALUES ('1','abc','abc','xyz','xyz','pqr','pqr','trs','trs','abc','national','abc','23','56','100','abc','23','abc','abc','india','05/08/2018','05/08/2018','2018','abc','abchvgbj','123','05/08/2018'),
('2','xyz','xyz','qwe','qwe','rty','rty','tyu','tyu','xyz','international','xyz','45','56','120','xyz','67','xyz','xyz','canada','05/08/2018','05/08/2018','2015','xyz','xyz','34','05/08/2018'),
('3','cfgvhbj','tytguyhu','tryui','dfghjertyu','dfghjk','fghjk','dfghj','ertyu','rtyui','rtyui','dfghjk','fdghj','dfgh','dfghu','dftyu','dfrtyui','rttyui','cvghj','cgvfhj','dfghj','dfghj','cgfhj','cvhgj','cghj','123',''),
('4','1','1','1','1','1','1','1','1','1','National','1','1','1','1','1','1','1','1','1','2018-10-02','2018-10-16','1','1','1','admin',''),
('5','Pradeep Kumar','','Kiran Jyoti','','','','','','','','','','','','','','International conference of Emerging Technolgies ICET2003','Bhuvnashver','India','','','','','','ithod',''),
('6','1','1','1','1','1','1','1','1','1','International','1','1','1','1','1','1','1','1','1','0001-01-01','0001-01-01','1','1','1','admin',''); 


DROP TABLE IF EXISTS `publication_journal`;
CREATE TABLE `publication_journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `journal_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weblinks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referred` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indexing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `impact_factor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `publication_journal` VALUES ('1','abc','ghh','xyz','ghh','pqr','pqr','str','str','abc','national','abc','abc','45','56','56','100','abc','23','august','2018','abc','abc','45','2018','abc','abcdf','123','05/08/2018'),
('2','xyz','xyz','ads','afs','ahg','ags','tyu','tyu','xyz','state','xyz','xyz','34','56','67','190','xyz','56','december','2018','xyz','xyz','45','2015','xyz','xyz','123','05/08/2018'),
('3','cfgvh','cgfvhbj','cfgvhbj','fcgvhbj','cfgvhbj','cfgvhbj','fcgvhbj','cfgvhbj','cfghbj','cfgvhbj','fcgvhbj','cgvhbj','ghh','fgvhbj','fcgvhb','gfvhbj','gvhbj','gvh','bjfcgv','hbfgvhb','jcfgvhbj','fcgvhbj','cvhb','hcfgvhbj','cgvhbj','vghbj','123',''),
('4','cfhgjb','cfghjb','cfhgvjhb','fchgvjhb','hgvjhbjk','vgjhbk','vgjhbk','rtyu','fgvhbj','dxfcgvhb','xdtcfyvgub','dtcfyvgbu','','ctfvgy','xdcftvg','xdrcftvgy','dcftvgyb','xdtcfgvyhb','cftvgyb','dxctfvygb','xdcftvgy','dcftvg','ctfvgyb','xctfvyg','xdcfvgy','ctfvgybhuy','123',''),
('5','1','1','1','1','1','1','1','1','1','International','1','1','1','1','1','1','1','1','2018-10','','1','1','1','1','1','111111','admin',''),
('6','Kiran Jyoti','',' Navrit Kaur Johal','','Amit Kamra','','','','','','','','','','','','','','','','','','','','','','ithod',''),
('7','11','','1','1','1','1','1','1','1','National','1','1','1','1','1','1','1','1','0001-01','','1','1','1','1','1','1','admin',''); 


DROP TABLE IF EXISTS `q`;
CREATE TABLE `q` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `uni` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO `q` VALUES ('0','123','123','P.H.D. in Computer Science','2018','IIT, Delhi','24050834 04 Aug 2018 05:26:08pm','prof'),
('14','hod','123','Matriculation','2014','New S.M.D Senior Secondary School, Ludhiana','7187782 04 Aug 2018 06:35:33pm','hod'),
('22','admin','123','MTech.','2020','GNDU','41351302 05 Aug 2018 05:43:15am','admin'),
('23','ithod','123','Matriculation','2014','New S.M.D Senior Secondary School, Ludhiana','7187782 04 Aug 2018 06:35:33pm','hod'); 


DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO `qualifications` VALUES ('1','admin','Matriculation','2000'),
('2','admin','10+2 Non-Medical','2002'),
('3','admin','B.Tech IT','2006'),
('4','admin','M.Tech IT','2008'),
('7','123','A','2005'),
('8','123','B','2007'),
('9','hod','P.H.D. in Information Technology','2013'),
('10','hod','Matriculation','2000'),
('11','hod','10+2 Non-Medical','2002'),
('12','hod','B.Tech IT','2006'),
('13','hod','M.Tech IT','2008'),
('14','ithod','Matriculation, PSEB','1994'),
('15','ithod','B.Tech, NIT, Jallandhar (PTU)','2000'),
('16','ithod','M.Tech, Punjab Technical University, Jalandhar','2007'),
('17','ithod','P.H.D.  Shri JJT University, Jhunjhunu, Rajasthan','2013'),
('21','admin','P.H.D. in Information Technology','2013'); 


DROP TABLE IF EXISTS `semester_marks`;
CREATE TABLE `semester_marks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `univ_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtained_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_backlog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passive_backlog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks_type` enum('CGPA','PERCENTAGE') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `semester_marks_univ_roll_no_unique` (`univ_roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `semester_marks` VALUES ('1','1607148','1-2-3-4-5-6-7-8','0-0-0-0-0-0-0-0','0-0-0-0-0-0-0-0','0-0-0-0-0-0-0-0','0-0-0-0-0-0-0-0','0-0-0-0-0-0-0-0',NULL,'0-0-0-0-0-0-0-0','1','2019-01-23 16:22:46','2019-01-23 16:22:46'); 


DROP TABLE IF EXISTS `sponsored_projects`;
CREATE TABLE `sponsored_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext_funds_received` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commencement_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sponsored_projects` VALUES ('1','abc','2566','first','abc','05/08/2018','july','august','ongoing','abc','abc','56','05/08/2018'),
('2','xyz','45','second','xyz','05/08/2018','july','dec','completed','xyz','xyzasda','123','05/08/2018'),
('5','ghbj','gvhbj','gvhbj','cfgvhb','fghyju','fcghju','cfghbj','ongoing','cfghj','fcgvh','123',''),
('6','1','1','1','1','1','1','1','1','1','','admin',''),
('7','Title','50000','Top','','','','','','','','ithod',''); 


DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `univ_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_roll_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Year of Addmission and Year of Passout',
  `branch_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stream` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Stream/Course type',
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Class Section',
  `shift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'in cm',
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'in kg',
  `living` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_univ_roll_no_unique` (`univ_roll_no`),
  UNIQUE KEY `students_class_roll_no_unique` (`class_roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `students` VALUES ('1','1607148',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-23 16:22:44','2019-01-23 16:22:44'); 


DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(500) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `subjects` VALUES ('1','14001','ABC'),
('2','14002','DEF'); 


DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `todo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_2fa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('STUDENT','COMPANY','EXECUTIVE_MEMBER','ADMIN') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'STUDENT',
  `provider_unique_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ENABLED','DISABLED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ENABLED',
  `form_status` enum('N.A.','PENDING','SUBMITTED','VERIFIED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N.A.',
  `student_form_step` enum('N.A.','TC','PROFILE','METRICS_EDUCATION','PREVIOUS_EDUCATION','DEGREE','AGGREGATE','SUBMITTED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N.A.',
  `is_mailed` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_first_login` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` VALUES ('1','DevChannel','$2y$10$qGBnbm8mdvAZ8Yu6zBVIweXHdUPdshIYzpl0T6vek/xvcqtwgd/vq','kasam199796@gmail.com','1234567890',NULL,'ADMIN',NULL,'ENABLED','N.A.','N.A.','1','1','1','0',NULL,'2019-01-23 16:14:12','2019-01-23 16:14:12'),
('2','1607148','$2y$10$qGBnbm8mdvAZ8Yu6zBVIweXHdUPdshIYzpl0T6vek/xvcqtwgd/vq','saksham@gmail.com','9999999999',NULL,'STUDENT',NULL,'ENABLED','PENDING','TC','1','1','1','1',NULL,'2019-01-23 16:17:37','2019-01-23 16:22:43'); 


DROP TABLE IF EXISTS `workshops`;
CREATE TABLE `workshops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `duration_type` varchar(255) NOT NULL,
  `sponsors` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `workshops` VALUES ('1','Short TermProgramme','VB.NET','National Institute of TechnicalTeachers Training & Research(NITTTR), Chandigarh','One week','Guru Nanak Dev EngineeringCollege, Ludhiana ','2006-05-29','2006-06-02','','abcdf','abc','123','26-08-2018'),
('2','Course','Vision, Graphics and','Indian Institute of Technology,\r\nRoorkee ','One week','Guru Nanak Dev Engineering\r\nCollege, Ludhiana ','2007-07-06','2007-07-10','2007-2008\r\n','abc','abc','123','26-08-2018'),
('4','Some Type of Workshop','Some Course Nae','GNDEC, Ludhiana','','','0000-00-00','0000-00-00','','','','ithod',''),
('5','1','1','1','1','1','2018-10-14','2018-10-18','2018-2019','','','admin',''); 




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

