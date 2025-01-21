<?php /* Créez un formulaire de connexion de type POST (se demander, pourquoi pas
GET ?) ayant deux champs username et password.

Après validation du formulaire :
➔ si le username est “John” et le password est “Rambo” afficher “c’est
pas ma guerre”
➔ sinon afficher “votre pire cauchemar” */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="post">
   <label>Username:</label>
   <input name="username" id="username" type="text" /><br>

   <label>Password :</label>
   <input name="password" id="password" type="text" />

   <button type="submit">Valider</button>
</form>
<?php

if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
             echo "c'est pas ma guerre";
}
else {
             echo "votre pire cauchemar";
         }


?>
</body>
</html>