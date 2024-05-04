<?php
    session_start();
    if (!isset($_COOKIE['name']))
    {
        $_COOKIE['name'] ="";
    }
?>

<html>
<head>
    <title>Change Password</title>
    
</head>
<body>
    <header>
    <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
            Logged in as <?php echo $_COOKIE['name']?> |   
                <a href="../controllers/logout.php">Logout</a>
                </section> 
    </header>
    <main>
    <hr></hr>
           
                    <form method="POST" action="../controllers/changePasswordCheck.php">
                                <fieldset style= " width: 50%;">
                                    <table>
                                    <legend><h3>Change Password</h3></legend>
                                        <tr>
                                            <td>
                                                Current password
                                            </td>
                                            <td>
                                                : <input type="password" name="password" id="password" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                New Password
                                            </td>
                                            <td>
                                                : <input type="password" name="newPassword" id="newPassword" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Confirm Password
                                            </td>
                                            <td>
                                                : <input type="password" name="confirmPassword" id="confirmPassword" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" value="Change"/>
                                                <input type="reset" value="Reset"/>

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                </fieldset>       
    </main>
    <hr>
    <footer>
        <h4 style="text-align: center;">Copyright©2024</h4>
    </footer>
    <hr>

</body>
</html>