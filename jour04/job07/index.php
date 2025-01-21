<?php /* Créez un formulaire avec deux entrées largeur et hauteur.
Vous devez créer un algorithme qui affiche, à la validation du formulaire, une
maison telle que :
Si on entre les valeurs : largeur = 10 et hauteur =5 dans les
champs, la maison qui s’affiche doit ressembler à l’exemple
ici : */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Largeur:</label>
   <input name="largeur" id="largeur" type="text" /><br>

   <label>Hauteur:</label>
   <input name="hauteur" id="hauteur" type="text" />
   
   <button type="submit">Valider</button>
</form>
<?php

if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {

    // for ($j = 1; $j <= $_GET["hauteur"]; $j++) { 
    //     echo "/";
    //     for ($i = 1; $i <= $_GET["largeur"]-1; $i++) { 
    //         echo "_";
    //     }
    //     echo "\<br>";
    // }
    //

    for ($i = 1; $i <= $_GET["largeur"]; $i++) {
        echo "_";
    }
    echo "<br>";

    for ($j = 1; $j <= $_GET["hauteur"]; $j++) { 
        echo "|";
        for ($i = 1; $i <= $_GET["largeur"]; $i++) { 
            echo "&nbsp&nbsp";
        }
        echo "|<br>";
    }

    for ($i = 1; $i <= $_GET["largeur"]; $i++) {
        echo "_";
    }
}

?>
</body>
</html>