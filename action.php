<?php
    if (isset($_POST['knop'])) {
        echo $_POST['denis'];
        $denis = $_POST['denis'];
    }
    ?>
    <html>
        <body>
            <h1>action</h1>
            <form method="post" action="oefening.php">
                <input type="text" name="ingevult" value="<?php echo $denis;?>">
                <input type="submit" value="stuur terug">
            </form>

        </body>
    </html>