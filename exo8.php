<h1>>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre<br></p>

<h2>>Résultat</h2>

<?php

// WHILE
echo "Resultat 1 with while: <br>";
$nb = 5;
$count = 1;
echo "Table de $nb : <br>";
while($count <= 10) {
    $result = $nb * $count; 
    echo "$nb x $count = $result <br>";
    $count++;
}

//FOR

echo "Resultat 2 with FOR: <br>";
$nb2 = 4;

echo "Table de $nb2 : <br>";
for($i = 1; $i <= 10; $i++) {
    $result = $nb * $i; 
    echo "$nb x $i = $result <br>";
}

//FOREACH

Echo "Resultat 3 with foreach: <br>";
$nb = 3;
$table = range(1, 10);
echo "Table de $nb : <br>";
foreach($table as $i) {
    $result = $nb * $i;
    echo "$nb x $i = $result <br>";
}