<?php
  require_once('../controllers/session.php'); 
  if (isset($_SESSION['flag']))
  {
  ?>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <header>
    <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
                Logged in as <?php echo $_COOKIE['name']?>    
                </section>
            </section>  
    </header>
    <main>
    <hr></hr>
        <section style="width: 100%; height: auto;display: flex;">
            <div style="width: 20%">
             <fieldset>
             <h4>Admin</h4>
            <hr>
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
            </fieldset>
            </div>
            <div style=" width: 80%; height: auto;display: flex;">
                <fieldset style="width: 100%">
                    <h4> Welcome <?php echo $_COOKIE['name']?> </h4>
                </fieldset>
            </div >
        </section>
        <hr></hr>        
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2024</h4>
    </footer>
    <hr></hr>
</body>
</html>

<?php
  }
    else{
        header('location: ./login.php');
    }
?>