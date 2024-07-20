<?php
//Il faut d'abord commencer par se connecter a la base de donnee
try {
    $db = new PDO("mysql:host=localhost;dbname=test",'root','');
    echo"<p style ='color:green' > Connexion reussie</p>";
    } catch (PDOException $e) {
    echo"<p style='color:red'> Erreur de connexion:" . $e -> getMessage()."</p>";
}

    //1-execution directe de la requete d'insertion
    try {
        $db -> exec("INSERT INTO article(titre,contenu,auteur) VALUES ('MON BEL ARTICLE','premier article reel','gabriel') ");
        echo"<p style ='color:green' > Insertion reussie</p>";

    } catch (PDOException $e) {
        echo"<p style='color:red'> Erreur d'insertion':" . $e -> getMessage()."</p>";
    }

    //2-utilisation des requetes preparees
    $statement = $db ->prepare("INSERT INTO article(titre,contenu,auteur) VALUES (:titre,:auteur,:contenu)");

     
    try {
        $statement -> execute([
            "titre" =>"mon article",
            "contenu" =>"deuxieme article",
            "auteur" =>"gabriel"
        ]);
        echo "<p style='color:blue'; > insertion des donnees avec la requete preparee reussie</p>";
    
    } catch (PDOException $e) {
        echo"<p style='color:red'> Erreur d'insertion avec la requete preparee':" . $e -> getMessage()."</p>";
    }
 
    //3-
     echo "<p style = 'color:blueviolet';> Bonjour " . $_GET['name'] . "</p>";



?>