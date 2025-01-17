<?php /*  Créez une chaîne de caractères str qui contient “Leschosesquel'on
 Possèdefinissentparnousposséder.”. Créez un algorithme qui parcourt et
 écrit cette chaine à l’envers. */
?>

<?php
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
error_reporting(E_ALL);

// La chaîne d'origine
$str = "Les choses que l'on Possede finissent par nous posseder.";

// Inverser la chaîne
$reversedStr = strrev($str);

// Afficher la chaîne inversée
echo $reversedStr;
?>
