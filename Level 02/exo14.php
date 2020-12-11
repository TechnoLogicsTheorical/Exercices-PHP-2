<?php
//Générer un nombre aléatoire entre 1 et 100, si celui-ci est inférieur à 75 affichez la valeur du nombre aléatoire et un compteur d'essais de nombre jusqu'à ce que le nombre aléatoire soit supérieur strictement à 75 ! (Utilisez une boucle ! Mais quelle boucle prendre lorsque que l'on ne sait pas le nombre d'itération nécessaire ?)

//Code à faire ici
$randNumber = 0;

echo "<h1>Le nombre générée aléatoirement doit être strictement supérieur à 75</h1>";
for ($try=1; $randNumber < 75; $try++) {
    $randNumber = rand(1, 100);
    echo "<p>The random number is $randNumber ! Try n° $try</p>";
}
exit('<p>Finded value > 75</p>');