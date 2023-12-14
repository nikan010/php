<?php
// auteur: yvan
// functie: cirkel berekenen


function toonCirkelEigenschappen($straal) {
    $pi = 3.14;
    $omtrek = 2 * $pi * $straal;
    $oppervlakte = $pi * $straal * $straal;

    echo "Straal: $straal<br>";
    echo "Omtrek: $omtrek<br>";
    echo "Oppervlakte: $oppervlakte<br>";
}

$straal = 5;
toonCirkelEigenschappen($straal);
?>
