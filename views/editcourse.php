<?php
require_once('../controllers/session.php');
require_once('../models/db.php');

$data = json_decode(file_get_contents("php://input"), true);

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = getConnection(); 
    $sql = "SELECT * FROM courses WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    
    $coursename = isset($row['coursename']) ? $row['coursename'] : '';
    $duration = isset($row['duration']) ? $row['duration'] : '';
    $price = isset($row['price']) ? $row['price'] : '';
} else {
   
    header("Location: error.php");
    exit;
}


if (isset($_POST['submit'])) {
   
    $coursename = $_POST['coursename'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    
    
    $con = getConnection(); 
    $sql = "UPDATE courses SET coursename='$coursename', duration='$duration', price='$price' WHERE id=$id";
    $result = mysqli_query($con, $sql);
  
    if ($result) {
        header("Location: ../views/courses.php");
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>

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
                <form method="POST" action="" onsubmit="return editfunc()">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table class="table table-bordered">
                        <tr>
                            <th scope="row">Course Name:</th>
                            <td><input type="text" name="coursename" value="<?php echo isset($coursename) ? $coursename : ''; ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Duration:</th>
                            <td><input type="number" name="duration" value="<?php echo isset($duration) ? $duration : ''; ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Price:</th>
                            <td><input type="number" name="price" value="<?php echo isset($price) ? $price : ''; ?>"></td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" id="update" value="Update">
                    <input type="reset" value="Reset"/>
                </form>
            </fieldset>
        </div>
        <hr>
    </main>
    <script src="../assets/editcourse.js"></script>
    <footer>
        <h4 style="text-align: center;">Copyright©2024</h4>
    </footer>
    <hr>
</body>
</html>
