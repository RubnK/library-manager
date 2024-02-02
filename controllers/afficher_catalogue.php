<?php 
$page_title = "Catalogue";
include_once "../views/navbar.php";
include_once "../models/booksModel.php";


$AllAssos = getAllBooks();  // Récupère tous les livres
include_once "../views/catalogueView.php";