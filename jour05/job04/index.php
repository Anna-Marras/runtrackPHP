<?php /* Créez une fonction nommée “calcule()” qui prend 3 paramètres :
➔ le premier est un nombre,
➔ le deuxième est un caractère contenant le type d’opération (+ ,-,*, /,%)
➔ le troisième est un nombre
La fonction doit retourner le résultat de l’opération. */
?>

<?php
$nombre1 = 2;
$nombre2 = 3;
$operateur = "-";
function calcule($nombre1,$operateur,$nombre2) {
    if ($operateur == "+") {
        $res = $nombre1 + $nombre2;
        return $res;
    }
    elseif ($operateur == "*") {
        $res = $nombre1 * $nombre2;
        return $res;
    }
    elseif ($operateur == "-") {
        $res = $nombre1 - $nombre2;
        return $res;
    }
    elseif ($operateur == "/") {
        $res = $nombre1 / $nombre2;
        return $res;
    }
    elseif ($operateur == "%") {
        $res = $nombre1 % $nombre2;
        return $res;
    }
    
}
echo calcule($nombre1,$operateur,$nombre2);

?>