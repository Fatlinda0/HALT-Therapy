const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
 } 

 if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
 } 

const form = document.getElementById('contactForm');
const subject = document.getElementById('subject');
const username = document.getElementById('name');
const email = document.getElementById('mail');
const message = document.getElementById('message');

form.addEventListener('submit', (event) =>{
    if (!Validate()) {
        event.preventDefault();
    }
})

const isEmail = (emailVal) =>{
    var atSymbol = emailVal.indexOf('@');
    if(atSymbol < 1) return false;
    var dot = emailVal.lastIndexOf('.');
    if(dot <= atSymbol + 2) return false;
    if(dot === emailVal.length -1) return false;
    return true;
}

//Validimi
function Validate(){
    const subjectVal = subject.value.trim();
    const nameVal = username.value.trim();
    const emailVal = email.value.trim();
    const messageVal = message.value.trim();

    //name
    if(nameVal === ""){
        setErrorMsg(username, 'Name cannot be blank');
    }
    else if(nameVal.length <=2){
        setErrorMsg(username, 'Min 3 char');
        isValid = false;
    }
    

    //message

    if(messageVal === ""){
        setErrorMsg(message, 'Message cannot be blank');
    }
    else if(messageVal.length <=7){
        setErrorMsg(message, 'Min 8 char');
        isValid = false;
    }

    //email
    if(emailVal === ""){
        setErrorMsg(email, 'Email cannot be blank');
    }
    else if(!isEmail(emailVal)){
        setErrorMsg(email, 'Email is not valid');
        isValid = false;
    }
    

    //subject
    if(subjectVal === ""){
        setErrorMsg(subject, 'Subject cannot be blank');
    }
    else if(subjectVal.length <= 2){
        setErrorMsg(subject, 'Subject must be at least 3 characters');
        isValid = false;
    }
    const errors = document.querySelectorAll('.form-control.error');
    return errors.length === 0;
    return isValid;
}

function setErrorMsg(input, errormsgs){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = "form-control error";
    small.innerText = errormsgs;
}