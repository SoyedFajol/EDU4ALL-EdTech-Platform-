
<?php
require_once('../controllers/session.php'); 
if (isset($_SESSION['flag'])) {
    require_once('../models/db.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $con = getConnection(); 
        $sql = "DELETE FROM courses WHERE id=$id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: ../views/courses.php");
            exit; 
        } else {
            die(mysqli_error($con));
        }
    }
}
?>
