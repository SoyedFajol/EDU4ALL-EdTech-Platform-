<?php
session_start();
require_once('../models/adminInfo.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $coursename = $_POST['coursename'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    if ($coursename == '' || $duration == '' || $price == '' || $image == '') {
        echo "Please fill in all fields.";
    } else {
        $status = addcourses($coursename, $duration, $price, $image);
        if ($status) {
            $src = $_FILES['image']['tmp_name'];
            $des = "../views/imageupload/" . $image;

            if (move_uploaded_file($src, $des)) {
                echo "Successful";
                header("Location: ../views/courses.php");
                exit; 
            } else {
                echo "Error uploading image.";
            }
        } else {
            echo "Failed to add course.";
        }
    }
} else {
    echo "Invalid request.";
}
?>