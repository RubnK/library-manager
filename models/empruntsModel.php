<?php 

function getAllEmpruntsByBook($id){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM emprunts JOIN users ON emprunts.user_id = users.id WHERE book_id = ?;");
    $query->execute(array($id));
    $emprunts = $query->fetchAll();
    return $emprunts;
}

function returnBook($id){
    include "../models/connexion_db.php";
    $query = $db->prepare("UPDATE emprunts SET returned = 1 WHERE id = ?");
    $query->execute(array($id));
}

function emprunter($book_id,$user_id,$date){
    include "../models/connexion_db.php";
    $query = $db->prepare("INSERT INTO emprunts (book_id,user_id,date) VALUES (?,?,?)");
    $query->execute(array($book_id,$user_id,$date));
}

function getAllEmpruntes(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM emprunts JOIN v_books ON emprunts.book_id = v_books.id JOIN users ON users.id = emprunts.user_id WHERE returned = 0;");
    $query->execute();
    $emprunts = $query->fetchAll();
    return $emprunts;
}