<?php
session_start();
require_once('../models/adminInfo.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
   
    if ($name == '' || $email == '' || $message == '' ) {
        echo "Please fill in all fields.";
    } else {      
        $status = addcontact($name, $email, $message);
        if ($status) {
            header("Location: ../views/userdashboard.php");
        } else {
            echo "Failed to add contact.";
        }
    }
} else {
    echo "Invalid request.";
}
?>