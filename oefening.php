<?php
if (isset($_POST['action.php'])){
    $value_denis = $_POST['ingevult'];
} else {
    $value_denis=100;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>voorbeeld formulier</h1>
    <form method="post"  action="action.php">
    <input type="text" name="denis" value="<?php echo $denis;?>"><br>
    <input type="text" name="henk" value="AA"><br>
    <input type="submit" name="knop" value="verzenden">
    </form>
    
</body>
</html>