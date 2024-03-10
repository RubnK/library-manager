<?php 
$page_title = "Utilisateurs";
include_once "../views/navbar.php";
include_once "../models/usersModel.php";
$AllUsers = getAllUsers();  // Récupère tous les utilisateurs
include_once "../views/usersView.php";