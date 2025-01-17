<?php /*  Créez une string nommée str et affectez-y le texte “Touscesinstants
 serontperdusdansletempscommeleslarmessouslapluie.” Parcourir
 cette chaîne en affichant seulement un caractère sur deux. */
?>

<?php
// Créer la chaîne de caractères
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne et afficher un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>

<?php
$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i=0;

while(isset($str[$i])){
    if($i % 2 === 0 || $i % 2 === 0)
        echo $str[$i];
    }
    $i++;

?> 
