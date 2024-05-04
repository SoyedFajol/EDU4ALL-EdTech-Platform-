<?php
    session_start();
    unset($_SESSION['flag']);
    setcookie('name', $name, time()-10, '/');
    setcookie('password', $password, time()-10, '/');
    header('location: ../views/login.php');
?>