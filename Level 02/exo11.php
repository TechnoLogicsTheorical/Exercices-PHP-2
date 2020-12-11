<?php
//Créer un nombre aléatoire entre 0 et 30 et qui soit un multiple de 5 puis affichez le ! 

//Code à faire ici

$altRandNumber = rand(0,30);

// echo "Resultat du reste de la division du nombre $altRandNumber : " . ($altRandNumber % 5);

// Oui je sais 5 X 0 est un multiple de 5 mais ce n'est pas cohérant de faire sa
if ($altRandNumber !== 0 && ($altRandNumber % 5) == 0) {
    echo "Le nombre $altRandNumber est un multiple de 5"; 
} else {
    echo "Le nombre $altRandNumber n'est pas un multiple de 5";
}