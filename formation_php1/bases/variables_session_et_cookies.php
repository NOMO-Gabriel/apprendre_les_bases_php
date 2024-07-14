<?php
    echo"<h4> la session est stockee cote serveur alors que les cookies sont stockees cote client. Les sessions sont plus securisees.
    les cookies persistent car ont une date d'expiration alors que les variables de session sont detrruites a la fermeture du navigateur
  </h4><br>"; 
    
  echo"<h1>1-Les sessions</h1><br>";
    echo "<h1>On demarre la session avec la fonction session_start</h1>";

    session_start();
    echo "<h4>On a ensuite acces a une variable _SESSION de type tableau</h4><br>";

    $_SESSION ["pseudo"]="gabriel";
    echo"pseudo de la session :";
    echo $_SESSION ["pseudo"] ;

    echo"<h3>Il faut noter que la variable de session permet de transiter de page en page mais il faut d'abord faire session_start avant d'y acceder</h3><br>";

    echo"<h1>2-les cookies</h1>";
    echo"<h4>On cree les coockies avec la fonction setcookies(nomDuCookie,value,date d'expiration(sous le format time() + temps en seconde. on [eut verifier nos cookies dans le navigateur dans afficher les infos a propos dus site</h4><br>";
    echo"<h4>apres creation du cookie on a egalement acces a la variable _COOKIE</h4>.<br>Affichons celle que nous venons de creer: <br>";

    setcookie('pseudo','gabriel',time()+10000);

    echo($_COOKIE['pseudo']);

    echo"pour supprimer un cockie on set son temps a -1";




?>