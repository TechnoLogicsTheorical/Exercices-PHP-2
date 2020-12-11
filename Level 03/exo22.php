<?php
$person1 = [
    "nom" => "Pierre",
    "age" => 18,
    "notes" => [10, 12, 15, 14, 18]
];

$person2 = [
    "nom" => "Paul",
    "age" => 17,
    "notes" => [15, 12, 13, 17, 8]
];

$person3 = [
    "nom" => "Jacques",
    "age" => 19,
    "notes" => [12, 20, 20, 17, 14]
];

echo "<h1>Créer une fonction qui permet d'afficher les informations (nom et âge) de chaques personnes et d'afficher l'ensemble de leur notes puis la moyenne de celle-ci</h1>";

//Code à faire ici

function printInformations(array $tab): void {
    echo "<p>Nom : {$tab['nom']} | Age : {$tab['age']}<p>";
    echo '<p>Ayant pour notes aux examens :</p>';
    echo '<ul>';
        foreach ($tab['notes'] as $key => $value) {
            echo "<li>Note n°$key : $value / 20</li>";
        }
    echo '</ul>';
    $averageNotes = (int)(array_sum($tab["notes"]) / count($tab["notes"])) ;
    echo "Lui donnant une moyenne de total de $averageNotes / 20";
    echo '<hr>';
}

printInformations($person1);
printInformations($person2);
printInformations($person3);