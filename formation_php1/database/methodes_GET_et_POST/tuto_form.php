<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriel sur les méthodes GET et POST en PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS personnalisé -->
    <style>
        body {
            background-color: #007bff; /* Couleur primaire Bootstrap */
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
        <h1 class="text-primary">Tutoriel sur les méthodes GET et POST en PHP</h1>
        
        <h2 class="text-primary">1. La méthode GET</h2>
        <p>La méthode GET envoie les données du formulaire en les ajoutant à l'URL de la requête. Les données sont visibles dans la barre d'adresse du navigateur.</p>
        
        <h3>Exemple de formulaire utilisant la méthode GET :</h3>

        <div class="code-box">
            <pre><code>
&lt;form method="GET" action=""&gt;
    &lt;label for="search"&gt;Recherche :&lt;/label&gt;
    &lt;input type="text" name="search" id="search"&gt;
    &lt;button type="submit"&gt;Rechercher&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </div>
        
        <h3>Code PHP pour traiter les données envoyées par la méthode GET :</h3>
        <div class="code-box">
            <pre><code>
if (isset($_GET['search'])) {
    // htmlspecialchars pour éviter les attaques XSS
    $search = htmlspecialchars($_GET['search']);
    echo "Vous avez recherché : " . $search;
}
            </code></pre>
        </div>
        
        <h2 class="text-primary">2. La méthode POST</h2>
        <p>La méthode POST envoie les données du formulaire dans le corps de la requête HTTP. Les données ne sont pas visibles dans la barre d'adresse du navigateur.</p>
        
        <h3>Exemple de formulaire utilisant la méthode POST :</h3>
        <div class="code-box">
            <pre><code>
&lt;form method="POST" action=""&gt;
    &lt;label for="name"&gt;NOM :&lt;/label&gt;
    &lt;input type="text" name="nom" id="name"&gt;
    &lt;button type="submit"&gt;Confirmer&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </div>
        
        <h3>Code PHP pour traiter les données envoyées par la méthode POST :</h3>
        <div class="code-box">
            <pre><code>
if (isset($_POST['nom'])) {
    // htmlspecialchars pour éviter les attaques XSS
    $nom = htmlspecialchars($_POST['nom']);
    echo "Bonjour : " . $nom . "!";
}
            </code></pre>
        </div>

        <h2 class="text-primary">3. Autres méthodes utiles</h2>
        
        <h3>La méthode <code>isset</code></h3>
        <p>La fonction <code>isset</code> permet de vérifier si une variable est définie et est différente de null. C'est utile pour vérifier si un champ de formulaire a été soumis.</p>
        
        <h3>La méthode <code>htmlspecialchars</code></h3>
        <p>La fonction <code>htmlspecialchars</code> convertit les caractères spéciaux en entités HTML. C'est crucial pour éviter les attaques de type XSS (Cross-Site Scripting).</p>

        <h3>La méthode <code>print_r</code></h3>
        <p>La fonction <code>print_r</code> affiche des informations sur une variable de manière lisible. Elle est souvent utilisée pour le débogage.</p>
        
        <h2 class="text-primary">Exemple complet :</h2>
        <div class="code-box">
            <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Formulaire avec méthode POST&lt;/title&gt;
    &lt;!-- Bootstrap CSS --&gt;
    &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"&gt;
    &lt;!-- CSS personnalisé --&gt;
    &lt;style&gt;
        body {
            background-color: #007bff; /* Couleur primaire Bootstrap */
            color: white;
            padding: 20px;
        }
        .container {
            background-color: white;
            color: black;
            border-radius: 8px;
            padding: 20px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="container"&gt;
        &lt;h1 class="text-primary"&gt;Formulaire avec méthode POST&lt;/h1&gt;
        &lt;form method="POST" action=""&gt;
            &lt;label for="name"&gt;NOM :&lt;/label&gt;
            &lt;input type="text" name="nom" id="name"&gt;
            &lt;button type="submit"&gt;Confirmer&lt;/button&gt;
        &lt;/form&gt;

        &lt;?php
            echo "&lt;h1 class='text-primary'&gt;La méthode isset permet de voir si une variable existe&lt;/h1&gt;";
            if (isset($_POST['nom'])) {
                echo "Bonjour : " . htmlspecialchars($_POST['nom']) . "!";
            }

            if (isset($_GET['secret']) && !empty($_GET['secret'])) {
                echo "Vous avez un secret";
            }
        ?&gt;
    &lt;/div&gt;

    &lt;!-- Bootstrap scripts --&gt;
    &lt;script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
            </code></pre>
        </div>

    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
