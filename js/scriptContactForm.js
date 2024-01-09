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
const username = document.getElementById('name');
const email = document.getElementById('mail');
const subject = document.getElementById('subject');
const message = document.getElementById('message');

form.addEventListener('submit', (event) =>{
    event.preventDefault();

    Validate();
    SuccessMsg();
})

const sendData = (sRate, Count) => {
    if(sRate === Count){
        swal("Thank You! ", "Thank you for contacting us.");
    }
}


function SuccessMsg() {
    let formContr = document.getElementsByClassName('form-control');
    var Count = formContr.length - 1;
    for(var i = 0; i < formContr.length; i++){
        if(formContr[i].className === "form-control success"){
            var sRate = 0 + i;
           
            sendData(sRate, Count);
        }
        else{
            return false;
        }
    }
}


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
    const nameVal = username.value.trim();
    const emailVal = email.value.trim();
    const subjectVal = subject.value.trim();
    const messageVal = message.value.trim();

    //name
    if(nameVal === ""){
        setErrorMsg(username, 'Name cannot be blank');
    }
    else if(nameVal.length <=2){
        setErrorMsg(username, 'Min 3 char');
    }
    else{
        setSuccessMsg(username);
    }

    //message

    if(messageVal === ""){
        setErrorMsg(message, 'Message cannot be blank');
    }
    else if(messageVal.length <=7){
        setErrorMsg(message, 'Min 8 char');
    }
    else{
        setSuccessMsg(message);
    }

    //email
    if(emailVal === ""){
        setErrorMsg(email, 'Email cannot be blank');
    }
    else if(!isEmail(emailVal)){
        setErrorMsg(email, 'Email is not valid');
    }
    else{
        setSuccessMsg(email);
    }

    //subject
    if(subjectVal === ""){
        setErrorMsg(subject, 'Subject cannot be blank');
    }
    else if(subjectVal.length <= 2){
        setErrorMsg(subject, 'Min 3 char');
    }
    else{
        setSuccessMsg(subject);
    }

}

function setErrorMsg(input, errormsgs){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = "form-control error";
    small.innerText = errormsgs;
}

function setSuccessMsg(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}
