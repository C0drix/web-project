const form = document.getElementById('form');
const names = document.getElementById('names');
const email = document.getElementById('email');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});
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
const validateInputs = () => {
    const namesValue = names.value.trim();
    const emailValue = email.value.trim();
    //takes them as values and removes spaces first

    if(namesValue === '') {
        setError(names, 'Name is required');
    } else {
        setSuccess(names);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
};
