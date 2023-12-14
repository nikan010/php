<?php
if (!isset($_COOKIE['teller'])) {
    // Cookie bestaat niet, initialiseer de teller en gebruikersnaam
    $tellerValue = 0;
    $usernameValue = "ivo";

    // Zet de teller en gebruikersnaam in cookies
    setcookie('teller', $tellerValue);
    setcookie('username', $usernameValue);

    echo "cookie bestaat NIET<br>";
} else {
    // Cookie bestaat, haal de tellerwaarde op en verhoog deze met 1
    $tellerValue = $_COOKIE['teller'] + 1;

    // Werk de tellerwaarde in de cookie bij
    setcookie('teller', $tellerValue);

    echo "cookie bestaat<br>";
}

// Laat de tellerwaarde zien
echo $tellerValue;
?>

