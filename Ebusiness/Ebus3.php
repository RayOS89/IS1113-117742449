<?php

//Start this session

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Reciept</title>
        <link rel= "stylesheet" href="../mystylesheet.css" type ="text/css">
    </head>

    <body>
        <div class="webstoreimage1">
                    <div class="ptext">
                        <span class="border">
        <h4>Reciept</h4>

        

        <?php

        // Echo session variables that were set on previous pagepiling
         echo    "Thank you ".$_POST["name"].".</br>";
         
         
         
         echo    "Your total is ". $_POST["total"].".</br>";
         
         
         
         echo    "Your receipt will be sent to". $_SESSION["email"];
        ?>
                </span>
            </div>
        </div>
        <section class="section section-light">
       <div class=btn><a href="../homepage.html" class ="btn btn-success">Home</a></div>
       </section>
       <section class="section section-dark">
                <div class="container">
                <footer class="footer">Copyright @ Ray O'Sullivan 2018</footer>
                </div>
                </section>
    </body> 

</html>