<?php

@include 'config.php';

session_start();

if(isset($_SESSION['admin_name'])) {
    header('Location: admin_page.php');
    exit;
} elseif (isset($_SESSION['user_name'])) {
    header('Location: index.php');
    exit;
}

class Login {
    private $conn;
    private $email;
    private $password;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function setData($postData) {
        $this->email = mysqli_real_escape_string($this->conn, $postData['email']);
        $this->password = md5($postData['password']);
    }

    public function login() {
        $select = "SELECT * FROM user_form WHERE email = '$this->email' AND password = '$this->password'";
        $result = mysqli_query($this->conn, $select);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if ($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_page.php');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['user_name'] = $row['name'];
                header('location:index.php');
            }
        } else {
            echo '<script>alert("Incorrect email or password! Try again.")</script>';
        }
    }
}

if (isset($_POST['submit'])) {
    $login = new Login($conn);
    $login->setData($_POST);
    $login->login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
   <?php include 'nav1.php';  ?>   
   <div class="form-container" onsubmit="return validateLogin()">
      <form action="" method="post"  >
         <h3>login now</h3>
         <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
         ?>
         <input type="email" id="email" name="email" required placeholder="enter your email" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$">
         <input type="password" id="password" name="password" required placeholder="enter your password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d|\W).{6,}$">
         <input type="submit" name="submit" value="login now" class="form-btn" >
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>
   </div>
</body>
</html>