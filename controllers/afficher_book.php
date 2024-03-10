<?php
include_once "../models/booksModel.php";
include_once "../models/empruntsModel.php";
include_once "../models/usersModel.php";
$book = getBookByLink($_GET['url']);
$emprunts = getAllEmpruntsByBook($book['id']);
$users = getAllUsers();
$page_title = $book['titre'];
$date = date('Y-m-d');
include_once "../views/navbar.php";
$isbn = substr($book['isbn'], 0, 3) . '-' . substr($book['isbn'], 3, 1) . '-' . substr($book['isbn'], 4, 3) . '-' . substr($book['isbn'], 7, 5) . '-' . substr($book['isbn'], 12, 1);
include_once "../views/bookView.php";