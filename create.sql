DROP DATABASE IF EXISTS bibliotheque;
CREATE DATABASE bibliotheque;
USE bibliotheque;



-- Création des tables

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL
);

CREATE TABLE `genres` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL
);

CREATE TABLE `books` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `genre_id` int(11) NOT NULL,
  FOREIGN KEY (`auteur_id`) REFERENCES `auteurs`(`id`),
  FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`)
);

CREATE TABLE `books_backup` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `genre_id` int(11) NOT NULL,
  FOREIGN KEY (`auteur_id`) REFERENCES `auteurs`(`id`),
  FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`)
);

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL
);

CREATE TABLE `emprunts` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `rendu` tinyint(1) NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`book_id`) REFERENCES `books`(`id`)
);

-- Création des vues

CREATE VIEW `v_books` AS
SELECT `books`.`id` AS `id`, 
`books`.`nom` AS `titre`, 
`books`.`isbn` AS `isbn`,
`books`.`description` AS `description`,
`books`.`link` AS `link`,
`books`.`auteur_id` AS `auteur_id`,
`auteurs`.`nom` AS `auteur`,
`books`.`genre_id` AS `genre_id`,
`genres`.`nom` AS `genre`,
`books`.`prix` AS `prix` 
from `books`
JOIN `auteurs` ON `auteurs`.`id` = `books`.`auteur_id`
JOIN `genres` ON `genres`.`id` = `books`.`genre_id`;
