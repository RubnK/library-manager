<?php
include "../models/booksModel.php";
$titre = $_POST['titre'];
$link = $titre;
$link = htmlentities($link, ENT_NOQUOTES, 'utf-8');
$link = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $link);
$link = strtolower($link);
$link = str_replace( array( '%', '@', '\'', ';', '<', '>', ',', ':' ), '',$link);
$link = str_replace( array( ' : ', '  ', ' '), '-',$link);
$isbn = $_POST['isbn'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$auteur = $_POST['auteur'];
$genre = $_POST['genre'];
addBook($titre,$isbn,$description,$prix,$auteur,$genre,$link);