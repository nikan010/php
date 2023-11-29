<?php
//auteur: wigmans
//functie: uitleg fo-loop

for ($teller=7; $teller < 100 ; $teller = $teller +1) {
    echo "$teller<br>";
} 
if ($teller > 99) {
    echo "u gaat dood"; 
}
    $a = 0;
    while ($a <= 100) {
        echo "a: $a<br>";
       if ($a >= 10) {
           $a+=10;
    } else {
        $a++;
    }

}
?>