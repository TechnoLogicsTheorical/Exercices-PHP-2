<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];

//Vous avez à votre disposition 2 tableaux. Afffichez la moyenne des 2 tableaux !

//Code à faire ici !
$averageNote1 = (int)(array_sum($notes1)/count($notes1));
$averageNote2 = (int)(array_sum($notes2)/count($notes2));

echo "<p>La moyenne des notes de la premiere classe est de : $averageNote1 / 20 </p>";
echo "<p>La moyenne des notes de la deuxieme classe est de : $averageNote2 / 20 </p>";