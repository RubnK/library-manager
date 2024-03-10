<?php
function getAuthors(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM auteurs ORDER BY nom");
    $query->execute();
    $authors = $query->fetchAll();
    return $authors;
}

function addAuteur($nom){
    include "../models/connexion_db.php";
    $query = $db->prepare("INSERT INTO auteurs (nom) VALUES (?)");
    $query->execute(array($nom));
}

