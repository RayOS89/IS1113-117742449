<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel= "stylesheet" href="../mystylesheet.css" type ="text/css">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
    <div class="webstoreimage1">
                    <div class="ptext">
                        <span class="border">
		        <h4>Select A Product</h4>
              
        
        <br/>
        
        <form method="post" action= "Ebus2.php">
        
            <label for="salesforce">
                <input type="radio" id ="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
        
            <br/>
        
            <label for="aws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                aws @ $300
            </label>
        
            <br/>
            
            <label for="gmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                gmail @ $400
            </label>
            
            <br/>
            
            <label for="cloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                cloud9 @ $200
         
            </br>
         
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
        
            <br/>
            
            <label for="discount">
                Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>     

            <br/>

             <label for="vat">
                VAT @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>

            <br/>
        
            <label for="total"/>
                Total
             <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
        
            <br/>
        
            <button type="submit" class="addcart" disabled>Add to Shopping Cart </button>
        </form>
             
            <br/>
            <button class="calculate" onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
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
     
      
        
        