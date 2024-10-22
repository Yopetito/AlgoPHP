<h1>>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre<br></p>

<h2>>Résultat</h2>

<?php

function multi(int $nb) {

    $count = 1;
    $affichage = "Table de $nb<br>";
    while($count <= 10) {
        $result = $nb * $count; 
        $affichage .= "$nb x $count = $result <br>";
        $count++;
    }
    return $affichage;
}

echo multi(4);