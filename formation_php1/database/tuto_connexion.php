<?php

// Titre principal
echo "<h1>Etapes de connexion à une base de données MySQL avec PDO</h1>";

// Étape 1 : Définir les informations de connexion
echo "<h2>1. Définir les informations de connexion</h2>";
echo "<p>Commencez par définir les informations nécessaires pour vous connecter à la base de données. Voici un exemple de code :</p>";

echo "<pre><code>
\$user = 'root';
\$pass = '';
</code></pre>";

// Explication textuelle
echo "<p>Dans cet exemple, l'utilisateur de la base de données est 'root' et le mot de passe est vide. Vous devez remplacer ces valeurs par les informations réelles de votre base de données.</p>";

// Étape 2 : Établir la connexion avec PDO
echo "<h2>2. Établir la connexion avec PDO</h2>";
echo "<p>Utilisez PDO (PHP Data Objects) pour établir une connexion sécurisée à la base de données. Voici un exemple de code :</p>";

echo "<pre><code>
try {
    \$db = new PDO('mysql:host=localhost;dbname=apprendre_php', \$user, \$pass);
    echo '&lt;p style=&quot;color: green;&quot;&gt;Connexion réussie à la base de données!&lt;/p&gt;';
} catch (PDOException \$e) {
    echo '&lt;p style=&quot;color: red;&quot;&gt;Échec de la connexion: ' . \$e-&gt;getMessage() . '&lt;/p&gt;';
}
</code></pre>";

// Explication textuelle
echo "<p>Ce code tente de se connecter à la base de données 'apprendre_php' sur le serveur local (localhost). Si la connexion réussit, un message de succès s'affiche. Si elle échoue, un message d'erreur est affiché.</p>";

// Étape 3 : Manipuler les données
echo "<h2>3. Manipuler les données</h2>";
echo "<p>Une fois connecté, vous pouvez manipuler les données de votre base de données en utilisant les méthodes PDO. Voici un exemple simple de requête SQL :</p>";

echo "<pre><code>
// Exemple de requête pour sélectionner des données
\$sql = 'SELECT * FROM table_example';
foreach (\$db-&gt;query(\$sql) as \$row) {
    print_r(\$row);
}
</code></pre>";

// Explication textuelle
echo "<p>Dans cet exemple, nous sélectionnons toutes les lignes de la table 'table_example' et les affichons en utilisant la fonction print_r.</p>";

?>
