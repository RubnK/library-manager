<?php
include_once "../models/booksModel.php";
$book = getBookByLink($_GET['url']);
$page_title = $book['titre'];
include_once "../views/navbar.php";
$isbn = substr($book['isbn'], 0, 3) . '-' . substr($book['isbn'], 3, 1) . '-' . substr($book['isbn'], 4, 2) . '-' . substr($book['isbn'], 6, 6) . '-' . substr($book['isbn'], 12, 1);
include_once "../views/bookView.php";