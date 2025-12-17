<?php
//require_once 'controller/ClientController.class.php';
//require_once 'controller/especeController.class.php';

$action = $_GET['chx1'] ?? 'accueil';

switch ($action) {
    case 'accueil':
        include 'view/header.php'; 
        include 'view/v_accueil.html'; 
        break;

    case 'procedure':
        include("controller/procedureController.php");
        break;

    default:
        echo "Action non reconnue.";
}

/* 

Découverte des procédures stockées : 

10. Expliquer pourquoi il est préférable de faire des procédure stockées à la place de requêtes ou de vues

L'avantage principal des procédures stockées par rapport aux requêtes ou aux vues réside dans leur capacité à encapsuler la logique métier directement au sein de la base de données qui est bien plus proche des données et plus rapide car faite dans un langage bas niveau fait pour les entrées/sorties de données. Cela permet également de réduire la charge réseau et la quantité de données transférées entre l'application et la base de données, car une seule commande peut exécuter une procédure stockée complexe.
*/