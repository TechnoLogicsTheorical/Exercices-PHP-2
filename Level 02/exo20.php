<?php
$weirdArray = [["prenom" => "Justine"], "chat",["prenom" => "Julien"], "chien", ["prenom" => "Damien"], "poisson"];

//Voici un tableau particulier, je veux que vous le parcouriez et que vous m'affichiez 
//la paire clé/valeur si l'élément du tableau est un tableau associatif, 
//sinon juste la valeur de l'élément.

//Code à faire ici
echo '<h1>Parcour du tableau</h1>';
foreach ($weirdArray as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key => $value) {
            echo '<h2>Parcour d\'un autre tableau</h2>';
            echo "Clé du tableau : $key | Valeur : $value <br>";
        }
    } 
    echo "Clé du tableau : $key | Valeur : $value <br>";
}

// not good :/