<?php
/* En PHP, il existe différents types de variables. Créez des variables de types
primitifs (boolean, entier, chaîne de caractères, nombre à virgule flottante) et
affectez-y des valeurs.
À l’aide de php, générer un tableau html qui contient dans son header trois
colonnes (type, nom, valeur) et dans son body, une ligne pour chacune des
variables et de leurs informations.
 */
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?php
      // les variables
      $nombre = 1; //int
      $nombre1 = 0.2; //float
      $mot = "chaine de caractères"; //string
      $boolean = true; //bool

      // le tableau
      $montableau = [
      "nombre" => ["valeur" => $nombre, "type" => "int"],
      "nombre1" => ["valeur" => $nombre1, "type" => "float"],
      "mot" => ["valeur" => $mot, "type" => "string"],
      "boolean" => ["valeur" => $boolean, "type" => "bool"]
      ];
   ?>
</head>
<body>
   
<table border="1">
      <thead>
         <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
         </tr>
      </thead>
      <tbody>
         <?php
         // Parcourir chaque variable du tableau
         foreach ($montableau as $nom => $info) {
            echo "<tr>";
            echo "<td>" . $info['type'] . "</td>";  // Affiche le type
            echo "<td>" . $nom . "</td>";           // Affiche le nom de la variable
            echo "<td>" . var_export($info['valeur'], true) . "</td>"; // Affiche la valeur
            echo "</tr>";
         }
         ?>
      </tbody>
   </table>
</body>
</html>
