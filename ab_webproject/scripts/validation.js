const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const age = document.getElementById('age');

function validateInputs(){
    var valid = true;
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const Age = age.value.trim();
    //takes them as values and removes spaces first

    if(usernameValue === '') {
        setError(username, 'Username is required');
        valid = false;
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
        valid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        valid = false;
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
        valid = false;
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
        valid = false;
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
        valid = false;
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
        valid = false;
    } else {
        setSuccess(password2);
    }
     if (age == ' ') {
        setError(age, 'Age is Required');
        valid = false;
     } else if (Age > 6 && Age < 100) {
        setSuccess(age);
     } else {
        setError(age, 'Age should be between 6 and 100');
        valid = false;
     }
     return valid;
}

//function above takes submit and prevents post on default to check first and calls validate inputs
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}
//function above receives the element and puts the message in place of it in case of an error
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};
//function above receives the element and puts the message in place of it in case of a success
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
//function above tests for a match in the email and returns true if valid

