<?php /* Créez un formulaire qui contient une liste déroulante nommée “style” et un
bouton submit. La liste déroulante doit proposer au moins “style1”, “style2”
et “style3”. Créez trois fichiers CSS nommés “style1.css”, “style2.css” et
“style3.css”. Chaque style doit avoir des effets sur le design du formulaire, la
couleur de background, la police d’écriture..
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc
changer le visuel. */
?>

<?php
// Détermine le style sélectionné (par défaut : style1)
$style = isset($_GET['style']) ? $_GET['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec styles</title>
    <!-- Lien dynamique vers le fichier CSS -->
    <link rel="stylesheet" id="style-css" href="<?= htmlspecialchars($style) ?>.css">
</head>
<body>
    <form method="GET">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $style === 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $style === 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $style === 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>

