<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 5 - Nombres Premiers</title>
</head>
<body>
    <?php
    // Fonction pour vérifier si un nombre est premier
    function isPrime($number) {
        if ($number < 2) {
            return false; // Les nombres inférieurs à 2 ne sont pas premiers
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false; // Divisible par un autre nombre, donc pas premier
            }
        }
        return true;
    }

    // Boucle pour parcourir les nombres de 2 à 1000
    for ($i = 2; $i <= 1000; $i++) {
        if (isPrime($i)) {
            echo "$i<br>"; // Affiche le nombre premier suivi d'un retour à la ligne
        }
    }
    ?>
</body>
</html>
