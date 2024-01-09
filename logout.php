<?php

class Logout {
    protected $configFile = 'config.php';

    public function __construct() {
        include $this->configFile;
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header('location:index.php');
    }
}

$logout = new Logout();
$logout->logout();

?>
