<h1>Exo 13</h1>

<p>Moyenne de classe</p>

<h2>Resultat</h2>

<?php

//count($array) = how many values are in the array
//array_sum($array) =  the sum of all the values in the array
//round($var (op) $var, decimals to show) = do an apperation + add the decimals i wish to show


$moyenne = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($moyenne);
$totalNotes = array_sum($moyenne);
$result = round($totalNotes / $nbNotes, 2);
$notesImplode = implode(", ", $moyenne); //Discovery of Implode("separator", $array) = shows the elements of the array with a chosen separator. 

echo "Les notes obtenues par l'élève sont: $notesImplode <br>";
echo "Les notes obtenues par l'élève sont: ".implode(", ", $moyenne)."<br>"; //concatenation, not using implode into a var, but directly in the echo msg.
echo "Sa moyenne générale est donc de : $result";