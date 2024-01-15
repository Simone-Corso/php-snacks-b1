<!--Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema:!-->



<?php

// Andiamo a realizzare un array delle partite di basket

$partite_di_basket = [
    ["ospite" => "Roma", "casa" => "Firenze", "punti_ospite" => 87, "punti_casa" => 90],
    ["ospite" => "Sicilia", "casa" => "Milano", "punti_ospite" => 78, "punti_casa" => 58],
    ["ospite" => "Dinamo", "casa" => "Padova", "punti_ospite" => 67, "punti_casa" => 45],
    ["ospite" => "Torino", "casa" => "Bologna", "punti_ospite" => 89, "punti_casa" =>65],
];

// verifichiamo se funziona nel stampare la prima partita

foreach ($partite_di_basket as $partita) {
    // qua useremo echo per scrivere la partita

    echo "{$partita['ospite']} - {$partita['casa']} | {$partita['punti_casa']}-{$partita['punti_ospite']} . <br> "; 
}
?>

