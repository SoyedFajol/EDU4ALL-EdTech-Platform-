<?php
  require_once('../controllers/session.php'); 
  if (isset($_SESSION['flag']))
  {
  ?>
<html>
<head>
    <title>User Dashboard</title>
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
            <ul>
                <li><a href="./userdashboard.php">Dashboard</a></li>
                <li><a href="./courses.php">Courses</a></li>
                <li><a href="./announcement.php">Announcement</a></li>
                <li><a href="./faq.php">FAQ</a></li>
                <li><a href="./contactus.php">Contact Us</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
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