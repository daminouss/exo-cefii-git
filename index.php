<?php
include 'PersonnageManager.php';
include 'header.html';
include 'home.html';
include 'form.html';

//Assignation de la page d'accueil par defaut pour éviter de rentrer dans le "default" du switch.
$page = "produits";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'add':
        include('add.php');
        break;
    case 'charlist':
        include('charactersList.php');
        break;
    case 'classlist':
        include('classList.php');
        break;
    case 'explorer':
        include('Explorer.php');
        break;
    case 'Personnage':
        include('Personnage.php');
        break;
    case 'Personnage manager':
        include('PersonnageManager.php');
        break;
    case 'warior':
        include('Warrior.php');
        break;
    case 'worker':
        include('Worker.php');
        break;
    default:
        echo 'Erreur 404';
        break;
}

include('home.html');