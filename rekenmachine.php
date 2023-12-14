<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenmachine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <h1>Rekenmachine</h1>

    <?php
    function multiply() {
        $getal1 = floatval($_POST["getal1"]);
        $getal2 = floatval($_POST["getal2"]);

        if (!isNaN($getal1) && !isNaN($getal2)) {
            $resultaat = $getal1 * $getal2;

            if ($resultaat <= 0) {
                echo "Helaas! Je kan GEEN getal onder de 0 berekenen!";
                echo '<style>body { background-color: Red; }</style>';
            } else {
                echo "Het resultaat is: " . $resultaat;
                echo '<style>body { background-color: LightGreen; }</style>';
                logAntwoord($getal1, $getal2, "*", $resultaat);
            }
        }
    }

    function plus() {
        $getal1 = floatval($_POST["getal1"]);
        $getal2 = floatval($_POST["getal2"]);

        if (!isNaN($getal1) && !isNaN($getal2)) {
            $resultaat = $getal1 + $getal2;

            if ($resultaat <= 0) {
                echo "Helaas! Je kan GEEN getal onder de 0 berekenen!";
                echo '<style>body { background-color: Red; }</style>';
            } else {
                echo "Het resultaat is: " . $resultaat;
                echo '<style>body { background-color: LightGreen; }</style>';
                logAntwoord($getal1, $getal2, "+", $resultaat);
            }
        }
    }

    function min() {
        $getal1 = floatval($_POST["getal1"]);
        $getal2 = floatval($_POST["getal2"]);

        if (!isNaN($getal1) && !isNaN($getal2)) {
            $resultaat = $getal1 - $getal2;

            if ($resultaat <= 0) {
                echo "Helaas! Je kan GEEN getal onder de 0 berekenen!";
                echo '<style>body { background-color: Red; }</style>';
            } else {
                echo "Het resultaat is: " . $resultaat;
                echo '<style>body { background-color: LightGreen; }</style>';
                logAntwoord($getal1, $getal2, "-", $resultaat);
            }
        }
    }

    function divide() {
        $getal1 = floatval($_POST["getal1"]);
        $getal2 = floatval($_POST["getal2"]);

        if (!isNaN($getal1) && !isNaN($getal2)) {
            $resultaat = $getal1 / $getal2;

            if ($resultaat <= 0) {
                echo "Helaas! Je kan GEEN getal onder de 0 berekenen!";
                echo '<style>body { background-color: Red; }</style>';
            } else {
                echo "Het resultaat is: " . $resultaat;
                echo '<style>body { background-color: LightGreen; }</style>';
                logAntwoord($getal1, $getal2, "/", $resultaat);
            }
        }
    }

    function logAntwoord($getal1, $getal2, $operator, $resultaat) {
        echo "<li>$getal1 $operator $getal2 = $resultaat</li>";
    }

    function resetlog() {
        echo '<style>body { background-color: white; }</style>';
    }
    ?>

    <form method="post" action="">
        <label for="getal1">Getal 1:</label>
        <input type="number" name="getal1" required>

        <label for="getal2">Getal 2:</label>
        <input type="number" name="getal2" required>

        <button type="submit" name="operation" value="multiply">Vermenigvuldigen</button>
        <button type="submit" name="operation" value="plus">Optellen</button>
        <button type="submit" name="operation" value="min">Aftrekken</button>
        <button type="submit" name="operation" value="divide">Delen</button>
    </form>

    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $operation = $_POST['operation'] ?? '';

            if ($operation == 'multiply') {
                multiply();
            } elseif ($operation == 'plus') {
                plus();
            } elseif ($operation == 'min') {
                min();
            } elseif ($operation == 'divide') {
                divide();
            }
        }
        ?>
    </p>

    <ul>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['operation'])) {
            logAntwoord($_POST["getal1"], $_POST["getal2"], $_POST['operation'], $resultaat);
        }
        ?>
    </ul>

    <form method="post" action="">
        <button type="submit" name="reset" value="reset">Reset Log</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
        resetlog();
    }
    ?>

</body>
</html>