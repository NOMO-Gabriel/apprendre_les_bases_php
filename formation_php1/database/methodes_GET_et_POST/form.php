<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendre a faire un formulaire en php</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">NOM:</label>
        <input type="text" name="nom">
        <input type="submit" value="confirmer">

    </form>

</body>
</html>

<?php
    echo "<h1>La methode isset permet de voir si une variable existe</h1>";
    if(isset($_POST["nom"])){
        echo " Bonjour : " . $_POST["nom"] . "!";
    }

    if(isset($_GET["secret"]) and !empty($_GET["secret"])){
        echo "Vous avez un secret";
    }
?>