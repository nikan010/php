<?php
//auteur: wigmans
//functie: uitleg fo-loop

$cijfers[0] = 5;
$cijfers[1] = 7;
$cijfers = array(4,4,4,4,4,4);
$aantal = count($cijfers);
echo "aantaak cijfers: $aantal<br>";
$som = 0;
for ($i = 0; $i < $aantal; $i++) {
    print "$cijfers[$i]<br>";
    $som = $som + $cijfers[$i];
}
echo " vv" . $som / $aantal;

?>