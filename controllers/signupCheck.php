<?php
require_once('../models/adminInfo.php');

$name = $_REQUEST['name'];

if(isset($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['password'],$_REQUEST['confirmPassword'],
         $_REQUEST['gender'],$_REQUEST['dob'],$_REQUEST['userType']))

{
         
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$userType = $_REQUEST['userType'];

}

if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob) || empty($userType)) {
    echo "Null value!";
} elseif ($password != $confirmPassword) {
    echo "Password incorrect";
} elseif (strlen($name) < 5) {
    echo "Name should be at least 5 characters long";
} elseif (!isLowercase($name)) {
    echo "Name should contain only lowercase alphabetic characters";
} elseif (!hasNumberAndSpecialChar($password)) {
    echo "Password should have at least one number and one special character";
} elseif (strlen($password) < 8) {
    echo "Password should be at least 8 characters long";
} else {
    $status = signup($name, $email, $password, $gender, $dob, $userType);
    if ($status) {
        header('location: ../views/login.php');
    } else {
        echo "Name already taken! Try another one";
    }
}


function isLowercase($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] < 'a' || $str[$i] > 'z') {
            return false;
        }
    }
    return true;
}


function hasNumberAndSpecialChar($str) {
    $hasNumber = false;
    $hasSpecialChar = false;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];
        if ($char >= '0' && $char <= '9') {
            $hasNumber = true;
        } elseif (isSpecialChar($char)) {
            $hasSpecialChar = true;
        }
    }
    return $hasNumber && $hasSpecialChar;
}


function isSpecialChar($char) {
    $specialChars = '!@#$%^&*()_+-=[]{}|;:",.<>?/~`';
    return strpos($specialChars, $char) !== false;
}
?>
