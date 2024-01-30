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


function validateRegistration(){
    var username = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('cpassword').value;

    let message = document.getElementById('message');

    //validimi i username

    var usernameRegex = /^.{3,}$/;
    if (!usernameRegex.test(username)){
        alert('Username duhet te jete se paku 3 karaktere');
        return;
    }

    //validimi i email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        alert('Adresa e email nuk eshte e vlefshme');
        return;
    }

    //validimi i passwordit dhe konfirmimit

    var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d|\W).{8,}$/;

    if(!passwordRegex.test(password)){
        alert('Fjalëkalimi duhet të përmbajë së paku një shkronjë të madhe, një shkronjë të vogël, një numër ose një karakter special dhe të jetë së paku 8 karaktere.');
        return;
    }

    if(password !== confirmPassword){
        alert('Fjalekalimet nuk perputhen');
        return;
    }

}

function validateLogin(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!emailRegex.test(email)){
        alert('Email nuk eshte i vlefshem.');
        return;
    }

    var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d|\W).{8,}$/;
    if (!passwordRegex.test(password)) {
        alert('Fjalëkalimi duhet të përmbajë së paku një shkronjë të madhe, një shkronjë të vogël, një numër ose një karakter special dhe të jetë së paku 8 karaktere.')
        return;
      }
}
