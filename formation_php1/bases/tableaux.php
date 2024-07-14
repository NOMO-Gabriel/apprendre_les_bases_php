<?php

echo "<h1>Tableaux avec cles :</h1>";

$myArray1 = array(
    "key" => "value",
    "key2" => "value2"
);  

$myArray2 = [
    "key" => "value",
    "key2" => "value2"
];  

echo "<h2>Premier tableau avec la fonction var_dump:</h2>";
var_dump($myArray1); // la fonction var_dump() affiche toutes les valeurs du tableau

echo "<h2>Deuxieme tableau  avec la fonction var_dump:</h2>";
var_dump($myArray2);

echo "<h2>Premier tableau avec la fonction print_r :</h2>";
print_r($myArray1);

echo "<h2>Affichage de valeurs :</h2>";
echo $myArray2["key"];

echo "<h1>Tableaux sans cles :</h1>";

$myArray3 = [
    "value",
    "value2",
    "value 3"
];

echo "<h2>Apprendre la suppression</h2>";
echo "<h3>Tableau 3 avant la suppression</h3><br>";
var_dump($myArray3);

echo "<h3>Tableau 3 apres la suppression grace a la fonction unset </h3><br>";
unset($myArray3[2]);
var_dump($myArray3);

echo "<h1>Copie complete d'un tableau(le 3e) avec la fonction array_values</h1> <br>";
  $tabCopied = array_values($myArray3);
  var_dump($tabCopied);

?>
