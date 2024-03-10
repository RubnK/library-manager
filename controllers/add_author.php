<?php
include_once "../models/auteursModel.php";
$nom = $_POST['nom'];
addAuteur($nom);
header('Location: /add_infos');