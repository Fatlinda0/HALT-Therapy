<?php

class UserManager {
   private $conn;
   private $error = [];
   private $successMessage = '';

   public function __construct() {
      @include 'config.php';
      $this->conn = $conn;
   }

   public function registerUser() {
      if (isset($_POST['submit'])) {
         $name = mysqli_real_escape_string($this->conn, $_POST['name']);
         $email = mysqli_real_escape_string($this->conn, $_POST['email']);
         $pass = md5($_POST['password']);
         $cpass = md5($_POST['cpassword']);
         $user_type = $_POST['user_type'];

         $select = "SELECT * FROM user_form WHERE email = '$email'";
         $result = mysqli_query($this->conn, $select);

         if (mysqli_num_rows($result) > 0) {
            $this->error[] = 'User already exists!';
         } else {
               if ($pass != $cpass) {
                  $this->error[] = 'Passwords do not match!';
               } else {
                  $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
                  mysqli_query($this->conn, $insert);
                  $this->successMessage = "Registration successful! Redirecting to login...";
                  header('refresh:2;url = login_form.php');
               }
         }
      }
   }

   public function getErrors() {
      return $this->error ?: [];
   }

   public function getSuccessMessage() {
      return $this->successMessage;
   }

}

if (!empty($errors)) {
   foreach ($errors as $error) {
      echo '<span class="error-msg">' . $error . '</span>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
<<<<<<< HEAD
<?php include 'nav1.php';  ?>
<div class="form-container" onsubmit="return Register()" >

   <form action="" method="post" >
      <h3>register now</h3> 
      <?php
      if(isset($error)){ 
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name" id="name" required pattern =".{3,}$">
      <input type="email" name="email" required placeholder="enter your email"id="email" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$">
      <input type="password" name="password" required placeholder="enter your password"id="password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d|\W).{6,}$">
      <input type="password" name="cpassword" required placeholder="confirm your password" id="cpassword" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d|\W).{6,}$">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn" onclick="validateRegistration()">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div> 
<script src="js/main.js"></script>
=======
   <?php include 'nav1.php';  ?>
   <?php
      $userManager = new UserManager();
      $userManager->registerUser();
      $errors = $userManager->getErrors();
      $successMessage = $userManager->getSuccessMessage();
   ?>
   <div class="form-container" onsubmit="return Register()" >

      <form action="" method="post" >
         <h3>register now</h3> 
         <?php
         if(!empty($errors)){ 
            foreach($errors as $error){
               echo '<span class="error-msg">'.$error.'</span>';
         }
         }
         if (!empty($successMessage)) {
            echo '<span>' . $successMessage . '</span>';
         }
         ?>
         <input type="text" name="name" required placeholder="enter your name" id="name">
         <input type="email" name="email" required placeholder="enter your email"id="email">
         <input type="password" name="password" required placeholder="enter your password"id="password">
         <input type="password" name="cpassword" required placeholder="confirm your password" id="cpassword">
         <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
         </select>
         <input type="submit" name="submit" value="register now" class="form-btn" >
         <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>
   </div>
   <script src="js/main.js"></script>
>>>>>>> 3aab08fef7161310936b5f9ae8b925c42d5ea36f
</body>
</html>