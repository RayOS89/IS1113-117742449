<?php

//Start this session

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Enter Details</title>
        <link rel= "stylesheet" href="../mystylesheet.css" type ="text/css">
        <!--jQuery-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        </head>

        <body>
            <div class="webstoreimage1">
                    <div class="ptext">
                        <span class="border">
            <h4>Please enter your payment details</h4>

            <form  method = "post" action = "Ebus3.php" >
                
                <label for ="name">Name</label>
                <input type="text" id= "name" name="name" placeholder= "full name" minlenght="4">
                
                <label for ="email">Email</label>
                <input type="text" id= "email" name="email" placeholder= "email address" minlenght="7">
                
                <label for = "user_pin">PIN</label>
                <input type="password" id= "user_pin" placeholder="Card PIN" maxlenght="4">

                <button type="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
                        
           <br/>

            <button onClick="validateDetails()">Validate</button> 

            <script type="text/javascript" src="Ebus2_validator.js"></script>
            </span>
         </div>
       </div>
            <?php

            //Set session variables

            $_SESSION["total"]=$_POST["total"];
            
            ?>
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