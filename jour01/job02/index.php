<?php  /* Dans ce fichier, créez une variable nommée str. Affectez-lui la valeur
 “LaPlateforme”. Affichez le contenu de la variable str.
 Créez une variable str2contenant “Vive” et une variable str3 contenant“!”.
 Affichez “ViveLaPlateforme!” en concaténant l’ensemble de ces variables.
 Créez une variable nommée val. Affectez à cette variable la valeur 6.
 Affichez le contenu de la variable. Ajoutez 4 à cette variable. Affichez à
 nouveau le contenu.
 Créez une variable myBool, affectez à cette variable true, affichez le contenu
 de la variable. Affectez falseà la variable et affichez à nouveau le contenu */
 ?>

<?php
// 1. Créer une variable str et afficher son contenu
$str = "LaPlateforme";
echo $str . "<br>";

// 2. Créer les variables str2 et str3, et afficher leur concaténation
$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3 . "<br>";

// 3. Créer une variable val, afficher son contenu, ajouter 4 et réafficher
$val = 6;
echo $val . "<br>";
$val += 4;
echo $val . "<br>";

// 4. Créer une variable myBool, afficher son contenu, changer sa valeur et réafficher
$myBool = true;
echo $myBool ? "true" : "false"; // Affiche "true"
echo "<br>";

$myBool = false;
echo $myBool ? "true" : "false"; // Affiche "false"
?>
