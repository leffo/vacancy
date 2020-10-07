-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: miniblog
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Фабричный метод','Фабричный метод — это порождающий паттерн проектирования, который определяет общий интерфейс для создания объектов в суперклассе, позволяя подклассам изменять тип создаваемых объектов.\r\nРешение:\r\nПаттерн Фабричный метод предлагает создавать объекты не напрямую, используя оператор new, а через вызов особого фабричного метода. Не пугайтесь, объекты всё равно будут создаваться при помощи new, но делать это будет фабричный метод.\r\n\r\n','2020-07-20 00:00:00'),(2,1,'Строитель','Строитель — это порождающий паттерн проектирования, который позволяет создавать сложные объекты пошагово. Строитель даёт возможность использовать один и тот же код строительства для получения разных представлений объектов.\r\nРешение\r\nПаттерн Строитель предлагает вынести конструирование объекта за пределы его собственного класса, поручив это дело отдельным объектам, называемым строителями.\r\n\r\nПрименение паттерна Строитель\r\nСтроитель позволяет создавать сложные объекты пошагово. Промежуточный результат всегда остаётся защищён.\r\n\r\nПаттерн предлагает разбить процесс конструирования объекта на отдельные шаги (например, построитьСтены, вставитьДвери и другие). Чтобы создать объект, вам нужно поочерёдно вызывать методы строителя. Причём не нужно запускать все шаги, а только те, что нужны для производства объекта определённой конфигурации.\r\n\r\nЗачастую один и тот же шаг строительства может отличаться для разных вариаций производимых объектов. Например, деревянный дом потребует строительства стен из дерева, а каменный — из камня.\r\n','2020-07-20 00:00:00'),(5,1,'Текучий Интерфейс','Писать код, который легко читается, как предложения в естественном языке (вроде русского или английского).','2020-07-27 00:00:00'),(6,1,'Сущность-Атрибут-Значение','Модель Сущность-Атрибут-Значение (EAV) - это модель данных, предназначенная для описания сущностей, в которых количество атрибутов (свойств, параметров), характеризующих их, потенциально огромно, но то количество, которое реально будет использоваться в конкретной сущности, относительно мало.','2020-07-27 00:00:00');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('admin','user') NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',1,'admin','hash1','token1','2020-10-02 11:28:48'),(2,'user','user@gmail.com',1,'user','hash2','token2','2020-10-02 11:28:48'),(3,'leff','leffalt@gmail.com',0,'user','$2y$10$jKD.KqOTH4Z094ap2J1rd.4rmc.UwpfwN63IGFcAKy24.dU9golX.','a0f8b7713ec1552ee249bfe3304dcb0dbbb5c221e46e1285909577e43081bb714a5b61edc1793800','2020-10-03 20:03:18'),(4,'leon','admin@leffo.online',0,'user','$2y$10$BoCcRMl6lMpKGy4ueUwMH.QWie1ai2mbXQtNsVnGY1MrrSHhNL9tm','e080bb9445b1230ca2cc99574371291ecb4b109311b359b9c5ae492b593a4cc3a9a39984f858b9f1','2020-10-04 11:38:16'),(5,'serega','examle@mail.ru',0,'user','$2y$10$tov.6ypGK73IjoJQxyejGegaG3eYm5ijzBsrCdH/pQ.jkzlFLceBS','e7c8e8c846274c92b8875e67c5a05a823a4d3f41a92c23a349f47fda889a2d0439baa83da909d2cb','2020-10-04 11:45:42'),(6,'leska','leskaalt@gmail.com',0,'user','$2y$10$u6tdbAXABIJJ8j6h3ncpeutBoEkXs4XNSHgMGSCQ03tPfDLz0gHeW','a2d460e9f8e171646a248725ad37bfc460f45747e3a129d69f97f07e60d597b2be708b4c2bbe9d57','2020-10-04 11:52:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_activation_codes`
--

DROP TABLE IF EXISTS `users_activation_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_activation_codes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_activation_codes`
--

LOCK TABLES `users_activation_codes` WRITE;
/*!40000 ALTER TABLE `users_activation_codes` DISABLE KEYS */;
INSERT INTO `users_activation_codes` VALUES (1,4,'8e38e5252eced5ad15ac517547bda731'),(2,5,'60f40aefb8e7c5be8b2c7748d7bb3fee'),(3,6,'0762305e28b93fd3749e54b123cce03b');
/*!40000 ALTER TABLE `users_activation_codes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-04 17:54:48
