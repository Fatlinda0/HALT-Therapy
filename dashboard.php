<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit;
}
require_once 'MenuController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/5a7ceed978.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        nav{
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 10vh;
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 1;
            box-shadow: 0px 2px 0px 0px black;
            margin-bottom: 50px;
        }
        .nav-header{
            display: flex;
            align-items: center;
            padding-left: 15px;
        }
        .nav-header h4{
            color: rgb(65, 99, 65);
            letter-spacing: 5px;
            margin-left: 10px;
            font-size: 24px;
        }
        .nav-links{
            list-style: none;
            display: flex;
            justify-content: space-around;
            width: 50%;
            padding-right: 15px;
        }
        .nav-links li{
            list-style-type: none;
        }
        .nav-links a{
            color: rgb(60, 104, 60);
            text-decoration: none;
            letter-spacing: 3px;
            font-weight: bold;
            font-size: 14px;
            padding: 15px;
            transition: background-color 2s;
        }
        .nav-links a:hover{
            background-color:rgb(65, 87, 65);
            color: white;
        }
        @media screen and (max-width: 1024px) {
            .nav-links {
                width: 60%;
            }
        }
        @media screen and (max-width: 900px) {
            body {
                overflow-x: hidden;
            }
            nav {
                justify-content: space-between;
                padding: 0 15px;
            }
            .nav-links {
                flex-direction: column;
                position: absolute;
                right: 0px;
                top: 10vh;
                background-color: rgb(65, 99, 65);
                width: 50%;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
                height: 90vh;
            }
            .nav-links li {
                padding: 10px;
            }
            .nav-links a {
                color: white;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-header">
            <h4>H A L T therapy <i class="fa-regular fa-face-smile" style="font-size: 40px;"></i> </h4>
        </div>
        <ul class="nav-links">
            <li><a href="manageUsers.php" class="fa fa-user">ManageUsers</a></li>
            <li><a href="manageEmails.php" class="fas fa-envelope">ManageEmails</a></li>
            <li><a href="blogManage.php" class="fas fa-edit">ManageBlog</a></li>
            <li><a href="logout.php" class="fa-solid fa-right-from-bracket">LogOut</a></li>
        </ul>    
    </nav>
</body>
</html>
