<h1>>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche<br>
à un utilisateur un rendu de monnaie en nombre de billets de 10€ et 5€, de pièces de 2€ et 1€.</p>

<h2>>Résultat</h2>

<?php

$sumtopay = 152;
$sumpaid = 200;
$totaltogive = $sumpaid - $sumtopay; 
$sumtogive = $sumpaid - $sumtopay;

$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;


if ($sumtogive >= 10) {
    $billet10 = intdiv($sumtogive, 10);     //On met dans la variable $billet0 une division de $sumtogive / 10 dans ce cas = 4 (donc 4 billet 10)
    $sumtogive %= 10;                       //48 %= 10 (divise 48 / 10 = 4 et prend le restant 8 afin de savoir combien il me reste a donner) 
}

if ($sumtogive >= 5) {
    $billet5 = intdiv($sumtogive, 5);
    $sumtogive %= 5;
}


if ($sumtogive >= 2) {
    $piece2 = intdiv($sumtogive, 2);
    $sumtogive %= 2;
}

if ($sumtogive >= 1) {
    $piece1 = intdiv($sumtogive, 1);
    $sumtogive %= 1;
}

echo "Montant à payer : $sumtopay <br>";
echo "Montant versé : $sumpaid<br>";
echo "Reste à payer : $totaltogive <br>";
echo "*******************************************************************<br>";
echo "Rendu de monnaie: <br>";
echo "$billet10 billets de 10€ - $billet5 billets de 5€ - $piece2 pièce de 2€ - $piece1 pièce de 1€";