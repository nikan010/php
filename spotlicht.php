<?php 
    // Auteur: Yvan van Dijk
    // Functie: print kleur van stoplicht
    // print rood als kleurcode = 0
    // print oranje als kleurcode = 1
    // print groen als kleurcode = 2
   // initialisatie

  $kleur = 0; // rood
   If ($kleur == 0) {
    // print kleur rood
  echo "stoplicht word rood";
 } elseif ($kleur == 1) {
    echo "stoplicht wordt oranje";
 } elseif ($kleur == 2) {
    echo "stoplicht wordt groen";
 } else {
    echo "ongeldige kleurcode";
 }

?>
