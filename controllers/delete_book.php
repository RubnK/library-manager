<?php 
include_once "../models/booksModel.php";
deleteBook($_GET['id'], $_GET['link']);
header('Location: /books');