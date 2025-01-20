<?php /* Affichez tous les nombres compris entre 0 et 1337 en mettant un retour à la
 ligne entre chaque nombre. Le nombre 42 doit être en gras et souligné. */

for ($i = 0; $i <= 1337; $i++) {
    if($i === 42) {
        echo "<strong><u>$i</u></strong><br>";
    } else {
        echo "$i<br>";
    }
}
 ?>

