<?php
require_once 'ContentController.php';

if(isset($_GET['id'])){
    $blogId = $_GET['id'];
}
$blog = new ContentController;
$blog->delete($blogId);

?>