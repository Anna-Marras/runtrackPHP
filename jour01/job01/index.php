<?php /*Dans ce fichier, créez une variable nommée str. Affectez-lui la valeur
“LaPlateforme”. Affichez le contenu de la variable str.
Créez une variable str2 contenant “Vive” et une variable str3 contenant “!”.
Affichez “Vive LaPlateforme !” en concaténant l’ensemble de ces variables.
Créez une variable nommée val. Affectez à cette variable la valeur 6.
Affichez le contenu de la variable. Ajoutez 4 à cette variable. Affichez à
nouveau le contenu.
Créez une variable myBool, affectez à cette variable true, affichez le contenu
de la variable. Affectez false à la variable et affichez à nouveau le contenu
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "La plateforme" . "<br>";
    $str2 = "Vive";
    $str3 = "!";
    $val = 6;
    $mybool = true;
    $mybool = false ;

    echo $str ;
    echo $str2 . " " . $str . " " . $str3 . "<br>" ;
    echo $val . "<br>";
    echo $val + 4 . "<br>";
    echo $mybool ? "true" : "False" . "<br>";
    echo $mybool ? "false" : "true";

    ?>
</body>
</html>