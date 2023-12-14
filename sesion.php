<?php 
// Tel alle getallen die groter zijn dan 5:
// - bij elkaar op
// - en tel het aantal

session_start();

//is dit de eerste keer
if ( isset($_SESSION["teller"]) == false) {
    //sessie bestaat niet
    echo "sessie bestaat NIET<br>";
$_SESSION['teller'] = 0;
$_SESSION['username'] = " je moeder;";
} else {    
    echo "sessie bestaat <br>";

    //teller ophogen met 1
    $_SESSION['teller']++;
}


echo $_SESSION['teller'];
echo $_SESSION['username'];
?>