<?php /* Créez un formulaire de type GET (se demander, pourquoi pas GET ?) avec un
champ nommé nombre.

Après validation du formulaire :
➔ si la valeur entrée est un nombre pair, afficher “Nombre pair”
➔ si c’est un nombre impair, afficher “Nombre impair” */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Nombre:</label>
   <input name="nombre" id="nombre" type="text" /><br>

   <button type="submit">Valider</button>
</form>
<?php

if ($_GET["nombre"] % 2 === 0) {
    echo $_GET["nombre"]." est un nombre pair";
  }
else {
    echo $_GET["nombre"]." est nombre impair";
  }

?>
</body>
</html>