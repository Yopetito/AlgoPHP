<h1>>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre<br></p>

<h2>>Résultat</h2>

<?php

$nb = 5; //chiffre a multiplier
$count = 1; //compteur de 1 a 10

echo "Table de $nb : <br>";
while($count <= 10) {
    $result = $nb * $count; 
    echo "$nb x $count = $result <br>";
    $count++;
}