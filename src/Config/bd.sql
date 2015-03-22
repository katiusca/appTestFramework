CREATE DATABASE IF NOT EXISTS `mpwar_fwk`;

USE mpwar_fwk;


CREATE TABLE IF NOT EXISTS `users`
(
	`id` INT(10) PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`lastName` VARCHAR(255) NOT NULL
);

INSERT into `users` VALUE (12345,'Katiusca','Catari');