<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapes de connexion à une base de données MySQL avec PDO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS personnalisé -->
    <style>
        body {
            padding: 20px;
        }
        .code-box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-primary">Etapes de connexion à une base de données MySQL avec PDO</h1>

        <h2 class="text-primary">1. Définir les informations de connexion</h2>
        <p>Commencez par définir les informations nécessaires pour vous connecter à la base de données. Voici un exemple de code :</p>
        <div class="code-box">
            <pre><code>
\$user = 'root';
\$pass = '';
            </code></pre>
        </div>
        <p class="text-muted">Dans cet exemple, l'utilisateur de la base de données est 'root' et le mot de passe est vide. Vous devez remplacer ces valeurs par les informations réelles de votre base de données.</p>

        <h2 class="text-primary">2. Établir la connexion avec PDO</h2>
        <p>Utilisez PDO (PHP Data Objects) pour établir une connexion sécurisée à la base de données. Voici un exemple de code :</p>
        <div class="code-box">
            <pre><code>
try {
    \$db = new PDO('mysql:host=localhost;dbname=apprendre_php', \$user, \$pass);
    echo '&lt;p style=&quot;color: green;&quot;&gt;Connexion réussie à la base de données!&lt;/p&gt;';
} catch (PDOException \$e) {
    echo '&lt;p style=&quot;color: red;&quot;&gt;Échec de la connexion: ' . \$e-&gt;getMessage() . '&lt;/p&gt;';
}
            </code></pre>
        </div>
        <p class="text-muted">Ce code tente de se connecter à la base de données 'apprendre_php' sur le serveur local (localhost). Si la connexion réussit, un message de succès s'affiche. Si elle échoue, un message d'erreur est affiché.</p>

        <h2 class="text-primary">3. Manipuler les données</h2>
        <p>Une fois connecté, vous pouvez manipuler les données de votre base de données en utilisant les méthodes PDO. Voici un exemple simple de requête SQL :</p>
        <div class="code-box">
            <pre><code>
// Exemple de requête pour sélectionner des données
\$sql = 'SELECT * FROM table_example';
foreach (\$db-&gt;query(\$sql) as \$row) {
    print_r(\$row);
}
            </code></pre>
        </div>
        <p class="text-muted">Dans cet exemple, nous sélectionnons toutes les lignes de la table 'table_example' et les affichons en utilisant la fonction print_r.</p>

        <!-- Bootstrap scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
