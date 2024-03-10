<?php 
function createUser($prenom,$nom,$email,$phone){
    include "../models/connexion_db.php";
    $query = $db->prepare("INSERT INTO users (prenom,nom,mail,phone) VALUES (?,?,?,?)");
    $query->execute(array($prenom,$nom,$email,$phone));
}

function getAllUsers(){
    include "../models/connexion_db.php";
    $query = $db->prepare("SELECT * FROM users");
    $query->execute();
    $users = $query->fetchAll();
    return $users;
}

function deleteUser($id){
    include "../models/connexion_db.php";
    $query = $db->prepare("DELETE FROM users WHERE id = ?");
    $query->execute(array($id));
}