<?php
  require_once('../controllers/session.php'); 
  if (isset($_SESSION['flag'])) {
?>
<html>
<head>
    <title>Contact Us Admin</title>
</head>
<body>
    <header>
    <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
                Logged in as <?php echo $_COOKIE['name']; ?> 
                <a href="../controllers/logout.php">Logout</a>
            </section>             
    </header>
    <main>
    <hr>
        
            <div style=" width: 80%; height: auto;display: flex;">
                <fieldset style="width: 100%">
                <table class="table table-bordered">
                   <thead>
                         <tr>
                              <th scope="col">ID No</th>
                              <th scope="col">Name</th>
                              <th scope="col">Message</th>
                              
                        </tr>
                   </thead>
                   <tbody>
                   
                   <?php
                    require_once('../models/db.php');

                    $con = getConnection();
                    $sql = "SELECT * FROM contactus ";
                    $result = mysqli_query($con, $sql);
                    if($result) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $message = $row['message'];
                            echo '<tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $name . '</td>
                                    <td>' . $message . '</td>
                                  </tr>';
                        }
                    }
                    ?>
                   </tbody>
                </table>
                </fieldset>
            </div >
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
  } else {
      header('location: ./login.php');
  }
?>