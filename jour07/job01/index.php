<?php  /* Créez une variable nommée “nbvisites”. À chaque fois que la page est visitée,
ajoutez 1. Affichez le contenu de cette variable.
Ajoutez un bouton “reset” qui permet de réinitialiser ce compteur. */

session_start();

// Initialiser ou incrémenter le compteur
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites']++;

// Réinitialiser le compteur
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 01 - Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?= $_SESSION['nbvisites'] ?></p>
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>