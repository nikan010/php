<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" value="bank" naam="startgeld"><br>
    <input type="text" value="procent" naam="rente"><br>
    <input type="text" value="geld" naam="terugnemen"><br>
    <input type="submit" value="bank" naam="startgeld">

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
    ?>
</body>
</html>