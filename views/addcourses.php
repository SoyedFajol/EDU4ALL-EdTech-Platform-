<?php
    require_once('../controllers/session.php');
?>
<html>
<head>
    <title>Add Courses</title>
    
</head>
<body>
        <header>
            <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
            <a href="logout.php">Logout</a>
            </section>  
        </header>
        <main>
        <hr></hr>
        <div>
                <h3 style="text-align: center;">Add Courses</h3>
        </div>
        
                 <form method="POST" action="../controllers/addcoursesCheck.php" enctype="multipart/form-data">
                <fieldset style="width: 25%;" >
                <table style="width: 100%;">
                    <tr>
                        <td>
                            Course Name: <br>
                            <input type="text" name="coursename" id="coursename" value="Learning AI">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Duration: <br>
                            <input type="number" name="duration" id="duration" value="5"> Weeks
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price: <br>
                            <input type="number" name="price" id="price" value="5000"> Taka
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Image: <br>
                            <input type="file" name="image" id="image">
                        </td>
                    </tr>

                </table>
                                
                            <input type="submit" name="addcourses" id="addcourses" value="Add">
                            <input type="reset" value="Reset"/>
                                
                    </fieldset>
            </form>
            <hr></hr>
        </main>
        <footer>
            <h4 style="text-align: center;">Copyright©2024</h4>
        </footer>
        <hr></hr>

</body>
</html>