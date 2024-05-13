<?php require_once('../controllers/session.php'); if (isset($_SESSION['flag'])) { ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/style3.css">
</head>
<body>
    <header>
        <h1>EDU4ALL</h1>
        <section>Logged in as <?php echo $_COOKIE['name'] ?></section>
    </header>
    <main>
        <div style="display: flex;">
            <div class="sidebar">
                <h4>Admin</h4>
                <p>Welcome <?php echo $_COOKIE['name'] ?></p>
                <ul>
                    <li><a href="./admindashboard.php">Dashboard</a></li>
                    <li><a href="./courses.php">Courses</a></li>
                    <li><a href="./trainer.php">Trainer</a></li>
                    <li><a href="./addcourses.php">Add Courses</a></li>
                    <li><a href="./addtrainer.php">Add Trainer</a></li>
                    <li><a href="./payments.php">Payments</a></li>
                    <li><a href="./contactusadmin.php">Contact Us Message</a></li>
                    <li><a href="./changePassword.php">Change Password</a></li>
                    <li><a href="../controllers/logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="dashboard">
                <div class="card">
                    <h3>Available Courses</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Total Revenue</h3>
                    <p>$50,000</p>
                </div>
                <div class="card">
                    <h3>Total Courses</h3>
                    <p>35</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright&copy;2024</p>
    </footer>
</body>
</html>
<?php } else { header('location: ./login.php'); } ?>