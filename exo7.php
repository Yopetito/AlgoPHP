<h1>>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge<br></p>

<h2>>Résultat</h2>

<?php

$age = 6;

if($age >= 12) {   
    echo "L'enfant qui a $age ans appartient à la catégorie Cadet<br>";
}   elseif($age >= 10) {
        echo "L'enfant qui a $age ans appartient à la catégorie Minime<br>";
    } elseif ($age >= 8) {
        echo "L'enfant qui a $age ans appartient à la catégorie Pupille<br>";
    } elseif($age >= 6) {
        echo "L'enfant qui a $age ans appartient à la catégorie Poussin<br>";
    } else {
        echo "La catégorie n'et pas gérée!";
    }
