<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="css/quiz.css">
    <script src="https://kit.fontawesome.com/5a7ceed978.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        @include 'config.php';

        session_start();

        if(!isset($_SESSION['user_name'])){
            header('location:login_form.php');
        }
    ?>
    
    <?php include 'nav.php';  ?>
    
    <?php include 'footer.php';  ?>
</body>
</html>