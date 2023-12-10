const navSlide = () => {
    const burger= document.querySelector('.burger');
    const nav=document.querySelector('.nav-links');
    const navLinks=document.querySelectorAll('.nav-links li');

    
    //toggle nav 
    burger.addEventListener('click',()=>{
        nav.classList.toggle('nav-active');


        //animate links
        navLinks.forEach((link, index)=>{
            
            link.style.animation='navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s';
    
        });
        
        //burger animation
        burger.classList.toggle('toggle');
    });
}

navSlide();
 
const slide = () =>{
    const signinBtn=document.querySelector('.signinBtn');
    const signupBtn=document.querySelector('.signupBtn');
    const formBx=document.querySelector('.formBx');
    const login_register=document.querySelector('.login_register');



    signupBtn.onclick=function(){
        formBx.classList.add('active');
        login_register.classList.add('active');   
    }
    signinBtn.onclick=function(){
        formBx.classList.remove('active');
        login_register.classList.remove('active');
    }
}

slide();


function Validation() {
    var username = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;
    var firstLetter = username[0];
    var firstLetterIsUpperCase = (firstLetter === firstLetter.toUpperCase());
    var usernameIncludesDigit = /\d/.test(username);
    var passwordLength = (password.length < 8 || password.length > 20);
    var passwordIncludesUppercase = /[A-Z]/.test(password); 

    if(username==null || username==""){
        alert("Please provide your full username!");
    }
    else if (!firstLetterIsUpperCase) {
        alert(" The first letter of username must be uppercase.");
    }
    else if (!usernameIncludesDigit) {
        alert("Username must include at least one digit.");
    }

    else if(password==null || password==""){
        alert("Please enter password!");
    }
    else if (passwordLength){
        alert(" The password should be within 8 to 20 characters.");
    }
    else if (!passwordIncludesUppercase) {
        alert("The password should contain at least one uppercase character.");
    } 
    else{
        alert("Login Successfully"); 
    }
}
Validation();


function Validatee(){
    var username = document.querySelector('#username').value;
    var firstLetter = username[0];
    var firstLetterIsUpperCase = (firstLetter === firstLetter.toUpperCase());
    var usernameIncludesDigit = /\d/.test(username);
    var regexEmail=document.querySelector('#email').value;
    var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var password1 = document.querySelector('#password1').value;
    var password2=document.querySelector('#password2').value;
    var passwordLength = (password.length < 8 || password.length > 20);
    var passwordIncludesUppercase = /[A-Z]/.test(password); 

    if(username==null || username==""){
        alert("Please provide your full username!");
    }
    else if (!firstLetterIsUpperCase) {
        alert(" The first letter of username must be uppercase.");
     }
     else if (!usernameIncludesDigit) {
        alert("Username must include at least one digit.");
    }
    else if(!regexEmail.test(email)){
        alert("Write another email!");
    }
    else if(password1==null || password1=="" ){
        alert("Please enter password!");
    }
    else if (passwordLength){
        alert(" The password should be within 8 to 20 characters.");
    }
    else if (!passwordIncludesUppercase) {
        alert("The password should contain at least one uppercase character.");
    } 
    else if (password1 !== password2) {
        alert("The passwords do not match.");
    }
    else{
        alert("Login Successfully");
    }
}
Validatee();