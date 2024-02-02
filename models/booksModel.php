<?php 
function getAllBooks(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM v_books ORDER BY titre");
    $query->execute();
    $books = $query->fetchAll();
    return $books;
}

function getBookByLink($link){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM v_books WHERE link = ?");
    $query->execute(array($link));
    $book = $query->fetch();
    return $book;
}

function addBook($titre,$isbn,$description,$prix,$auteur,$genre,$link){
    include "../models/connexion_db.php";
    $query = $db->prepare("INSERT INTO v_books (titre,isbn,description,prix,link,auteur_id,genre_id) VALUES (?,?,?,?,?,?,?)");
    $query->execute(array($titre,$isbn,$description,$prix,$link,$auteur,$genre));
}

function getAuthors(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM auteurs ORDER BY titre");
    $query->execute();
    $authors = $query->fetchAll();
    return $authors;
}

function getGenres(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM genres ORDER BY titre");
    $query->execute();
    $genres = $query->fetchAll();
    return $genres;
}