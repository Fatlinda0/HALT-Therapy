<?php
require_once 'ContentController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H A L T therapy - Blog</title>
    <link rel="stylesheet" href="css/style.css">
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
   <div id="slider">
      <input type="radio" name="slider" id="slide1" checked>
      <input type="radio" name="slider" id="slide2">
      <input type="radio" name="slider" id="slide3">
      
      <div id="slides">
         <div id="overflow">
            <div class="inner">
               <div class="slide slide_1">
                  <div class="slide-content">
                     <img src="img/text-yellow.jpg" alt="" class="Mental-HealthCare">
                  </div>
               </div>
               <div class="slide slide_2">
                  <div class="slide-content">
                     <img src="img/think-outside-box-quotes-business-concept.jpg" alt="" class="Mental-HealthCare"> 
                  </div>
               </div>
               <div class="slide slide_3">
                  <div class="slide-content">
                     <img src="img/fab-lentz-mRMQwK513hY-unsplash.jpg" alt="" class="Mental-HealthCare">
                  </div>
               </div>
            </div>
         </div>
        </div>
      <div id="controls">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>   
      </div>
      <div id="bullets">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>            
      </div>
   </div>
   <h1>Our blog</h1>
   <hr id="hr_">
   <div class="our_blog">
      <?php
         $products =new ContentController;
         $all =$products->readData();
         for ($i=0;$i<count($all); $i++){
            echo '<div class="blog_1">
            <img src="'.$all[$i]['blog_image'] .'">
            <p>' .$all[$i]['blog_title'].'</p>
            </div>';
         }
      ?>
   </div>
   <?php include 'footer.php';  ?>
   <script src="js/main.js"></script>
</body>
</html>