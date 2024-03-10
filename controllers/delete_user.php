<?php 
include_once "../models/usersModel.php";
deleteUser($_GET['id']);
header('Location: /users');