<?php
// La chaîne d'origine
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Calculer la longueur de la chaîne
$len = strlen($str);

// Si la chaîne contient plus d'un caractère, on procède à l'algorithme
if ($len > 1) {
    // On crée une variable vide pour la nouvelle chaîne
    $newStr = '';

    // Parcourir la chaîne
    for ($i = 1; $i < $len; $i++) {
        // Ajouter chaque caractère à la nouvelle chaîne, en décalant
        $newStr .= $str[$i];
    }

    // Ajouter le premier caractère à la fin
    $newStr .= $str[0];

    // Afficher la chaîne modifiée
    echo $newStr;
} else {
    echo $str; // Si la chaîne est trop courte, on l'affiche telle quelle
}
?>
