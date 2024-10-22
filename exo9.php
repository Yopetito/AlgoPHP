<h1>>Exercice 8</h1>

<p>Ecrire un algorithme qui annonce si une personne est imposable en fonction de son âge et de son sexe.<br></p>

<h2>>Résultat</h2>

<?php

$age = 58;
$genre = "F";

if(gettype($age) == "integer" && $genre == "F") {
    if($age >= 18 && $age <= 35){
        echo "La personne de $age ans et de genre $genre est imposable";
    } else {
        echo "La personne de $age ans et de genre $genre n'est PAS imposable";
    }
 } elseif(gettype($age) == "integer" && $genre == "H") {
    if($age >= 20) {
        echo "La personne de $age ans et de genre $genre est imposable";
    } else {
        echo "La personne de $age ans et de genre $genre n'est PAS imposable";
    }
 } else {
    echo "Veuillez inserer le bon genre., H pour homme et F pour femme et l'age correctement.";
 }