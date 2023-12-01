<?php
  //auteur: yvan  van dijk
 //functie: oof

//installatie:
$g = '25';
$i = ($g / 2);

$J = round($i, 0);
$r = $J - $i;

if ($r == 0) {
    echo "is het getal $g even? ja";
} else {
    echo "is het getal $g even? nee";
}

?>
