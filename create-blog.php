<?php
    require_once 'ContentController.php';

    $blog = new ContentController;
    if(isset($_POST['submit'])){
        $blog->insert($_POST);
    }
?>
 <?php include 'Dashboard.php';  ?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="blog_image">
        <br>
        Title:
        <input type="text" name="blog_title">
        <br>
        <input type="submit" name="submit" value="save">
    </form>
</div>