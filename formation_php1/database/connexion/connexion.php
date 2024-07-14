<?php

echo "<h1>Etapes de connexion:</h1>";

echo "<h2>1. Définir les informations de connexion</h2>";
echo "Commencez par définir les informations nécessaires pour vous connecter à la base de données.<br>";

$user = "root";
$pass = "";

echo "<h2>2. Établir la connexion avec PDO</h2>";
echo "Utilisez PDO (PHP Data Objects) pour établir une connexion sécurisée à la base de données.<br>";

try {
    $db = new PDO('mysql:host=localhost;dbname=apprendre_php', $user, $pass);
    echo "<p style='color: green;'>Connexion réussie à la base de données!</p>";
} catch (PDOException $e) {
    echo "<p style='color: red;'>Échec de la connexion: " . $e->getMessage() . "</p>";
}

echo "<h2>3. Manipuler les données</h2>";
echo "Vous pouvez maintenant manipuler les données de votre base de données en utilisant les méthodes PDO.<br>";

?>
