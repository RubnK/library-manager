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



-- Insertion des données dans les tables

INSERT INTO `auteurs` (`id`, `nom`) VALUES
(1, 'Stefan Zweig'),
(2, 'Sylvain Tesson');

INSERT INTO `genres` (`id`, `nom`) VALUES
(1, 'Nouvelle'),
(2, 'Conte'),
(3, 'Roman'),
(4, 'Mythe'),
(5, 'Légende'),
(6, 'Biographie'),
(7, 'Autobiographie'),
(8, 'Chronologie'),
(9, 'Apologue'),
(10, 'Journal'),
(11, 'Bande-dessinée'),
(12, 'Manga');

INSERT INTO `books` (`id`, `nom`, `auteur_id`, `isbn`, `description`, `prix`, `link`, `genre_id`) VALUES
(1, 'Le Joueur d\'échecs', 1, '9782253057840', 'Qui est cet inconnu capable d\'en remontrer au grand Czentovic, le champion mondial des échecs, véritable prodige aussi fruste qu\'antipathique ? Peut-on croire, comme il l\'affirme, qu\'il n\'a pas joué depuis plus de vingt ans ? Voilà un mystère que les passagers oisifs de ce paquebot de luxe aimeraient bien percer.\r\nLe narrateur y parviendra. Les circonstances dans lesquelles l\'inconnu a acquis cette science sont terribles. Elles nous reportent aux expérimentations nazies sur les effets de l\'isolement absolu, lorsque, aux frontières de la folie, entre deux interrogatoires, le cerveau humain parvient à déployer ses facultés les plus étranges.\r\nUne fable inquiétante, fantastique, qui, comme le dit le personnage avec une ironie douloureuse, « pourrait servir d\'illustration à la charmante époque où nous vivons ».', '2.74', 'le-joueur-dechecs', 3),
(2, 'Le Monde d\'hier : Souvenirs d\'un Européen', 1, '9782253140405', 'Rédigé en 1941, alors que, émigré au Brésil, Stefan Zweig avait déjà décidé de mettre fin à ses jours, \"Le Monde d\'hier\" est l\'un des plus grands livres-témoignages de notre époque. Zweig y retrace l\'évolution de l\'Europe de 1895 à 1941, le destin d\'une génération confrontée brutalement à l\'Histoire et à toutes les « catastrophes imaginables ».\r\nIl évoque avec bonheur sa vie de bourgeois privilégié dans la Vienne d\'avant 1914 et quelques grandes figures qui furent ses amis : Schnitzler, Rilke, Romain Rolland, Freud ou Valéry. Mais il donne aussi à voir la montée du nationalisme, le bouleversement des idées d\'après 14-18 puis l\'arrivée au pouvoir d\'Hitler, l\'horreur de l\'antisémitisme d\'État et, pour finir, « le suicide de l\'Europe ».\r\nAvec le recul, la lucidité de son testament intellectuel frappe le lecteur d\'aujourd\'hui, de même que sa dénonciation des nationalismes et son plaidoyer pour l\'Europe.', '9.70', 'le-monde-dhier-souvenir-dun-europeen', 3),
(3, 'Ivresse de la métamorphose', 1, '9782253064602', 'Dernière oeuvre de Stefan Zweig, non publiée de son vivant, ce véritable testament romanesque nous transporte dans l\'Autriche de l\'entre-deux-guerres, déjà convoitée par l\'Allemagne nazie. Christine, modeste employée des Postes, a vu mourir son père et son frère. L\'invitation impromptue d\'une riche tante d\'Amérique achève de la révolter contre la médiocrité de sa vie, sentiment qu\'elle partage bientôt avec Ferdinand, ancien combattant mutilé, devenu chômeur.\r\nMais l\'argent et la puissance mènent le monde, non pas l\'amour. Devant le lent naufrage de l\'Europe dans la barbarie, le couple s\'enfonce dans une désespérance qui semble annoncer le suicide, en 1942, du grand écrivain autrichien, auteur d\'Amok et de La Confusion des sentiments.', '8.70', 'ivresse-de-la-metamorphose', 3),
(4, 'Lettre d\'une inconnue', 1, '9782253175476', 'Un écrivain viennois apprend en lisant son courrier qu’une femme l’aime en secret d’un amour absolu depuis des années.\r\nUne nuit, un voyageur rencontre dans un bar un homme autrefois dominateur, aujourd’hui humilié par une fille à matelots.\r\nCes deux nouvelles publiées en 1922 témoignent de l’art de Stefan Zweig pour dépeindre les tourments de l’amour non partagé, la passion qui brûle les cœurs et détruit les vies.', '1.90', 'lettre-dune-inconnue', 3),
(5, 'Vingt-quatre heures de la vie d\'une femme', 1, '9782253060222', 'Scandale dans une pension de famille « comme il faut », sur la Côte d\'Azur du début du siècle : Mme Henriette, la femme d\'un des clients, s\'est enfuie avec un jeune homme qui pourtant n\'avait passé là qu\'une journée... Seul le narrateur tente de comprendre cette « créature sans moralité », avec l\'aide inattendue d\'une vieille dame anglaise très distinguée, qui lui expliquera quels feux mal éteints cette aventure a ranimés chez elle.\r\nCe récit d\'une passion foudroyante, bref et aigu comme les affectionnait l\'auteur d\'Amok et du Joueur d\'échecs, est une de ses plus incontestables réussites.', '4', 'vingt-quatre-heures-de-la-vie-dune-femme', 3),
(6, 'Dans les forêts de Sibérie', 2, '9782072836800', 'Assez tôt, j\'ai compris que je n\'allais pas pouvoir faire grand-chose pour changer le monde. Je me suis alors promis de m\'installer quelque temps, seul, dans une cabane. Dans les forêts de Sibérie.  J\'ai acquis une isba de bois, loin de tout, sur les bords du lac Baïkal.  Là, pendant six mois, à cinq jours de marche du premier village, perdu dans une nature démesurée, j\'ai tâché de vivre dans la lenteur et la simplicité. Je crois y être parvenu.  Deux chiens, un poêle à bois, une fenêtre ouverte sur un lac suffisent à l\'existence.  Et si la liberté consistait à posséder le temps ? Et si la richesse revenait à disposer de solitude, d\'espace et de silence - toutes choses dont manqueront les générations futures ?  Tant qu\'il y aura des cabanes au fond des bois, rien ne sera tout à fait perdu.', '8.90', 'dans-les-forets-de-siberie', 3),
(7, 'Sur les Chemins noirs', 2, '9782072823428', 'Il m\'aura fallu courir le monde et tomber d\'un toit pour saisir que je disposais là, sous mes yeux, dans un pays si proche dont j\'ignorais les replis, d\'un réseau de chemins campagnards ouverts sur le mystère, baignés de pur silence, miraculeusement vides. \r\nLa vie me laissait une chance, il était donc grand temps de traverser la France à pied sur mes chemins noirs. Là, personne ne vous indique ni comment vous tenir, ni quoi penser, ni même la direction à prendre', '7.80', 'sur-les-chemins-noirs', 3);



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
