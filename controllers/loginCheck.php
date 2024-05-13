<?php
  session_start();
  require_once('../models/adminInfo.php');
  
  
  $name = $_REQUEST['name'];
  $password = $_REQUEST['password'];
  
  if($name == '' || $password == '')
  {
      echo "null value! <br>"; 
  }
  else {
      $status = login($name, $password);
     
      if($status['status']){
          $_SESSION['user'] = array('name' => $name, 'userType' => $status['userType']);
          $_SESSION['password'] = $password;
          $_SESSION['flag'] = true;
  
          
          setcookie('name', $name, time()+30000, '/');
          setcookie('password', $password, time()+30000, '/');
  
          if (isset($_REQUEST['remember']))
          {
              setcookie('name', $name, time()+3000, '/');
              setcookie('password', $password, time()+3000, '/');
          }
  
          if($status['userType'] == 'Admin') {
              header('location: ../views/admindashboard.php');
          } elseif($status['userType'] == 'User') {
              header('location: ../views/userdashboard.php');       
          } elseif($status['userType'] == 'Trainer') {
            header('location: ../views/trainerdashboard.php');
        }
      }
      else{
          echo "Invalid username or password"; 
      }
  }
    
    
?>