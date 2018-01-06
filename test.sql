# Create testDB
CREATE USER 'dev'@'localhost' IDENTIFIED BY 'dev';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON *.* TO 'dev'@'localhost';

# Create DB
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

# Create Table
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 CHARSET=utf8;

# Add Data
insert  into `users`(`id`,`name`,`age`,`email`) values 
(1,'L',20,'l@gmail.com');