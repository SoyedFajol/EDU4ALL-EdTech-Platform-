<html>
<head>
    <title>Signup</title>
</head>
    <body>
        <header>
            <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
            <a href="login.php">Login</a>         
            </section>  
        </header>
        <main>
            <hr></hr>        
            <table width="100%">
                <tr>
                    <td>
                        <form method="POST" action="../controllers/signupCheck.php" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
                            <fieldset style="width: 35%;" >
                                <table style="width: 100%;">
                                <legend><h3>Signup</h3></legend>
                
                                    <tr>
                                        <td>
                                            Name 
                                        </td>
                                        <td>
                                            : <input type="text" name="name" id="name" value="soyed">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            : <input type="text" name="email" id="email" value="soyed@gmail.com">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                        <td>
                                            : <input type="radio" name="gender" id="gender" value="Male">Male
                                              <input type="radio" name="gender" id="gender" value="Female">Female
                                              <input type="radio" name="gender" id="gender" value="Other">Other
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td>
                                            : <input type="date" name="dob" id="dob" value="22/1/2000"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            : <input type="password" name="password" id="password" value="!1234567">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Confirm Password
                                        </td>
                                        <td>
                                            : <input type="password" name="confirmPassword" id="confirmPassword" value="!1234567">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            User Type
                                        </td>
                                        <td>
                                            : <input type="radio" name="userType" id="userType" value="Admin">Admin
                                              <input type="radio" name="userType" id="userType"  value="User">User
                                              <input type="radio" name="userType" id="userType" value="Trainer">Trainer
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <section style="text-align: center;">
                                <input type="submit" name="Signup" value="Signup" onclick="signValidation()">
                                    <input type="reset" name ="reset" value="Reset">
                                </section>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                </table>
                <hr>
        </main>
        <footer>
            <h4 style="text-align: center;">Copyright©2024</h4>
        </footer>
        <hr></hr>
        <script src="../assets/authValid.js"></script>
    </body>
</html>