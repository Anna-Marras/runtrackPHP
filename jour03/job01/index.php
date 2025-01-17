<?php /*  Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
 Parcourez ce tableau et affichez “Xestpaire<br/>” ou “Xestimpaire<br
 />”, X prenant tour à tour chacune des valeurs comprises dans ce tableau. */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 01</title>
</head>
<body>
    <?php
    // Tableau contenant les nombres
    $numbers = [200, 204, 173, 98, 171, 404, 459, 606, 153];

    // Parcours du tableau et vérification de la parité
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            // Si le nombre est pair
            echo "$number est paire<br />";
        } else {
            // Si le nombre est impair
            echo "$number est impaire<br />";
        }
    }
    ?>
</body>
</html>
