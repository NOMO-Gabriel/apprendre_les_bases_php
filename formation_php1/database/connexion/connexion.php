<?php
    $user ='root';
    $pass ='';

    try{

    $db = new PDO("mysql:host=localhost;dbname=apprendre_php",$user,$pass);
    echo "<p style='color:green;'> Connexion Reussie</p>";
    }catch(PDOException $e){
        echo "<p style='color:red;'>Erreur de Connexion". $e -> getMessage() . "</p>";
    }
?>