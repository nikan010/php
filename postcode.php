<?php
// auteur: yvan
// functie: postcode


// Genereer vier willekeurige cijfers
$cijfers = mt_rand(1000, 9999);

// Genereer twee willekeurige letters
$letters = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));

// Combineer de cijfers en letters met een spatie ertussen
$postcode = $cijfers . ' ' . $letters;

// Toon de willekeurige postcode op het scherm
echo "Willekeurige postcode: $postcode";
?>

