<?php
    // Auteur: Yvan van Dijk
    // Funcite: Zet kachel aan, uit of hoger

    // temp -10 - 0 graden: kachel hoge stand
    // temp 0-18: kachel normale stand
    // temp > 18: kachel uit

    // Initialisatie
    $kachel = -19;

    if ($kachel >= -10 && $kachel <= 0) {
        echo "Hoge stand.";
    } elseif ($kachel > 0 && $kachel <= 18) {
        echo "Normale stand.";
    } if ($kachel == 18) {
        echo "Kachel uit.";
    } if ($kachel <= -18) {
        echo "u gaat dood";
    }
   
    

?>