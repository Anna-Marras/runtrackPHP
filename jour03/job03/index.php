<?php
// Déclaration de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère est une voyelle
    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
        echo $str[$i];
    }
}
?>
