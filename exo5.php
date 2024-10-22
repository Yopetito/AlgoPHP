<h1>>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
attention, la valeur générée devra etre arrondie à 2 décimales</p>

<h2>>Résultat</h2>

<?php

// 5.56 francs = 1 euro

$francs = 100;
$valeur_franc = 6.56;
$euros = round($francs / $valeur_franc, 2);
echo "Montant en francs: $francs<br>";
echo "$francs francs = $euros €";