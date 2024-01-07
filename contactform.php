<?php
    require_once('connection.php');
    $name = $subject = $mail = $message = " ";
    
    $fname = $_POST['name'];
    $fsubject = $_POST['subject'];
    $fmail = $_POST['mail'];
    $fmessage = $_POST['message'];

    //insert data into database
    $sql = "INSERT INTO contactus (name, subject, mail, message) VALUES ('$fname','$fsubject','$fmail','$fmessage')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header(("Location: contactSEND.php"));
    }
    else
    {
        echo "Error :".$sql;
    }
?>