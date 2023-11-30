<?php
//auteur: yvan van dijk
//functie: tijd

$uur = date('H');

if ($uur >=6 && $uur <= 12 ) {
    echo'ochtend';
}elseif ($uur >=12 && $uur <= 18 ) {
    echo 'middag';
}elseif ($uur >=18 && $uur <= 24 ) {
    echo 'avond';
}elseif ($uur >=24 && $uur <= 6 ) {
    echo 'nacht';
}

?>