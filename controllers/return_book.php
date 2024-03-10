<?php 
include_once "../models/booksModel.php";
include_once "../models/empruntsModel.php";
$book = getBookByID($_GET['id']);
returnBook($_GET['emprunt_id']);
header('Location: books/'.$book['link']);