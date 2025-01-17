<?php /*En PHP, il existe différents types de variables. Créez des variables de types
 primitifs (boolean, entier, chaîne de caractères, nombre à virgule flottante) et
 affectez-y des valeurs.
 À l’aide de php, générer un tableau html qui contient dans son header trois
 colonnes (type, nom, valeur) et dans son body, une ligne pour chacune des
 variables et de leurs informations. */
?>

<?php
// Déclaration des variables de types primitifs
$booleanVar = true;            // Variable de type booléen
$intVar = 42;                  // Variable de type entier
$stringVar = "Hello, World!";  // Variable de type chaîne de caractères
$floatVar = 3.14;              // Variable de type nombre à virgule flottante

// Génération du tableau HTML
echo "<table border='1'>";
echo "<thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
      </thead>";

echo "<tbody>";

// Affichage de chaque variable avec son type, nom et valeur
echo "<tr>
        <td>" . gettype($booleanVar) . "</td>
        <td>booleanVar</td>
        <td>" . $booleanVar . "</td>
      </tr>";

echo "<tr>
        <td>" . gettype($intVar) . "</td>
        <td>intVar</td>
        <td>" . $intVar . "</td>
      </tr>";

echo "<tr>
        <td>" . gettype($stringVar) . "</td>
        <td>stringVar</td>
        <td>" . $stringVar . "</td>
      </tr>";

echo "<tr>
        <td>" . gettype($floatVar) . "</td>
        <td>floatVar</td>
        <td>" . $floatVar . "</td>
      </tr>";

echo "</tbody>";
echo "</table>";
?>
