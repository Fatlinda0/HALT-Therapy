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
        @include 'config.php';

        session_start();

        if(!isset($_SESSION['user_name'])){
            header('location:login_form.php');
        }
    ?>
    <?php include 'nav.php';  ?>
    <section class="faq-section"> 
        <h1 class="title">FREQUENTLY ASKED QUESTIONS</h1>
            <ul class="faq">
                <li>
                    <div class="q">
                        <span class="arrow"></span> 
                        <span>How do I replay?</span>
                    </div>
                    <div class="a">
                        <p>Lorem, ipsum dolor sit amet consectetur 
                            adipisicing elit. Ullam esse, vel quos maiores cum 
                            est architecto. Consequuntur atque quos nemo, est alias, 
                            repellendus suscipit optio et molestias nostrum exercitationem eos!
                        </p>
                    </div>
                </li>
                <li>
                    <div class="q">
                        <span class="arrow"></span> 
                        <span>How do I replay?</span>
                    </div>
                    <div class="a">
                        <p>Lorem, ipsum dolor sit amet consectetur 
                            adipisicing elit. Ullam esse, vel quos maiores cum 
                            est architecto. Consequuntur atque quos nemo, est alias, 
                            repellendus suscipit optio et molestias nostrum exercitationem eos!
                        </p>
                    </div>
                </li>
                <li>
                    <div class="q">
                        <span class="arrow"></span> 
                        <span>How do I replay?</span>
                    </div>
                    <div class="a">
                        <p>Lorem, ipsum dolor sit amet consectetur 
                            adipisicing elit. Ullam esse, vel quos maiores cum 
                            est architecto. Consequuntur atque quos nemo, est alias, 
                            repellendus suscipit optio et molestias nostrum exercitationem eos!
                        </p>
                    </div>
                </li>
                <li>
                    <div class="q">
                        <span class="arrow"></span> 
                        <span>How do I replay?</span>
                    </div>
                    <div class="a">
                        <p>Lorem, ipsum dolor sit amet consectetur 
                            adipisicing elit. Ullam esse, vel quos maiores cum 
                            est architecto. Consequuntur atque quos nemo, est alias, 
                            repellendus suscipit optio et molestias nostrum exercitationem eos!
                        </p>
                    </div>
                </li>
                <li>
                    <div class="q">
                        <span class="arrow"></span> 
                        <span>How do I replay?</span>
                    </div>
                    <div class="a">
                        <p>Lorem, ipsum dolor sit amet consectetur 
                            adipisicing elit. Ullam esse, vel quos maiores cum 
                            est architecto. Consequuntur atque quos nemo, est alias, 
                            repellendus suscipit optio et molestias nostrum exercitationem eos!
                        </p>
                    </div>
                </li>
            </ul>
    </section>
    
    <?php include 'footer.php';  ?>
    <script src="js/support.js"></script>
</body>
</html>