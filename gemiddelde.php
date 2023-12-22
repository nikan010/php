<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>cijfer:</p>
    <form method="post" action="">
        <input type="text" value="cijfer" name="cijfer2"><br>
        <input type="submit" value="uitrekenen" name="toevoegen">
    </form>

    <p></p>
    
    <?php
    session_start();
    
    if(isset($_POST['toevoegen'])){
        if (!isset($_SESSION['uitrekenen'])) {
            // Session does not exist
            echo "de sessie bestaat niet";
        
            $_SESSION['uitrekenen'] = 0;
            $_SESSION['aantal'] = 0;
        } else {
            echo "de sessie bestaat<br>";
            $_SESSION['aantal']++;
            $_SESSION['uitrekenen'] += $_POST['cijfer2'];
        }
        
        echo $_POST['cijfer2'] . "<br>";
        $uitkomst = $_SESSION['uitrekenen'] / $_SESSION['aantal'];
        echo "$uitkomst";
    }
    ?>
</body>
</html>
