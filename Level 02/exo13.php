<?php
//Vous devez créer une variable qui contient un nombre aléatroire entre 1 et 12. Ce nombre correspondra à un mois (1 = janvier, 2 = février, etc...). Puis affichez le nombre aléatoire et le mois associé à celui-ci (utilisez un switch !).

//Code à faire ici

$randNumber = rand(1,12);
/*
$months = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];
if ($randNumber != 11) {
    echo "Vous recevrai votre prime au mois de {$months[$randNumber]} !";
} else {
    echo "Vous recevrai votre prime de noel au mois de {$months[$randNumber]} !";
} 

Oups j'ai pas lu l'enoncer jusqu'au bout :D
*/
switch ($randNumber) {
    case 1 :
        echo 'Janvier';
        break;
    case 2 :
        echo 'Février';
        break;
    case 3 :
        echo 'Mars';
        break;
    case 4 :
        echo 'Avril';
        break;
    case 5 :
        echo 'Mai';
        break;
    case 6 :
        echo "Juin";
        break;
    case 7 :
        echo "Juillet";
        break;
    case 8 :
        echo "Août";
        break;
    case 9 :
        echo "Septembre";
        break;
    case 10 :
        echo "Octobre";
        break;
    case 11 :
        echo "Novembre";
        break;
    case 12 :  
        echo "Décembre";
    break;

    default:
        echo 'une erreur est survenue !';
    break;
}