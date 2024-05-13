<?php

    session_start();
    require_once('../models/adminInfo.php');

    $coursename = $_REQUEST['coursename'];
    $status = checkDuplicateCourseName($coursename);
    if($status){
        echo json_encode(['message' => 'True']); 
    }else{
        echo json_encode(['message' => 'False']); 
    }



?>