<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <?php
        @include 'config.php';
        $sel_db = mysql_select_db("change password",$conn_db) or die();
    ?>
    <form method="">
        <input type="password" name="old_pass" placeholder="Old Password" value="" required /> <br />
        <input type="password" name="new_pass" placeholder="New Password" value="" required /> <br />
        <input type="password" name="re_pass" placeholder="Retype Password" value="" required /> <br />
    </form>
</body>
</html>
