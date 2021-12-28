function validate() {

    // Declaration of variable
    var instrumentId = document.getElementById("instrument").value;
    var code = document.getElementById("code").value;
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var error = "";
  
    // Validation wether Instrument ID has data or not
    if (instrumentId == "") {
        error = "Check the terms and conditions.";
        alert(error);
        return false;
    }

    // Validation wether Instrument Code has data or not
    else if (code == "") {
        error = "Enter Code.";
        alert(error);
        return false;
    }

     // Validation wether Instrument Name has data or not
    else if (name == "") {
        error = "Enter Instrument Name.";
        alert(error);
        return false;
    }
    
    // Validation wether Instrument Price has data or not
    else if (price == "") {
        error = "Enter Instrument Price.";
        alert(error);
        return false;
    }

    // Validation wether Instrument Price is number or not
    else if (isNaN(price)) {
        error = "Enter Instrument Price.";
        alert(error);
        return false;
    }

    // OK
    else {
        return true;
    }

}