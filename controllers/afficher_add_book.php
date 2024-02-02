<?php 
$page_title = "Ajouter un livre";
include_once "../views/navbar.php";
include_once "../models/booksModel.php";
$auteurs = getAuthors();
$genres = getGenres();
include_once "../views/addBookView.php";