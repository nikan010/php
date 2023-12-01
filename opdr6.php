<?php
$uur = date('H');
$temperatuur = 29;
$luchtvochtigheid = 90;

if ($uur >=17.00) {
    echo'de airco gaat nu uit';
}elseif ($temperatuur <= 20 ) {
    echo 'de kachel gaat nu uit';
} elseif ($luchtvochtigheid <= 85) {
    echo 'de kachel gaat nu uit';
} else {
    echo 'de kachel staat aan';
}
?>
