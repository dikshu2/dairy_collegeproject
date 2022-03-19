function validateForm() {
    // Retrieving the values of form elements 
    var name = document.vForm.fname.value;
    var email = document.vForm.email.value;
    var mobile = document.vForm.number.value;
    var pass1 = document.vForm.pass1.value;
    var pass2 = document.vForm.pass2.value;


// Defining error variables with a default value
var nameErr = emailErr = mobileErr = pass1Err = pass2Err = true;
  
        
        if(name == "") {
            printError("nameErr", "Please enter your name");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(name) === false) {
                printError("nameErr", "Please enter a valid name");
            } else {
                printError("nameErr", "");
                nameErr = false;
            }
        }

        // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
        if(pass1==pass2){  
        return true;  
        }  
        else{  
        alert("password must be same!");  
        return false;  
        }
        if((nameErr || emailErr || mobileErr || pass1Err || pass2Err) == true) {
            return false;
        }
}