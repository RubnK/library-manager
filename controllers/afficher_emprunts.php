<?php 
$page_title = "Empruntés";
include_once "../models/empruntsModel.php";
include_once "../views/navbar.php";
$emprunts = getAllEmpruntes();
include_once "../views/empruntsView.php";