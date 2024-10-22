<h1>>Exercice 4</h1>

<p>Escrire un algorithme permettant de savoir si une phrase est palindrome <br></p>

<h2>>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phrase_modif = mb_strtolower($phrase);
$phrase_modif = str_replace(" ", "", $phrase_modif); 
$phrase_rev = strrev($phrase_modif);

if ($phrase_modif == $phrase_rev) {
    echo "la phrase $phrase est palindrome";
} else {
    echo "la phrase $phrase n'est pas palindrome";
}