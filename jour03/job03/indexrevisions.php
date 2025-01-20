<?php /* Créez une string nommée str et affectez-y “I'msorryDaveI'mafraidIcan't
 dothat”. Créez un algorithme qui parcourt cette chaîne et affiche
 uniquement les voyelles. */

$str = "I'msorryDaveI'mafraidIcan'tdothat"
$longueur = strlen($str);

for ($i = 0; $i < $longueur; $i++) {
    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
        echo $str[$i];
    }
}

?>