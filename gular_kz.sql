-- MySQL dump 10.13  Distrib 5.7.38, for Linux (x86_64)
--
-- Host: localhost    Database: gular_kz
-- ------------------------------------------------------
-- Server version	5.7.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `TestID` int(11) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'How are you',1,3,''),(2,'Hello',1,3,''),(3,'Where are you from',1,3,''),(4,'How old are you',1,3,''),(5,'Abay 122',1,3,''),(6,'fdfd',1,5,'5'),(7,'how old ',1,6,'6'),(8,'First people in the world',1,7,''),(9,'question',1,7,''),(10,'adsnmymg yuf derhj rhe hwjty',1,7,'');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_answer`
--

DROP TABLE IF EXISTS `quiz_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_answer` (
  `qa_id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `option_number` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  PRIMARY KEY (`qa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_answer`
--

LOCK TABLES `quiz_answer` WRITE;
/*!40000 ALTER TABLE `quiz_answer` DISABLE KEYS */;
INSERT INTO `quiz_answer` VALUES (1,1,2,0),(2,2,1,0),(3,3,3,0),(4,4,4,0),(5,5,17,2),(6,7,19,6);
/*!40000 ALTER TABLE `quiz_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_options`
--

DROP TABLE IF EXISTS `quiz_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `vopros` varchar(255) NOT NULL,
  `is_enabled` int(11) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_options`
--

LOCK TABLES `quiz_options` WRITE;
/*!40000 ALTER TABLE `quiz_options` DISABLE KEYS */;
INSERT INTO `quiz_options` VALUES (1,1,'array_rev()',1),(2,1,'array_reverse()',1),(3,1,'reverse()',1),(4,1,'array_end()',1),(5,2,'chr()',1),(6,2,'ascii()',1),(7,2,'ascii()',1),(8,2,'ascii()',1),(9,3,'18',1),(10,3,'almaty',1),(11,3,'45',1),(12,3,'89',1),(13,4,'1',1),(14,4,'89',1),(15,4,'78',1),(16,4,'55',1),(17,5,'123',1),(18,6,'000',1),(19,7,'4',1),(20,7,'3',1);
/*!40000 ALTER TABLE `quiz_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_t_s`
--

DROP TABLE IF EXISTS `tbl_t_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_t_s` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(100) NOT NULL,
  `TopicID` varchar(100) NOT NULL,
  `TestID` varchar(100) DEFAULT NULL,
  `Pass` varchar(255) NOT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_t_s`
--

LOCK TABLES `tbl_t_s` WRITE;
/*!40000 ALTER TABLE `tbl_t_s` DISABLE KEYS */;
INSERT INTO `tbl_t_s` VALUES (7,'2','1','History of Kazakhstan','2023-06-02','2023-06-02 06:25:53'),(8,'2','2','1','23.06.2023','2023-06-02 07:45:49'),(9,'4','5','SDu1','2023-06-05','2023-06-05 10:02:59'),(10,'5','6','TEST for Gulzhainsah','2023-06-21','2023-06-05 10:37:54');
/*!40000 ALTER TABLE `tbl_t_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblask`
--

DROP TABLE IF EXISTS `tblask`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblask` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TestID` varchar(100) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblask`
--

LOCK TABLES `tblask` WRITE;
/*!40000 ALTER TABLE `tblask` DISABLE KEYS */;
INSERT INTO `tblask` VALUES (1,'1','Abylaikhan where is year','2023-05-26 10:25:59'),(2,'1','Kazhakhstan year old','2023-05-26 11:23:10');
/*!40000 ALTER TABLE `tblask` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcourse`
--

DROP TABLE IF EXISTS `tblcourse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TeacherID` varchar(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DataStart` varchar(255) NOT NULL,
  `DataEnd` varchar(255) NOT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcourse`
--

LOCK TABLES `tblcourse` WRITE;
/*!40000 ALTER TABLE `tblcourse` DISABLE KEYS */;
INSERT INTO `tblcourse` VALUES (1,'1','History','','','2023-05-26 08:43:16'),(2,'1','Fizika','','','2023-05-29 07:36:46'),(3,'1','Baha','','','2023-05-29 10:54:05'),(4,'5','SDU','2023-06-05','2023-06-12','2023-06-05 09:00:16'),(5,'6','Algebra','2023-06-05','2023-06-12','2023-06-05 09:52:12'),(6,'2','Gulzhainash','2023-06-06','2023-06-21','2023-06-05 10:31:10');
/*!40000 ALTER TABLE `tblcourse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblestimation`
--

DROP TABLE IF EXISTS `tblestimation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblestimation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(100) NOT NULL,
  `TestID` varchar(100) NOT NULL,
  `AskID` varchar(100) NOT NULL,
  `VariantID` varchar(100) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblestimation`
--

LOCK TABLES `tblestimation` WRITE;
/*!40000 ALTER TABLE `tblestimation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblestimation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllecture`
--

DROP TABLE IF EXISTS `tbllecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbllecture` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `topicID` varchar(100) NOT NULL,
  `NameLecture` varchar(100) NOT NULL,
  `FilePDF` varchar(100) NOT NULL,
  `VideoLInk` varchar(255) NOT NULL,
  `StudentID` varchar(100) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllecture`
--

LOCK TABLES `tbllecture` WRITE;
/*!40000 ALTER TABLE `tbllecture` DISABLE KEYS */;
INSERT INTO `tbllecture` VALUES (1,'2','Arsenal','участник семинара.pdf','https://stackoverflow.com/questions/17293861/how-to-make-input-type-file-accept-only-these-types','2','2023-05-29 08:55:55');
/*!40000 ALTER TABLE `tbllecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllecture_s`
--

DROP TABLE IF EXISTS `tbllecture_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbllecture_s` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(100) NOT NULL,
  `LectureID` varchar(100) NOT NULL,
  `DataCurrent` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllecture_s`
--

LOCK TABLES `tbllecture_s` WRITE;
/*!40000 ALTER TABLE `tbllecture_s` DISABLE KEYS */;
INSERT INTO `tbllecture_s` VALUES (1,'2','1','');
/*!40000 ALTER TABLE `tbllecture_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudent` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `User` varchar(100) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudent`
--

LOCK TABLES `tblstudent` WRITE;
/*!40000 ALTER TABLE `tblstudent` DISABLE KEYS */;
INSERT INTO `tblstudent` VALUES (2,'Baha','Hali','wokem@inbox.ru','202cb962ac59075b964b07152d234b70','wokem@inbox.ru','2023-05-26 04:02:19'),(4,'John','Robert','john','202cb962ac59075b964b07152d234b70','re@mail.ru','2023-06-05 10:01:33'),(5,'student','student','student','202cb962ac59075b964b07152d234b70','studen@dfb.dsfgd','2023-06-05 10:37:04'),(6,'Almazbek','Bakhytbek','almasbakytbek13@gmail.com','d0427f568e01c39bdce70ed73361a152','almasbakytbek13@gmail.com','2023-12-02 13:30:51'),(7,'Arman','Drop','123','827ccb0eea8a706c4c34a16891f84e7b','arman.kz.0140@gmail.com','2023-12-04 07:00:32'),(8,'ara','drop','student','827ccb0eea8a706c4c34a16891f84e7b','saf@gfsdf.f','2023-12-04 07:01:11');
/*!40000 ALTER TABLE `tblstudent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltask`
--

DROP TABLE IF EXISTS `tbltask`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltask` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `topicID` varchar(100) NOT NULL,
  `NameTask` varchar(100) NOT NULL,
  `FilePDF` varchar(255) DEFAULT NULL,
  `DataStart` varchar(100) NOT NULL,
  `DataEnd` varchar(100) NOT NULL,
  `StudentID` varchar(100) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltask`
--

LOCK TABLES `tbltask` WRITE;
/*!40000 ALTER TABLE `tbltask` DISABLE KEYS */;
INSERT INTO `tbltask` VALUES (1,'2','Example','участник семинара (1).pdf','2023-05-26','2023-06-04','2','2023-05-29 08:20:53'),(2,'6','LOH','Test-case for Intranet.pdf','2023-06-04','2023-06-30','','2023-06-05 10:40:34');
/*!40000 ALTER TABLE `tbltask` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltask_s`
--

DROP TABLE IF EXISTS `tbltask_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltask_s` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(100) NOT NULL,
  `TaskID` varchar(100) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltask_s`
--

LOCK TABLES `tbltask_s` WRITE;
/*!40000 ALTER TABLE `tbltask_s` DISABLE KEYS */;
INSERT INTO `tbltask_s` VALUES (1,'2','1','2023-05-29 08:38:01');
/*!40000 ALTER TABLE `tbltask_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblteacher`
--

DROP TABLE IF EXISTS `tblteacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblteacher` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Teachar` varchar(100) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblteacher`
--

LOCK TABLES `tblteacher` WRITE;
/*!40000 ALTER TABLE `tblteacher` DISABLE KEYS */;
INSERT INTO `tblteacher` VALUES (1,'John','Robert','wokem@inbox.ru','202cb962ac59075b964b07152d234b70','test@mail.ru','2023-05-26 06:43:20'),(2,'Teacher','Surname_Teacher','teacher_admin','e7db5f72eb76bfb4bd95711c7249cdc9','arman.kz.0140@gmail.com','2023-06-02 10:51:19'),(3,'Gulzhaina','Makhanbetova ','guleka00@gmail.com','58b4e38f66bcdb546380845d6af27187','guleka00@gmail.com','2023-06-02 11:02:44'),(4,'Guleka','Makhanbetova ','gulzhainash@gmail.com','9122074d59cca985b786f8126567db54','gulzhainash@gmail.com','2023-06-03 13:05:16'),(5,'Nurbahyt','Hali','baha','202cb962ac59075b964b07152d234b70','wokem@list.ru','2023-06-05 08:53:58'),(6,'Anna','Ivanova','anna','202cb962ac59075b964b07152d234b70','test@list.ru','2023-06-05 09:48:32'),(7,'Gulzhainash','Makhanbetova','gulzhainash@gmail.com','976d875a3a97208231900d32bfb57932','180107159@stu.sdu.edu.kz','2023-07-13 09:56:57'),(8,'Murat','Abdilda','murat_abdilda','8b3a201dc6e83f99054bd2b4b4d433aa','murat_abdilda01@gmail.com','2023-12-02 13:33:00'),(9,'Cristiano','Ronaldo','criro_007','04645c785be305077da4b75f6c2aff84','almasbakytbek13@outlook.com','2023-12-02 13:34:46'),(10,'Aruzhan','Nurtaza','arusm51','dc16e51d6267653c683479a6dc242c1b','arusm51@gmail.com','2023-12-02 13:41:44'),(11,'GULEKA','MAkhanbetova','gulzhainash','dc2a2f5599eea1e869371b6fcb9a767f','180107159@stu.sdu.edu.kz','2023-12-02 13:45:48'),(12,'Baha','Hali','wokem@list.ru','e10adc3949ba59abbe56e057f20f883e','wokem@list.ru','2023-12-04 07:14:20'),(13,'sadf','fdsfvs','wokem1@inbox.ru','e10adc3949ba59abbe56e057f20f883e','wokem1@inbox.ru','2023-12-04 09:53:38');
/*!40000 ALTER TABLE `tblteacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltest`
--

DROP TABLE IF EXISTS `tbltest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltest` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NameTest` varchar(255) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `topicID` varchar(100) NOT NULL,
  `DataStart` varchar(100) NOT NULL,
  `DataEnd` varchar(100) NOT NULL,
  `DataCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltest`
--

LOCK TABLES `tbltest` WRITE;
/*!40000 ALTER TABLE `tbltest` DISABLE KEYS */;
INSERT INTO `tbltest` VALUES (1,'History of Kazakhstan','','1','2023-05-26','2023-05-31','2023-05-26 09:53:56'),(2,'Kazakhstan','','2','2023-05-26','2023-05-27','2023-05-26 09:53:56'),(3,'Алматы','','2','2023-06-02','2023-06-02','2023-06-02 03:45:04'),(4,'test','','2','2023-06-01','2023-07-29','2023-06-02 10:53:14'),(5,'SDU-000','5','3','2023-06-05','2023-06-06','2023-06-05 09:29:51'),(6,'SDu1','6','5','2023-06-05','2023-06-06','2023-06-05 09:53:58'),(7,'TEST for Gulzhainsah','2','6','','','2023-06-05 10:32:07'),(8,'test','2','','','','2023-12-04 13:32:41');
/*!40000 ALTER TABLE `tbltest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltopic`
--

DROP TABLE IF EXISTS `tbltopic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltopic` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TeacherID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CourseID` varchar(100) NOT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltopic`
--

LOCK TABLES `tbltopic` WRITE;
/*!40000 ALTER TABLE `tbltopic` DISABLE KEYS */;
INSERT INTO `tbltopic` VALUES (1,'','Abylaikhan 1870','1','2023-05-26 09:12:15'),(2,'','Fizika-1','2','2023-05-29 07:37:07'),(3,'5','SDU-888','4','2023-06-05 09:09:08'),(4,'5','SDU-77','4','2023-06-05 09:29:07'),(5,'6','Example algebra','5','2023-06-05 09:53:17'),(6,'2','Gulzhainash/TEST','6','2023-06-05 10:31:44');
/*!40000 ALTER TABLE `tbltopic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblvariant`
--

DROP TABLE IF EXISTS `tblvariant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblvariant` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `QuestionID` varchar(255) NOT NULL,
  `Option-A` varchar(255) NOT NULL,
  `Veracity` varchar(100) NOT NULL,
  `DateCurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblvariant`
--

LOCK TABLES `tblvariant` WRITE;
/*!40000 ALTER TABLE `tblvariant` DISABLE KEYS */;
INSERT INTO `tblvariant` VALUES (1,'1','fgn','1','2023-05-26 12:04:33'),(5,'1','fgnfgn','0','2023-05-26 12:04:33');
/*!40000 ALTER TABLE `tblvariant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-11 12:38:29
