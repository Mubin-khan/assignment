// first page 
function isEmpty() {
    var filled = true;
    var termsChecked = true;
    var inputs = document.getElementsByTagName("input");
    for (input of inputs) {
      if (input.type === "text" && !input.value) filled = false;
      if (input.type === "email" && !input.value) filled = false;
      if (input.type === "checkbox" && !input.checked) termsChecked = false;
    }
    var selectCountry = document.getElementById("country-option").value;
    if (filled && termsChecked && selectCountry != "Your Country")
      document.getElementById("next-btn1").disabled = false;
    else document.getElementById("next-btn1").disabled = true;
}

// second page 
function isEmpty2(){
    var filled = true;
    var inputs = document.getElementsByTagName("input");
    for (input of inputs) {
      if (input.type === "text" && !input.value) filled = false;
      if (input.type === "password" && !input.value) filled = false;
    }
    if (filled)
      document.getElementById("next-btn2").disabled = false;
    else document.getElementById("next-btn2").disabled = true;
}

