<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p>bedrag exclusief btw
        <input type="text" name="bedrag" value=""></p>
        <input type="radio" name="BTW" value="negen">laag, 9 %
        <input type="radio" name="BTW" value="eenentwintig">hoog 21 %
        <p><input type="submit" name="omzetten" value="omzetten"></p>
</form>
    <?php
   // var_dump($POST);
    echo $_POST['bedrag'] . "<br>";
    if ($_POST['BTW'] == "negen") {
        $percentage = 1.09;
    } else {
        $percentage = 1.21;
    }

    $uitkomst = $_POST["bedrag"] * $percentage;
    echo "$uitkomst";
    ?>
</body>

</html>

