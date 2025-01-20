<?php /* Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
 Parcourez ce tableau et affichez “Xestpaire<br/>” ou “Xestimpaire<br/>”,
 X prenant tour à tour chacune des valeurs comprises dans ce tableau. */ 
 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
        $tableau = [200, 204, 173, 98, 171, 404, 459];

        foreach ($tableau as $valeur) {
            if ($valeur % 2 == 0) {
            echo "$valeur estpaire<br>"; }
            else {
            echo "$valeur estimpair<br>"; }
        }
    ?>
 </body>
 </html>