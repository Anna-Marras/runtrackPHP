<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 2</title>
</head>
<body>
    <?php
    // Boucle pour parcourir les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Exclure les nombres 26, 37, 88 et 1111
        if ($i === 26 || $i === 37 || $i === 88 || $i === 1111) {
            continue; // Sauter ces nombres
        }
        // Affiche les autres nombres avec un retour à la ligne
        echo "$i<br>";
    }
    ?>
</body>
</html>
