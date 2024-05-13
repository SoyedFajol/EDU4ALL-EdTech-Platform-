<?php
require_once('db.php');

function signup($name, $email, $password, $gender, $dob, $userType)
{
    $con = getConnection();

    
    $nameExists = isNameExists($name);
    $emailExists = isEmailExists($email);

    if ($nameExists || $emailExists) {
        return false; 
    }

    
    $sql = "INSERT INTO userInfo (name, email, password, gender, dob, userType) VALUES('$name', '$email', '$password', '$gender', '$dob', '$userType')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true; 
    } else {
        return false; 
    }
}


function isNameExists($name)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo WHERE name = '$name'";
    $result = mysqli_query($con, $sql);
    return mysqli_num_rows($result) > 0;
}


function isEmailExists($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    return mysqli_num_rows($result) > 0;
}



function login($name, $password)
{
    $con = getConnection();       
    $sql = "SELECT * FROM userInfo WHERE name='{$name}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            return array('status' => true, 'userType' => $user['userType']);
        }         
    }
    
    return array('status' => false);
}

function updatePassword ($newPassword,$name)
    {
        $con = getConnection();
        $sql = "UPDATE userInfo SET password = '{$newPassword}' WHERE name = '{$name}'";
        $result = mysqli_query($con, $sql);

        if ($result)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }


function addcourses($coursename,$duration,$price,$image)
{
    $con = getConnection();       
    $sql = "INSERT INTO courses (coursename, duration, price, image) VALUES('$coursename', '$duration', '$price', '$image')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true; 
    } else {
        return false; 
    }
}


function addcontact($name,$email,$message)
{
    $con = getConnection();       
    $sql = "INSERT INTO contactus (name, email , message) VALUES('$name', '$email', '$message')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true; 
    } else {
        return false; 
    }
}



function updatecourse($course)
{
    $con = getconnection();
    $sql = "UPDATE courses 
            SET coursename = '{$course['coursename']}' , duration = '{$course['duration']}', price = '{$course['price']}'
            WHERE id = '{$course['id']}'";

    $status = mysqli_query($con , $sql);
    return $status;

}

function checkDuplicateCourseName($coursename){
    $con = getConnection();
    $sql = "select * from courses where coursename='{$coursename}'";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        return NULL;
    }

    $user = mysqli_fetch_assoc($result);
    return $user;
}
 ?>