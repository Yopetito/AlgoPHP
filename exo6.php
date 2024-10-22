<h1>>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture a regler a partir de la quantité.<br>
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. ex: 20% -> 0.20)</p>

<h2>>Résultat</h2>

<?php

$prixHT = 10;
$quantite = 5;
$tauxTVA = 0.2;

if(gettype($prixHT) == "double" || gettype($prixHT) == "integer"){
    if(gettype($quantite) == "double" || gettype($quantite) == "integer"){
           $totalTTC = $prixHT * $quantite + $prixHT * $quantite * $tauxTVA;
        echo "Prix unitaire de l'article : $prixHT €<br>";
        echo "Quantité : $quantite <br>";
        echo "Taux de TVA : $tauxTVA <br>";
            echo "Le montant de la facture TTC à régler est de: $totalTTC <br>";
    } else {
        echo "Veuillez mettre une valeur numérique!";
    }
} else {
    echo "Veuillez mettre une valeur numérique!";
}