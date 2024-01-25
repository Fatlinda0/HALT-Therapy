<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H A L T therapy</title>
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
    <div class="landing_page">
        <?php
            $query = "SELECT * FROM landing_content WHERE id = 1"; 
            $result = mysqli_query($conn, $query);
                
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="content">';
                    echo '<div class="text">';
                    echo '<h1>' . $row['title'] . '</h1>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div></div>';
                }
            } else {
                echo "<div class='content'><div class='text'><h1>Introducing H A L T, a health collective.</h1><p>Get accessible and personalized mental healthcare in-person or from the comfort of your home.</p></div></div>";
            }
        ?>
    </div>

    <div class="second">
        <?php
            $query = "SELECT * FROM section_content WHERE section_name = 'second'"; 
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo '<h1>' . $row['title'] . '</h1>';
                    echo '<p>' . $row['content'] . '</p>';
                }
            } else {
                echo "<h1>Our approach</h1><p>Default content for second section</p>";
            }
        ?>    
    </div>

    <div class="third">
        <?php
            $query = "SELECT * FROM section_content WHERE section_name = 'third'"; 
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="img"><img src="' . $row['image_url'] . '" alt=""></div>';
                    echo '<div class="text1">';
                    echo '<h1>' . $row['title'] . '</h1>';
                    echo '<p>' . $row['content'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<div class='img'><img src='default-image.jpg' alt=''></div><div class='text1'><h1>Default Title</h1><p>Default content for third section</p></div>";
            }
        ?>
    </div>

    <div class="fourth">
        <?php
            $query = "SELECT * FROM section_content WHERE section_name = 'fourth'"; 
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="text3">';
                    echo '<h1>' . $row['title'] . '</h1>';
                    echo '<p>' . $row['content'] . '</p>';
                    echo '</div>';
                    echo '<div class="map">' . $row['additional_content'] . '</div>';
                }
            } else {
                echo "<div class='text3'><h1>Default Title</h1><p>Default content for fourth section</p></div><div class='map'>Default Map Content</div>";
            }
        ?>
    </div>
    
    <div class="start_now">
        <h1>Get started with H A L T, today.</h1>
        <a href="blog.php">
            <button type="button">Read More</button>
        </a>
    </div>
    
    <?php include 'footer.php';  ?>
    <script src="js/main.js"></script>
</body>
</html>