<h1>>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1 (Notre formation DL commence aujourd'hui), écrire l’instruction permettant de remplacer le mot <br>
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>>Résultat</h2>

<?php

//avec var
$phrase = "Notre formation DL commence aujourd'hui<br>";
echo "Ancienne phrase: $phrase<br>";
$replaceWord = str_replace("aujourd'hui", "demain", $phrase);
echo "Nouvelle phrase: $replaceWord";