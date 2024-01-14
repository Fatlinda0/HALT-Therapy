<?php 
require_once 'MenuController.php';
?>
<style>

.naav{
    justify-content: space-around;
    min-height: 10vh;
    position:sticky;    
}
.nav-links{
    display: flex;
    justify-content: space-around;
    width: 40%;
    padding: 20px;
}
.nav-links li{
    list-style-type: none;    
}
.nav-links a{
    color: rgb(60, 104, 60);
    text-decoration: none;
    letter-spacing: 3px;
    font-weight: bold;
    font-size: 24px;
    padding: 25px;
    transition: background-color 2s;
}
.nav-links a:hover{
    background-color:rgb(65, 87, 65) ;
    color: white;
}
</style>

<div class="naav">
    <ul class="nav-links">
        <li><a href="manageUsers.php">ManageUsers</a></li>
        <li><a href="manageEmails.php">ManageEmails</a></li>
        <li><a href="blogManage.php">ManageBlog</a></li>
    </ul>       
</div>