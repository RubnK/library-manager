<?php 
$page_title = "Catalogue";
include_once "../views/navbar.php";
include_once "../models/booksModel.php";

if(!isset($_GET['search'])) {
    $_GET['search'] = "";
}
$search = $_GET['search'];

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = $_GET['page'];
}else{
    $currentPage = 1;
}
$parPage = 12;
$nbBooks = getNbBooks($_GET['search'])['0']; // Récupère le nombre de livres
$pages = ceil($nbBooks / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$AllBooks = getAllBooks($_GET['search'], $premier);  // Récupère tous les livres
include_once "../views/catalogueView.php";