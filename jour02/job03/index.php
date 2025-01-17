<?php /*Affichez les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre.
 Si le nombre est entre 0 et 20 : écrire en italique.
 Si le nombre est compris entre 25 et 50 : souligner le nombre.
 Affichez “La Plateforme_” à la place de 42. */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 3</title>
</head>
<body>
    <?php
    // Boucle pour parcourir les nombres de 0 à 100
    for ($i = 0; $i <= 100; $i++) {
        // Remplacer 42 par "La Plateforme_"
        if ($i === 42) {
            echo "La Plateforme_<br>";
        } 
        // Nombre entre 0 et 20 en italique
        elseif ($i >= 0 && $i <= 20) {
            echo "<em>$i</em><br>";
        } 
        // Nombre entre 25 et 50 souligné
        elseif ($i >= 25 && $i <= 50) {
            echo "<u>$i</u><br>";
        } 
        // Autres nombres affichés normalement
        else {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
