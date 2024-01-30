<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="css/support.css">
    <script src="https://kit.fontawesome.com/5a7ceed978.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'config.php';
        session_start();

        if (!isset($_SESSION['user_name'])) {
            header('location:login_form.php');
        }
    ?>

    <?php include 'nav.php'; ?>

    <section class="support-section">
        <div class="support-content">
            <?php
                $query = "SELECT * FROM support_faq";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo '<h1>FREQUENTLY ASKED QUESTIONS</h1><br><br>';
                    echo '<ul class="faq">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>';
                        echo '<div class="q"><span class="arrow"></span><span>' . $row['question'] . '</span></div>';
                        echo '<div class="a"><p>' . $row['answer'] . '</p></div>';
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo "There are no FAQs to display.";
                }
            ?>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="js/support.js"></script>
</body>
</html>
