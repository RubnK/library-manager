<?php 
include_once "../models/usersModel.php";
createUser($_POST['prenom'],$_POST['nom'],$_POST['email'],$_POST['phone']);
header('Location: /users');