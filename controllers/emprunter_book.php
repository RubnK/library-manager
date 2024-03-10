<?php 
include_once "../models/booksModel.php";
include_once "../models/empruntsModel.php";
$link = getBookByID($_POST['book'])['link'];
emprunter($_POST['book'],$_POST['user'],$_POST['date']);
header('Location: /books/'.$link);