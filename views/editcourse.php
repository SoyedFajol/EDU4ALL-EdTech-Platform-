

<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <header>
        <h1 style="text-align:left;">EDU4ALL </h1>
        <section style="text-align: right;">
            Logged in as <?php echo $_COOKIE['name']; ?>    
        </section>             
    </header>
    <main>
        <hr>
        <div style="width: 80%; height: auto;display: flex;">
            <fieldset style="width: 100%">
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table class="table table-bordered">
                        <tr>
                            <th scope="row">Course Name:</th>
                            <td><input type="text" name="coursename" value="<?php echo $coursename ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Duration:</th>
                            <td><input type="number" name="duration" value="<?php echo $duration ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Price:</th>
                            <td><input type="number" name="price" value="<?php echo $price ?>"></td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" id="update" value="Update">
                            <input type="reset" value="Reset"/>
                </form>
            </fieldset>
        </div>
        <hr>
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2024</h4>
    </footer>
    <hr>
</body>
</html>















<?php
require_once('../controllers/session.php');
require_once('../models/db.php');

    $id = $_GET['id'];
    
    $con = getConnection(); 
    $sql="SELECT * FROM courses WHERE id=$id";
    $result= mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $coursename=$row['coursename'];
    $duration=$row['duration'];
    $price=$row['price'];


    if (isset($_POST['submit'])) {
      

        $coursename = $_POST['coursename'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        
        
        $con = getConnection(); 
        $sql = "UPDATE courses SET coursename='$coursename',duration='$duration',price='$price' WHERE id=$id";
        $result = mysqli_query($con, $sql);
      
        if ($result) {
            header("Location: ../views/courses.php");
            exit;
        } else {
            die(mysqli_error($con));
        }
    }


?>










































































































































































































































































































































































































































































































































































































































<!--  -->