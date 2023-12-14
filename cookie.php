<?php
// auteur: yvan
// functie: uitleg cookie

// Tel alle getallen die groter zijn dan 5:
// - bij elkaar op
// - en tel het aantal

if(!isset($_COOKIE['teller'])) {
    $tellerValue = 0;
    $usernameValue = "yvan";

    setcookie('bezoekers', $tellerValue);
    setcookie('yvan', $usernameValue);

    echo 'cookie bestaat niet';
} else {
    
    $tellerValue = $_COOKIE['bezoeker'] + 1;

    setcookie('bezoeker', $tellerValue);
    echo 'cookie bestaat';
} 
echo $tellerValue;

?>