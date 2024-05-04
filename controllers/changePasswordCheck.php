<?php
     session_start();
     require_once('../models/adminInfo.php');

     $password = $_REQUEST['password'];
     $newPassword = $_REQUEST['newPassword'];   
     $confirmPassword = $_REQUEST['confirmPassword'];

     $name = isset($_SESSION['name']) ? $_SESSION['name'] : ''; 
     $currentPassword = isset($_SESSION['password']) ? $_SESSION['password'] : ''; 
     
     
     if (empty($password)|| empty($newPassword)|| empty($confirmPassword))
    {
        echo "must fill all the field";
    }

    else if ($password!=$currentPassword) 
    {
      echo "current password does not match";
    }                
     else if ($newPassword!=$confirmPassword)
     {
        echo "Re-Typed password does not match";
     }
     elseif (strlen($newPassword)<8){
      echo "Password should be atleast 8 character"; 
    }
      else if (!hasNumberAndSpecialChar($newPassword)) {
        echo "Password should have at least one number and one special character";
       }
     else
     {
       
      $updatePassword= updatePassword($newPassword,$name);


         if ($updatePassword){
               header('location:../views/userdashboard.php');
            }
         else {
            header('location:../views/changePassword.php');
         }
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