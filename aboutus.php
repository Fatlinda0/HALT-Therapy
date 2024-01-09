<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/aboutus.css">
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
    
    <div class="about">
        <?php
            require_once 'config.php';

            $query = "SELECT * FROM about_content WHERE id = 1"; 
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo '<h2>' . $row['title'] . '</h2><hr><br>';
                    echo '<p>' . nl2br($row['content']) . '</p>';
                }
            } else {
                echo "There is no content to display.";
            }
        ?>
    </div>
    <div class="our_services"> 
        <?php
            require_once 'config.php'; 

            $query = "SELECT * FROM services";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="' . strtolower(str_replace(' ', '_', $row['name'])) . '">';
                    echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '"><br>';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '</div>';
                }
            } else {
                echo "There is no content to display.";
            }
        ?>
    </div>
    <h2 class="staff-h2">Our Staff</h2>
    <div class="staff">
        <?php
            require_once 'config.php';
            
            $query = "SELECT * FROM staff";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="staff-member">';
                    echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
                    echo '<h4>' . $row['name'] . '</h4>';
                    echo '<p>' . $row['role'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "There is no content to display.";
            }
        ?>
    </div>
    <?php include 'footer.php';  ?>
</body>
</html>