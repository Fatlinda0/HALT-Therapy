<?php 
require 'EmailController.php';
if(isset($_GET['id'])){
    $emailid = $_GET['id'];
}

$email = new EmailController;
$email->delete($emailid);
?>