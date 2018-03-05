<?php
//Start this session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reciept</title>
    </head>
    <body>
        <h4>Reciept</h4>
        
        <?php
        // Echo session variables that were set on previous pagepiling
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body> 
</html>