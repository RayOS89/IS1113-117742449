/* global $ */


function validateDetails(){

    

    var pin;
    var fullname;
    var email;
    

    pin= document.getElementById("user_pin").value;
    fullname= document.getElementById("name").value;
    email= document.getElementById("email").value;

    

    if(pin == "",fullname =="",email ==""){

        alert("please enter your details")

    }

    else if(String(pin).length < 4){

        alert("pleasemake sure your PIN is accurate");

    }

     else if (String(pin).length > 4){

          alert("pleasemake sure your PIN is accurate");

    }

    else{

        enablebtnPurchase();

    }

}

function enablebtnPurchase(){

    $("#btnPurchase").prop("disabled", false)

}

function disablebtnPurchase(){

    $("#btnPurchase").prop("disabled", true)

}