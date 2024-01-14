<?php 
require 'MenuController.php';
if(isset($_GET['id'])){
    $menuid = $_GET['id'];
}

$menu = new MenuController;
$menu->delete($menuid);
?>