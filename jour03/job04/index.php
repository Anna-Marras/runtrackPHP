<?php
// Déclaration de la chaîne
$str = "Dans l'espace, personne ne vous entend crier";

// Compter le nombre de caractères dans la chaîne
$charCount = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $charCount++;
}

// Afficher le nombre total de caractères
echo "Le nombre total de caractères est : " . $charCount;
?>
