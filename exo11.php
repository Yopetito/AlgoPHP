<h1>>Exercice 11</h1>

<p>initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau<br>
et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>>Résultat</h2>

<?php

$brands = ["Peugeot", "Renault", "BMW", "Mercedes", "KIA", "Seat"];
$nbBrands = count($brands);

//foreach > montrer chaque $brand a l'interieur de $brands (soit chaque value dans chaque key ([0],[1],[2],[3]...etc))
echo "Il y a $nbBrands marques de voitures dans le tableau :<br>";
foreach($brands as $brand) {
    echo "$brand<br>";
}

//tant que le compteur (start 0) n'arrive pas au nombre de cases dans le tableau affiche son contenue et augmente d'une case
$i = 0;
echo "Il y a $nbBrands marques de voitures dans le tableau :<br>";
while ($i < $nbBrands){
    echo "$brands[$i]<br>";
    $i++;
}

//for > un compter / condition / augmentation. comme pour while.
echo "Il y a $nbBrands marques de voitures dans le tableau :<br>";
for($j = 0; $j < $nbBrands; $j++){
    echo "$brands[$j]<br>";
}