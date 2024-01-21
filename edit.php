<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
    exit;
}
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
        font-family: 'Poppins', sans-serif;
    }
    form {
        width: 50%;
        margin: 0 auto;
        margin-top: 3%;
        padding: 20px;
        border-radius: 8px;
        background-color: #0D8066;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"]{
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .button{
        padding: 0.6rem 1.3rem;
        background-color: white;
        font-size: 0.95rem;
        color: black;
        border-radius: 4px;
        outline: none;
        cursor: pointer;
        margin: 0;
        line-height: 1;
        font-weight: 500;
    }
    select {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        box-sizing: border-box;
        color: black;
        -moz-appearance: none;
        appearance: none;
    }
    select:disabled {
        color: #888;
        cursor: not-allowed;
    }
    input[type="hidden"] {
        display: none;
    }
</style>

<form method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $currenMenu['name']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $currenMenu['email']; ?>">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" name="password" value="<?php echo $currenMenu['password']; ?>">
    </div>
    
    <div class="form-group">
    <label for="user_type">Usertype:</label>
    <select name="user_type_disabled" disabled>
        <option value="user" <?php echo ($currenMenu['user_type'] == 'user' ? 'selected' : ''); ?>>user</option>
        <option value="admin" <?php echo ($currenMenu['user_type'] == 'admin' ? 'selected' : ''); ?>>admin</option>
    </select>
    <input type="hidden" name="user_type" value="<?php echo $currenMenu['user_type']; ?>">
</div>


    <input type="submit" name="submit" value="Update" class="button">
</form>
