<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriel sur les méthodes SELECT, FROM, WHERE en PHP avec PDO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS personnalisé -->
    <style>
        body {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            padding: 20px;
        }
        .container {
            background-color: white;
            color: black;
            border-radius: 8px;
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
        <h1 class="text-primary">Tutoriel sur les méthodes SELECT, FROM, WHERE en PHP avec PDO</h1>
        
        <h2 class="text-primary">Étape préliminaire : Téléchargement et exécution de `generation.php`</h2>
        <p>Téléchargez le script `generation.php` dans la racine de votre projet, exécutez-le pour générer des données de test dans votre base de données MySQL.</p>

        <?php
        $user = 'root';
        $pass = '';

        try {
            $db = new PDO("mysql:host=localhost;dbname=test", $user, $pass);
            echo "<p style='color:green;'>Connexion réussie à la base de données</p>";
        } catch(PDOException $e) {
            echo "<p style='color:red;'>Erreur de connexion : " . $e->getMessage() . "</p>";
        }
        ?>

        <h2 class="text-primary">Utilisation des méthodes SELECT, FROM, WHERE avec PDO</h2>

        <h3 class="text-primary">Utilisation de fetch()</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result1 = $db->query("SELECT * FROM article");
                print_r($result1->fetch());
                ?>
            </code></pre>
        </div>

        <h3 class="text-primary">Utilisation de fetchAll()</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result2 = $db->query("SELECT * FROM article");
                print_r($result2->fetchAll());
                ?>
            </code></pre>
        </div>

        <h3 class="text-primary">Utilisation de fetchColumn()</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result3 = $db->query("SELECT COUNT(*) FROM article");
                print_r($result3->fetchColumn());
                ?>
            </code></pre>
        </div>

        <h3 class="text-primary">Utilisation de fetch(PDO::FETCH_ASSOC)</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result4 = $db->query("SELECT * FROM article");
                print_r($result4->fetch(PDO::FETCH_ASSOC));
                ?>
            </code></pre>
        </div>

        <h3 class="text-primary">Utilisation de fetch(PDO::FETCH_OBJ)</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result5 = $db->query("SELECT * FROM article");
                $article = $result5->fetch(PDO::FETCH_OBJ);
                echo "Titre de l'article : " . $article->titre;
                ?>
            </code></pre>
        </div>

        <h3 class="text-primary">Affichage de tous les articles avec fetch(PDO::FETCH_OBJ)</h3>
        <div class="code-box">
            <pre><code>
                <?php
                $result6 = $db->query("SELECT * FROM article ORDER BY titre DESC");
                while ($monArticle = $result6->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <p>
                        <strong>Article :</strong> <?= $monArticle->titre; ?> <br>
                        <strong>Contenu :</strong> <?= $monArticle->contenu; ?> <br>
                    </p>
                    <?php
                }
                $result6->closeCursor(); // Fermeture du curseur pour libérer les ressources
                ?>
            </code></pre>
        </div>

        <h2 class="text-primary">Utilisation de requêtes préparées</h2>
        <div class="code-box">
            <pre><code>
                <?php
                $auteur = "gabriel";

                $statement = $db->prepare("SELECT titre FROM article WHERE auteur = :auteur");
                $statement->execute(array(':auteur' => $auteur));
                $data = $statement->fetchAll(PDO::FETCH_OBJ);

                foreach ($data as $article) {
                    echo "<p>Titre : " . $article->titre . "</p>";
                }
                ?>
            </code></pre>
        </div>

    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
