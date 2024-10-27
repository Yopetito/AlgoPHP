<h1>Exo 12</h1>

<p>Tableau de noms et langues</p>

<h2>Resultat</h2>

<?php

function helloeach(string $name, string $nat) {
    $tableau = ["fr" => "salut", "eng" => "hello", "esp" => "hola"];
        if(array_key_exists($nat, $tableau)){       //decouverte de array_key_exists - Checks if the given key or index exists in the array 
            $msg = $tableau[$nat];                  //Add value of tableau[$nat] to $msg
            return "$msg $name";
        } else {
            return "Pas possible";
        }
}

echo "function with if / testing array_key_exists<br>";
echo helloeach("laura", "eng");  //the function will compare the nationality with the key in the array and then return a msg with the "hello" as value in they language as key. 
echo "<br><br>";

function helloeachswitch($nameAndNat){
    ksort($nameAndNat);
    foreach($nameAndNat as $name => $language) //foreach will iterate through the array checking names and nationalities
        switch($language){  //as foreach has checked the language the person speaks, it'll say hello in a language depending on the nat(key).
            case "fr":
            echo "Salut, $name <br>";
            break;
            
            case "eng":
            echo "Hello, $name <br>";
            break;

            case "esp":
            echo "Hola, $name <br>";
            break;

            default:
            echo "Language not known<br>";
        }
}

echo "function with switch<br>";
$nameAndNat = ["Mickael" => "fr", "Virgile" => "esp", "Marie-Claire" => "eng"];
helloeachswitch($nameAndNat);
