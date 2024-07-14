<?php
    $user = 'root';
    $pass = '';

    try{
            $db= new PDO("mysql:host=localhost;dbname=apprendre_php",$user,$pass);
            echo"<p style = 'color:green;'>connexion reussie a la base de donnee</p>";
    }catch(PDOException $e){
        echo "<p  style = 'color:red;' > Erreur de connexion :". $e -> getMessage() ."</p>";
    }

?>