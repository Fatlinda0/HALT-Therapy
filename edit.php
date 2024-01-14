<?php 
require_once 'MenuController.php';

if(isset($_GET['id'])){
    $menuid = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuid);

if(isset($_POST['submit'])){
    $menu->update($_POST, $menuid);
}
?>

<style>
    *{
        padding: 4px;
    }
    .button{
        font-size: 15px;
        border-radius: 4px;
        background-color: #81B89A;
        width: 6%;
        color: black;
        border: 2px solid #4B9B69;
    }
    .button:hover{
        background-color: #4B9B69;
        color: white;
    }
</style>

<form method="post">
    Name:
    <input type="text" name="name" value="<?php echo $currenMenu['name']; ?>">
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $currenMenu['email']; ?>">
    <br>
    Password:
    <input type="text" name="password" value="<?php echo $currenMenu['password']; ?>">
    <br>
    Usertype:
    <input type="text" name="user_type" value="<?php echo $currenMenu['user_type']; ?>">
    <br>
    <input type="submit" name="submit" value="Update" class="button">
</form>