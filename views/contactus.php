<?php
  require_once('../controllers/session.php'); 
  if (isset($_SESSION['flag']))
  {
?>

<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <header>
        <h1 style="text-align:left;">EDU4ALL</h1>
        <section style="text-align: right;">
            Logged in as <?php echo $_COOKIE['name']?>    
        </section>  
    </header>
    <main>
        <hr>
        <section style="width: 100%; height: auto;display: flex;">
            <div style="width: 20%">
                <fieldset>
                    <h4>Contact Information</h4>
                    <hr>
                    <p>Phone Number: +8801717171317</p>
                    <p>Address: 123 Kuratoli,khikhet-1229,Dhaka</p>
                    <p>Location: D Building, Floor 5</p>
                </fieldset>
            </div>
            <div style="width: 80%; height: auto;display: flex;">
                <fieldset style="width: 100%">
                    <h4>Contact Us</h4>
                    <form method="POST" action="../controllers/contactusCheck.php">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required><br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required><br>
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" rows="4" required></textarea><br><br>
                        <input type="submit" value="Submit">
                    </form>
                </fieldset>
            </div>
        </section>
        <hr>        
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2024</h4>
    </footer>
    <hr>
</body>
</html>

<?php
  }
    else{
        header('location: ./login.php');
    }
?>