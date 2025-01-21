<?php /* Créez une fonction nommée “bubblesort”. Cette fonction prend en
paramètres un tableau nommé “tab” contenant plusieurs chaînes de
caractères et un booléen nommé “croissant”. Si “croissant” vaut true, la
fonction doit retourner le tableau trié par ordre croissant, sinon la fonction
doit retourner le tableau trié par ordre décroissant.
Exemple : Si tab contient [“abc”, “ghi”, “def”] le résultat sera “abc”, “def”,
“ghi” par ordre croissant et “ghi”, “def”, “abc” par ordre décroissant. */
?>

<?php
function bubblesort($tab, $croissant) {
    $n = count($tab); // Taille du tableau
    
    // Tri par ordre croissant
    if ($croissant) {
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($tab[$j] > $tab[$j + 1]) {
                    // Échange des éléments si ils ne sont pas dans l'ordre
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    // Tri par ordre décroissant
    else {
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($tab[$j] < $tab[$j + 1]) {
                    // Échange des éléments si ils ne sont pas dans l'ordre
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }

    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
$tri_croissant = bubblesort($tab, true);
$tri_decroissant = bubblesort($tab, false);

echo "Ordre croissant: " . implode(", ", $tri_croissant) . "<br>";
echo "Ordre décroissant: " . implode(", ", $tri_decroissant);
?>
