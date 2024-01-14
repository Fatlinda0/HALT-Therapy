<?php

require_once 'ContentController.php';

if(isset($_GET['id'])){
    $blogId = $_GET['id'];
}

$blog = new ContentController;
$currentBlog = $blog->edit($blogId);

if(isset($_POST['submit'])){
    $blog->update($_POST, $blogId);
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

<form method="POST">
    Image:
    <input type="file" name="blog_image" value="<?php echo $currentBlog['blog_image'];?>">
    <br>
    Title:
    <input type="text" name="blog_title" value="<?php echo $currentBlog['blog_title'];?>">
    <br>
    <input type="submit" name="submit" value="Update" class="button">
</form>

