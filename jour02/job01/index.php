<?php /* Affichez tous les nombres compris entre 0 et 1337 en mettant un retour à la
 ligne entre chaque nombre. Le nombre 42 doit être en gras et souligné. */
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des nombres</title>
</head>
<body>
    <?php
    // Boucle pour parcourir les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Vérifier si le nombre est 42
        if ($i === 42) {
            // Affiche le nombre 42 en gras et souligné
            echo "<strong><u>$i</u></strong><br>";
        } else {
            // Affiche tous les autres nombres
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
