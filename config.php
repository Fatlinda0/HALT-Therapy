<?php

    $conn = mysqli_connect('localhost','root','','user_db');

    if(!$conn)
    {
	    echo "Database connection failed...";
    }
?>