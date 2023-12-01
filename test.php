<?php
$getal = 12; 

$totaleSom = 0;

echo'waarde van variabele $geral is:';
echo" $getal<br>";
echo "de optelling is als volgt:<br>";
for ($i = 1; $i <= $getal; $i++) {
    $totaleSom += $i;
    echo "$i";
    if ($i < $getal) {
        echo " + ";
    }
}

echo " = $totaleSom";

?>


