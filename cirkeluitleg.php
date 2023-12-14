<?php
// auteur: yvan
// functie: cirkel berekenen


function cirkelomtrek($straal) {
    $omterk = round((2 * pi() * $straal), 1);
    return $omterk;
}

echo cirkelomtrek(7) . "<br>";
echo cirkelomtrek(8) . "<br>";
echo "de omtrek van een cirkel is: " . cirkelomtrek(100);
?>
