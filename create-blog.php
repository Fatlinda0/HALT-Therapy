<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
    exit;
}
require_once 'ContentController.php';

$blog = new ContentController;
if(isset($_POST['submit'])){
    $blog->insert($_POST);
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
        background-color: #CC5500;
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
    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="file"] {
        border: none;
        margin-bottom: 10px;
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
    img {
        max-width: 100px;
        height: auto;
        display: block;
        margin-bottom: 10px;
    }
</style>

<form method="POST">
    <div class="form-group">
        <label for="blog_image">Image:</label>
        <input type="file" name="blog_image" id="blog_image">
        
    </div>

    <div class="form-group">
        <label for="blog_title">Title:</label>
        <input type="text" name="blog_title" id="blog_title">
    </div>

    <div class="form-group">
        <label for="blog_body">Content:</label>
        <textarea name="blog_body" id="blog_body" cols="30" rows="10"></textarea>
    </div>

    <input type="hidden" name="admin_name" value="<?php echo htmlspecialchars($_SESSION['admin_name']); ?>">

    <input type="submit" name="submit" value="Insert" class="button">
</form>