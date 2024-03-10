<?php 
function getAllBooks($search, $premier){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM v_books WHERE titre LIKE CONCAT('%', ?, '%') OR auteur LIKE CONCAT('%', ?, '%') OR isbn LIKE CONCAT('%', ?, '%') ORDER BY titre LIMIT $premier,12");
    $query->execute(array($search,$search,$search));
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

function getNbBooks($search){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT COUNT(*) FROM v_books WHERE titre LIKE CONCAT('%', ?, '%') OR auteur LIKE CONCAT('%', ?, '%') OR isbn LIKE CONCAT('%', ?, '%')");
    $query->execute(array($search,$search,$search));
    $nbBooks = $query->fetch();
    return $nbBooks;
}

function addBook($titre,$isbn,$description,$prix,$auteur,$genre,$link){
    include "../models/connexion_db.php";
    $query = $db->prepare("INSERT INTO v_books (titre,isbn,description,prix,link,auteur_id,genre_id) VALUES (?,?,?,?,?,?,?)");
    $query->execute(array($titre,$isbn,$description,$prix,$link,$auteur,$genre));
    $query = $db->prepare("INSERT INTO books_backup (nom,isbn,description,prix,link,auteur_id,genre_id) VALUES (?,?,?,?,?,?,?)");
    $query->execute(array($titre,$isbn,$description,$prix,$link,$auteur,$genre));
}

function getGenres(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM genres ORDER BY nom");
    $query->execute();
    $genres = $query->fetchAll();
    return $genres;
}

function getBookByID($id){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM v_books WHERE id = ?");
    $query->execute(array($id));
    $book = $query->fetch();
    return $book;
}

function deleteBook($id, $link){
    unlink("../img/couv/".$link.".webp");
    include "../models/connexion_db.php";
    $query = $db->prepare("DELETE FROM books WHERE id = ?");
    $query->execute(array($id));
}