/** 

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
*/

const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const number = document.getElementById('number');
const password = document.getElementById('pass1');
const password2 = document.getElementById('pass2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validate();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validate = () => {
    const usernameVal = username.value.trim();
    const emailVal = email.value.trim();
    const numberVal = number.value.trim();
    const addressVal = address.value.trim();
    const passwordVal = password.value.trim();
    const password2Val = password2.value.trim();

    if(usernameVal === ''){
        setError(username,'username cannot be blank');
    } else if(usernameVal.length <= 2){
        setError(username,'username shoul more than 3 word');  
    } else{
        setSuccess(username);
    }

    if(emailVal === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailVal)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(numberVal === '') {
        setError(number,'Minimum 10 numbers');
    } else if(numberVal.length != 10) {
        setError(number,'Not a valid number');  
    } else if((numberVal.charAt(0)<9)) {
        setError(number,'Number must start by 98.......');  
    }
    else {
        setSuccess(number);
    }

    if(addressVal === ''){
        setError(address,'address cannot be blank');
    } else if(addressVal.length <= 2){
        setError(address,'address should more than 3 word');  
    } else{
        setSuccess(address);
    }


    if(passwordVal === '') {
        setError(password, 'Password is required');
    } else if (passwordVal.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Val === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Val !== passwordVal) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

}