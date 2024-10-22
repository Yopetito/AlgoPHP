<h1>>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1 (Notre formation DL commence aujourd'hui),<br>
 écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci</p>

<h2>>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbDeMots = str_word_count($phrase);
echo "la phrase contient $nbDeMots mots<br>";                   //avec variable
echo "la phrase contient ".str_word_count($phrase)." mots";     //avec concatenation
