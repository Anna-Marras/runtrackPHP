<?php /* Créez un formulaire qui contient un input de type text et un bouton. Lorsque
l’on valide le formulaire, le contenu est ajouté dans une variable de session.
Affichez l’ensemble des prénoms.
Ajoutez un bouton “reset” qui permet de réinitialiser la liste. */

session_start();

// Ajouter un prénom à la session
if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

// Réinitialiser la liste
if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03 - Liste des prénoms</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
    <ul>
        <?php
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        }
        ?>
    </ul>
</body>
</html>