<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achtergrondkleur wijzigen</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            gap: 10px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body <?php echo $stijl ?? ''; ?>>

    <div>
        <h1>Achtergrondkleur wijzigen</h1>

        <!-- Knoppen voor het wijzigen van de achtergrondkleur -->
        <form>
            <button type="button" onclick="location.href='?kleur=rood'">Rood</button>
            <button type="button" onclick="location.href='?kleur=groen'">Groen</button>
            <button type="button" onclick="location.href='?kleur=blauw'">Blauw</button>
            <button type="button" onclick="location.href='?kleur=roze'">Roze</button>
        </form>

        <p>Klik op een knop om de achtergrondkleur te wijzigen.</p>
    </div>
    <?php
// Controleer of er een kleur is ingesteld via de URL (bijvoorbeeld '?kleur=rood')
$gekozenKleur = isset($_GET['kleur']) ? $_GET['kleur'] : null;

// Lijst met geldige kleuren
$geldigeKleuren = ['rood', 'groen', 'blauw', 'roze'];

// Controleer of de gekozen kleur geldig is
if ($gekozenKleur && in_array($gekozenKleur, $geldigeKleuren)) {
    // Geef de gekozen kleur door aan de HTML-stijl
    $stijl = "style='background-color: $gekozenKleur;'";
}
?>
</body>
</html>
