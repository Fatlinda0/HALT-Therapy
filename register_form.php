<?php
session_start();

class UserManager {
   private $conn;
   private $error = [];
   public $successMessage = '';

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

         if($pass != $cpass){
            return;
         }

         $select = "SELECT * FROM user_form WHERE email = '$email'";
         $result = mysqli_query($this->conn, $select);

         if (mysqli_num_rows($result) > 0) {
            $this->error[] = 'User already exists!';
         } else{ 
             
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
         mysqli_query($this->conn, $insert);
         $this->successMessage = "Registration successful! Redirecting to login...";
         $_SESSION['successMessage'] = $this->successMessage;
         header('refresh:0.5;url = login_form.php');
         }
      }
   }

   public function getErrors() {
      return $this->error ?: [];
   }
}

$userManager = new UserManager();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userManager->registerUser();
}
$errors = $userManager->getErrors();
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
<?php include 'nav1.php';  ?>
<div class="form-container" >

   <form action="" method="post" onsubmit="return validateRegistration()">
      <h3>register now</h3> 
      <?php
        if ($userManager->successMessage != '') {
         echo '<span class="success-msg">' . $userManager->successMessage . '</span>';
         }
        if(!empty($errors)){ 
            foreach($errors as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
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
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>
</div> 
<script src="js/main.js"></script>
</body>
</html>