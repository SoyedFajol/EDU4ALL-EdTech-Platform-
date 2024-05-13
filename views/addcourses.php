<?php require_once('../controllers/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Courses</title>
    <link rel="stylesheet" href="../assets/style2.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>EDU4ALL</h1>
            <section>
                <a href="../controllers/logoutAnd.php">Logout</a>
            </section>
        </header>
        <main id="add-courses-form">
            <div>
                <h3>Add Courses</h3>
            </div>
            <form method="POST" action="../controllers/addcourseCheck.php" enctype="multipart/form-data">
                <fieldset>
                    <table>
                        <tr>
                            <td>
                                <input type="text" name="coursename" id="coursename" placeholder="Course Name" value="Learning AI" class="name" onblur="checkDuplicateCourseName()">
                                <input type="hidden" id="currentCourseName" value="Learning AI">
                                <input type="hidden" id="isNewCourseNameValid" value="False">
                                <span id="courseError"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="duration" id="duration" placeholder="Duration (in weeks)" value="5" class="name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="price" id="price" placeholder="Price (in Taka)" value="5000" class="name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" name="image" id="image" class="name">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="addcourses" id="addcourses" value="Add" class="btn">
                    <input type="reset" value="Reset" class="btn">
                </fieldset>
            </form>
        </main>
        <footer>
            <h4>Copyright&copy;2024</h4>
        </footer>
    </div>
    <script src="../assets/addcourse.js"></script>
</body>
</html>