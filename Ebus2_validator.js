/*global$*/

function validateDetails(){
    
    var pin;
    
    pin= document.getElementById("user pin").value;
    
    if(pin == ""){
        alert("pleaseenter your PIN")
    }
    else if(String(pin).length < 4){
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