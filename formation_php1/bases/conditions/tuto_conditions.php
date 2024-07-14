<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriel PHP - Conditions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS personnalisé -->
    <style>
        body {
            padding: 20px;
        }
        .code-box {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tutoriel PHP - Conditions</h1>

        <h2>Exemple 1 : Vérification de la majorité</h2>
        <p>Cet exemple vérifie si une personne est majeure en fonction de son âge.</p>
        <div class="code-box">
            <?php
                $age = 17;

                // Vérification de l'âge
                if ($age > 19) {
                    echo "Vous êtes majeur.<br>";
                } else {
                    echo "Vous êtes mineur.<br>";
                }
            ?>
        </div>

        <h2>Exemple 2 : Vérification de la conduite</h2>
        <p>Cet exemple vérifie si une personne a le droit de conduire en fonction de son âge et de la possession d'un permis.</p>
        <div class="code-box">
            <?php
                $estMajeur = $age > 18;
                $aLePermis = true;

                // Vérification des conditions pour conduire
                if ($estMajeur && $aLePermis) {
                    echo "Vous avez le droit de conduire.<br>";
                } elseif ((!$estMajeur && $aLePermis) || ($estMajeur && !$aLePermis)) {
                    echo "Vous n'avez pas le droit de conduire.<br>";
                }
            ?>
        </div>

        <!-- Bootstrap scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
