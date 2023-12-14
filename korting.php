<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="bedrag">Bedrag:</label>
        <input type="number" step="0.01" name="bedrag" required>

        <label for="percentage">Kortingspercentage:</label>
        <input type="number" step="0.01" name="percentage" required>

        <button type="submit">Bereken Korting</button>
    </form>
<?php
function berekenKorting($bedrag, $percentage) {
 
    $decimaalPercentage = $percentage / 100;

   
    $korting = $bedrag * $decimaalPercentage;

    $nieuwBedrag = $bedrag - $korting;

    
    return array('korting' => $korting, 'nieuwBedrag' => $nieuwBedrag);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $bedrag = isset($_POST['bedrag']) ? floatval($_POST['bedrag']) : 0;
    $percentage = isset($_POST['percentage']) ? floatval($_POST['percentage']) : 0;

    
    $resultaat = berekenKorting($bedrag, $percentage);
}
    
    if (isset($resultaat)) {
        echo "<h2>Resultaat:</h2>";
        echo "<p>Oorspronkelijk bedrag: $bedrag</p>";
        echo "<p>Korting: " . $resultaat['korting'] . "</p>";
        echo "<p>Nieuw bedrag na korting: " . $resultaat['nieuwBedrag'] . "</p>";
    }
    ?>
</body>
</html>