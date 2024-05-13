<?php require_once('../controllers/session.php'); if (isset($_SESSION['flag'])) { ?>
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="../assets/style4.css">
</head>
<body>
    <header>
        <h1>EDU4ALL</h1>
        <section>
            Logged in as <?php echo $_COOKIE['name']; ?>
            <a href="../controllers/logout.php">Logout</a>
        </section>
    </header>
    <main>
        <div style="width: 80%; height: auto; display: flex;">
            <fieldset style="width: 100%">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID No</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Price</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('../models/db.php');
                        $con = getConnection();
                        $sql = "SELECT * FROM courses";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $coursename = $row['coursename'];
                                $duration = $row['duration'];
                                $price = $row['price'];
                                echo '<tr>
                                        <th scope="row">' . $id . '</th>
                                        <td>' . $coursename . '</td>
                                        <td>' . $duration . '</td>
                                        <td>' . $price . '</td>
                                        <td><a href="editcourse.php?id=' . $id . '">Edit</a> | <a href="deletecourse.php?id=' . $id . '">Delete</a></td>
                                      </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </main>
    <footer>
        <h4>Copyright&copy;2024</h4>
    </footer>
</body>
</html>
<?php } else { header('location: ./login.php'); } ?>