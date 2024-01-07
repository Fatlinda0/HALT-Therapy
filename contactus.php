<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H A L T therapy</title>
    <link rel="stylesheet" href="css/contactus.css">
    <script src="https://kit.fontawesome.com/5a7ceed978.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
    
    <style>
        .container{
            position: relative;
            width: 100%;
            min-height: 90vh;
            padding: 2rem;
            background-color: white;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form{
            width: 100%;
            max-width: 820px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        .contact-form{
            background-color: #A3E9A3;
            position: relative;
        }
        .circle{
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20%, #346d34);
            position: absolute;
        }
        .circle.one{
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }
        .circle.two{
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }
        .contact-form:before{
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #A3E9A3;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }
        form{
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }
        .title{
            color: white;
            font-weight: 600;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
        }
        #buttonSubmit{
            padding: 0.6rem 1.3rem;
            background-color: white;
            border: 2px solid white;
            font-size: 0.95rem;
            color: gray;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
            font-weight: 500;
        }
        #buttonSubmit:hover{
            background-color: transparent;
            color: white;
        }
        .contact-info{
            padding: 2.3rem 2.2rem;
            position: relative;
        }
        .contact-info .title{
            color: #346d34;
        }
        .text-contactus{
            color: black;
            margin: 1.5rem 0 2rem 0;
        }
        .information{
            display: flex;
            color: black;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }
        .information i {
            width: 28px;
            margin-right: 0.7rem;
        }
        .social-media {
            padding: 2rem 0 0 0;
        }
        .social-media p {
            color: black;
        }
        .social-icons {
            display: flex;
            margin-top: 0.5rem;
        }
        .social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            background: linear-gradient(45deg, #A3E9A3, #346d34);
            color: white;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: 0.3s;
        }
        .social-icons a:hover {
            transform: scale(1.05);
        }
        .contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #A3E9A3;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3;
        }
    </style>
</head>
<body>
    
<?php include 'nav.php';  ?>
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text-contactus">Connect with HALT Therapy for a journey towards improved mental health. Let's start this transformative conversation together!</p>
                <div class="info">
                    <div class="information">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Rexhep Luci 36/9, Prishtina, Kosovo</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-phone"></i>
                        <p>+383(0)44 425 - 897</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-envelope"></i>
                        <p>halt@gmail.com</p>
                    </div>
                </div>
                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>  
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form method="post" action="contactform.php" id="contactForm">
                    <h3 class="title">Contact us</h3>
                    <input type="text" name = "subject" placeholder="Subject" required>
                    <input type="text" name = "name" placeholder="Full name" required>
                    <input type="text" name = "mail" placeholder="Your e-mail" required>
                    <textarea name="message"placeholder="Message" required></textarea>
                    <button id="buttonSubmit" type="submit" name="submit">SEND MAIL</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>