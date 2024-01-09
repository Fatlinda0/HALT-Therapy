<?php
    require_once('config.php');
    
    $fname = $_POST['name'];
    $fsubject = $_POST['subject'];
    $fmail = $_POST['mail'];
    $fmessage = $_POST['message'];

    $sql = "INSERT INTO contactus (name, subject, mail, message) VALUES ('$fname','$fsubject','$fmail','$fmessage')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>
                alert('The email has been sent successfully!');
                window.location.href='contactus.php';
              </script>";
    } else {
        echo "Error :".$sql;
    }
?>
