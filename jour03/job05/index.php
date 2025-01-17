<?php /* Créez une string nommée stret affectez-y “Onnestpaslemeilleurquand
 onlecroitmaisquandonlesait”. Créez un dictionnaire nommé dic qui a
 commekeys“consonnes” et “voyelles”. Créez un algorithme qui parcourt,
 compte et stocke le nombre d'occurrences de consonnes et de voyelles de
 str. Affichez ces résultats dans un tableau html qui a comme thead
 “Voyelles” et “Consonnes”. */
?>

<?php
// Chaîne donnée
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Initialiser le dictionnaire pour stocker les résultats
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Liste des voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcourir la chaîne
for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];

    // Vérifier si le caractère est une voyelle
    if (in_array($char, $voyelles)) {
        $dic["voyelles"]++;
    }
    // Vérifier si le caractère est une consonne (lettre non-voyelle)
    elseif (ctype_alpha($char)) {
        $dic["consonnes"]++;
    }
}

// Afficher les résultats dans un tableau HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats Voyelles et Consonnes</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
