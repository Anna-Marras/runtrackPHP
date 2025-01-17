<?php /*Affichez les nombres de 1 à 100 en mettant un retour à la ligne.
 Si le nombre est un multiple de 3, affichez “Fizz”
 Si le nombre est un multiple de 5, affichez “Buzz”
 Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 4</title>
</head>
<body>
    <?php
    // Boucle pour parcourir les nombres de 1 à 100
    for ($i = 1; $i <= 100; $i++) {
        // Vérifie si le nombre est un multiple de 3 et de 5
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz<br>";
        } 
        // Vérifie si le nombre est un multiple de 3
        elseif ($i % 3 === 0) {
            echo "Fizz<br>";
        } 
        // Vérifie si le nombre est un multiple de 5
        elseif ($i % 5 === 0) {
            echo "Buzz<br>";
        } 
        // Affiche les autres nombres normalement
        else {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
