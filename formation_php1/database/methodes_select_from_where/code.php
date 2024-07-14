<?php
  $user = 'root';
  $pass = '';

  try{
        $db = new PDO("mysql:host=localhost;dbname=test",$user,$pass);
        echo "<p style=' color:green;'>Connexion reussie</p>";
  }catch(PDOException $e){
    echo "<p style=' color:red;'>Erreur de connexion : ".$e -> getMessage() . "</p>";

  }

  echo "<h1>utilistaion de fectch</h1>";
  $result1 = $db -> query("SELECT * FROM article");
  print_r($result1 -> fetch());

  echo "<h1>utilistaion de fectchAll</h1>";
  $result2 = $db -> query("SELECT * FROM article");
  print_r($result2 -> fetchAll());

  echo "<h1>utilistaion de fectchColumn</h1>";
  $result3 = $db -> query("SELECT * FROM article");
  print_r($result3 -> fetchColumn());


  echo"pour un meilleur affichage passer a fecth asscoc ou obj";
  echo "<h1>utilistaion de fectch avec PDO::FETCH_ASSOC</h1>";
  $result4 = $db -> query("SELECT * FROM article");
  print_r($result2 -> fetch(PDO::FETCH_ASSOC));


  echo"maintenant on peut effectuer des traitements avec ce qui est affiche,par exemple affichons juste le titre <br> ";
  $result5 = $db -> query("SELECT * FROM article");
    $article1 = $result5 -> fetch(PDO::FETCH_ASSOC);

  echo"titre de l'article 1 : " . $article1['titre'];

  echo"attention avec fetch_assoc on ne peut pAS ACCEDER A ARTICLE[0] ,IL FAUT CONNAITRE LA CLE";

  echo "<h1>utilistaion de fectch avec PDO::FETCH_OBJ</h1>";
  $result4 = $db -> query("SELECT * FROM article");
  print_r($result2 -> fetch(PDO::FETCH_OBJ));


  echo"maintenant on peut effectuer des traitements avec ce qui est affiche,par exemple affichons juste le titre <br> ";
  $result5 = $db -> query("SELECT * FROM article");
    $article1 = $result5 -> fetch(PDO::FETCH_OBJ);

  echo"titre de l'article 1 : " . $article1 -> titre;

  echo" <h1>Maintennant on va faire du serieux par exemple en afficahnt les titres et contenus de tous les articles:</h1>";
  $result6 = $db -> query("SELECT * FROM article ORDER BY titre DESC");
  while( $monArticle = $result6 -> fetch(PDO::FETCH_OBJ)){
    ?>
    <P>
      <strong> Article :</strong> <?= $monArticle -> titre; ?> <br> 
      <strong> contenu :</strong> <?= $monArticle -> contenu; ?> <br> 
    </P>
  <?php
    //astuce pour eviter d'utiliser le echo: voir ci haut
    $result -> closeCursor();
  } 

  echo"<h1>Voyons maintenant les requetes preparees</h1>";

  try{
    $db2 = new PDO("mysql:host=localhost;dbname=test",$user,$pass);
    echo "<p style=' color:green;'>Connexion reussie</p>";
}catch(PDOException $e){
echo "<p style=' color:red;'>Erreur de connexion : ".$e -> getMessage() . "</p>";

}
  
    $auteur = "gabriel";

    $statement = $db2 -> prepare("SELECT titre  FROM article WHERE auteur= '$auteur'");

    $statement -> execute();

    $data = $statement -> fetchAll(PDO::FETCH_OBJ);

    echo $data;



?>