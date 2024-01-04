<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H A L T therapy</title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
    
    <style>
 form {
    width: 400px;
    margin: 15vh auto 0 auto;
    padding: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
    margin-top: 15px;
    font-size: 12px;
}
button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(60, 92, 60);
    border: none;
    border-radius: 4px;
}
.container{
    margin-top: 100px;
}
.child1{
    width: 50%;
    float: left;
}
.child2{
    width: 50%;
    float:right;
    
}
input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;
}
h3{
    padding:5px;
    color: rgb(62, 90, 62);
    font-size: 43px;
    text-align: center;
    font-weight:bold;    
}
p{
    padding: 3px;
    margin-top: 80px;
    color: grey;
    font-size: 25px;
    text-align: center;
}
textarea {
    resize: none;
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;
}
    </style>
</head>
<body>
    
<?php include 'nav.php';  ?>
    <div class="container">
        <div class="child1">
            <h3>SEND E-MAIL</h3>
            <form method="post" action="contactform.php">
                <input type="text" name = "name" placeholder="Full name">
                <input type="text" name = "mail" placeholder="Your e-mail">
                <input type="text" name = "subject" placeholder="subject">
                <textarea name="message"placeholder="Message"></textarea>
                <button type="submit" name="submit">SEND MAIL</button>
            </form>
        </div>
        <div class="child2">
            <h3>Contact Information</h3>
            <p>Address: Rexhep Luci 36/9, Prishtina, Kosovo </p>
            <p>Phone: +383(0)44 425 - 897</p>
            <p>E-mail: halt@gmail.com</p>
        </div>
    </div>
</body>
</html>