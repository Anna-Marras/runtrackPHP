<?php
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
error_reporting(E_ALL);

// La chaîne d'origine
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Inverser la chaîne
$reversedStr = strrev($str);

// Afficher la chaîne inversée
echo $reversedStr;
?>
