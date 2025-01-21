<?php /* Créez un algorithme qui affiche dans un tableau HTML l’ensemble des
arguments $_GET et les valeurs associées. */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Votre nom :</label>
   <input name="nom" id="nom" type="text" /><br>

   <label>Votre Prenom :</label>
   <input name="prenom" id="prenom" type="text" /><br>

   <label>Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>
<?php
if (isset($_GET)) {
        echo "<table border='1'>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Age</td>
            </tr>
            <tr>
                <td>{$_GET['nom']}</td>
                <td>{$_GET['prenom']}</td>
                <td>{$_GET['age']}</td>
            </tr>
                </table>";
}
?>
</body>
</html>